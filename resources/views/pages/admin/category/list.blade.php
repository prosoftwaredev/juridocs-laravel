@extends('layouts.admin.header')

@section('header')

<!-- <link rel="stylesheet" type="text/css" href="../../assets/admin/pages/css/document.css"> -->

<script src="../../assets/admin/pages/scripts/document/document.js"></script>

<script>
  jQuery(document).ready(function() {       
    TableAdvanced.init();
  });
</script>

@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
             Widget settings form goes here
          </div>
          <div class="modal-footer">
            <button type="button" class="btn blue">Save changes</button>
            <button type="button" class="btn default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="index.html">Admin</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Document</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">List</a>
        </li>
      </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
          <div class="portlet box green-haze">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-globe"></i>Documents
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
                <a href="#portlet-config" data-toggle="modal" class="config">
                </a>
                <a href="javascript:;" class="reload">
                </a>
                <a href="javascript:;" class="remove">
                </a>
              </div>
            </div>
            <div class="portlet-body">
              <table class="table table-striped table-hover" id="documents_table">
              <thead>
                <tr>
                  <th>
                     Document Name
                  </th>
                  <th class="hidden-xs">
                     Edit
                  </th>
                  <th class="hidden-xs">
                     Delete
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $key => $value)
                <tr>
                  <td>{{ $value->name }}</td>
                  <td><button class="btn btn-primary">EDIT</button></td>
                  <td><button class="btn btn-warning">DELETE</button></td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
        <!-- END EXAMPLE TABLE PORTLET-->
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->
@endsection