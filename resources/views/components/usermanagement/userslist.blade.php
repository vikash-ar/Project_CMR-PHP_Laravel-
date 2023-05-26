@extends('components/layouts/header')

@section('title')
   Users List
@endsection

@section('content-body')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>User List</h4>
    <h6>Manage your User</h6>
    </div>
    <div class="page-btn">
    <a href="" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img">Add User</a>
    </div>
    </div>

    <div class="card">
    <div class="card-body">
    <div class="table-top">
    <div class="search-set">
    <div class="search-path">
    <a class="btn btn-filter" id="filter_search">
    <img src="assets/img/icons/filter.svg" alt="img">
    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
    </a>
    </div>
    <div class="search-input">
    <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
    </div>
    </div>
    <div class="wordset">
    <ul>
    <li>
    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
    </li>
    <li>
    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
    </li>
    <li>
    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
    </li>
    </ul>
    </div>
    </div>

    <div class="card" id="filter_inputs">
    <div class="card-body pb-0">
    <div class="row">
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter User Name">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter Phone">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter Email">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <select class="select">
    <option>Disable</option>
    <option>Enable</option>
    </select>
    </div>
    </div>
    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
    <div class="form-group">
    <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="table-responsive">
    <table class="table  datanew">
    <thead>
    <tr>
    <th>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </th>
    <th>User name </th>
    <th>Phone</th>
    <th>email</th>
    <th>Role</th>
    <th>Created On</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>Thomas</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="196d717674786a597c61787469757c377a7674">[email&#160;protected]</a> </td>
    <td>Admin </td>
    <td>3/15/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>504Benjamin</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7a4b2b4b3a8aaa2b587a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</a></td>
    <td>Manager </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>James 524</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a303b373f291a3f223b372a363f74393537">[email&#160;protected]</a></td>
    <td>Salesman </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>James 524</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf6fdf1f9efdcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a></td>
    <td>Salesman </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>Bruklin2022</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0c2d2d5cbccc9cee0c5d8c1cdd0ccc58ec3cfcd">[email&#160;protected]</a></td>
    <td>Delivery Biker </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>BeverlyWIN25</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b49595e404742456b4e534a465b474e05484446">[email&#160;protected]</a></td>
    <td>Delivery Biker </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>BHR256</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="410934232433012439202c312d246f222e2c">[email&#160;protected]</a></td>
    <td>Sales Executive</td>
    <td>3/15/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>Thomas</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="83f7ebeceee2f0c3e6fbe2eef3efe6ade0ecee">[email&#160;protected]</a> </td>
    <td>Admin </td>
    <td>3/15/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>504Benjamin</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e5f3f5f2e9ebe3f4c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a></td>
    <td>Manager </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>James 524</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6aca7aba3b586a3bea7abb6aaa3e8a5a9ab">[email&#160;protected]</a></td>
    <td>Salesman </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>James 524</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed878c80889ead88958c809d8188c38e8280">[email&#160;protected]</a></td>
    <td>Salesman </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightred badges">Restricted</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>Bruklin2022</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee8c9c9b85828780ae8b968f839e828bc08d8183">[email&#160;protected]</a></td>
    <td>Delivery Biker </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>BeverlyWIN25</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="503222253b3c393e103528313d203c357e333f3d">[email&#160;protected]</a></td>
    <td>Delivery Biker </td>
    <td>2/27/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    <tr>
    <td>
    <label class="checkboxs">
    <input type="checkbox">
    <span class="checkmarks"></span>
    </label>
    </td>
    <td>BHR256</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="367e4354534476534e575b465a531855595b">[email&#160;protected]</a></td>
    <td>Sales Executive</td>
    <td>3/15/2022</td>
    <td><span class="bg-lightgreen badges">Active</span></td>
    <td>
    <a class="me-3" href="">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-3 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>


    <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Show Payments</h5>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th>Date</th>
    <th>Reference</th>
    <th>Amount </th>
    <th>Paid By </th>
    <th>Paid By </th>
    </tr>
    </thead>
    <tbody>
    <tr class="bor-b1">
    <td>2022-03-07 </td>
    <td>INV/SL0101</td>
    <td>$ 1500.00 </td>
    <td>Cash</td>
    <td>
    <a class="me-2" href="javascript:void(0);">
    <img src="assets/img/icons/printer.svg" alt="img">
    </a>
    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal">
    <img src="assets/img/icons/edit.svg" alt="img">
    </a>
    <a class="me-2 confirm-text" href="javascript:void(0);">
    <img src="assets/img/icons/delete.svg" alt="img">
    </a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Create Payment</h5>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Customer</label>
    <div class="input-group">
    <input type="text" value="2022-03-07" class="datetimepicker">
    <a class="scanner-set input-group-text">
    <img src="assets/img/icons/datepicker.svg" alt="img">
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Reference</label>
    <input type="text" value="INV/SL0101">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Received Amount</label>
    <input type="text" value="1500.00">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Paying Amount</label>
    <input type="text" value="1500.00">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Payment type</label>
    <select class="select">
    <option>Cash</option>
    <option>Online</option>
    <option>Inprogress</option>
    </select>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <label>Note</label>
    <textarea class="form-control"></textarea>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-submit">Submit</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>


    <div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Edit Payment</h5>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Customer</label>
    <div class="input-group">
    <input type="text" value="2022-03-07" class="datetimepicker">
    <a class="scanner-set input-group-text">
    <img src="assets/img/icons/datepicker.svg" alt="img">
    </a>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Reference</label>
    <input type="text" value="INV/SL0101">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Received Amount</label>
    <input type="text" value="1500.00">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Paying Amount</label>
    <input type="text" value="1500.00">
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
    <div class="form-group">
    <label>Payment type</label>
    <select class="select">
    <option>Cash</option>
    <option>Online</option>
    <option>Inprogress</option>
    </select>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <label>Note</label>
    <textarea class="form-control"></textarea>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-submit">Submit</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('js-content')
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

@endsection
