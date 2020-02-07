@extends('layouts.master')
@section('content-header')
    @include('layouts.partials.contentHeader',$info =[
           'title' =>'Users',
           'subtitle' => 'Edit',
           'breadCrumbs' =>['users','edit']
           ])
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3>Personal Information</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update',$user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input name="name" value="{{ old('name',$user->name) }}"
                                   class="form-control  @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="email" value="{{ old('email',$user->email) }}"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input name="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            <span class="text-muted">Leave blank if you do not want to change the password</span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Repeat your password:</label>
                            <input name="password_confirmation" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Repeat Password">

                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-block">Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
