@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nauja kalba</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.languages.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="title">Santrumpa</label>
                    <input type="text" class="form-control" name="abbr" id="abbr" placeholder="Santrumpa">
                </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 