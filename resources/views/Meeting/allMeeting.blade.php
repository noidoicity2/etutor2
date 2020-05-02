@extends('Layout.layout');
@section('style')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>

    <link rel="stylesheet" type="text/css"
          href=" https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">



    {{--    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
    <section class="content">
        <div class="row">

            <div class="col-12">


                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h2>All Meeting</h2>
                        {{--                        <h2 class="card-title">Assign student for tutor {{$tutor->name}} (id:{{$tutor->id}})</h2> <br>--}}
                        {{--                        <h2 class="card-title">Total tutee {{$tutee_count}}</h2>--}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
{{--                            <a href="/newdocument" class="btn btn-success"> <i class="fas fa-upload">--}}
{{--                                </i> Upload File </a>--}}
{{--                            <a id="mark-all-as-read" href="/adduser" class="btn btn-primary"> <i--}}
{{--                                    class="fas fa-pencil-alt">--}}
{{--                                </i>Mask all as read </a>--}}

{{--                            <a href="/adduser" class="btn btn-warning" id="clear-select"> <i class="fas fa-pencil-alt">--}}
{{--                                </i> clear selection </a>--}}
                            <div class="row">

                                <div class="col-sm-12">
                                    <table id="example1" class="table dataTable "
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                ID
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Name
                                            </th>
                                            @if(Auth::user()->role_id==3)
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Meet With
                                            </th>
                                            @endif
                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Start At
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Meeting Doucment
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Place
                                            </th>
                                            <th class="sorting  text-center" tabindex="0" aria-controls="example1"
                                                rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($meetings as $meeting)
                                            <tr role="row" class="">
                                                <td>{{$meeting->id}}</td>
                                                <td id="id" tabindex="0" class="sorting_1">{{$meeting->name}}</td>
                                                @if(Auth::user()->role_id==3)
                                                <td>{{$meeting->student->name}}</td>
                                                @endif
                                                <td>{{$meeting->start_at}}
                                                </td>

                                                <td>
                                                    @if($meeting->document_id==null)
                                                        No Upload
                                                    @else
                                                   <span class="btn-success">Uploaded</span>
                                                    @endif
                                                </td>
                                                <td>{{$meeting->place}}
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="/editmeeting/{{$meeting->id}}">
                                                        <i class="fas fa-edit">
                                                        </i>

                                                    </a>
{{--                                                    <a class="btn btn-primary btn-sm" href="">--}}
{{--                                                        <i class="fas fa-share">--}}
{{--                                                        </i>--}}

{{--                                                    </a>--}}
{{--                                                    <a class="btn btn-primary btn-sm" href="">--}}
{{--                                                        <i class="fas fa-download">--}}
{{--                                                        </i>--}}

{{--                                                    </a>--}}

                                                    <a class="btn btn-success btn-sm" href="/uploadmeetingdoc/{{$meeting->id}}">
                                                        <i class="fas fa-upload">

                                                        </i>

                                                    </a>
                                                    <a class="btn btn-danger btn-sm" id="Cancel-btn" meeting_id ="{{$meeting->id}}">
                                                        <i class="fas fa-trash">

                                                        </i>

                                                    </a>
                                                </td>



                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>

                                    {{ $meetings->links() }}


                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


    </section>
@endsection

@section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    {{--    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>--}}
    {{--    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>--}}
    {{--    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>--}}
    {{--    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>--}}
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(document).ready(function () {
            $("#example1").DataTable({


                // "autoWidth": true,
                searching: true,
                paging: false,
                // "lengthChange": true,
                select: {
                    "style": "multi"
                },
                responsive:  true,
                createdRow: function (row, data, index) {
                    //
                    // if the second column cell is blank apply special formatting
                    //
                    if (data[4] === "read") {
                        console.log(data[4]);

                        $(row).addClass("bg-success");

                    }

                }


            });

            $('#Cancel-btn').click(function (e) {
                e.preventDefault();
                var m_id =  $( "#Cancel-btn" ).attr( "meeting_id" );
                $.ajax({
                    url: '/CancelMeeting',
                    type: 'post',
                    data: {
                        meeting_id: m_id,
                        // arr: values,
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        alert(JSON.stringify(data.msg));
                        location.reload();

                    },
                });


            });

            $('#select-all').click(function (e) {
                e.preventDefault();
                var table = $('#example1').DataTable();
                table.rows().select();

            });


            var table = $('#example1').DataTable();
            $('#count').click(function () {
                var d = table.rows({selected: true});
                // var rowData = table.rows( { selected: true } ).data()[][0];
                var selectedRows = table.rows('.selected').data();
                // var values='';
                var values = [];
                // lay
                $.each(selectedRows, function (index, value) {
                    values.push(value[0]);
                }); // value[0] is first column
                // return(values);

                console.log(values);
            });
            $('#clear-select').click(function (e) {
                e.preventDefault();
                table.rows('.selected').deselect();
            });

        });
    </script>
@endsection


