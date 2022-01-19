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
            {{-- <form action="{{ url('save') }}/{{ $product->product_id }}/{{ $package->package_id }}/{{ $student->stud_id }}" method="POST">
                @csrf --}}
    
                <div class="card px-4 py-4">
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
    
                            {{-- <input type="hidden" value="{{ $vendor->id ?? '' }}" class="form-control" name="user_id" readonly/> --}}
    
                            <div class="col-md-12 pb-2">
                                <label>Name of Company:</label>
                                <input type="text" value="" class="form-control" placeholder="Company Sdn Bhd"  name="company_name">
                            </div>
    
                            <div class="col-md-6 pb-2">
                                <label>Contact Person:</label>
                                <input type="text" value="{{ $vendor->name ?? '' }}" class="form-control" placeholder="Mohammad"  name="name">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label>Designation:</label>
                                {{-- <input type="text" value="{{ $vendor_detail->designation ?? '' }}" class="form-control" placeholder="Ali"  name="designation"> --}}
                                <select class="form-select" aria-label="Default select example" name="designation">                                 
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

                            <div class="col-md-12 pb-2">
                                <label>IC/Passport No.:</label>
                                <input type="text"  value="{{ $vendor_ic ?? '' }}" class="form-control" name="ic_no" readonly/>
                            </div>

                            <div class="col-md-12 pb-2">
                                <label>Company Address:</label>
                                <textarea type="text" value="{{ $vendor->last_name ?? '' }}" class="form-control" placeholder="Ali"  name="address"></textarea>
                            </div>
    
                            <div class="col-md-6 pb-2">
                                <label>Email:</label>
                                <input type="email"  value="{{ $vendor->email ?? '' }}" class="form-control" name="email" placeholder="example@gmail.com"/>
                            </div>

                            <div class="col-md-6 pb-2">
                                <label>Nature of Business:</label>
                                <select class="form-select" aria-label="Default select example" name="business_nature">                                 
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

                            <div class="col-md-6 pb-2">
                                <label for="formFileMultiple" class="form-label">Details of Displayed Product:</label>
                                <input class="form-control" type="file" name="product_details" id="formFileMultiple" multiple>
                            </div>

                            <div class="col-md-6 pb-2">
                                <label for="formFileMultiple" class="form-label">SSM Certificate:</label>
                                <input class="form-control" type="file" name="ssm_cert" id="formFileMultiple" multiple>
                            </div>

                            <div class="col-md-6 pb-2">
                                <label for="formFileMultiple" class="form-label">Vaccine Certificate:</label>
                                <input class="form-control" type="file" name="vaccine_cert" id="formFileMultiple" multiple>
                            </div>

                            <div class="col-md-6 pb-2">
                                <label for="formFileMultiple" class="form-label">Coupon:</label>
                                <input class="form-control" type="file" name="img_name" id="formFileMultiple" multiple>
                            </div>
                            
                        </div>
                            
                    <div class="fw-bold px-2 py-2" style="background-color: orange">Booth Requirement</div>
                    
                    <div class="row p-3">
                        <p>We would like to confirm our booth space requirement as follows:</p>

                        <div class="col-md-5 pb-2">
                            <label class="fw-bold">International Hall Booth</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    6M x 12M Island RM100,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    6M x 6M Island RM50,000
                                </label>
                            </div>
                            <div class="form-check">                                
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    6M x 3M Terrace International Entrepreneur RM6,000
                                </label>
                            </div>
                            <div class="form-check">                                                                
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                    3M x 3M Terrace Local Entrepreneur RM3,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 pb-2">
                            <label class="fw-bold">Local Entrepreneur Foyer Booth</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                    6M x 6M RM10,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                    3M x 3M RM6,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 pb-2">
                            <label class="fw-bold">Local Entrepreneur Foyer Booth</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                                <label class="form-check-label" for="defaultCheck7">
                                    Food Truck Space RM1,000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                                <label class="form-check-label" for="defaultCheck8">
                                    Car Boot Park Spot RM200
                                </label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-warning fw-bold">Proceed <i class="bi bi-chevron-double-right"></i></button>
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
    </div>
</div>
@endsection