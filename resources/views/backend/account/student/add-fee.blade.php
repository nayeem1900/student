@extends('backend.layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Students Fee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Students Fee</li>
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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->




                        <div class="card">
                            <div class="card-header">

                            <h3 class="card-title">Add/Edit Student Fee</h3>



                                        <a class="btn btn-success float-right btn-sm" href="{{route('accounts.fee.view')}}"><i class="fa fa-list"></i>Student Fee List</a>



                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="year_id">Select Year</label>
                                        <select name="year_id" id="year_id" class="form control select2bs4">
                                            <option value="">Select Year</option>
                                            @foreach($years as $year)
                                             <option value="{{$year->id}}">{{$year->name}}</option>
                                                @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="class_id">Select Class</label>
                                        <select name="year_id" id="class_id" class="form control select2bs4">
                                            <option value="">Select Class</option>
                                            @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="class_id">Select Class</label>
                                        <select name="year_id" id="class_id" class="form control select2bs4">
                                            <option value="">Select Class</option>
                                            @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                            </div>


                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>














@endsection