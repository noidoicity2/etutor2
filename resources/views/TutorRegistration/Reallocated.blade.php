@extends('Layout.layout');
@section('style')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>

    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">



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
                        <h2 class="card-title">Reallocate tutor for student id #{{$reg->student_id}} </h2> <br>
{{--                        <h2 class="card-title">Total tutee {{$tutee_count}}</h2>--}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
{{--                            <a id="reg-student" href="/RegStudents" class="btn btn-success">  <i class="fas fa-pencil-alt">--}}
{{--                                </i> assign selected</a>--}}
{{--                            <a id="select-all" href="/adduser" class="btn btn-primary">   <i class="fas fa-pencil-alt">--}}
{{--                                </i>select All</a>--}}
{{--                            --}}{{--                            <a href="/adduser" class="btn btn-warning">  <i class="fas fa-pencil-alt">--}}
{{--                            --}}{{--                                </i>     assign randon</a>--}}
{{--                            <a href="/adduser" class="btn btn-warning" id="clear-select">   <i class="fas fa-pencil-alt">--}}
{{--                                </i>     clear selection </a>--}}
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
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                Tutee count

                                            </th>


                                            <th class="sorting  text-center" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $tutors as $tutor)
                                            <tr role="row" class="odd">
                                                <td id="id" tabindex="0" class="sorting_1">{{$tutor->id}}</td>
                                                <td>{{$tutor->name}}</td>

                                                <td>{{$tutor->tutor_registration_by_tutor_count}}</td>

{{--                                                <td>{{$user->role->name}}</td>--}}

                                                    <td class="project-actions text-right">
                                                        <a  tutor_id="{{$tutor->id}}" class="btn btn-primary btn-sm reallocate" href="#" >
                                                            <i class="fa fa-user">
                                                            </i>
                                                            Assign
                                                        </a>
                                                    </td>



                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    {{ $tutors->links() }}


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
        $(document).ready(function() {
            $("#example1").removeAttr('width').DataTable({

                "responsive": true,
                "autoWidth": false,
                "searching": true,
                "paging": false,
                "lengthChange": true,
                select: {
                    style: 'single'
                }
                // "select": {
                //     "style": "multi"
                // }


            });

            // $('#example1 tbody').on( 'click', 'tr', function () {
            //     if ( $(this).hasClass('selected') ) {
            //         $(this).removeClass('selected');
            //     }
            //     else {
            //         table.$('tr.selected').removeClass('selected');
            //         $(this).addClass('selected');
            //     }
            // } );



            $('.reallocate').click(function (e) {
                e.preventDefault();
                var tutorId = $(this).attr('tutor_id');
                // var table = $('#example1').DataTable();

                // var data=table.rows( { selected: true }).data();
                console.log(tutorId);
                $.ajax({
                    url: '/DoReallocate',
                    type: 'post',
                    data: {
                        reg_id: '{{$reg->id}}',
                        tutor_id:tutorId,
                        // arr: values,
                        _token: CSRF_TOKEN,
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        alert(JSON.stringify(data.msg));
                        location.reload();

                    },
                    error: function () {
                        alert('Error , please try again');
                        location.reload();

                    }
                });


            });
            $('#select-all').click(function (e) {
                e.preventDefault();
                var table = $('#example1').DataTable();
                table.rows().select();

            });


            var table = $('#example1').DataTable();
            $('#count').click(function () {
                var d = table.rows({ selected: true } );
                // var rowData = table.rows( { selected: true } ).data()[][0];
                var selectedRows = table.rows('.selected').data();
                // var values='';
                var values=[];
                // lay
                $.each(selectedRows, function(index, value) {values.push( value[0]) ;}); // value[0] is first column
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
