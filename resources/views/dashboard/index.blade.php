            @extends('layouts.app')
            
            @section('vendorcss')
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/pace.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
            @endsection
            @section('content')
            <div class="content-header row">
                </div>
                <div class="content-body"><!-- Analytics spakline & chartjs  -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="card">
                                <div class="card-header no-border-bottom">
                                    <h4 class="card-title">Visitors Overview</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <div class="row my-1">
                                            <div class="col-lg-4 col-xs-12">
                                                <div class="text-xs-center">
                                                    <h3>23,454</h3>
                                                    <p class="text-muted">Page Views <span class="success"><i class="ft-arrow-up"></i> 8.16%</span></p>
                                                    <div id="sp-tristate-bar-total-revenue"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xs-12">
                                                <div class="text-xs-center">
                                                    <h3>6,630</h3>
                                                    <p class="text-muted">Unique Visitor <span class="danger"><i class="ft-arrow-down"></i> 2.30%</span></p>
                                                    <div id="sp-stacked-bar-total-sales"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xs-12">
                                                <div class="text-xs-center">
                                                    <h3>86,578</h3>
                                                    <p class="text-muted">Total Visits <span class="warning"><i class="ft-arrow-up"></i> 4.27%</span></p>
                                                    <div id="sp-bar-total-cost"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="chartjs">
                                                    <canvas id="line-stacked-area" height="300"></canvas>
                                                </div>
                                                <ul class="list-inline text-xs-center mt-1">
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle success"></i> <span>Page Views</span></h6>
                                                    </li>
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle warning"></i> <span>Total Visits</span></h6>
                                                    </li>
                                                    <li class="mr-1">
                                                        <h6><i class="fa fa-circle danger"></i> <span>Unique Visitor</span></h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Analytics spakline & chartjs  -->

                    <!--stats-->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div class="media">
                                            <div class="media-body text-xs-left">
                                                <h3 class="primary">78%</h3>
                                                <span>New Session</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="icon-user-follow primary font-large-2 float-xs-right"></i>
                                            </div>
                                        </div>
                                        <progress class="progress progress-sm progress-primary mt-1 mb-0" value="80" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div class="media">
                                            <div class="media-body text-xs-left">
                                                <h3 class="danger">423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="icon-social-dropbox danger font-large-2 float-xs-right"></i>
                                            </div>
                                            <progress class="progress progress-sm progress-danger mt-1 mb-0" value="40" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div class="media">
                                            <div class="media-body text-xs-left">
                                                <h3 class="success">64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="icon-layers success font-large-2 float-xs-right"></i>
                                            </div>
                                            <progress class="progress progress-sm progress-success mt-1 mb-0" value="60" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-block">
                                        <div class="media">
                                            <div class="media-body text-xs-left">
                                                <h3 class="warning">02.12</h3>
                                                <span>Session Duration</span>
                                            </div>
                                            <div class="media-right media-middle">
                                                <i class="icon-globe warning font-large-2 float-xs-right"></i>
                                            </div>
                                            <progress class="progress progress-sm progress-warning mt-1 mb-0" value="35" max="100"></progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/stats-->
                </div>
                @endsection

                @section('customjs')
                <!-- BEGIN VENDOR JS-->
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
                <!-- BEGIN VENDOR JS-->
                <!-- BEGIN PAGE VENDOR JS-->
                <script type="text/javascript" src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/ui/jquery.sticky.js"></script>
                <script type="text/javascript" src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/scripts/extensions/knob.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/charts/jquery.sparkline.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/core/colors/palette-climacon.css">
                <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
                <!-- END PAGE VENDOR JS-->
                <!-- BEGIN STACK JS-->
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/core/app.min.js" type="text/javascript"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
                <!-- END STACK JS-->
                <!-- BEGIN PAGE LEVEL JS-->
                <script type="text/javascript" src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
                <script src="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
                <!-- END PAGE LEVEL JS-->
                @endsection