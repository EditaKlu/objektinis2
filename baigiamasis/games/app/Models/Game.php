<?php

namespace App\Models;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public $with = ['owners'];

    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(Owner::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(GameImage::class);
    }

    public static function customCreate(Request $request): self
    {
        return DB::transaction(function () use ($request) {
            $image = $request->file('image');
            $inputs = $request->input();
            $inputs['image'] = $image?->getClientOriginalName() ?? '';

            $game = self::create($inputs);
            $game->syncAll($request);

            //Upload and insert multiple images 
            if ($images = $request->file('images')) {
                $images = $game->uploadImages($images);
                $game->insertImages($images);
            }

            //Upload cover image 
            if ($image = $request->file('image')) {
                $images = $game->uploadImages([$image]);
            }
            return $game;
        });
    }

    public function customUpdate(Request $request): self
    {
        DB::transaction(function () use ($request) {
            //Old images
            $oldImages = $request->input('old_images') ?? [];
            //Detach old images
            GameImage::where('game_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();

            //Upload and insert multiple images
            if ($images = $request->file('images')) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }

            //Upload cover image 
            $inputs = $request->input();
            if ($image = $request->file('image')) {
                $images = $this->uploadImages([$image]);
            }
            $inputs['image'] = $request->file('image')?->getClientOriginalName() ?? $request->get('old_cover_image') ?? 'noimage.jpg';

            $this->syncAll($request)->fill($inputs)->save();
        });

        return $this;
    }

    public function insertImages($images): self
    {
        collect($images)->each(function (string $item, int $key) {
            GameImage::updateOrCreate([
                'name' => $item,
                'game_id' => $this->id
            ]);
        });
        return $this;
    }
    public function syncAll(Request $request):self
    {
        $this->owners()->sync($request->get('owners'));

        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
                continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );
        }

        return $paths;
    }
}
