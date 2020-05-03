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
        <div class="container">

        </div>
        <h1> Create New Request to tutor #{{$tutor->tutor_id}}</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <input id="req-name" name="name" class="form-control" placeholder="Name:"/>
                        </div>

                        <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Heading Of Request</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
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
                            <button id="send-req"  class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                        </div>
{{--                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>--}}
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
{{--        <button onclick="show()">dsad</button>--}}

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


            $('#send-req').click(function () {
                var from_user = '{{Auth::user()->id}}';
                var to_user = '{{$tutor->tutor_id}}';

                var content = $('#compose-textarea').summernote('code');
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var name =  document.getElementById('req-name').value;
                $.ajax({
                    url: '/docreaterequest',
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        from_user: from_user,
                        to_user: to_user,
                        name : name,
                        content: content

                    },
                    dataType: 'JSON',
                    success: function (data) {
                       alert(JSON.stringify(data.msg));
                       window.location = '/newrequest';


                    },
                });

            });

        })

    </script>
@endsection


