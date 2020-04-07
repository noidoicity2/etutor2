@extends('Layout.layout');
@section('content')
    <!-- Contacts are loaded here -->
    {{--    {{json_encode($messages)}}--}}

    <section class="content">
        <div class="card card-sucress cardutline direct-chat direct-chat-success">
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
                <div class="direct-chat-messages" id="messageContainer">
                </div>
                <!-- Conversations are loaded here -->
            {{--                <div class="direct-chat-messages" id="messageContainer">--}}
            {{--                    <!-- Message. Default to the left -->--}}

            {{--                    @foreach ($messages as $message)--}}
            {{--                        <div class="direct-chat-msg @if ($message->from_user === $from_user)--}}
            {{--                            right--}}
            {{--                        @endif">--}}
            {{--                            <div class="direct-chat-infos clearfix">--}}
            {{--                                <span class="direct-chat-name float-left">{{$message->sender->name}}</span>--}}
            {{--                                <span class="direct-chat-timestamp float-right"> {{$message->created_at}} </span>--}}
            {{--                            </div>--}}
            {{--                            <!-- /.direct-chat-infos -->--}}
            {{--                            <img class="direct-chat-img" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="Message User Image">--}}
            {{--                            <!-- /.direct-chat-img -->--}}
            {{--                            <div class="direct-chat-text">--}}
            {{--                                {{$message->chat_message}}--}}
            {{--                            </div>--}}
            {{--                            <!-- /.direct-chat-text -->--}}
            {{--                        </div>--}}
            {{--                    @endforeach--}}

            {{--            --}}
            {{--                </div>--}}
            <!-- /.direct-chat-msg -->
            </div>
            <!--/.direct-chat-messages-->


        </div>
        <!-- /.card-body -->
        <div class="card-footer" style="display: block;">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control">
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

    <script>

        $(document).ready(function () {


            function updateChatHistory() {
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
                        // console.log(data[0]);

                        // var element = document.getElementById("messageContainer");

                     $('#messageContainer').html(data[0].id) ;

                        // $('#data-update').html(data);


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

                sendMessage();
                $('#message').val('');
            });
            var a = setInterval(updateChatHistory, 1000);


        });


    </script>
@endsection
