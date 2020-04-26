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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>



    {{--    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">--}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
    <section class="content">
        <br>
        <div class="row">
            <div class="container">
                <form class="form-inline">
                    <div class="input-group">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                    </div>
                    <input id="dateFrom" type="hidden" name="dateFrom">
                    <input id="dateTo" type="hidden" name="dateTo">

                    <a href="" id="searchBtn" class="btn btn-secondary">Search </a>
                    @if(isset($nonTutorStCount))
                        <span class="btn-danger">Number of student without tutor {{$nonTutorStCount}}</span>
                    @endif
                    @if(isset($nonInteractSt))
                        <span class="btn-danger">Number of student without tutor {{$nonInteractSt}}</span>
                    @endif
                </form>
            </div>

            @if(isset($nonTutorStudent))
                <span class="btn-danger">{{$nonTutorStudent}}</span>
            @endif
            <div class="col-md-3">


            </div>
        </div>

        <div class="row">
            <div class="col-12">


                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">:D</h2> <br>
                        {{--                        <h2 class="card-title">Total tutee {{$tutee_count}}</h2>--}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <a id="reg-student" href="/RegStudents" class="btn btn-success"> <i
                                    class="fas fa-pencil-alt">
                                </i> assign selected</a>
                            <a id="select-all" href="/adduser" class="btn btn-primary"> <i class="fas fa-pencil-alt">
                                </i>select All</a>
                            {{--                            <a href="/adduser" class="btn btn-warning">  <i class="fas fa-pencil-alt">--}}
                            {{--                                </i>     assign randon</a>--}}
                            <a href="/adduser" class="btn btn-warning" id="clear-select"> <i class="fas fa-pencil-alt">
                                </i> clear selection </a>
                            <div class="row">

                                <div class="col-sm-12">
                                    <table id="example1" class="table table-striped dataTable "
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Name
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Quality

                                            </th>

                                            <th class="sorting  text-center" tabindex="0" aria-controls="example1"
                                                rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {{--                                        @foreach($users as $user)--}}
                                        {{--                                            <tr role="row" class="odd">--}}
                                        {{--                                                <td id="id" tabindex="0" class="sorting_1">{{$user->id}}</td>--}}
                                        {{--                                                <td>{{$user->name}}</td>--}}

                                        {{--                                                <td>{{substr($user->email,0,15)}}</td>--}}

                                        {{--                                                <td>{{$user->role->name}}</td>--}}
                                        {{--                                                @if(Auth::user()->role_id === 1 ||Auth::user()->role_id === 2 )--}}
                                        {{--                                                    <td class="project-actions text-right">--}}
                                        {{--                                                        <a class="btn btn-primary btn-sm" href="#">--}}
                                        {{--                                                            <i class="fas fa-eye">--}}
                                        {{--                                                            </i>--}}
                                        {{--                                                            View--}}
                                        {{--                                                        </a>--}}
                                        {{--                                                        --}}{{--                                                        <a class="btn btn-info btn-sm" href="#">--}}
                                        {{--                                                        --}}{{--                                                            <i class="fas fa-pencil-alt">--}}
                                        {{--                                                        --}}{{--                                                            </i>--}}
                                        {{--                                                        --}}{{--                                                            Assign student--}}
                                        {{--                                                        --}}{{--                                                        </a>--}}


                                        {{--                                                    </td>--}}

                                        {{--                                                @elseif(Auth::user()->role_id === 4)--}}
                                        {{--                                                    <td class="project-actions text-right">--}}
                                        {{--                                                        <a class="btn btn-primary btn-sm" href="/getmessage/id/{{$user->id}}">--}}
                                        {{--                                                            <i class="fas fa-envelope">--}}
                                        {{--                                                            </i>--}}
                                        {{--                                                            message--}}
                                        {{--                                                        </a>--}}



                                        {{--                                                    </td>--}}
                                        {{--                                                @endif--}}


                                        {{--                                            </tr>--}}
                                        {{--                                        @endforeach--}}

                                        </tbody>

                                    </table>

                                    {{--                                    {{ $users->links() }}--}}


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
        <button id="count">count</button>

    </section>
@endsection

@section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    {{--date range--}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
            $("#example1").removeAttr('width').DataTable({

                "responsive": true,
                "autoWidth": false,
                "searching": true,
                "paging": false,
                "lengthChange": true,
                "select": {
                    "style": "multi"
                }


            });


        });
        $('#reservation').daterangepicker({
                opens: 'left'
            }, function (start, end, label) {
                // console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                var from = start.format('YYYY-MM-DD');
                var to = end.format('YYYY-MM-DD');

                $('#dateFrom').val(from);
                $('#dateTo').val(to);
                $('#searchBtn').attr('href', '/getReport/' + from + '/' + to);
            }
        );
        $('#viewDate').click(function () {
            var drp = $('#reservation').data('daterangepicker');

            console.log(drp.startDate);
        });

        // $('#searchBtn').click(function (e) {
        //     e.preventDefault();
        //     var fr= $('#dateFrom').val();
        //     var to = $('#dateTo').val();
        //     $.ajax({
        //         url: '/postReport',
        //         type: 'post',
        //         data: {
        //             dateFrom : fr,
        //             dateTo : to,
        //             _token: CSRF_TOKEN,
        //         },
        //         dataType: 'JSON',
        //         success: function (data) {
        //             console.log(data);
        //
        //         },
        //     });
        //
        //
        //
        // });

    </script>
@endsection

