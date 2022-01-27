@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: orange;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea,
#msform select {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus,
#msform select:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid orange;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: orange;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: orangered
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: orange;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: orange;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: orange
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: orange
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: orange
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-4 py-4">
             
                        {{-- <div class="card px-0 pt-4 pb-0 mt-3 mb-3"> --}}
                            <form id="msform" action="{{ url('new-registration/store') }}" method="POST" enctype="multipart/form-data">
                                <!-- progressbar -->
                                <ul id="progressbar" style="padding-right: 2rem">
                                    <li class="active" id="account"><strong>Personal</strong></li>
                                    <li id="personal"><strong>Coupon</strong></li>
                                    <li id="payment"><strong>Booth</strong></li>
                                    <li id="confirm"><strong>Payment</strong></li>
                                </ul>
                                {{-- <div class="progress" >
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>  --}}
                                <br> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Vendor Information:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 1 - 4</h2>
                                            </div>
                                        </div> 

                                        <label class="fieldlabels">Company Name: *</label> 
                                        <input type="email" name="company_name" placeholder="Company Sdn Bhd" required/> 

                                        <label class="fieldlabels">Contact Person: *</label> 
                                        <input type="text" name="name" placeholder="Muhammad" required/> 
                                        
                                        <label class="fieldlabels">Designation: *</label>  
                                        <select name="designation" required>                                 
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
                                        
                                        <label class="fieldlabels">IC No: *</label>
                                        <input type="text" value="{{ $vendor_ic }}" name="ic_no" readonly/>

                                        <label class="fieldlabels">Company Address: *</label>
                                        <textarea type="text" name="compan_address"></textarea>

                                        <label class="fieldlabels">Email:<span class="text-danger">*</span></label>
                                        <input type="email" name="email" placeholder="example@gmail.com" required/>
                                        <input type="hidden" value="{{ $vendor_ic }}" name="password"/>

                                        <label class="fieldlabels">Nature of Business:<span class="text-danger">*</span></label>
                                        <select name="business_nature">                                 
                                            <option disabled selected>-- Please Select --</option>
                                            <option value="Sole proprietorship">Sole proprietorship</option>
                                            <option value="Partnership">Partnership</option>
                                            <option value="Private limited company">Private limited company</option>
                                            <option value="Public limited company">Public limited company</option>
                                            <option value="Unlimited companies">Unlimited companies</option>
                                            <option value="Foreign company">Foreign company</option>
                                            <option value="Limited liability partnership">Limited liability partnership</option>
                                        </select>

                                        <label class="fieldlabels">Phone No.:<span class="text-danger">*</span></label>
                                        <input type="text" value="+60" name="phone_no" style="margin-bottom:0;" required/>
                                        <br><br>
                                        <label class="fieldlabels">Details of Displayed Product:<span class="text-danger">*</span></label>
                                        <input type="file" name="product_details" id="formFile" style="margin-bottom:0;" required>
                                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                                        <br><br>
                                        <label class="fieldlabels">SSM Certificate:<span class="text-danger">*</span></label>
                                        <input type="file" name="ssm_cert" id="formFile" style="margin-bottom:0;" required>
                                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                                        <br><br>
                                        <label class="fieldlabels">Vaccine Certificate:<span class="text-danger">*</span></label>
                                        <input type="file" name="vaccine_cert" id="formFile" style="margin-bottom:0;" required>
                                        <em style="font-size: 10pt;">File format: docx, csv, txt, xlx, xls, pdf</em>
                                    

                                    </div> 

                                    <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Coupon Details (Optional):</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 2 - 4</h2>
                                            </div>
                                        </div> 
                                         
                                        <label class="fieldlabels">Coupon Category:</label>
                                        <select name="category">                                 
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
                                        
                                        <div id="inputFormRow">
                                            <label class="fieldlabels">Coupon:</label>
                                            <input type="file" name="img_name[]" id="formFile" style="margin-bottom:0;" multiple>
                                            <em style="font-size: 10pt;">File format: png, jpeg</em>
                                        </div>
                
                                        <div id="newRow"></div>
                                        <button id="addRow" type='button' class='btn btn-sm'><i class="bi bi-plus-lg pr-2"></i>Add Row</button>
                                        
                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Next" /> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Booth Details:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 3 - 4</h2>
                                            </div>
                                        </div> 

                                        @foreach ($booth as $booths)
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <thead class="bg-dark text-white">
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">{{ $booths->booth_name }}</th>
                                                      <th scope="col">Lot Placement</th>
                                                      <th scope="col">Price (RM)</th>
                                                      <th scope="col" class="text-center">Check</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($booth_details as $booth_detail)                                                    
                                                    @if ($booths->booth_id == $booth_detail->booth_id)    
                                                    <tr>
                                                        <th scope="row">{{ $count++ }}</th>
                                                        <td>{{ $booth_detail->booth_type }}</td>
                                                        <td>{{ $booth_detail->lot_placement }}</td>
                                                        <td>{{ number_format($booth_detail->price) }}</td>
                                                        <td class="text-center">
                                                            <input type="radio" name="amount" value="{{ $booth_detail->price }}">
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        @endforeach
                                    </div> 

                                    {{-- <button type="submit" class="btn btn-warning fw-bold">Next <i class="bi bi-chevron-double-right"></i></button> --}}
                                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                                    {{-- <input type="button" name="submit" class="submit action-button" value="Submit" /> --}}
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                                </fieldset>
                                {{-- <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Finish:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Step 4 - 4</h2>
                                            </div>
                                        </div> 
                                        <br><br>
                                        <h2 class="purple-text text-center">
                                            <strong>SUCCESS !</strong>
                                        </h2> 
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> 
                                                <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> 
                                            </div>
                                        </div> 
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> --}}
                            </form>
                        {{-- </div> --}}
                    </div>
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
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
            .css("width",percent+"%")
        }

        // $(".submit").on("click",function() {
        //     return false;
        // });

        $(".submit").click(function(){
            return false;
        })
        // $(".submit").click(function(){
        //     return false;
        // })

    });
</script>
<!-- Enable function to add row ------------------------------------------>
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
</script>
@endsection