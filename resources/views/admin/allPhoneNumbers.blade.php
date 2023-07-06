
@extends('admin.layouts.app')
@section('title','جميع ارقام التليفونات')
@section('content')

    <div id="content-container">
                <div class="pageheader hidden-xs">
                    <div class="breadcrumb-wrapper">
                         <ol class="breadcrumb">
                            <li> <a href="#"> الرئيسية </a> </li>
                            <li class="active"> جميع ارقام التليفونات</li>
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
                                    <h3 class="panel-title">جميع ارقام التليفونات</h3>
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
                                                <th>رقم التليفون</th>
                                                <th class="min-desktop">حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($phones as $phone)
                                            <tr>
                                                <td>{{$phone -> phone}}</td>
                                                <td>
                                                        <a onclick="return confirm('Are you sure?')" href="{{route('phone.delete',$phone -> id)}}" class="btn btn-danger">حذف</a>
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
