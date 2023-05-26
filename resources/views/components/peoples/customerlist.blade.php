@extends('components/layouts/header')

@section('title')
   Customers
@endsection

@section('content-body')
<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Customer List</h4>
    <h6>Manage your Customers</h6>
    </div>
    <div class="page-btn">
    <a href="" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img">Add Customer</a>
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
    <input type="text" placeholder="Enter Customer Code">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter Customer Name">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter Phone Number">
    </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
    <div class="form-group">
    <input type="text" placeholder="Enter Email">
    </div>
    </div>
    <div class="col-lg-1 col-sm-6 col-12  ms-auto">
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
    <input type="checkbox" id="select-all">
    <span class="checkmarks"></span>
    </label>
    </th>
    <th>Customer Name</th>
    <th>code</th>
    <th>Customer</th>
    <th>Phone</th>
    <th>email</th>
    <th>Country</th>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer1.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">Thomas</a>
    </td>
    <td>201</td>
    <td>Thomas</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f88c909795998bb89d80999588949dd69b9795">[email&#160;protected]</a></td>
    <td>USA</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer2.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">Benjamin</a>
    </td>
    <td>202</td>
    <td>Benjamin</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f1928482859e9c9483b19489909c819d94df929e9c">[email&#160;protected]</a></td>
    <td>USA</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer3.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">James</a>
    </td>
    <td>521</td>
    <td>James</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3c0d6d0d7cccec6d1e3c6dbc2ced3cfc68dc0ccce">[email&#160;protected]</a></td>
    <td>USA</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer3.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">Bruklin</a>
    </td>
    <td>555</td>
    <td>Bruklin</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cdafbfb8a6a1a4a38da8b5aca0bda1a8e3aea2a0">[email&#160;protected]</a></td>
    <td>Thailand</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer4.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">Beverly</a>
    </td>
    <td>325</td>
    <td>Beverly</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4a681928196889da4819c8589948881ca878b89">[email&#160;protected]</a></td>
    <td>Phuket island</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer5.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">B. Huber</a>
    </td>
    <td>589</td>
    <td>B. Huber </td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7ffc2d5d2c5f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></td>
    <td>Germany</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer6.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>254</td>
    <td>James Stawberry</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cba8beb8bfa4a6aeb98baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a></td>
    <td>Angola</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-imgs">
    WC
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>681</td>
    <td>Fred john</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a505552547a5f425b574a565f14595557">[email&#160;protected]</a></td>
    <td>Albania</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer5.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">B. Huber</a>
    </td>
    <td>589</td>
    <td>B. Huber </td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="440c3126213604213c25293428216a272b29">[email&#160;protected]</a></td>
    <td>Germany</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer6.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>254</td>
    <td>James Stawberry</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0665737572696b637446637e676b766a632865696b">[email&#160;protected]</a></td>
    <td>Angola</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-imgs">
    WC
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>681</td>
    <td>Fred john</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ae0e5e2e4caeff2ebe7fae6efa4e9e5e7">[email&#160;protected]</a></td>
    <td>Albania</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer5.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">B. Huber</a>
    </td>
    <td>589</td>
    <td>B. Huber </td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9f1ccdbdccbf9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a></td>
    <td>Germany</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer6.jpg" alt="product">
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>254</td>
    <td>James Stawberry</td>
    <td>+12163547758 </td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d1c7c1c6dddfd7c0f2d7cad3dfc2ded79cd1dddf">[email&#160;protected]</a></td>
    <td>Angola</td>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-imgs">
    WC
    </a>
    <a href="javascript:void(0);">James Stawberry</a>
    </td>
    <td>681</td>
    <td>Fred john</td>
    <td>123-456-888</td>
    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6903060107290c11080419050c470a0604">[email&#160;protected]</a></td>
    <td>Albania</td>
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
