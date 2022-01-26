@extends('layouts.app')

@section('title')
    Register
@endsection

<style>

.msf-view {
  display: none;
}

.msf-navigation {
  text-align: center;
}

.msf-nav-button {
  display: none;
}

.msf-header {
  padding-top: 10px;
  margin-bottom: 40px;
  color: #777;
}

.msf-header .msf-step {
  font-size: 20px;
  /*display : inline-block;
       vertical-align : middle;*/
}

.msf-header .msf-step i.fa {
  height: 60px;
  width: 60px;
  line-height: 55px;
  text-align: center;
  border: 3px solid #777;
  border-radius: 100%;
  font-size: 30px;
  margin-left: 10px;
  margin-right: 10px;
}

.msf-header .msf-step.msf-step-active {
  color: #ef4035;
  /*color:#3c763d;*/
}

.msf-header .msf-step.msf-step-active i.fa {
  border-color: #ef4035;
  /*border-color : #3c763d;*/
}

.msf-header .msf-step.msf-step-complete {
  /*color: #ef4035;*/
  color: #3c763d;
}

.msf-header .msf-step.msf-step-complete i.fa {
  /*border-color : #ef4035;*/
  border-color: #3c763d;
}

.input-validation-error {
  border-color: red;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}

.input-validation-error:focus {
  border-color: red;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}

</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>New Registration Form</h1>
        </div>

        <div class="card px-4 py-4">
                <div id="wrapper">
              
                  <div id="container body-content">
                  
                  
                          <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                  <span class="sr-only">0% Complete</span>
                              </div>
                          </div>
                  
                    <form class="form-horizontal msf">
                      <div class="msf-header">
                        <div class="row text-center">
                          <div class="msf-step col-md-4"><i class="fa fa-clipboard"></i> <span>Enter Request Details</span></div>
                          <div class="msf-step col-md-4"><i class="fa fa-credit-card"></i><span>Further Details</span></div>
                          <div class="msf-step col-md-4"><i class="fa fa-check"></i> <span>Review and Submit</span></div>
                        </div>
                      </div>
              
                      <div class="msf-content">
                        <div class="msf-view">
              
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <div class="form-group">
                                <input id="name" name="name" type="text" class="form-control" placeholder="Name" data-bind="value: Name" data-val="true" data-val-required="name is required">
                                <!--data-val="true" data-val-required="name is required"-->
                              </div>
                              <div class="form-group">
                                <input id="email" name="email" type="text" class="form-control" placeholder="Email" data-bind="value: Email" data-val="true" data-val-required="email is required">
                                <!-- data-val="true" data-val-required="email is required -->
                              </div>
                              <div class="form-group">
                                <textarea id="details" name="details" rows="10" class="form-control" placeholder="Enter Details" data-bind="value: Details"></textarea>
                              </div>
              
                            </div>
                          </div>
              
              
                        </div>
                        <div class="msf-view">
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <div class="form-group">
                                <select id="countries" name="countries" class="form-control" data-bind="options: availableCountries, selectedOptions: chosenCountries" data-val="true" data-val-required="select a country" size="5" multiple="true"></select>
                              </div>
              
                              <div class="form-group">
              
                                <select id="type" name="type" class="form-control" data-bind="options: availableTypes, selectedOptions: chosenType, optionsCaption: 'Choose Request Type'" data-val="true" data-val-required="Request type is required.">
                                </select>
              
                                <!-- data-val="true" data-val-required="email is required -->
                              </div>
                              <!--   <div class="form-group">
                                <textarea id="additionaldetails" name="additionaldetails" rows="10" class="form-control" placeholder="Enter Additional Details" data-bind="value: AdditionalDetails"></textarea>
                              </div>
                              -->
              
                            </div>
                          </div>
                        </div>
                        <div class="msf-view">
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <label>Name</label> : <span data-bind="text: Name"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <label>Email</label> : <span data-bind="text: Email"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <label>Type</label> : <span data-bind="text: chosenType"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <label>Countries</label> : <span data-bind="text: chosenCountries"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                              <label>Details</label> : <span data-bind="text: Details"></span>
                            </div>
                          </div>
                          
                           <div class="row">
                                          <div class="col-md-6 col-md-offset-3">
                                              <div class="form-group">
                                                   <input id="additional" name="additional" type="text" class="form-control" placeholder="Additional Details"  data-val="true" data-val-required="name is required">    
                                              </div>
                                          </div>
                                      </div>
                        </div>
                      </div>
              
                      <div class="msf-navigation">
                        <div class="row">
                          <div class="col-md-3">
                            <button type="button" data-type="back" class="btn msf-nav-button"><i class="fa fa-chevron-left"></i> Back </button>
                          </div>
              
                          <div class="col-md-3 col-md-offset-6">
                            <button type="button" data-type="next" class="btn msf-nav-button">Next <i class="fa fa-chevron-right"></i></button>
              
                            <button type="submit" data-type="submit" class="btn msf-nav-button">Submit</button>
                          </div>
              
                        </div>
                      </div>
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
    (function(factory) {
  'use strict';
  if (typeof define === 'function' && define.amd) {
    // AMD is used - Register as an anonymous module.
    define(['jquery', 'jquery-validation'], factory);
  } else if (typeof exports === 'object') {
    factory(require('jquery'), require('jquery-validation'));
  } else {
    // Neither AMD nor CommonJS used. Use global variables.
    if (typeof jQuery === 'undefined') {
      throw 'multi-step-form-js requires jQuery to be loaded first';
    }
    if (typeof jQuery.validator === 'undefined') {
      throw 'multi-step-form-js requires requires jquery.validation.js to be loaded first';
    }
    factory(jQuery);
  }
}(function($) {
  'use strict';

  const msfCssClasses = {
    header: "msf-header",
    step: "msf-step",
    stepComplete: "msf-step-complete",
    stepActive: "msf-step-active",
    content: "msf-content",
    view: "msf-view",
    navigation: "msf-navigation",
    navButton: "msf-nav-button"
  };

  const msfNavTypes = {
    back: "back",
    next: "next",
    submit: "submit"

  };

  const msfEventTypes = {
    viewChanged: "msf:viewChanged"
  };

  $.fn.multiStepForm = function(options) {
    var form = this;

    var defaults = {
      activeIndex: 0,
      validate: {}
    };

    var settings = $.extend({}, defaults, options);

    //find the msf-content object
    form.content = this.find("." + msfCssClasses.content).first();

    if (form.content.length === 0) {
      throw new Error('Multi-Step Form requires a child element of class \'' + msfCssClasses.content + '\'');
    }

    //find the msf-views within the content object
    form.views = $(this.content).find("." + msfCssClasses.view);

    if (form.views.length === 0) {
      throw new Error('Multi-Step Form\'s element of class \'' + msfCssClasses.content + '\' requires n elements of class \'' + msfCssClasses.view + '\'');
    }

    form.header = this.find("." + msfCssClasses.header).first();
    form.navigation = this.find("." + msfCssClasses.navigation).first();
    form.steps = [];

    form.getActiveView = function() {
      return form.views.filter(function() {
        return this.style && this.style.display !== '' && this.style.display !== 'none'
      });
    };

    form.setActiveView = function(index) {
      var view = form.getActiveView();
      var previousIndex = form.views.index(view);

      view = form.views.eq(index);
      view.show();
      view.find(':input').first().focus();

      //trigger the 'view has changed' event
      form.trigger(msfEventTypes.viewChanged, {
        currentIndex: index,
        previousIndex: previousIndex,
        totalSteps: form.steps.length
      });
    }

    form.init = function() {

      this.initHeader = function() {
        if (form.header.length === 0) {
          form.header = $("<div/>", {
            "class": msfCssClasses.header,
            "display": "none"
          });

          $(form).prepend(form.header);
        }

        form.steps = $(form.header).find("." + msfCssClasses.step);

        this.initStep = function(index, view) {

          if (form.steps.length < index + 1) {
            $(form.header).append($("<div/>", {
              "class": msfCssClasses.step,
              "display": "none"
            }));
          }
        }

        $.each(form.views, this.initStep);

        form.steps = $(form.header).find("." + msfCssClasses.step);
      };


      this.initNavigation = function() {

        if (form.navigation.length === 0) {
          form.navigation = $("<div/>", {
            "class": msfCssClasses.navigation
          });

          $(form.content).after(form.navigation);
        }

        this.initNavButton = function(type) {
          var element = this.navigation.find("button[data-type='" + type + "'], input[type='button']"),
            type;
          if (element.length === 0) {
            element = $("<button/>", {
              "class": msfCssClasses.navButton,
              "data-type": type,
              "html": type
            });
            element.appendTo(form.navigation);
          }

          return element;
        };

        form.backNavButton = this.initNavButton(msfNavTypes.back);
        form.nextNavButton = this.initNavButton(msfNavTypes.next);
        form.submitNavButton = this.initNavButton(msfNavTypes.submit);
      };


      this.initHeader();
      this.initNavigation();

      this.views.each(function(index, element) {

        var view = element,
          $view = $(element);

        $view.on('show', function(e) {
          if (this !== e.target)
            return;

          //hide whichever view is currently showing
          form.getActiveView().hide();

          //choose which navigation buttons should be displayed based on index of view 
          if (index > 0) {
            form.backNavButton.show();
          }

          if (index == form.views.length - 1) {
            form.nextNavButton.hide();
            form.submitNavButton.show();
          } else {
            form.submitNavButton.hide();
            form.nextNavButton.show();

            //if this is not the last view do not allow the enter key to submit the form as it is not completed yet
            $(this).find(':input').keypress(function(e) {
              if (e.which == 13) // Enter key = keycode 13
              {
                form.nextNavButton.click();
                return false;
              }
            });
          }

          //determine if each step is completed or active based in index
          $.each(form.steps, function(i, element) {
            if (i < index) {
              $(element).removeClass(msfCssClasses.stepActive);
              $(element).addClass(msfCssClasses.stepComplete);
            } else if (i === index) {
              $(element).removeClass(msfCssClasses.stepComplete);
              $(element).addClass(msfCssClasses.stepActive);
            } else {
              $(element).removeClass(msfCssClasses.stepComplete);
              $(element).removeClass(msfCssClasses.stepActive);
            }
          });
        });

        $view.on('hide', function(e) {
          if (this !== e.target)
            return;

          //hide all navigation buttons, display choices will be set on show event
          form.backNavButton.hide();
          form.nextNavButton.hide();
          form.submitNavButton.hide();
        });
      });

      form.setActiveView(settings.activeIndex);
    };

    form.init();

    form.nextNavButton.click(function() {
      var view = form.getActiveView();

      //validate the input in the current view
      if (form.validate(settings.validate).subset(view)) {
        var i = form.views.index(view);

        form.setActiveView(i + 1);
      }
    });

    form.backNavButton.click(function() {
      var view = form.getActiveView();
      var i = form.views.index(view);

      form.setActiveView(i - 1);
    });

  };

  $.validator.prototype.subset = function(container) {
    var ok = true;
    var self = this;
    $(container).find(':input').each(function() {
      if (!self.element($(this))) ok = false;
    });
    return ok;
  };

  $.each(['show', 'hide'], function(i, ev) {
    var el = $.fn[ev];
    $.fn[ev] = function() {
      this.trigger(ev);
      return el.apply(this, arguments);
    };
  });
}));





function ViewModel() {
  var self = this;

  self.Name = ko.observable('');
  self.Email = ko.observable('');
  self.Details = ko.observable('');

  self.AdditionalDetails = ko.observable('');
  self.availableTypes = ko.observableArray(['New', 'Open', 'Closed']);
  self.chosenType = ko.observable('');

  self.availableCountries = ko.observableArray(['France', 'Germany', 'Spain', 'United States', 'Mexico']),
    self.chosenCountries = ko.observableArray([]) // Initially, only Germany is selected


}

var viewModel = new ViewModel();

ko.applyBindings(viewModel);


$(document).on("msf:viewChanged", function(event, data) {

  var progress = Math.round((data.currentIndex / data.totalSteps) * 100);

  $(".progress-bar").css("width", progress + "%").attr('aria-valuenow', progress);;
});


$(".msf:first").multiStepForm();

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