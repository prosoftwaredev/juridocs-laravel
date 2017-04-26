<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Juridocs | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="#token" name="csrf-token" content="{{ csrf_token() }}" />
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
{{!! Html::style("assets/global/plugins/font-awesome/css/font-awesome.min.css"); !!}}
{{!! Html::style("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap/css/bootstrap.min.css"); !!}}
{{!! Html::style("assets/global/plugins/uniform/css/uniform.default.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); !!}}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{!! Html::style("assets/global/plugins/select2/select2.css"); !!}}
{{!! Html::style("assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"); !!}}
{{!! Html::style("assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"); !!}}
{{!! Html::style("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"); !!}}
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{!! Html::style("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"); !!}}
{{!! Html::style("assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css"); !!}}
{{!! Html::style("assets/global/plugins/typeahead/typeahead.css"); !!}}
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{!! Html::style("assets/global/plugins/bootstrap-toastr/toastr.min.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css"); !!}}
{{!! Html::style("assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css"); !!}}
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
{{!! Html::style("assets/global/css/components.css"); !!}}
{{!! Html::style("assets/global/css/plugins.css"); !!}}
{{!! Html::style("assets/admin/layout/css/layout.css"); !!}}
{{!! Html::style("assets/admin/layout/css/themes/darkblue.css"); !!}}
{{!! Html::style("assets/admin/layout/css/custom.css"); !!}}
{{!! Html::style("assets/global/plugins/jstree/dist/themes/default/style.min.css"); !!}}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
      <a href="index.html">
        {!! Html::image('assets/admin/layout/img/logo.png', 'alt', array("class"=>"logo-default")) !!}
      </a>
      <div class="menu-toggler sidebar-toggler hide">
      </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          {!! Html::image('assets/admin/layout/img/avatar3_small.jpg', 'alt', array()) !!}
          <span class="username username-hide-on-mobile">
          Nick </span>
          <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-default">
            <li>
              <a href="extra_profile.html">
              <i class="icon-user"></i> My Profile </a>
            </li>
            <li>
              <a href="page_calendar.html">
              <i class="icon-calendar"></i> My Calendar </a>
            </li>
            <li>
              <a href="inbox.html">
              <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
              3 </span>
              </a>
            </li>
            <li>
              <a href="page_todo.html">
              <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
              7 </span>
              </a>
            </li>
            <li class="divider">
            </li>
            <li>
              <a href="extra_lock.html">
              <i class="icon-lock"></i> Lock Screen </a>
            </li>
            <li>
              <a href="login.html">
              <i class="icon-key"></i> Log Out </a>
            </li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-quick-sidebar-toggler">
          <a href="javascript:;" class="dropdown-toggle">
          <i class="icon-logout"></i>
          </a>
        </li>
        <!-- END QUICK SIDEBAR TOGGLER -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  @include('layouts.admin.sidebar')
  @yield('content')
</div>
<!-- END CONTAINER -->
@include('layouts.admin.footer')

