
@extends('admin.layouts.app')
@section('title','تعديل الفيديو')
@section('content')

<div id="content-container">
<div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active"> تعديل الفيديو</li>
                         </ol>
                    </div>
                </div>
    <div id="page-content">
            <div class="row">
                            <div class="eq-height">
                                <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"> تعديل الفيديو</h3>
                                            @if(Session::has('successEdit'))
                                            <div class="alert alert-primary" role="alert">
                                                {{__('messages.edited successfully')}}
                                            </div>
                                            @endif
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form  method="post" action="{{Route('video.update', $videos -> id)}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="panel-body">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> اللينك </label>
                                                            <input  name="url" type="text" class="form-control">
                                                            @error('url')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> العنوان </label>
                                                            <input  name="title" type="text" class="form-control">
                                                            @error('title')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label"> التفاصيل </label>
                                                            <input  name="details" type="text" class="form-control">
                                                            @error('details')
                                                            <small class="form-text text-danger">{{$message}}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            <div class="panel-footer text-right">
                                            <a href="{{route('allVideos')}}"> <button class="btn btn-primary" type="button">عرض الكل</button></a>
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
