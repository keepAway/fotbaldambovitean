<div class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document" style="padding-top: 50px;">
		<div class="modal-content" style="border-radius: 0;">
			<div class="modal-header" style="background-color: #323b3e; color: #fff; font-weight: bold; border-radius: 0; border-bottom: 2px solid #f4d90c">
				<h6 class="modal-title">
					<span style="font-weight: bold;">{{ __('Login') }}</span> &nbsp;
					<span style="color: #f4d90c; font-weight: bold; font-style: italic;">Fotbal-Arena.ro</span>
				</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff !important; opacity: 0.8 !important; line-height: 40px !important; text-shadow: none !important">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
				@csrf
				<div class="modal-body pb-1">
					<div style="padding-left: 10px; padding-right: 10px; padding-top: 25px;">
						<div class="form-group row" style="margin-bottom: 0.5rem !important;">
							<div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
								<div class="input-group-prepend">
									<span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
										<i class="fas fa-user" style="color: #f4d90c !important;"></i>
									</span>
								</div>
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
								@if($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row" style="margin-bottom: 0.5rem !important;">
							<div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
								<div class="input-group-prepend">
									<span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
										<i class="fas fa-key" style="color: #f4d90c !important;"></i>
									</span>
								</div>
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="parola" name="password" required>
								@if($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>
					</div>

					<div class="row" style="padding-left: 10; padding-right: 10;">
						<div class="col-md-12" style="text-align: right;">
							<button type="submit" class="loginBtnCustom">{{ __('Intra') }}</button>
						</div>
						<div class="col-md-12 pl-0 pt-3" style="text-align: center; color: #323b3e; font-size: 14px; font-weight: bold">
							<a class="pr-2" href="{{ route('register') }}">
								{{ __('Inscrie-te') }}
							</a>
							<a href="{{ route('password.request') }}">
								{{ __('Am uitat parola') }}
							</a>
						</div>
					</div>
				</div>
			</form>
			<div class="modal-footer" style="justify-content: center;">
				<div class="row margin-auto">
					<div class="col-xs-6" style="text-align: center;">
						<a class="loginBtn loginBtn--facebook" href="{{ route('auth-facebook') }}">Intra cu Facebook</a>
					</div>
					<div class="col-xs-6" style="text-align: center;">
						<a class="loginBtn loginBtn--google" href="{{ route('auth-google') }}">Intra cu Google</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>