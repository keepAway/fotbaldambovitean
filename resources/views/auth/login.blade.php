<div class="modal fade login-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document" style="padding-top: 50px;">
		<div class="modal-content" style="border-radius: 0;">
			<div class="modal-header" style="background-color: #323b3e; color: #fff; font-weight: bold; border-radius: 0; border-bottom: 2px solid #f4d90c">
				<h6 class="modal-title">
					<span style="font-weight: bold;">{{ __('Login') }}, </span> &nbsp;
					<span style="color: #f4d90c; font-weight: bold; font-style: italic;">Fotbal-Arena.ro</span>
				</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff !important; opacity: 0.8 !important; line-height: 40px !important; text-shadow: none !important">&times;</span>
				</button>
			</div>
			<div class="modal-body pb-1">
				<div class="alert alert-danger mb-0 text-center d-none" id="credentials"></div>

				<div style="padding-left: 10px; padding-right: 10px; padding-top: 25px;">
					<div class="form-group row" style="margin-bottom: 0.5rem !important;">
						<div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
							<div class="input-group-prepend">
								<span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
									<i class="fas fa-user" style="color: #f4d90c !important;"></i>
								</span>
							</div>
							<input id="email" type="email" class="form-control" name="Email" placeholder="email" value="{{ old('email') }}" autofocus>
							<span class="invalid-feedback d-none" id="email-response" role="alert">
								<strong>Email is required</strong>
							</span>
						</div>
					</div>

					<div class="form-group row" style="margin-bottom: 0.5rem !important;">
						<div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
							<div class="input-group-prepend">
								<span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
									<i class="fas fa-key" style="color: #f4d90c !important;"></i>
								</span>
							</div>
							<input id="password" type="password" class="form-control" placeholder="Parola" name="password">
							<span class="invalid-feedback d-none" id="password-response" role="alert">
								<strong>Password is required</strong>
							</span>
						</div>
					</div>
				</div>

				<div class="row" style="padding-left: 10; padding-right: 10;">
					<div class="col-md-12" style="text-align: right;">
						<a type="submit" class="loginBtnCustom" style="color: #fff;">{{ __('Intra') }}</a>
					</div>
					<div class="col-md-12 pl-0 pt-3" style="text-align: center; color: #323b3e; font-size: 14px; font-weight: bold">
						<a class="pr-2" id="register-modal" style="cursor: pointer;">
							{{ __('Inscrie-te') }}
						</a>
						<a href="{{ route('password.request') }}">
							{{ __('Am uitat parola') }}
						</a>
					</div>
				</div>
			</div>
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