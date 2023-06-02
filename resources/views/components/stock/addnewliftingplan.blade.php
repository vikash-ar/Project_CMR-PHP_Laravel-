@extends('components/layouts/header')

@section('title')
   Add New Lifting Plan
@endsection

@section('content-body')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add New Lifting Plan</h4>
                </div>
            </div>
            <form action="{{ route('liftingplan.store') }}" method="post">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Planning Dispatch Date</label>
                                <input type="date" style="width: 100%; height: 40px " name="planning_dispatch_date">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" placeholder="Company" name="company">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" placeholder="Location" name="location">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Order No.</label>
                                <input type="text" placeholder="Order No." name="order_no">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Business Partner</label>
                                <input type="text" placeholder="Business Partner" name="business_partner">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>BP Name</label>
                                <input type="text" placeholder="BP Name" name="bp_name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Item</label>
                                <select name="item" style="width: 100%; height: 40px ">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                  </select>
                                  <br>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Pending Quantity</label>
                                <input type="text" placeholder="Pending Quantity" name="pending_quantity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Approx Quantity of Dispatch</label>
                                <input type="text" placeholder="Approx Quantity of Dispatch" name="approx_quantity_of_dispatch">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" placeholder="Price" name="price">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" placeholder="Amount" name="amount">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Ref No.</label>
                                <input type="text" placeholder="Ref No." name="ref_no">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" placeholder="Remark" name="remark">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{url('liftingplan')}}" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success align-right">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        @endsection
