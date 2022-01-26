@extends('layouts.app')

@section('title')
    Register
@endsection

<style>

    fieldset {
        display: none;
    }
    .wrap { 
        max-width: 980px; 
        margin: 10px auto 0; 
    }
    #steps { 
        margin: 80px 0 0 0 
    }
    .commands { 
        overflow: hidden; 
        margin-top: 30px; 
    }
    .prev {
        float:left
    }
    .next, .submit {
        float:right
    }
    .error { 
        color: #b33; 
    }
    #progress { 
        position: relative; 
        height: 5px; 
        background-color: #eee; 
        margin-bottom: 20px; 
    }
    #progress-complete { 
        border: 0; 
        position: absolute; 
        height: 5px; 
        min-width: 10px; 
        background-color: #337ab7; 
        transition: width .2s ease-in-out; 
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>

        <div class="card px-4 py-4">
            <div class="row wrap">
                <div class="col-lg-12">

                    <div id='progress'><div id='progress-complete'></div></div>
                
                    <form id="SignupForm" action="">
                        <fieldset>
                            <legend>Account information</legend>
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input id="Name" type="text" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input id="Email" type="email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input id="Password" type="password" class="form-control" />
                            </div>
                        </fieldset>
                
                        <fieldset>
                            <legend>Company information</legend>
                            <div class="form-group">
                                <label for="CompanyName">Company Name</label>
                                <input id="CompanyName" type="text" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="Website">Website</label>
                                <input id="Website" type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="CompanyEmail">CompanyEmail</label>
                                <input id="CompanyEmail" type="text" class="form-control" />
                            </div>
                        </fieldset>
                
                        <fieldset class="form-horizontal" role="form">
                            <legend>Billing information</legend>
                            <div class="form-group">
                                <label for="NameOnCard" class="col-sm-2 control-label">Name on Card</label>
                                <div class="col-sm-10">
                                    <input id="NameOnCard" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CardNumber" class="col-sm-2 control-label">Card Number</label>
                                <div class="col-sm-10">
                                    <input id="CardNumber" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CreditcardMonth" class="col-sm-2 control-label">Expiration</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <select id="CreditcardMonth" class="form-control col-sm-2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-3">
                                            <select id="CreditcardYear" class="form-control">
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select>        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address1" class="col-sm-2 control-label">Address 1</label>
                                <div class="col-sm-10">
                                    <input id="Address1" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address2" class="col-sm-2 control-label">Address 2</label>
                                <div class="col-sm-10">
                                    <input id="Address2" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Zip" class="col-sm-2 control-label">ZIP</label>
                                <div class="col-sm-4">
                                    <input id="Zip" type="text" class="form-control" />
                                </div>
                                <label for="Country" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-4">
                                    <select id="Country" class="form-control">
                                        <option value="CA">Canada</option>
                                        <option value="US">United States of America</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <p>
                            <button id="SaveAccount" class="btn btn-primary submit">Submit form</button>
                        </p>
                    </form>
                
                </div>
            </div>
            
        </div>
        {{-- <form action="{{ url('new-registration/store') }}" method="POST" enctype="multipart/form-data">
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

                    <input type="hidden" value="Vendor" class="form-control" name="role" readonly/>

                    <div class="col-md-12 pb-2">
                        <label>Name of Company:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $details->company_name ?? '' }}" class="form-control form-control-sm" placeholder="Company Sdn Bhd"  name="company_name">
                    </div>

                    <div class="col-md-6 pb-2">
                        <label>Contact Person:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $vendor->name ?? '' }}" class="form-control form-control-sm" placeholder="Mohammad"  name="name">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label>Designation:<span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="designation" value="{{ $details->designation ?? '' }}">                                 
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
                        <label>IC/Passport No.:<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $vendor_ic ?? '' }}" class="form-control form-control-sm" name="ic_no" readonly/>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label>Nationality:<span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="nationality" value="{{ $details->nationality ?? '' }}">                                 
                            <option disabled selected>-- Please Select --</option>
                            <option value="local">Citizens</option>
                            <option value="international">Non-citizens</option>
                        </select>
                    </div>

                    <div class="col-md-12 pb-2">
                        <label>Company Address:<span class="text-danger">*</span></label>
                        <textarea type="text" value="{{ $details->company_address ?? '' }}" class="form-control form-control-sm" placeholder="Ali"  name="company_address"></textarea>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label>Email:<span class="text-danger">*</span></label>
                        <input type="email"  value="{{ $vendor->email ?? '' }}" class="form-control form-control-sm" name="email" placeholder="example@gmail.com"/>
                        <input type="hidden"  value="{{ $vendor_ic ?? '' }}" class="form-control form-control-sm" name="password"/>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label>Nature of Business:<span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="business_nature" value="{{ $details->business_nature ?? '' }}">                                 
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
                        <label for="phoneno" class="form-label">Phone No.:<span class="text-danger">*</span></label>
                        <input type="text" value="+60{{ $vendor->phone_no ?? '' }}" class="form-control form-control-sm" name="phone_no" required/>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label for="formFile" class="form-label">Details of Displayed Product:<span class="text-danger">*</span></label>
                        <input class="form-control form-control-sm" type="file" name="product_details" value="{{ $details->product_details ?? '' }}" id="formFile">
                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label for="formFile" class="form-label">SSM Certificate:<span class="text-danger">*</span></label>
                        <input class="form-control form-control-sm" type="file" name="ssm_cert" value="{{ $details->ssm_cert ?? '' }}" id="formFile">
                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                    </div>

                    <div class="col-md-6 pb-2">
                        <label for="formFile" class="form-label">Vaccine Certificate:<span class="text-danger">*</span></label>
                        <input class="form-control form-control-sm" type="file" name="vaccine_cert" value="{{ $details->vaccine_cert ?? '' }}" id="formFile">
                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                    </div>
                    
                </div>

                <div class="fw-bold px-2 py-2" style="background-color: orange">Coupon Details (Optional)</div>
                
                <div class="row p-3">                  
                    <div class="col-md-6 pb-2">
                        <label for="formFile" class="form-label">Coupon Category:</label>
                        <select class="form-select form-select-sm" aria-label="Default select example" name="category" value="{{ $coupon->category ?? '' }}">                                 
                            <option disabled selected>-- Please Select --</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Business Support & Supplies">Business Support & Supplies</option>
                            <option value="Computers & Electronics">Computers & Electronics</option>
                            <option value="Construction & Contractors">Construction & Contractors</option>
                            <option value="Education">Education</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Food & Dining">Food & Dining</option>
                            <option value="Health & Medicine">Health & Medicine</option>
                            <option value="Home & Garden">Home & Garden</option>
                            <option value="Legal & Financial">Legal & Financial</option>
                            <option value="Manufacturing, Wholesale & Distribution">Manufacturing, Wholesale & Distribution</option>
                            <option value="Merchants (Retail)">Merchants (Retail)</option>
                            <option value="Miscellaneous">Miscellaneous</option>
                            <option value="Personal Care & Services">Personal Care & Services</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Travel & Transportation">Travel & Transportation</option>
                        </select>                         
                    </div>

                    <div class="col-md-6 pb-2">
                        
                        <div id="inputFormRow">
                            <label for="formFileMultiple" class="form-label">Coupon:</label>
                            <input class="form-control form-control-sm" type="file" name="img_name[]" id="formFile" multiple>
                            <em style="font-size: 10pt;">File format: png, jpeg</em>
                        </div>

                        <div id="newRow"></div>
                        <button id="addRow" type='button' class='btn btn-sm'><i class="bi bi-plus-lg pr-2"></i>Add Row</button>
                    
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-warning fw-bold">Next <i class="bi bi-chevron-double-right"></i></button>
                    </div>
                </div>
                
            </div>
        </form> --}}
    </div>
</div>

{{-- Multi-level form script --}}
<script>
    $( function() {
        var $signupForm = $( '#SignupForm' );

        $signupForm.validate({errorElement: 'em'});

        $signupForm.formToWizard({
            submitButton: 'SaveAccount',
            nextBtnClass: 'btn btn-primary next',
            prevBtnClass: 'btn btn-default prev',
            buttonTag:    'button',
            validateBeforeNext: function(form, step) {
                var stepIsValid = true;
                var validator = form.validate();
                $(':input', step).each( function(index) {
                    var xy = validator.element(this);
                    stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                });
                return stepIsValid;
            },
            progress: function (i, count) {
                $('#progress-complete').width(''+(i/count*100)+'%');
            }
        });
    });
</script>
{{-- <!-- Enable function to add row ------------------------------------------>
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="file" name="feature[]" class="form-control form-control-sm" autocomplete="off" aria-describedby="button-addon2" id="formFile" required>';
        html += '<button id="removeRow" type="button" class="btn btn-danger btn-sm" id="button-addon2"><i class="bi bi-x-lg"></i></button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script> --}}
@endsection