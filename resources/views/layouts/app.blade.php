<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

    <!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 00:59:30 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Aplikasi Kantor Cabang PT. Asabri (Persero)</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        @yield('vendorcss')
        <!-- END VENDOR CSS-->
        <!-- BEGIN STACK CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css')}}">
        <!-- END STACK CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
        <!-- link(rel='stylesheet', type='text/css', href='../../../app-assets/css#{rtl}/pages/users.css')-->
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
        <!-- END Custom CSS-->
    </head>
    <body data-open="click" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns ">

        <!-- navbar-fixed-top-->
        <nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-light navbar-border navbar-brand-center">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item"><a href="index-2.html" class="navbar-brand">
                                <h2 class="brand-text">Kancabasabri</h2></a></li>
                        <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                <div class="navbar-container container center-layout">
                    <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
                            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-bell"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                                                </div>
                                            </div></a></li>
                                    <!-- <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon ft-mail"></i><span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bret Lezama</h6>
                                                    <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Carie Berra</h6>
                                                    <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                                                </div>
                                            </div></a><a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Eric Alsobrook</h6>
                                                    <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                                                </div>
                                            </div></a></li>
                                    <!-- <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{ asset('app-assets/images/empty-profile-grey.jpg') }}" alt="avatar"><i></i></span><span class="user-name">Ilyas Habiburrahman</span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                    <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- ////////////////////////////////////////////////////////////////////////////-->


        <!-- Horizontal navigation-->
        <div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border">
            <!-- Horizontal menu content-->
            <div data-menu="menu-container" class="navbar-container main-menu-content container center-layout">
                <!-- include ../../../includes/mixins-->
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
                    <li data-menu="dropdown" class="dropdown nav-item {{ checkActiveMenu('dashboard') }}"><a href="{{ url('dashboard') }}" class="dropdown-toggle nav-link"><i class="ft-home"></i><span>Dashboard</span></a></li>
                    <li data-menu="dropdown" class="dropdown nav-item {{ checkActiveMenu('dropping') }}"><a href="{{ url('dropping') }}" class="dropdown-toggle nav-link"><i class="ft-monitor"></i><span>Dropping</span></a></li>
                    <li data-menu="dropdown" class="dropdown nav-item {{ checkActiveMenu('transaksi') }}"><a href="{{  url('transaksi') }}" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="ft-grid"></i><span>Transaksi</span></a></li>
                </ul>
            </div>
            <!-- /horizontal menu content-->
        </div>
        <!-- Horizontal navigation-->

        <div class="app-content container center-layout mt-2">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>

        <footer class="footer footer-static footer-light navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://gumcode.net" target="_blank" class="text-bold-800 grey darken-2">Gumcode </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
        </footer>
        @yield('customjs')
    </body>

    <!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 01:03:28 GMT -->
</html>