@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <h1 class="border-bottom">Update Registration Form</h1>
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
    
                            <input type="hidden" value="{{ $vendor->id }}" class="form-control" name="user_id" readonly/>
    
                            <div class="col-md-12 pb-2">
                                <label>Name of Company:</label>
                                <input type="text" value="" class="form-control" placeholder="Company Sdn Bhd"  name="company_name">
                            </div>
    
                            <div class="col-md-6 pb-2">
                                <label>Contact Person:</label>
                                <input type="text" value="{{ $vendor->name ?? '' }}" class="form-control" placeholder="Mohammad"  name="first_name">
                            </div>
                            <div class="col-md-6 pb-2">
                                <label>Designation:</label>
                                <input type="text" value="{{ $vendor->last_name ?? '' }}" class="form-control" placeholder="Ali"  name="last_name">
                            </div>

                            <div class="col-md-12 pb-2">
                                <label>IC/Passport No.:</label>
                                <input type="text"  value="{{ $vendor->ic_no ?? '' }}" class="form-control" name="ic_no" readonly/>
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
                                <input type="text"  value="" class="form-control" name="email" placeholder="example@gmail.com"/>
                            </div>

                            <div class="col-md-12 pb-2">
                                <label>Details of Displayed Product:</label>
                                <textarea type="text" value="{{ $vendor->last_name ?? '' }}" class="form-control" placeholder="Ali"  name="address"></textarea>
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