  @extends('layouts.admin.header')

@section('header')

<script src="../../assets/admin/pages/scripts/document/add_document.js"></script>
<script src="../../assets/admin/pages/scripts/ui-toastr.js"></script>

<script>
  jQuery(document).ready(function() {       
    ComponentsFormTools.init();
    UIToastr.init();
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
          <a href="#">Add</a>
        </li>
      </ul>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet box blue-hoki">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-edit"></i>Add Document
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
          <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="" class="form-horizontal form-bordered document-add-form">
              <div class="form-body">
                <div class="alert alert-danger display-hide">
                  <button class="close" data-close="alert"></button>
                  You have some form errors. Please check below.
                </div>
                <div class="alert alert-success display-hide">
                  <button class="close" data-close="alert"></button>
                  Your form validation is successful!
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Name <span class="required">
                  * </span>
                  </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control document-name" data-required="1" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Payed</label>
                  <div class="col-md-9">
                    <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning" id="payed_option">
                  </div>
                </div>
                <div class="form-group document-price-div">
                  <label class="control-label col-md-3">Price</label>
                  <div class="col-md-9">
                    <div class="input-inline input-medium">
                      <input id="touchspin_demo1" type="text" value="0" name="document-price" class="form-control document-price">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                      </div>
                      <div>
                        <span class="btn default btn-file">
                        <span class="fileinput-new">
                        Select image </span>
                        <span class="fileinput-exists">
                        Change </span>
                        <input type="file" name="...">
                        </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                        Remove </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Document Template</label>
                  <div class="col-md-9">
                    <textarea class="ckeditor form-control document-template" name="document-template" rows="6" id="document-template"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                    <button type="button" class="btn purple add-document"><i class="fa fa-check"></i> Add</button>
                    <button type="button" class="btn default">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- END FORM-->
          </div>
        </div>
        <!-- END PORTLET-->
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
<!-- END CONTENT -->
@endsection