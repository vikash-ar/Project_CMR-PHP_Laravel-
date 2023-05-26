@extends('components/layouts/header')

@section('title')
   Users
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
    <a href="adduser.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-2">Add User</a>
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
    <a class="btn btn-searchset">
    <img src="assets/img/icons/search-white.svg" alt="img">
    </a>
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
    <th>Profile</th>
    <th>First name </th>
    <th>Last name </th>
    <th>User name </th>
    <th>Phone</th>
    <th>email</th>
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
    <td class="productimgname">
    <a href="javascript:void(0);" class="product-img">
    <img src="assets/img/customer/customer1.jpg" alt="product">
    </a>
    </td>
    <td>Thomas</td>
    <td>Thomas </td>
    <td>Thomas21 </td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="a4d0cccbc9c5d7e4c1dcc5c9d4c8c18ac7cbc9">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user1" class="check">
    <label for="user1" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Benjamin</td>
    <td>Franklin </td>
    <td>504Benjamin </td>
    <td>123-456-888</td>
    <td><a href="" class="__cf_email__" data-cfemail="d7b4a2a4a3b8bab2a597b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user2" class="check" checked="">
    <label for="user2" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>James</td>
    <td>James </td>
    <td>James 524 </td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="086269656d7b486d70696578646d266b6765">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user3" class="check" checked="">
    <label for="user3" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Bruklin</td>
    <td>Bruklin </td>
    <td>Bruklin2022</td>
    <td>123-456-888</td>
    <td><a href="" class="__cf_email__" data-cfemail="2b49595e404742456b4e534a465b474e05484446">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user4" class="check" checked="">
    <label for="user4" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Franklin</td>
    <td>Jacob </td>
    <td>BeverlyWIN25</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="dd9fb8abb8afb1a49db8a5bcb0adb1b8f3beb2b0">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user5" class="check">
    <label for="user5" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>B. Huber </td>
    <td>Jacob </td>
    <td>BeverlyWIN25</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="8ec6fbecebfcceebf6efe3fee2eba0ede1e3">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user6" class="check">
    <label for="user6" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    <img src="assets/img/customer/customer7.jpg" alt="product">
    </a>
    </td>
    <td>Alwin</td>
    <td>Alwin </td>
    <td>Alwin243</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="3a594f494e55575f487a5f425b574a565f14595557">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user7" class="check">
    <label for="user7" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    <img src="assets/img/customer/customer8.jpg" alt="product">
    </a>
    </td>
    <td>Fred john</td>
    <td>john </td>
    <td>FredJ25</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="acc6c3c4c2ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user15" class="check">
    <label for="user15" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    <img src="assets/img/customer/customer1.jpg" alt="product">
    </a>
    </td>
    <td>Rasmussen </td>
    <td>Gothic </td>
    <td>Cras56</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="0456657769717777616a44617c65697468612a676b69">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user9" class="check" checked="">
    <label for="user9" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Grace </td>
    <td>Halena </td>
    <td>Grace2022</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="93f0e6e0e7fcfef6e1d3f6ebf2fee3fff6bdf0fcfe">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user10" class="check" checked="">
    <label for="user10" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Rasmussen </td>
    <td>Gothic </td>
    <td>Cras56</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="94c6f5e7f9e1e7e7f1fad4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user19" class="check" checked="">
    <label for="user19" class="checktoggle">checkbox</label>
    </div>
    </td>
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
    </td>
    <td>Grace </td>
    <td>Halena </td>
    <td>Grace2022</td>
    <td>+12163547758 </td>
    <td><a href="" class="__cf_email__" data-cfemail="65061016110a08001725001d04081509004b060a08">[email&#160;protected]</a></td>
    <td>
    <div class="status-toggle d-flex justify-content-between align-items-center">
    <input type="checkbox" id="user18" class="check" checked="">
    <label for="user18" class="checktoggle">checkbox</label>
    </div>
    </td>
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
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

@endsection
