@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">New Game</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action=" {{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description">
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