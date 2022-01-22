@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="container">
    <div class="row px-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>
        <form action="{{ url('new-registration/store') }}" method="POST">
        @csrf
    
            <div class="card px-4 py-4">
                <ul class="nav nav-tabs px-2 py-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Step 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Step 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Step 3</a>
                    </li>
                </ul>

                <div class="fw-bold px-2 py-2" style="background-color: orange">Exhibitor Information</div>
    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="px-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row p-3">

                        <input type="hidden" value="{{ $vendor_id ?? '' }}" class="form-control" name="user_id" readonly/>
                        <input type="hidden" value="{{ $details_id ?? '' }}" class="form-control" name="details_id" readonly/>
                        <input type="hidden" value="Vendor" class="form-control" name="role" readonly/>

                        <div class="col-md-12 pb-2">
                            <label>Name of Company:</label>
                            <input type="text" value="{{ $details->company_name ?? '' }}" class="form-control" placeholder="Company Sdn Bhd"  name="company_name">
                        </div>

                        <div class="col-md-6 pb-2">
                            <label>Contact Person:</label>
                            <input type="text" value="{{ $vendor->name ?? '' }}" class="form-control" placeholder="Mohammad"  name="name">
                        </div>
                        <div class="col-md-6 pb-2">
                            <label>Designation:</label>
                            <select class="form-select" aria-label="Default select example" name="designation" value="{{ $details->designation ?? '' }}">                                 
                                <option disabled selected>-- Please Select --</option>
                                <option value="CEO">CEO</option>
                                <option value="Proprietor">Proprietor</option>
                                <option value="Owner">Owner</option>
                                <option value="Founder">Founder</option>
                                <option value="Team Leader">Team Leader</option>
                                <option value="Manager">Manager</option>
                                <option value="Assistant Manager">Assistant Manager</option>
                                <option value="Executive">Executive</option>
                                <option value="Director">Director</option>
                                <option value="Coordinator">Coordinator</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Organizer">Organizer</option>
                                <option value="Administrator">Managing Partner</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label>IC/Passport No.:</label>
                            <input type="text" value="{{ $vendor_ic ?? '' }}" class="form-control" name="ic_no" readonly/>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label>Nationality:</label>
                            <select class="form-select" aria-label="Default select example" name="nationality" value="{{ $details->nationality ?? '' }}">                                 
                                <option disabled selected>-- Please Select --</option>
                                <option value="local">Citizens</option>
                                <option value="international">Non-citizens</option>
                            </select>
                        </div>

                        <div class="col-md-12 pb-2">
                            <label>Company Address:</label>
                            <textarea type="text" value="{{ $details->company_address ?? '' }}" class="form-control" placeholder="Ali"  name="company_address"></textarea>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label>Email:</label>
                            <input type="email"  value="{{ $vendor->email ?? '' }}" class="form-control" name="email" placeholder="example@gmail.com"/>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label>Nature of Business:</label>
                            <select class="form-select" aria-label="Default select example" name="business_nature" value="{{ $details->business_nature ?? '' }}">                                 
                                <option disabled selected>-- Please Select --</option>
                                <option value="Sole proprietorship">Sole proprietorship</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Private limited company">Private limited company</option>
                                <option value="Public limited company">Public limited company</option>
                                <option value="Unlimited companies">Unlimited companies</option>
                                <option value="Foreign company">Foreign company</option>
                                <option value="Limited liability partnership">Limited liability partnership</option>
                            </select>
                        </div>

                        <div class="col-md-12 pb-2">
                            <label for="formFileMultiple" class="form-label">Details of Displayed Product:</label>
                            <input class="form-control" type="file" name="product_details" value="{{ $details->product_details ?? '' }}" id="formFileMultiple" multiple>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label for="formFileMultiple" class="form-label">SSM Certificate:</label>
                            <input class="form-control" type="file" name="ssm_cert" value="{{ $details->ssm_cert ?? '' }}" id="formFileMultiple" multiple>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label for="formFileMultiple" class="form-label">Vaccine Certificate:</label>
                            <input class="form-control" type="file" name="vaccine_cert" value="{{ $details->vaccine_cert ?? '' }}" id="formFileMultiple" multiple>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label for="formFileMultiple" class="form-label">Coupon Category:</label>
                            <input class="form-control" type="text" name="category" value="{{ $coupon->category ?? '' }}"/>                            
                            <input type="hidden" value="{{ $coupon_id ?? '' }}" class="form-control" name="coupon_no" readonly/>
                        </div>

                        <div class="col-md-6 pb-2">
                            <label for="formFileMultiple" class="form-label">Coupon:</label>
                            <input class="form-control" type="file" name="img_name" value="{{ $coupon->img_name ?? '' }}" id="formFileMultiple" multiple>
                        </div>
                        
                    </div>

                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-warning fw-bold">Next <i class="bi bi-chevron-double-right"></i></button>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</div>
@endsection