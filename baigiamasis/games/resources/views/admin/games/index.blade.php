@extends('admin.layouts.document')

{{-- kiek section sukurta kartu tiek kartu kartojasi yield document.blade.php --}}
@section('content') 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Games</h3>
                <a href="{{ route('admin.games.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Changed</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($games as $game)
                            <tr>
                                <td>{{ ($game->id ?? '')}}</td>
                                <td>
                                    <img width="100" src="{{ asset('storage/images/'.($game->image ?? 'noimage.jpg'))}} ">
                                </td>
                                <td>{{ ($game->title ?? '')}}</td>
                                <td>{{ ($game->description ?? '')}}</td>
                                <td>
                                    @foreach($game->owners as $owner)
                                    <a href="{{route('admin.owners.edit', $owner)}}">
                                        {{$owner->name ?? ''}}
                                    </a>
                                    @endforeach
                                </td>
                                <td>{{ ($game->created_at ?? '')}}</td>
                                <td>{{ ($game->updated_at ?? '')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.games.edit', $game) }} ' type="button" class="btn btn-info">Change</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.games.destroy', $game) }} ">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Changed</th>
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