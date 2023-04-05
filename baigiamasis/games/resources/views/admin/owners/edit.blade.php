@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Change Owner [<?= ($owner->name ?? ''); ?>][<?= ($owner->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.owners.update', $owner)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($owner->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= ($owner->name ?? ''); ?>" id="name" placeholder="Name">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection