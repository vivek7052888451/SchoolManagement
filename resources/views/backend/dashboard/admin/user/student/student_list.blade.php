@extends('backend.layouts.master')
@section('content')
   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Student List</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Student</li>
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
                        <a href="{{route('admin.add-student')}}"><strong class="card-title" v-if="headerText"><i class="fa fa-plus"></i>Create</strong></a> 
                    </div>
                   
                        <hr>
                     <div class="col-xl-3 col-lg-6">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="fa fa-twitter wtt-mark"></div>

                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('backend/images/admin.jpg')}}">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6">Jim Doe</h2>
                                        <p class="text-light">Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-category twt-category d-flex justify-content-around">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <i class="fa fa-pencil" style="font-size:20px;color:orange;"></i>
                                    </div>
                                     <div class="col-sm-4">
                                       <i class="fa fa-eye" style="font-size:20px;color:green"></i>
                                    </div>
                                     <div class="col-sm-4">
                                         <i class="fa fa-trash-o" style="font-size:20px;color:red"></i>
                                    </div>
                                </div>
                              
                            </div>
                        </section>
                     </div>
                </div>



@endsection