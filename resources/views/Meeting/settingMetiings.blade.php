@extends('Layout.layout');
@section('content')
    <section class="content">
        <div class="container">
            <br>
            <div class="row">
                <!-- left column -->

                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Arange Meeting with student {{$user->name}} (id:{{$user->id}}) <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                       @if(session('arangeGeeting'))
                            <div class="alert alert-warning" role="alert">
                               {{session('arangeGeeting')}}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" action="{{route('arangeGeeting')}}" role="form" method="post"
                              id="quickForm" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                    <input type="hidden" name="student_id" class='form-control'
                                          value="{{ $user->id }}" id="name" placeholder="Enter name"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meeting Name</label>
                                    <input type="text" name="name" class='form-control'
                                           id="name" placeholder="Enter name"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start At</label>
                                    <input type="datetime-local" name="start_at" class="form-control"
                                           id="start_at" placeholder="email"
                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Place</label>
                                    <input type="text" name="place" class='form-control'
                                           id="place" placeholder="Enter Place"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>

                            </div>

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

