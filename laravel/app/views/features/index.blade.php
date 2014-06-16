@extends('layouts.template')


@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Feature 2.25 title</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
<div class="col-lg-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <i class="fa fa-bar-chart-o fa-fw"></i> Detail Example
    <div class="pull-right">
      <div class="btn-group">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
          Actions
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right" role="menu">
          <li><a href="#">Delete</a>
          </li>
          <li><a href="#">Another action</a>
          </li>
          <li><a href="#">Something else here</a>
          </li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.panel-heading -->
  <div class="panel-body">

    <div class="form-group">
      <label>Initial requirements</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group tasks col-lg-12">
      <label>Tasks</label>
      <div class="form-group">
      <div class="checkbox col-lg-3" style="margin-top:-5px;">
        <label>
          <input type="checkbox" value="">Checkbox 1
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 2
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 3
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 1
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 2
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 3
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 1
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 2
        </label>
      </div>
      <div class="checkbox col-lg-3">
        <label>
          <input type="checkbox" value="">Checkbox 3
        </label>
      </div>
      </div>
    </div>


    <div class="form-group">
      <label>Design Spec</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label>Technical Spec</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label>Test Plan</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>

  </div>
  <!-- /.panel-body -->
</div>
<!-- /.panel -->


</div>
<!-- /.col-lg-8 -->
<div class="col-lg-4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-bell fa-fw"></i> Feature Settings
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">



      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">Client Visible
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="">Client Signoff Requirements
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="">Client Signoff Design
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="">Dev Signoff
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="">QA Signoff
          </label>
        </div>
      </div>


      <div class="form-group">
        <label>Status</label>
        <select class="form-control">
          <option>Draft</option>
          <option>Approved</option>
        </select>
      </div>

    </div>
    <!-- /.panel-body -->
  </div>
  <!-- /.panel -->

</div>
<!-- /.col-lg-4 -->
</div>

@stop