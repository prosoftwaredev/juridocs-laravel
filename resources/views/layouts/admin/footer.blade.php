<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner">
     2014 &copy; Metronic by keenthemes.
  </div>
  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->

{{!! Html::script("assets/global/plugins/respond.min.js"); !!}}
{{!! Html::script("assets/global/plugins/excanvas.min.js"); !!}}

{{!! Html::script("assets/global/plugins/jquery.min.js");!!}}
{{!! Html::script("assets/global/plugins/jquery-migrate.min.js");!!}}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{!! Html::script("assets/global/plugins/jquery-ui/jquery-ui.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap/js/bootstrap.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js");!!}}
{{!! Html::script("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js");!!}}
{{!! Html::script("assets/global/plugins/jquery.blockui.min.js");!!}}
{{!! Html::script("assets/global/plugins/jquery.cokie.min.js");!!}}
{{!! Html::script("assets/global/plugins/uniform/jquery.uniform.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js");!!}}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{!! Html::script("assets/global/plugins/select2/select2.min.js"); !!}
{{!! Html::script("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"); !!}
{{!! Html::script("assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"); !!}
{{!! Html::script("assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"); !!}
{{!! Html::script("assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"); !!}
{{!! Html::script("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"); !!}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{!! Html::script("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"); !!}
{{!! Html::script("assets/global/plugins/jquery-validation/js/additional-methods.min.js"); !!}
{{!! Html::script("assets/global/plugins/fuelux/js/spinner.min.js"); !!}
{{!! Html::script("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"); !!}
{{!! Html::script("assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"); !!}
{{!! Html::script("assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"); !!}
{{!! Html::script("assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js");!!}}
{{!! Html::script("assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js");!!}}
{{!! Html::script("assets/global/plugins/typeahead/handlebars.min.js");!!}}
{{!! Html::script("assets/global/plugins/typeahead/typeahead.bundle.min.js");!!}}
{{!! Html::script("assets/global/plugins/ckeditor/ckeditor.js"); !!}
{{!! Html::script("assets/global/plugins/jstree/dist/jstree.min.js"); !!}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{!! Html::script("assets/global/plugins/bootstrap-toastr/toastr.min.js"); !!}
{{!! Html::script("assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js");!!}}
{{!! Html::script("assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js");!!}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{!! Html::script("assets/global/scripts/metronic.js");!!}}
{{!! Html::script("assets/admin/layout/scripts/layout.js");!!}}
{{!! Html::script("assets/admin/layout/scripts/demo.js");!!}}

<!-- END PAGE LEVEL SCRIPTS -->

@yield("header")

<script>
jQuery(document).ready(function() {    
   	Metronic.init(); // init metronic core componets
 	Layout.init(); // init layout
   	Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>