@extends('templates.admin_layout')
@section('title', 'Create User')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create User</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Create a New User</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.users.update', $user->id) }}" method="post">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter User Name" name="name"
                                               value="{{$user->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control"
                                               placeholder="Enter User Email" name="email"
                                               value="{{$user->email}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="rank">User Type</label>
                                        <select id="rank" class="form-control"
                                               name="rank" required>
{{--                                            <option value="0">Seller</option>--}}
{{--                                            <option value="1">Buyer</option>--}}
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">User Password</label>
                                        <input type="password" class="form-control" id="password"
                                               placeholder="User Password" name="password"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="confirm_password">Re-enter User Password</label>
                                        <input type="password" class="form-control" id="confirm_password"
                                               placeholder="Re-enter User Password"
                                               name="password_confirmation" required>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Create User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

