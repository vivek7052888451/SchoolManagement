@extends('backend.layouts.master')
@section('content')
   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Exam Add</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Exam </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

            <div class="content mt-3 ">
            <div class="animated">

                <div class="card alert  alert-success alert-dismissible fade show">
                    <div class="card-header">
                        <i class="mr-2 align-justify"></i>
                        <a href="{{route('admin.examlist')}}"><strong class="card-title" v-if="headerText">Back</strong></a>
                    </div>
                  
                       <div class="card-body">
                       
                        <hr>
                        <form action="" method="post" novalidate="novalidate">
                           
                          
                               <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Name</label>
                                            <input id="name" name="name" type="text" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please enter the name">
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">
                                       
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Email</label>
                                            <input id="email" name="email" type="email" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please enter the email">
                                           
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-6">
                                         <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Password</label>
                                            <input id="password" name="password" type="password" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please enter the password">
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Phone</label>
                                            <input id="phone" name="phone" type="text" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please enter the phone">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                          <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Department</label>
                                            <input id="department" name="department" type="text" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please enter the department">
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Join Date</label>
                                            <input id="date" name="date" type="date" class="form-control cc-exp" value="" data-val-required=""  placeholder="Please select the date">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                         <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Resume</label>
                                            <input id="resume" name="resume" type="file" class="form-control cc-exp" value="">
                                           
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Joining Date</label>
                                            <input id="joining_date" name="joining_date" type="file" class="form-control cc-exp" value="">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                         <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check-inline form-check">
                                                    <label for="male" class="form-check-label ">
                                                        <input type="radio" id="male" name="gender" value="male" class="form-check-input">Male
                                                    </label>
                                                    <label for="inline-radio2" class="form-check-label ">
                                                        <input type="radio" id="inline-radio2" name="gender" value="female" class="form-check-input">Female
                                                    </label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-save fa-lg"></i>&nbsp;
                                       
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                        </form>
                    </div>


                </div>

@endsection