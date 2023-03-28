@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Naujas žanras</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.genres.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="title">Aprašymas</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Aprašymas">
                </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 