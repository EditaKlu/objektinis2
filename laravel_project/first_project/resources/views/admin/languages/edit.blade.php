@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Keisti kalbą [<?= ($language->name ?? ''); ?>][<?= ($language->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.languages.update', $language)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($language->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Pavadinimas</label>
                    <input type="text" class="form-control" name="name" value="<?= ($language->name ?? ''); ?>" id="name" placeholder="Pavadinimas">
                </div>

                <div class="form-group">
                    <label for="title">Santrumpa</label>
                    <input type="text" class="form-control" name="abbr" value="<?= ($language->abbr ?? ''); ?>" id="abbr" placeholder="Santrumpa">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection