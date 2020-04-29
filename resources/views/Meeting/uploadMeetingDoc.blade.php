@extends('Layout.layout');

@section('content')
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <!-- left column -->

                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Upload Meeting document <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if(session('status'))
                            <div class="alert alert-warning" role="alert">
                                {{session('status')}}
                            </div>

                        @endif


                        <form enctype="multipart/form-data" action="/DoUploadMeetingDoc" role="form" method="post"
                              id="quickForm" novalidate="novalidate">
                            @csrf

                            <div class="card-body">
                                <input name="meeting_id" value="{{$meeting->id}}" type="hidden" class="form-control-file" id="exampleFormControlFile1">

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Link</label>
                                    <input name="link" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter link if the file is on the internet">
                                </div>


                                <div class="form-group">
                                    <label for="sel1">Status:</label>
                                    <select name="status" class="form-control" id="sel1">

                                        <option value="1">Public</option>
                                        <option value="0">Private</option>


                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Upload</button>
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

{{--@section('script')--}}
{{--    @parent--}}



{{--@endsection--}}



