@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Žanrai</h3>
                <a href="{{route('admin.genres.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> Nauja
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pavadinimas</th>
                            <th>Aprašymas</th>
                            <th>Sukurta</th>
                            <th>Atnaujinta</th>
                            <th>Veiksmai</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($genres as $genre)
                            <tr>
                                <td>{{($genre->id ?? '')}}</td>
                                <td>{{($genre->name ?? '')}}</td>
                                <td>{{($genre->description ?? '')}}</td>
                                <td>{{($genre->created_at ?? '')}}</td>
                                <td>{{($genre->updated_at ?? '')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{route('admin.genres.edit', $genre) }}' type="button" class="btn btn-info">Keisti</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="{{route('admin.genres.destroy', $genre) }}">Naikinti</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Pavadinimas</th>
                            <th>Aprašymas</th>
                            <th>Sukurta</th>
                            <th>Atnaujinta</th>
                            <th>Veiksmai</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection