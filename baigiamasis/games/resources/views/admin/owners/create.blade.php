@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New Owner</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.owners.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 