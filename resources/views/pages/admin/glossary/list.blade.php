@extends('layouts.admin.header')

@section('header')

<script>
  jQuery(document).ready(function() {
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
          <a href="#">Glossary</a>
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
                <i class="fa fa-globe"></i>Glossaries
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
              <ul class="list-group">
                @foreach($glossaries as $key => $glossary) 
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-md-1">
                        <span class="glyphicon glyphicon-ok"/>
                      </div>
                      <div class="col-md-9">
                        <a href="<?php echo "../edit/".$glossary->id; ?>">
                          {{$glossary -> name}}
                        </a>
                      </div>
                      <div class="col-md-1"><a href="<?php echo "../edit/".$glossary->id; ?>"><span class="glyphicon glyphicon-edit"/></a></div>
                      <div class="col-md-1"><a href="javascript:void(0)"><span class="glyphicon glyphicon-trash"/></a></div>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        <!-- END EXAMPLE TABLE PORTLET-->
      </div>
    </div>
  </div>
  <div id="delete_modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
    <div class="modal-body">
      <p>
         Would you like to delete this Glossaries?
      </p>
    </div>
    <div class="modal-footer">
      <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
      <button type="button" data-dismiss="modal" class="btn blue delete">OK</button>
    </div>
  </div>
</div>

<!-- END CONTENT -->
@endsection