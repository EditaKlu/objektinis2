@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Game [<?= ($game->title ?? ''); ?>][<?= ($game->id ?? ''); ?>]</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.games.update', $game) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="<?= ($game->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="title" value="<?= ($game->title ?? ''); ?>" id="title" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="<?= ($game->description ?? ''); ?>" id="description" placeholder="Description">
            </div>
    
            <x-forms.multi-relation-select :tagName="'owners'" :model="$game" :optionName="'name'" :relationItems="$owners" optionDisplay="name"/>

            <div class="form-group">    
                <x-forms.image-input :images="[$game->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">    
                <x-forms.image-input :images="$game->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>

            
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection