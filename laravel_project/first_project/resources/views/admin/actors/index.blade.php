@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Aktoriai</h3>
                <a href="{{route('admin.actors.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> Naujas
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Gimimo data</th>
                            <th>Sukurta</th>
                            <th>Atnaujinta</th>
                            <th>Veiksmai</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($actors as $actor)
                            <tr>
                                <td>{{($actor->id ?? '')}}</td>
                                <td>{{($actor->first_name ?? '')}}</td>
                                <td>{{($actor->last_name ?? '')}}</td>
                                <td>{{($actor->date_of_birth ?? '')}}</td>
                                <td>{{($actor->created_at ?? '')}}</td>
                                <td>{{($actor->updated_at ?? '')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{route('admin.actors.edit', $actor) }}' type="button" class="btn btn-info">Keisti</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="{{route('admin.actors.destroy', $actor) }}">Naikinti</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Gimimo data</th>
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
