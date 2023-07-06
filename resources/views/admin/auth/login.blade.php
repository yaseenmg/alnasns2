@extends('admin.layouts.login')
@section('title','الدخول')
@section('content')



     <div class="login img js-fullheight"  style="background-image: url({{asset('')}});">
			<section class="ftco-section opacity">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center">
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4">
							<div class="login-wrap p-0">
						<h3 class="mb-4 text-center drName"><img style="width:150px" src="{{asset('images/logo/'.$logos[0]->photo)}}" alt="logo">

 <br>

                        </h3>
						<form  class="signin-form" action="{{route('admin.login')}}" method="post">
                        @csrf
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Username" required>
							</div>
						<div class="form-group">
						<input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
						</div>

					</form>

					</div>
						</div>
					</div>
				</div>
			</section>
		</div>


@endsection
