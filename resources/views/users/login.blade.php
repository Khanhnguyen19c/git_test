@extends('welcome')
@section('content')

<section id="form"><!--form-->
		<div class="container1">
			<div class="row">
			<div class="col-sm-12 clearfix">
				@if(session()->has('message'))
				<div class="alert alert-success">
					{!! session()->get('message') !!}
				</div>
				@elseif(session()->has('error'))
				<div class="alert alert-danger">
					{!! session()->get('error') !!}
				</div>
				@endif
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng Nhập Tài Khoản</h2>
						<form action="{{route('user.login')}}" method="POST">
						    {{ csrf_field() }}
							<input name="email" type="email" placeholder="Email" />
							<input name="password" type="password" placeholder="*******" />
							<span>
								<input type="checkbox" class="checkbox">
								Ghi Nhớ
								<a href="">Quên Mật Khẩu?</a>

							</span>

							<button type="submit" class="btn btn-default">Đăng Nhập</button>

						</form>



					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Tạo Tài Khoản Mới!</h2>
						<form action="{{route('user.register')}}" method="POST">
						{{ csrf_field() }}
                            <input name="name" type="text" placeholder="Name"/>
							<input name="email" type="email" placeholder="Email Address"/>
							<input name="password" type="password" placeholder="*********"/>
							<input name="password_confirmation" type="password" placeholder="*******"/>
							<button type="submit" class="btn btn-default">Đăng Ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/aes.js"></script>
    
@endsection
