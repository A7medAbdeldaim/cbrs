@extends('templates.admin_layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bikes</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title w-100">
                                    Bikes
                                    <span class="float-right">
                                        <a href="{{ route('admin.bikes.create') }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-plus-circle"></i> Add Bike
                                        </a>
                                    </span>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Model</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $k=>$row)
                                        <tr>
                                            <td>{{ (++$k) }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td>{{ $row->model }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <a href="#" data-toggle="modal" class="btn btn-success btn-block">Available</a>
                                                @else
                                                    <a href="#" class="btn btn-primary btn-block">Rented</a>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.bikes.edit', $row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('admin.bikes.destroy', $row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
