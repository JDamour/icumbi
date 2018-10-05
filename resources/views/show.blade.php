@extends('layouts.app')

<div class="container">
	<div class="card card-container">
		<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin"method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
			@csrf


			<span id="reauth-email" class="reauth-email"></span>
			<input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" action="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>

			@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif

			<input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" action="{{ __('Password') }}" placeholder="Password" required>
			<div id="remember" class="checkbox">
				@if ($errors->has('password'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif

				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
		</div>
		<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> {{ __('Submit') }}</button>
	</form><!-- /form -->
	<a href="{{ route('password.request') }}" class="forgot-password">
		Forgot the password?
	</a>
</div><!-- /card-container -->
    </div><!-- /container -->