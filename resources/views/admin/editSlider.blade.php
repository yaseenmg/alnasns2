
@extends('admin.layouts.app')
@section('title','تعديل الاسلايدر')
@section('content')

<div id="content-container">
<div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active"> تعديل الاسلايدر</li>
                         </ol>
                    </div>
                </div>
    <div id="page-content">
            <div class="row">
                            <div class="eq-height">
                                <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"> تعديل اللوجو</h3>
                                            @if(Session::has('successEdit'))
                                            <div class="alert alert-primary" role="alert">
                                                {{__('messages.edited successfully')}}
                                            </div>
                                            @endif
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form  method="post" action="{{Route('slider.update', $sliders -> id)}}" enctype="multipart/form-data">
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
                                            <a href="{{route('allSliders')}}"> <button class="btn btn-primary" type="button">عرض الكل</button></a>
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
