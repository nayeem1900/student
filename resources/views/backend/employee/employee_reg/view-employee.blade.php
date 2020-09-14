@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employee</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Employee List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('employees.reg.add')}}"><i class="fa fa-plus-circle"></i> Add Employee</a>
                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Id No</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Join Date</th>
                                        <th>Salary</th>
                                        @if(Auth::user()->role=="Admin")
                                            <th>Code</th>
                                        @endif

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key=>$value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($value->name)}}</td>
                                            <td>{{($value->id_no)}}</td>
                                            <td>{{($value->mobile)}}</td>
                                            <td>{{($value->address)}}</td>
                                            <td>{{($value->gender)}}</td>
                                            <td>{{($value->join_date)}}</td>
                                            <td>{{($value->salary)}}</td>
                                            @if(Auth::user()->role=="Admin")
                                                <td>{{$value->code}}</td>
                                            @endif

                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('employees.reg.edit',$value->id)}}"><i class="fa fa-edit"></i></a>


                                            </td>

                                        </tr>
                                    @endforeach


                                    </tbody>



                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection