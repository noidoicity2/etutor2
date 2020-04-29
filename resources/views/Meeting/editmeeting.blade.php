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
                            <h3 class="card-title"> Edit meeting  #{{$meeting->id}} <small></small></h3>
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
                        <form enctype="multipart/form-data" action="/doEditMeeting" role="form" method="post"
                              id="quickForm" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="meeting_id" class='form-control'
                                           value="{{ $meeting->id }}" id="name" placeholder="Enter name"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meeting Name</label>
                                    <input type="text" name="name" class='form-control'
                                           id="name" placeholder="Enter name" value="{{$meeting->name}}"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Start At</label>
                                    <input type="datetime-local" name="start_at" class="form-control"
                                           id="start_at" placeholder="start at" value="{{ \Carbon\Carbon::parse($meeting->start_at)->format('Y-m-d\TH:i')}}"
                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Place</label>
                                    <input type="text" name="place" class='form-control'
                                           id="place" placeholder="Enter Place" value="{{$meeting->place}}"

                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    {{--<span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Date</label>
                                    <input type="date" name="date" class="form-control "
                                           id="email" placeholder="email"
                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div> -->
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Document</label>
                                    <input type="file" name="image" class=" btn-file "
                                           id="email" placehder="image"
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div> -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
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


