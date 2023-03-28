@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti valstybę [<?= ($country->name ?? ''); ?>][<?= ($country->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.countries.update', $country)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($country->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="name" value="<?= ($country->name ?? ''); ?>" id="name" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="title">Aprašymas</label>
                    <input type="text" class="form-control" name="description" value="<?= ($country->description ?? ''); ?>" id="description" placeholder="Aprašymas">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection