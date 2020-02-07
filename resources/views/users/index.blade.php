@extends('layouts.master')


@section('content-header')
    @include('layouts.partials.contentHeader',$info =[
           'title' =>'Users',
           'subtitle' => 'List',
           'breadCrumbs' =>['users','index']
           ])
@stop


@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 my-3">
                <div class="card mb-4 shadow-sm card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title mt-1">
                            Users list Administration
                        </h3>

                            <div class="card-tools">
                                <a href="{{ route('users.create') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Create User
                                </a>
                            </div>

                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover table-bordered" id=usersTable>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                    <td>
                                        <a href="{{ route('users.show',$user)}}" class="btn btn-sm btn-default">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('users.edit',$user) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                                              style="display:inline">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure delete this user?')">
                                                <i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#usersTable').DataTable();
        });
    </script>
@endpush
