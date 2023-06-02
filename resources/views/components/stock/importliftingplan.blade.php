@extends('components/layouts/header')

@section('title')
    Import Product
@endsection
<style>
    table, th, td {
  border: 1px solid rgb(126, 136, 240);
}
table{
    background-color: chocolate;
}
</style>
@section('content-body')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Import Lifting Plan</h4>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="requiredfield">
                        <h4>Field must be in csv format</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                {{-- <a class="btn btn-submit w-100">Download Sample File</a> --}}
                                <a class="btn btn-submit w-100" href="{{ url('download_lifting_plan') }}"
                                    download="lifting_plan.csv">Download Sample File</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Upload CSV File</label>
                                <div class="image-upload">
                                    <input type="file">
                                    <div class="image-uploads">
                                        <img src="assets/img/icons/upload.svg" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <table class="table table-light ">
                              <thead>
                                <tr>
                                    <th><h5>Field</h5></th>
                                    <th><h5>Field Type</h5></th>
                                    <th><h5>Example</h5></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td><h6>Planning Dispatch Date</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">29/05/2023</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Company</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">Hyundai Motor Company</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Location</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">Gurugram, Haryana, India</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Order No.</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">160025365</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Business Partner</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">ITC Limited</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>BP Name</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">ITC</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Item</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">item-1</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Pending Quantity</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">6000</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Approx Quantity For Dispatch</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">5000</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Price</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">500</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Amount</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">2500000</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Ref No.</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">8000263</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Remark</h6></td>
                                    <td><h6 class="manitorygreen">This Field is required</h6></td>
                                    <td><h6 class="manitorygreen">Price does't include tax.</h6></td>
                                </tr>
                              </tbody>
                           </table>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                            </div>
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
