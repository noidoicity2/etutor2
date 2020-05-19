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
        <div class="container-fluid">
            <h1>Dashboard</h1>
            <!-- Small boxes (Stat box) -->
            <div class="row">



                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$AvgMsg}}</h3>

                                <p>Average sent Messages last 7 Days</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/assignedstudent" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$unseenMsg}}</h3>

                                <p>Number of unseen message</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/assignedstudent" class="small-box-footer"> info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$tuteeNo}}</h3>

                                <p>Number of tutees</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/assignedstudent" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$noReq}}</h3>

                                <p>Number of unreplied request</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/allrequests" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$handleReq}}</h3>

                                <p>number of handled request</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-fuchsia">
                            <div class="inner">
                                <h3>{{$totalMeeting}}</h3>

                                <p>Total Meeting</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>



                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-olive">
                            <div class="inner">
                                <h3>{{$sentRequest}}</h3>

                                <p>Sent Request</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/myrequest" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$AvgMsg}}</h3>

                            <p>Average sent Messages last 7 Days</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="/assignedstudent" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->

                {{--                    unseen msg--}}
            <!-- ./col -->


                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-gradient-blue">
                            <div class="inner">
                                <h3>{{$YourAllocation}}</h3>

                                <p>Your allocation</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/allReg" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-gradient-green">
                            <div class="inner">
                                <h3>{{$toDayAllocation}}</h3>

                                <p>Today allocation</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/allReg" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$AvgRegs}}</h3>

                                <p>Average allocation last 7 days</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>





            <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="container">
                <div class="row">

                        <div class="col-sm-12">
                            <div id="RegChartContainer" style="height: 370px; width: 100%;"></div>
                        </div>

                    <div class="col-12">
                        <hr>
                    </div>
                    <div class="col-sm-12">

                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                    </div>


                </div>


            </div>

        </div>

    </section>
@endsection

@section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


    {{--    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>--}}
    {{--    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>--}}
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
                {{--            {{json_encode($chartData)}}--}}
            var dataPoints = @json($chartData);
            var options = {
                title: {
                    text: "Total Message Sent 7 days recent",
                    fontSize: 50,
                },
                data: [
                    {
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "column",
                        dataPoints: dataPoints

                    }
                ],
                axisX: {
                    labelFontSize: 20,
                },


            };
            $("#chartContainer").CanvasJSChart(options);

// Allocation chart

            var dataPoints2 = @json($RegChart);
            var options2 = {
                title: {
                    text: "Total Allocations 7 days recent",
                    fontSize: 50,
                },
                data: [
                    {
                        // Change type to "doughnut", "line", "splineArea", etc.
                        type: "column",
                        dataPoints: dataPoints2

                    }
                ],
                axisX: {
                    labelFontSize: 20,
                },


            };
            $("#RegChartContainer").CanvasJSChart(options2);


        });
    </script>
@endsection

