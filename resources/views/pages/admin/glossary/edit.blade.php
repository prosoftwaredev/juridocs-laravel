@extends('layouts.admin.header')

@section('header')

<link href="../../assets/admin/pages/css/category/add.css" rel="stylesheet" type="text/css"/>

<script src="../../assets/admin/pages/scripts/ui-toastr.js"></script>

<script src="../../assets/admin/pages/scripts/category/add_category.js"></script>
<script src="../../assets/admin/pages/scripts/ui-toastr.js"></script>



<script>
  jQuery(document).ready(function() {

    ComponentsFormTools.init();
    UIToastr.init();

    $('#category_tree').jstree({
      'plugins': ["wholerow", "dnd", "state","types"],
      'core': {
        "themes" : {
            "responsive": true
        },
        'data': <?php echo json_encode($categories)?>,
        "check_callback": true
      },
      'types': {
        "default" : {
            "icon" : "fa fa-th-list icon-state-warning icon-lg"
        }
      }
    }).bind("loaded.jstree", function (e, data) {
      $('#category_tree').jstree(true).deselect_all();
    }) ;
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
          <a href="#">Category</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Edit</a>
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
              <i class="fa fa-edit"></i>Edit Category
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
            <form action="" class="form-horizontal form-bordered" id="form_edit_category">
              <input type='hidden' value="{{$category->id}}" name="id" id="category_id"/>
              <div class="form-body">
                <div class="form-group">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control category-name" name="category_name" value="{{$category->name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        <img scr={{$category->image_url}}/>
                      </div>
                      <div>
                        <span class="btn default btn-file">
                        <span class="fileinput-new">
                        Select image </span>
                        <span class="fileinput-exists">
                        Change </span>
                        <input type="file" name="category_image" accept="image/*">
                        </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                        Remove </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Parent Category</label>
                  <div class="col-md-9">
                    <div id='category_tree'></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Visibility</label>
                  <div class="col-md-9">
                    <select name="visibility" id="sel_visibility" class="form-control">
                    @foreach ($visibilities as $key => $visibility)
                      <option value="{{$visibility->id}}"> {{$visibility->name}} </option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group custom-options">
                  <label class="control-label col-md-3">Users</label>
                  <div class="col-md-9">
                    <select name="user" class="form-control" id="sel_users">
                    @foreach ($users as $key => $user)
                      <option value="{{$user->id}}"> {{$user->name}} </option>
                    @endforeach
                    </select>
                  </div>
                  <label class="control-label col-md-3">Groups</label>
                  <div class="col-md-9">
                    <select name="group" class="form-control" id="sel_groups">
                    @foreach ($groups as $key => $group)
                      <option value="{{$group->id}}"> {{$group->name}} </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Category Description</label>
                  <div class="col-md-9">
                    <textarea class="form-control" rows="6" name="category_description"">{{$category->description}}</textarea>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn purple add-category"><i class="fa fa-check"></i>Edit</button>
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