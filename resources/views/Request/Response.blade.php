@extends('Layout.layout');
@section('style')
    <!-- Font Awesome -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"> Response from tutor #{{$request->to_user}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <input id="req-name" value="{{$request->name}}" name="name" class="form-control" placeholder="Name:"/>
                        </div>

                        <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      {{$request->response}}
                    </textarea>
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <div class="btn btn-default btn-file">--}}
                        {{--                                <i class="fas fa-paperclip"></i> Attachment--}}
                        {{--                                <input type="file" name="attachment">--}}
                        {{--                            </div>--}}
                        {{--                            <p class="help-block">Max. 32MB</p>--}}
                        {{--                        </div>--}}
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="float-right">
                            {{--                            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft--}}
                            {{--                            </button>--}}
                                                        <button id="send-res"  class="btn btn-primary"><i class="far fa-envelope"></i> Send response</button>
                            {{--                            <button id="res-btn"  class="btn btn-primary"><i class="far fa-envelope"></i> Response</button>--}}
                        </div>
                        {{--                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>--}}
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->


    </section>
@endsection

@section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- Page Script -->
    <script>


        // $(function () {
        //Add text editor
        // $('#compose-textarea').summernote();
        $('#compose-textarea').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

        // });

        $(document).ready(function () {




            $('#send-res').click(function () {
                var res = $('#compose-textarea').summernote('code');
                var id = '{{$request->id}}';
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var name =  document.getElementById('req-name').value;
                $.ajax({
                    url: '/doresponse',
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        response: res,
                        id : id,

                    },
                    dataType: 'JSON',
                    success: function (data) {
                        alert(JSON.stringify(data.msg));
                        window.location = "/allrequests";


                    },
                });

            });

        })

    </script>
@endsection





