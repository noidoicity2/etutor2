@extends('Layout.layout');
@section('content')
    <!-- Contacts are loaded here -->
    {{--    {{json_encode($messages)}}--}}

    <section class="content">
        <div class="card card-blue cardutline direct-chat direct-chat-success">
            <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">

                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" id="messageContainer">
                    <!-- Message. Default to the left -->

                    {{--                    @foreach ($messages as $message)--}}
                    {{--                        @if($message->chat_message!='')--}}
                    {{--                        <div class="direct-chat-msg @if ($message->from_user === $from_user)--}}
                    {{--                            right @endif">--}}
                    {{--                            <div class="direct-chat-infos clearfix">--}}
                    {{--                                <span class="direct-chat-name float-left">{{$message->sender->name}}</span>--}}
                    {{--                                <span class="direct-chat-timestamp float-right"> {{$message->created_at}} </span>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /.direct-chat-infos -->--}}
                    {{--                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"--}}
                    {{--                                 alt="Message User Image">--}}
                    {{--                            <!-- /.direct-chat-img -->--}}



                    {{--                            <div class="direct-chat-text">--}}
                    {{--                                {{$message->chat_message}}--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /.direct-chat-text -->--}}
                    {{--                        </div>--}}
                    {{--                        @endif--}}
                    {{--                    @endforeach--}}


                </div>
                <!-- /.direct-chat-msg -->
            </div>
            <!--/.direct-chat-messages-->


        </div>
        <!-- /.card-body -->
        <div class="card-footer" style="display: block;">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control"
                         ">
                    <span class="input-group-append">
                      <button id="sendmsg" type="submit" class="btn btn-success">Send</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- /.card-footer-->
        <div id="data-update"></div>

    </section>

@endsection
@section('script')
    @parent

    <script>function checkNullMsg() {

        }


        $(document).ready(function () {

            updateChatHistory();

            function updateChatHistory() {
                var from_user = '{{$from_user}}';
                    {{--var from_name = '{{$messages->first->sender->name}}';--}}
                var to_user = '{{$to_user}}';
                    {{--var receiver = '{{$messages->first->}}'--}}
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '/updatehistory',
                    type: 'post',
                    data: {
                        id: '{{$to_user}}',
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',

                    success: function (data) {
                        data.reverse();
                        var html_dat = '';
                        var cl = '';
                        for (var i = 0; i < data.length; i++) {
                            if (data[i].from_user == from_user) {
                                cl = 'direct-chat-msg right';
                            } else {
                                cl = 'direct-chat-msg ';
                            }
                            html_dat += ' <div class="' + cl + ' "> ' +
                                '                            <div class="direct-chat-infos clearfix">' +
                                '                                <span class="direct-chat-name float-left">  ' + data[i].sender.name + ' </span>' +
                                '                                <span class="direct-chat-timestamp float-right">' + data[i].created_at + ' </span>' +
                                '                            </div>' +
                                '                            <!-- /.direct-chat-infos -->' +
                                '                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"' +
                                '                                 alt="Message User Image">' +
                                '                            <!-- /.direct-chat-img -->' +


                                '                            <div class="direct-chat-text">' + data[i].chat_message +
                                '                                ' +
                                '                            </div>' +
                                '                            <!-- /.direct-chat-text -->' +
                                '                        </div>  '
                        }
                        $('#messageContainer').html(html_dat);
                        $("#messageContainer").animate({scrollTop: $("#messageContainer")[0].scrollHeight}, 1000);


                    }
                });


            }


            function sendMessage() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var chat_msg = $('#message').val();
                $.ajax({
                    url: '/sendmessage',
                    type: 'post',
                    data: {
                        id: '{{$to_user}}',
                        chat_message: chat_msg,
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        console.log(data);

                    },
                });
            }


            $('#sendmsg').click(function (e) {
                e.preventDefault();
                var msg = $('#message').val();

                if (msg === '') {


                } else {

                    var today = new Date();
                    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    var dateTime = date + ' ' + time;

                    sendMessage();
                    getNoUnseen();
                    var htm = ' <div class="direct-chat-msg right "> ' +
                        '                            <div class="direct-chat-infos clearfix">' +
                        '                                <span class="direct-chat-name float-left">  ' + '{{\Illuminate\Support\Facades\Auth::user()->name}}' + ' </span>' +
                        '                                <span class="direct-chat-timestamp float-right">' + dateTime + ' </span>' +
                        '                            </div>' +
                        '                            <!-- /.direct-chat-infos -->' +
                        '                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}"' +
                        '                                 alt="Message User Image">' +
                        '                            <!-- /.direct-chat-img -->' +


                        '                            <div class="direct-chat-text">' + $('#message').val() +
                        '                                ' +
                        '                            </div>' +
                        '                            <!-- /.direct-chat-text -->' +
                        '                        </div>  ';
                    $('#messageContainer').append(htm);
                    $("#messageContainer").animate({scrollTop: $("#messageContainer")[0].scrollHeight}, 1);


                    $('#message').val('');
                }

            });
            // var a = setInterval(updateChatHistory, 2000);
            var channel2 = pusher.subscribe('update-chat-channel');
            channel2.bind('chat-event', function (data) {
                if (data.id === '{{Auth::user()->id}}') {
                    updateChatHistory();
                }

            });


        });


    </script>
@endsection
