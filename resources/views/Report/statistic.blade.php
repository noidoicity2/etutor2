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
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
   <style>
       .dt-button buttons-print {
           background-color: red;
           color: white;
       }
   </style>

@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <h1>Statistic Report</h1>
                <!-- /.card -->

                <div class="card">
                {{--                    <div class="card-header">--}}
                {{--                        <h3 class="card-title"> users</h3>--}}
                {{--                    </div>--}}
                <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-6">


                        </div>

                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            {{--                            <h2>get</h2>--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-striped dataTable "
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Value
                                            </th>
                                            {{--                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
                                            {{--                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">--}}

                                            {{--                                            </th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($items as $item)
                                            <tr role="row" class="odd">
                                                <td>{{$item[0]}}</td>
                                                <td>{{$item[1]}}</td>


                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>


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

    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>


    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#example1").removeAttr('width').DataTable({
                "dom": 'Bfrtip',
                "buttons": [
                    {
                        extend: 'print',
                        text: 'Print this report',
                        title: 'Etutor Statistic report',
                        customize: function ( win ) {


                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                        }
                    }


        ],

                "responsive": true,
                "autoWidth": false,
                "searching": false,
                "paging": false,
                "lengthChange": true,
                "select": {
                    "style": "multi"
                }


            });

            var table = $('#example1').DataTable();
            $('#count').click(function () {
                var d = table.rows({selected: true}).data();
                console.log(d[3][1]);
            });



            $('.buttons-print').each(function() {
                $(this).addClass('btn-success')
            })

        });
    </script>
@endsection

