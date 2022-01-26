@extends('layouts.app')

@section('title')
    Register
@endsection

<style>
    * {
      box-sizing: border-box;
    }
    
    #regForm {
      margin: 100px auto;
      padding: 40px;
      width: 70%;
      min-width: 300px;
    }
    
    h1 {
      text-align: center;  
    }
    
    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      border: 1px solid #aaaaaa;
    }
    
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }
    
    /* Hide all steps by default: */
    .tab {
      display: none;
    }
    
    button {
      background-color: #04AA6D;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    #prevBtn {
      background-color: #bbbbbb;
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

        <form id="regForm" action="{{ url('new-registration/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Register:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">Name:
              <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
            </div>
            <div class="tab">Contact Info:
              <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
              <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
            </div>
            <div class="tab">Birthday:
              <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
              <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
              <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
            </div>
            <div class="tab">Login Info:
              <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
              <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
            </div>
            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
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
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
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