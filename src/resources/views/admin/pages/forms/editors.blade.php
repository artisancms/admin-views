@extends('admin::layouts.starter')

@section('content-header')
    <h1>
        Text Editors
        <small>Advanced form element</small>
    </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor <small>Advanced and full of features</small></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                        This is my textarea to be replaced with CKEditor.
                </textarea>
              </form>
            </div>
          </div><!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div><!-- /.col-->
      </div><!-- ./row -->
@stop


@section('styles')
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@stop

@section('scripts')
    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/cms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
@stop
    
