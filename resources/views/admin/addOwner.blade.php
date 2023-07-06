
@extends('admin.layouts.app')
@section('title','اضافة مجلس الادارة')
@section('content')

<div id="content-container">
<div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active"> اضافة مجلس الادارة  </li>
                         </ol>
                    </div>
                </div>
    <div id="page-content">
            <div class="row">
                            <div class="eq-height">
                                <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">مجلس الادارة </h3>
                                            @if(Session::has('successAdd'))
                                            <div class="alert alert-success" role="alert">
                                                {{__('messages.added successfully')}}
                                            </div>
                                            @endif


                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form  method="post" action="{{Route('ownerPost')}}" enctype="multipart/form-data">
                                         @csrf
                                            <div class="panel-body">
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> الصورة </label>
                                                            <input  name="photo" type="file" class="form-control">
                                                            @error('photo')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            <div class="panel-footer text-right">
                                            <a href="{{route('allOwners')}}"> <button class="btn btn-primary" type="button">عرض الكل</button></a>
                                                <button class="btn btn-info" type="submit">اضافة</button>
                                            </div>
                                        </form>
                                        <!--===================================================-->
                                        <!--End Block Styled Form -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

@endsection
