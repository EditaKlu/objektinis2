@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Keisti filmą [<?= ($movie->title ?? ''); ?>][<?= ($movie->id ?? ''); ?>]</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="<?= ($movie->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Pavadinimas</label>
                <input type="text" class="form-control" name="title" value="<?= ($movie->title ?? ''); ?>" id="title" placeholder="Pavadinimas">
            </div>

            <div class="form-group">
                <label for="release-date">Data</label>
                <input type="date" class="form-control" name="release_date" value="<?= ($movie->release_date ?? ''); ?>" id="release-date" placeholder="Data">
            </div>

            <div class="form-group">
                <label for="description">Aprašymas</label>
                <input type="text" class="form-control" name="description" value="<?= ($movie->description ?? ''); ?>" id="description" placeholder="Aprašymas">
            </div>

            <div class="form-group">
                <label for="runtime">Trukmė</label>
                <input type="number" class="form-control" max="1000" name="runtime" value="<?= ($movie->runtime ?? ''); ?>" id="runtime" placeholder="Trukmė">
            </div>

            <div class="form-group">
                <label for="rating">Reitingas</label>
                <input type="text" class="form-control" maxlength="5" name="rating" value="<?= ($movie->rating ?? ''); ?>" id="rating" placeholder="Reitingas">
            </div>
            
            <x-forms.multi-relation-select :tagName="'genres'" :model="$movie" :relationItems="$genres"/>
            <x-forms.multi-relation-select :tagName="'languages'" :model="$movie" :relationItems="$languages"/>
            <x-forms.multi-relation-select :tagName="'countries'" :model="$movie" :relationItems="$countries"/>
            <x-forms.multi-relation-select :tagName="'actors'" :model="$movie" :optionName="'first_name'" :relationItems="$actors" optionDisplay="fullName"/>

            <div class="form-group">    
                <x-forms.image-input :images="[$movie->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">    
                <x-forms.image-input :images="$movie->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>

            
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection