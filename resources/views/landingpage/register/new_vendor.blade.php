@extends('layouts.app')

@section('title')
    Register
@endsection

<style type="text/css">
    #personal_information,
    #company_information{
        display:none;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>

        <div class="card px-4 py-4">
            <form class="form-horizontal form">
                <div class="col-md-8 col-md-offset-2">    
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                
                    <div class="box row-fluid"> 
                        <br>
                        <div class="step">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="email">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="country" id="country">
                                        <option value="">Select</option>
                                        <option value="India">India</option>
                                        <option value="Australia">Australia</option>
                                        <option value="USA">USA</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Malaysia">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" value="" class="form-control" id="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" value="" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="rpassword" class="col-sm-2 control-label">Retype Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="rpassword" class="form-control" id="rpassword" placeholder="Retype password">
                                </div>
                            </div>      
                        </div>
                        <div class="step display">
                            <h4>Confirm Details</h4>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name :</label>
                                <label class="col-md-10 control-label lbl" data-id="name"></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email :</label>
                                <label class="col-md-10 control-label lbl" data-id="email"></label>
                            </div>   
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Country :</label>
                                <label class="col-md-10 control-label lbl" data-id="country"></label>
                            </div>   
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Username :</label>
                                <label class="col-md-10 control-label lbl" data-id="username"></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password :</label>
                                <label class="col-md-10 control-label lbl" data-id="password"></label>
                            </div>   
                        </div>
                
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pull-right">
                                    <button type="button" class="action btn-sky text-capitalize back btn">Back</button>
                                    <button type="button" class="action btn-sky text-capitalize next btn">Next</button>
                                    <button type="button" class="action btn-hot text-capitalize submit btn">Submit</button>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <a style="color:#fff; float:right;" href="http://www.sanwebcorner.com/"><h3>www.sanwebcorner.com</h3></a>
                </div>
            </form>

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
<script type="text/javascript">
    $(document).ready(function(){
        var current = 1;
        
        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back"); 
        btnsubmit   = $(".submit");
        
        // Init buttons and UI
        widget.not(':eq(0)').hide();
        hideButtons(current);
        setProgress(current);
        
        // Next button click action
        btnnext.click(function(){
            if(current < widget.length){
                // Check validation
                if($(".form").valid()){
                widget.show();
                widget.not(':eq('+(current++)+')').hide();
                setProgress(current);
                }
            }
            hideButtons(current);
        });
    
        // Submit button click
        btnsubmit.click(function(){
            alert("Submit button clicked");
        });
        
        
        // Back button click action
        btnback.click(function(){
            if(current > 1){
                current = current - 2;
                if(current < widget.length){
                    widget.show();
                    widget.not(':eq('+(current++)+')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
        });
        
        $('.form').validate({ // initialize plugin
            ignore:":not(:visible)",   
            rules: {
            name     : "required",
            email    : {required : true, email:true},
            country  : "required",
            username : "required",
            password : "required",
            rpassword: { required : true, equalTo: "#password"},
            },
        });
    
    });
    
    // Change progress bar action
    setProgress = function(currstep){
        var percent = parseFloat(100 / widget.length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar").css("width",percent+"%").html(percent+"%");  
    }
    
    // Hide buttons according to the current step
    hideButtons = function(current){
        var limit = parseInt(widget.length); 
        
        $(".action").hide();
        
        if(current < limit) btnnext.show();
        if(current > 1) btnback.show();
        if (current == limit) { 
            // Show entered values
            $(".display label.lbl").each(function(){
            $(this).html($("#"+$(this).data("id")).val()); 
            });
            btnnext.hide(); 
            btnsubmit.show();
        }
    }
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