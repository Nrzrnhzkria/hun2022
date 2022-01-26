@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
    * {
      box-sizing: border-box;
    }
            
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }
    
    /* Hide all steps by default: */
    .tab {
      display: none;
    }
        
    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }
    
    .step.active {
      opacity: 1;
    }
    
    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>

        <div class="card px-4 py-4">
            <form class="form-horizontal" action="" method="POST" id="myform">

				<fieldset id="account_information" class="">
					<legend>Account information</legend>
					<div class="form-group">
						<label for="username" class="col-lg-4 control-label">Username</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="username" name="username" placeholder="username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-lg-4 control-label">Password</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="conf_password" class="col-lg-4 control-label">Confirm password</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="conf_password" name="conf_password" placeholder="Password">
						</div>
					</div>
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>


				<fieldset id="company_information" class="">
					<legend>Account information</legend>
			
              <div class="col-md-12" >
                <div id="field">
                <div id="field0">
    			
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3">Education level</label>  
  <div class="col-md-8">
   <select class="form-control"  name="edu_level[]" >
    	<option value="1">High school or equivalent</option>
		<option value="2">Diploma</option>
		<option value="3">Higher National Diploma</option>
		<option value="4">Bachelo's</option>
		<option value="5">Master's</option>
		<option value="6">Doctorate</option>
</select>
  </div>
</div>

<br><br>
<br>
<!-- Text input-->
<div class="form-group">
<label class="col-md-3">Field of Study</label>
              <div class="col-md-8">
            <input type="text"  name="field_stu[]" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required> 
        </div>      		
</div>

<br><br>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-3">University</label>
 <div class="col-md-8">
 <input type="text"  name="university[]" id="university" class="form-control" placeholder="" required>
</div>
</div>
<br><br>

<!-- Text input-->
<div class="form-group">

 <label class="col-md-3">Time period</label>
 <div class="col-md-8">
         <div class="col-md-4">
			<select class="form-control"  name="edu_from[]" >
				
<option value="1995">	1995	</option>
<option value="1996">	1996	</option>
<option value="1997">	1997	</option>
<option value="1998">	1998	</option>
<option value="1999">	1999	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>

					
				</select>
		</div>
		 <div class="col-md-1">
		<label>To</label>
		</div>
		
		 <div class="col-md-4">
			<select class="form-control"  name="edu_to[]" >
			
						<option value="1980">	1980	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
<option value="2017">	2017	</option>
<option value="2018">	2018	</option>
<option value="2019">	2019	</option>
<option value="2020">	2020	</option>

</select>
		
		</div>
	
</div>
</div>
<br><br>
<hr>


</div><!--end field0-->
</div><!--end field-->
  <!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-offset-8">
    <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
  </div>
</div>
<br><br>      
            </div>
            
            
                    
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>

				<fieldset id="personal_information" class="">
					<legend>Personal information</legend>
				
                      <div class="col-md-12">
           <div id="fielda">
                <div id="fielda0">
<!-- Text input-->

<div class="form-group">
  <label class="col-md-3">Job Title</label>  
  <div class="col-md-8">
  <input type="text"  name="job_tit[]" id="job_tit" class="form-control" placeholder="e.g. Java/php Developer" required> 
</div>
</div>

<br><br>
<br>
<!-- Text input-->
<div class="form-group">
<label class="col-md-3">Company</label>
              <div class="col-md-8">
            <input type="text"  name="company[]" id="company" class="form-control" placeholder="" required> 
        </div>              
</div>

<br><br>
<!-- Text input-->
<div class="form-group">
 <label class="col-md-3">City</label>
 <div class="col-md-8">
 <input type="text"  name="city[]" id="city" class="form-control" placeholder="" required>
</div>
</div>
<br><br>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-3">Time period</label>
 <div class="col-md-8">
         <div class="col-md-4">
			<select class="form-control"  name="work_from[]" >	
<option value="1995">	1995	</option>
<option value="1996">	1996	</option>
<option value="1997">	1997	</option>
<option value="1998">	1998	</option>
<option value="1999">	1999	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
		</select>
		</div>
		 <div class="col-md-1">
		<label>To</label>
		</div>
		
		 <div class="col-md-4">
		<select class="form-control"  name="work_to[]" >
			<option value="1980">	1980	</option>
<option value="2000">	2000	</option>
<option value="2001">	2001	</option>
<option value="2002">	2002	</option>
<option value="2003">	2003	</option>
<option value="2004">	2004	</option>
<option value="2005">	2005	</option>
<option value="2006">	2006	</option>
<option value="2007">	2007	</option>
<option value="2008">	2008	</option>
<option value="2009">	2009	</option>
<option value="2010">	2010	</option>
<option value="2011">	2011	</option>
<option value="2012">	2012	</option>
<option value="2013">	2013	</option>
<option value="2014">	2014	</option>
<option value="2015">	2015	</option>
<option value="2016">	2016	</option>
<option value="2017">	2017	</option>
<option value="2018">	2018	</option>
<option value="2019">	2019	</option>
<option value="2020">	2020	</option>
		</select>
	</div>
</div>
</div>

<br>

<div class="form-group">
<input type="checkbox" name="cur_work[]" value="cur_work"> I currently work here<br>
</div>

<hr>
</div><!--end field0-->
</div><!--end field-->


<!-- Button -->
<div class="form-group">
<div class="col-md-4 col-md-offset-8">
    <button id="add-more1" name="add-more" class="btn btn-primary">Add More</button>
</div>
</div>

<br><br>
  </div>
					<p><a class="btn btn-primary" id="previous" >Previous</a></p>
					<p><input class="btn btn-success" type="submit" value="submit"></p>
				</fieldset>

			</form>
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

    // Custom method to validate username
    $.validator.addMethod("usernameRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
    }, "Username must contain only letters, numbers");

    $(".next").click(function(){
        var form = $("#myform");
        form.validate({
            errorElement: 'span',
            errorClass: 'help-block',
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass("has-error");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            rules: {
                username: {
                    required: true,
                    usernameRegex: true,
                    minlength: 6,
                },
                password : {
                    required: true,
                },
                conf_password : {
                    required: true,
                    equalTo: '#password',
                },
                company:{
                    required: true,
                },
                url:{
                    required: true,
                },
                name: {
                    required: true,
                    minlength: 3,
                },
                email: {
                    required: true,
                    minlength: 3,
                },
                
            },
            messages: {
                username: {
                    required: "Username required",
                },
                password : {
                    required: "Password required",
                },
                conf_password : {
                    required: "Password required",
                    equalTo: "Password don't match",
                },
                name: {
                    required: "Name required",
                },
                email: {
                    required: "Email required",
                },
            }
        });
        if (form.valid() === true){
            if ($('#account_information').is(":visible")){
                current_fs = $('#account_information');
                next_fs = $('#company_information');
            }else if($('#company_information').is(":visible")){
                current_fs = $('#company_information');
                next_fs = $('#personal_information');
            }
            
            next_fs.show(); 
            current_fs.hide();
        }
    });

    $('#previous').click(function(){
        if($('#company_information').is(":visible")){
            current_fs = $('#company_information');
            next_fs = $('#account_information');
        }else if ($('#personal_information').is(":visible")){
            current_fs = $('#personal_information');
            next_fs = $('#company_information');
        }
        next_fs.show(); 
        current_fs.hide();
    });

    //@naresh action dynamic childs
    var next_exp = 0;
    $("#add-more1").click(function(e){
    e.preventDefault();
    var addto = "#fielda" + next_exp;
    var addRemove = "#fielda" + (next_exp);
    next_exp = next_exp + 1;
    var newInp = ' <div id="fielda'+ next_exp +'" name="field1'+ next_exp +'"><div class="form-group"><label class="col-md-3">Job Title</label><div class="col-md-7"><input type="text"  name="job_tit[]" id="job_tit" class="form-control" placeholder="e.g. Java/php Developer" required> </div><br><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Company</label><div class="col-md-7"><input type="text"  name="company[]" id="company" class="form-control" placeholder="" required> </div> <div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">City</label> <div class="col-md-7"><input type="text"  name="city[]" id="city" class="form-control" placeholder="" required></div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Time period</label><div class="col-md-8"><div class="col-md-3"><select class="form-control"  name="work_from[]" ><option value="1995">    1995	</option><option value="1996">	1996	</option><option value="1997">	1997	</option><option value="1998">	1998	</option><option value="1999">	1999	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option></select></div><div class="col-md-1"><label>To</label></div><div class="col-md-3"><select class="form-control"  name="work_to[]" ><option value="1980">	1980	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option><option value="2017">	2017	</option><option value="2018">	2018	</option><option value="2019">	2019	</option><option value="2020">	2020	</option></select></div></div></div><br><br><div class="form-group"><input type="checkbox" name="cur_work[]" value="cur_work"> I currently work here<br></div><br><hr></div>';
    var newInput = $(newInp);

    var removeBtn = '<button id="remove' + (next_exp - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field"><br>';
    var removeButton = $(removeBtn);
    $(addto).after(newInput);
    $(addRemove).after(removeButton);
    $("#fielda" + next_exp).attr('data-source',$(addto).attr('data-source'));
    $("#count").val(next_exp);  

    $('.remove-me').click(function(e){
        e.preventDefault();
        var fieldNum = this.id.charAt(this.id.length-1);
        var fieldID = "#fielda" + fieldNum;
        $(this).remove();
        $(fieldID).remove();
    });
    });


    //@naresh action dynamic childs
    var nextedu = 0;
    $("#add-more").click(function(e){
    e.preventDefault();
    var addto = "#field" + nextedu;
    var addRemove = "#field" + (nextedu);
    nextedu = nextedu + 1;
    var newIn = ' <div id="field'+ nextedu +'" name="field'+ nextedu +'"><div class="form-group"><label class="col-md-3">Education level</label><div class="col-md-7"><select class="form-control"  name="edu_level[]" ><option value="1">High school or equivalent</option><option value="2">Diploma</option><option value="3">Higher National Diploma</option><option value="4">Bachelos</option><option value="5">Masters</option><option value="6">Doctorate</option></select></div></div><br><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Field of Study</label><div class="col-md-7"><input type="text"  name="field_stu[]" id="field_stu" class="form-control" placeholder="e.g. Computer Science, Intellectual Property,Psychology." required> </div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">University</label><div class="col-md-7"><input type="text"  name="university[]" id="university" class="form-control" placeholder="" required></div></div><br><br><!-- Text input--><div class="form-group"><label class="col-md-3">Time period</label><div class="col-md-8"><div class="col-md-3"><select class="form-control"  name="edu_from[]" ><option value="1995">    1995    </option><option value="1996">	1996	</option><option value="1997">	1997	</option><option value="1998">	1998	</option><option value="1999">	1999	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option></select></div><div class="col-md-1"><label>To</label></div><div class="col-md-3"><select class="form-control"  name="edu_to[]" ><option value="1980">	1980	</option><option value="2000">	2000	</option><option value="2001">	2001	</option><option value="2002">	2002	</option><option value="2003">	2003	</option><option value="2004">	2004	</option><option value="2005">	2005	</option><option value="2006">	2006	</option><option value="2007">	2007	</option><option value="2008">	2008	</option><option value="2009">	2009	</option><option value="2010">	2010	</option><option value="2011">	2011	</option><option value="2012">	2012	</option><option value="2013">	2013	</option><option value="2014">	2014	</option><option value="2015">	2015	</option><option value="2016">	2016	</option><option value="2017">	2017	</option><option value="2018">	2018	</option><option value="2019">	2019	</option><option value="2020">	2020	</option></select></div></div></div> <br><hr></div>';
    var newInput = $(newIn);

    var removeBtn = '<button id="remove' + (nextedu - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
    var removeButton = $(removeBtn);
    $(addto).after(newInput);
    $(addRemove).after(removeButton);
    $("#field" + nextedu).attr('data-source',$(addto).attr('data-source'));
    $("#count").val(nextedu);  

    $('.remove-me').click(function(e){
        e.preventDefault();
        var fieldNum = this.id.charAt(this.id.length-1);
        var fieldID = "#field" + fieldNum;
        $(this).remove();
        $(fieldID).remove();
    });
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