@extends('components/layouts/header')

@section('title')
    Lifting Plan
@endsection

@section('css-content')

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

@endsection

@section('content-body')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Lifting Plan</h4>
                </div>
                <div class="page-btn noPrint">
                    <a href="{{ url('liftingplan/create') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                            alt="img" class="me-1 ">Add New Lifting Plan</a>
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
                            <div class="search-input noPrint">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="assets/img/icons/pdf.svg" alt="img" class="noPrint"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="assets/img/icons/excel.svg" alt="img" class="noPrint"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="assets/img/icons/printer.svg" alt="img" onclick="window.print();" class="noPrint"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-0" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Product</option>
                                                    <option>Macbook pro</option>
                                                    <option>Orange</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Category</option>
                                                    <option>Computers</option>
                                                    <option>Fruits</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Sub Category</option>
                                                    <option>Computer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Brand</option>
                                                    <option>N/D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg col-sm-6 col-12 ">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Price</option>
                                                    <option>150.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12">
                                            <div class="form-group">
                                                <a class="btn btn-filters ms-auto"><img
                                                        src="assets/img/icons/search-whites.svg" alt="img"></a>
                                            </div>
                                        </div>
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
                                    <th>Planning Dispatch Date</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Order No</th>
                                    <th>Business Partner</th>
                                    <th>BP Name</th>
                                    <th>Item</th>
                                    <th>Pending Quantity</th>
                                    <th>Approx Quantity For Dispatch</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Ref No</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($liftingPlan as $key => $value)
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                  
                                    <td>$value->planning_dispatch_date</td>
                                    <td>$value->company</td>
                                    <td>$value->location</td>
                                    <td>$value->order_no</td>
                                    <td>$value->business_partner</td>
                                    <td>$value->bp_name</td>
                                    <td>$value->item</td>
                                    <td>$value->pending_quantity</td>
                                    <td>$value->approx_quantity_for_dispatch</td>
                                    <td>$value->price</td>
                                    <td>$value->amount</td>
                                    <td>$value->ref_no</td>
                                    <td>$value->remark</td>
                                    <td>
                                        {{-- <a class="me-3" href="{{ url('productdetails') }}">
                                            <img src="assets/img/icons/eye.svg" alt="">
                                        </a> --}}
                                        <a class="me-3" href="{{ url('addnewliftingplan') }}">
                                            <img src="assets/img/icons/edit.svg" alt="">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="">
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
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
