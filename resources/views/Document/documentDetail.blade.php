@extends('Layout.layout');

@section('content')
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="row">
                <!-- left column -->

                <div class="col-md-8">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">  <i class="fas fa-folder">
                                </i> {{$file->name}} <small></small></h3>
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
                                    <label for="exampleInputEmail1">Document name</label>
                                    <input type="text" name="name" class='form-control '
                                           id="name" value="{{$file->name}}"
                                           aria-describedby="exampleInputEmail1-error" aria-invalid="true" disabled>
                                    {{--                                    <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a vaild email address</span>--}}
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Path</label>--}}
{{--                                    <input type="email" name="email" class="form-control " disabled--}}
{{--                                           id="email" placeholder="email" value="{{$file->link}}"--}}
{{--                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">--}}
{{--                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Created By</label>
                                    <input type="text" name="dob" class="form-control "
                                           id="email" placeholder="email" value="{{$file->tutor->name}}" disabled
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Created at</label>
                                    <input type="text" name="dob" class="form-control "
                                           id="email" placeholder="email" value="{{$file->created_at}}" disabled
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <input type="text" name="dob" class="form-control "
                                           id="email" placeholder="email"
                                           value="@if($file->isPublic==1) Public @else Private @endif" disabled
                                           aria-describedby="exampleInputPassword1-error" aria-invalid="true">
                                    <span id="exampleInputPassword1-error" class="error invalid-feedback">Your password must be at least 5 characters long</span>
                                </div>

                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="status">Status <span class="btn-danger">@if($file->isPublic==1) Public @else Private @endif</span> </label>--}}

                                {{--                                </div>--}}

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
{{--                                <a type="submit" class="btn btn-primary">Share</a>--}}
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-sucress cardutline direct-chat direct-chat-success"
                         style="height: 100%">
                        <div class="card-header">
                            <h3 class="card-title">Comment list</h3>
{{--{{echo $cmts}}--}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <!-- Conversations are loaded here -->
                            <div id="messageContainer" class="direct-chat-messages" style="height: 500px">

                                @foreach($cmts as $cmt)
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">{{$cmt->user->name}}</span>
                                            <span class="direct-chat-timestamp float-right">{{$cmt->created_at}}m</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"
                                             alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            {{$cmt->comment}}
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                            @endforeach

                            <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer" style="display: block;">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input id="cmt" type="text" name="message" placeholder="Leave a comment ..."
                                           class="form-control">
                                    <span class="input-group-append">
                      <button id="send-cmt" type="" class="btn btn-success">Comment</button>
                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
@section('script')
    @parent
    <script !src="">
        $(document).ready(function () {

            // updateChatHistory();

            {{--function updateChatHistory() {--}}
            {{--    var from_user = '{{$from_user}}';--}}
            {{--        --}}{{--var from_name = '{{$messages->first->sender->name}}';--}}
            {{--    var to_user = '{{$to_user}}';--}}
            {{--        --}}{{--var receiver = '{{$messages->first->}}'--}}
            {{--    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
            {{--    $.ajax({--}}
            {{--        url: '/updatehistory',--}}
            {{--        type: 'post',--}}
            {{--        data: {--}}
            {{--            id: '{{$to_user}}',--}}
            {{--            _token: CSRF_TOKEN,--}}
            {{--        },--}}
            {{--        dataType: 'JSON',--}}

            {{--        success: function (data) {--}}
            {{--            data.reverse();--}}
            {{--            var html_dat = '';--}}
            {{--            var cl = '';--}}
            {{--            for (var i = 0; i < data.length; i++) {--}}
            {{--                if (data[i].from_user == from_user) {--}}
            {{--                    cl = 'direct-chat-msg right';--}}
            {{--                } else {--}}
            {{--                    cl = 'direct-chat-msg ';--}}
            {{--                }--}}
            {{--                html_dat += ' <div class="' + cl + ' "> ' +--}}
            {{--                    '                            <div class="direct-chat-infos clearfix">' +--}}
            {{--                    '                                <span class="direct-chat-name float-left">  ' + data[i].sender.name + ' </span>' +--}}
            {{--                    '                                <span class="direct-chat-timestamp float-right">' + data[i].created_at + ' </span>' +--}}
            {{--                    '                            </div>' +--}}
            {{--                    '                            <!-- /.direct-chat-infos -->' +--}}
            {{--                    '                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"' +--}}
            {{--                    '                                 alt="Message User Image">' +--}}
            {{--                    '                            <!-- /.direct-chat-img -->' +--}}


            {{--                    '                            <div class="direct-chat-text">' + data[i].chat_message +--}}
            {{--                    '                                ' +--}}
            {{--                    '                            </div>' +--}}
            {{--                    '                            <!-- /.direct-chat-text -->' +--}}
            {{--                    '                        </div>  '--}}
            {{--            }--}}
            {{--            $('#messageContainer').html(html_dat);--}}
            {{--            $("#messageContainer").animate({scrollTop: $("#messageContainer")[0].scrollHeight}, 1000);--}}


            {{--        }--}}
            {{--    });--}}


            {{--}--}}
            $("#messageContainer").animate({scrollTop: $("#messageContainer")[0].scrollHeight}, 0);

            function sendComment() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var cmt = $('#cmt').val();
                $.ajax({
                    url: '/comment',
                    type: 'post',
                    data: {
                        document_id: '{{$file->id}}',
                        comment: cmt,
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        console.log(data);

                    },
                });
            }


            $('#send-cmt').click(function (e) {
                e.preventDefault();
                var cmt = $('#cmt').val();

                if (cmt === '') {


                } else {

                    var today = new Date();
                    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    var dateTime = date + ' ' + time;

                    sendComment();
                    // getNoUnseen();
                    var htm = ' <div class="direct-chat-msg right "> ' +
                        '                            <div class="direct-chat-infos clearfix">' +
                        '                                <span class="direct-chat-name float-left">  ' + '{{\Illuminate\Support\Facades\Auth::user()->name}}' + ' </span>' +
                        '                                <span class="direct-chat-timestamp float-right">' + dateTime + ' </span>' +
                        '                            </div>' +
                        '                            <!-- /.direct-chat-infos -->' +
                        '                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"' +
                        '                                 alt="Message User Image">' +
                        '                            <!-- /.direct-chat-img -->' +


                        '                            <div class="direct-chat-text">' + $('#cmt').val() +
                        '                                ' +
                        '                            </div>' +
                        '                            <!-- /.direct-chat-text -->' +
                        '                        </div>  ';
                    $('#messageContainer').append(htm);
                    $("#messageContainer").animate({scrollTop: $("#messageContainer")[0].scrollHeight}, 0);


                    $('#cmt').val('');
                }

            });
            // var a = setInterval(updateChatHistory, 2000);
            {{--var channel2 = pusher.subscribe('update-chat-channel');--}}
            {{--channel2.bind('chat-event', function (data) {--}}
            {{--    if (data.id === '{{Auth::user()->id}}') {--}}
            {{--        updateChatHistory();--}}
            {{--    }--}}

            {{--});--}}


        });
    </script>
@endsection


