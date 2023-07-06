
@extends('admin.layouts.app')
@section('title','  رقم الواتس اب')
@section('content')

    <div id="content-container">
                <div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active">  رقم الواتس اب'  </li>
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
                                    <h3 class="panel-title">   رقم الواتس اب'</h3>
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
                                                <th>الرقم </th>
                                                <th class="min-desktop">تعديل</th>
                                                <!-- <th class="min-desktop">حذف</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($whatsNum as $addWhatsNum)
                                            <tr>
                                                <td>{{$addWhatsNum -> phone}}</td>
                                                <!-- <td>
                                                        <a onclick="return confirm('Are you sure?')" href="{{route('addWhatsNum.delete',$addWhatsNum -> id)}}" class="btn btn-danger">حذف</a>
                                                </td> -->
                                                <td>
                                                <a href="{{route('addWhatsNum.edit',$addWhatsNum -> id)}}" class="btn btn-info">تعديل</a>
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
