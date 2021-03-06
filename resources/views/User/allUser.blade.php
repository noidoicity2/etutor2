@extends('Layout.layout');
@section('style')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
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
<h1>{{$title}}</h1>
                <div class="card">
                    <div class="card-header">
{{--                        <h3 class="card-title"> users</h3>--}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
{{--                            <a href="/adduser" class="btn btn-primary"> New User</a>--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-striped dataTable "
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                ID
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                Gender
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Email

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Role
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                Created at
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1">{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    @if($user->gender==1)
                                                        Male

                                                    @else($user->gender==0)
                                                        Female
                                                    @endif
                                                </td>
                                                <td>{{substr($user->email,0,25)}}</td>
{{--                                                <td>{{$user->email}}</td>--}}
                                                <td>{{$user->role->name}}</td>
                                                <td>{{$user->created_at}}</td>

                                                    <td class="project-actions text-right">
                                                        @if(Auth::user()->role_id === 1 ||Auth::user()->role_id === 2 )
                                                        <a class="btn btn-primary btn-sm" href="/viewDashboard/{{$user->id}}">
                                                            <i class="fas fa-tachometer-alt"></i>
                                                            DashBoard

                                                        </a>
                                                        @endif
                                                        <a class="btn btn-primary btn-sm" href="/profile/{{$user->id}}">
                                                            <i class="fas fa-eye">
                                                            </i>
                                                          profile
                                                        </a>

                                                        <a class="btn btn-primary btn-sm" href="getmessage/id/{{$user->id}}">
                                                            <i class="fas fa-envelope">
                                                            </i>
                                                            message
                                                        </a>


                                                    </td>









                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    {{ $users->links() }}


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
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <script>
        $(document).ready(function() {
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

            var table = $('#example1').DataTable();
           $('#count').click(function () {
               var d = table.rows({ selected: true } ).data();
               console.log(d[3][1] );
           });


            //
            // $('#example1 tbody').on( 'click', 'tr', function () {
            //     if ( $(this).hasClass('selected') ) {
            //         $(this).removeClass('selected');
            //     }
            //     else {
            //         table.$('tr.selected').removeClass('selected');
            //         $(this).addClass('selected');
            //     }
            // } );



        });
    </script>
@endsection
