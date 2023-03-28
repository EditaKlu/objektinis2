@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Naujas filmas</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action=" {{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Pavadinimas</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Pavadinimas">
            </div>

            <div class="form-group">
                <label for="release-date">Data</label>
                <input type="date" class="form-control" name="release_date" id="release-date" placeholder="Data">
            </div>

            <div class="form-group">
                <label for="description">Aprašymas</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Aprašymas">
            </div>

            <div class="form-group">
                <label for="runtime">Trukmė</label>
                <input type="number" class="form-control" max="1000" name="runtime" id="runtime" placeholder="Trukmė">
            </div>

            <div class="form-group">
                <label for="rating">Reitingas</label>
                <input type="text" class="form-control" maxlength="5" name="rating" id="rating" placeholder="Reitingas">
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">    
                <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>
            
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection