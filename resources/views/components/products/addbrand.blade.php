@extends('components/layouts/header')

@section('title')
   Add Brand
@endsection

@section('content-body')

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Brand ADD</h4>
<h6>Create new Brand</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Brand Name</label>
<input type="text">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file">
<div class="image-uploads">
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
<a href="{{url('brandlist')}}" class="btn btn-cancel">Cancel</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

@endsection

@section('js-content')
<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
@endsection
