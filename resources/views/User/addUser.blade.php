@extends('Layout.layout');

@section('content')
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <!-- left column -->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New User <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if(session('message'))
                            <div class="alert alert-warning" role="alert">
                               {{session('message')}}
                            </div>

                        @endif


                        <form enctype="multipart/form-data" action="{{route('add')}}" role="form" method="post"
                              id="quickForm" novalidate="novalidate">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class='form-control '
                                           id="name" placeholder="Enter name"
                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control "
                                           id="email" placeholder="email"
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control "
                                           id="email" placeholder="email"
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">gender</label>
                                    <input type="email" name="gender" class="form-control "
                                           id="email" placeholder="email"
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image</label>
                                    <input type="file" name="image" class=" btn-file "
                                           id="email" placeholder="image"
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" class="custom-control-input"
                                               id="exampleCheck1">
                                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a
                                                href="#">terms of service</a>.</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

