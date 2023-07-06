
@extends('admin.layouts.app')
@section('title',' عن الجمعية')
@section('content')

    <div id="content-container">
                <div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active"> عن الجمعية   </li>
                         </ol>
                    </div>
                </div>
               <div id="page-content">
               <div class="row">
                        <div class="col-md-12">

                            <!-- Basic Data Tables -->
                            <!--===================================================-->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> عن الجمعية  </h3>
                                         @if(Session::has('successDelete'))
                                            <div class="alert alert-danger" role="alert">
                                                {{__('messages.deletd successfully')}}
                                            </div>
                                         @endif
                                </div>
                                <div class="panel-body">
                                    <table id="demo-dt-basic" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>الصورة</th>
                                                <th>العنوان</th>
                                                <th>التفاصيل</th>
                                                <th class="min-desktop">تعديل</th>
                                                <th class="min-desktop">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($abouts as $about)
                                            <tr>
                                                <td><img  style="width: 90px; height: 90px;" src="{{asset('images/about/'.$about->photo)}}"></td>
                                                <td>{{$about -> title}}</td>
                                                <td>{{$about -> details}}</td>
                                                <td>
                                                <a href="{{route('aboutUs.edit',$about -> id)}}" class="btn btn-info">تعديل</a>
                                                </td>
                                                 <td>
                                                        <a onclick="return confirm('Are you sure?')" href="{{route('aboutUs.delete',$about -> id)}}" class="btn btn-danger">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
				    </div>
                </div>

@endsection
