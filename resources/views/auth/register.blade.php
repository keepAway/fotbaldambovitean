<div class="modal fade register-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="padding-top: 50px;">
        <div class="modal-content" style="border-radius: 0;">
            <div class="modal-header" style="background-color: #323b3e; color: #fff; font-weight: bold; border-radius: 0; border-bottom: 2px solid #f4d90c">
                <h6 class="modal-title">
                    <span style="font-weight: bold;">{{ __('Inregistreaza-te') }}, </span> &nbsp;
                    <span style="color: #f4d90c; font-weight: bold; font-style: italic;">Fotbal-Arena.ro</span>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #fff !important; opacity: 0.8 !important; line-height: 40px !important; text-shadow: none !important">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-3">
                <div style="padding-left: 10px; padding-right: 10px; padding-top: 25px;">
                    <div class="form-group row" style="margin-bottom: 0.5rem !important;">
                        <div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
                                    <i class="fas fa-user" style="color: #f4d90c !important;"></i>
                                </span>
                            </div>
                            <input id="reg_name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Nume" required autofocus>
                            <span class="invalid-feedback d-none" id="name_response" role="alert">
                                <strong>Name is required</strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-bottom: 0.5rem !important;">
                        <div class="input-group form-group" style="margin-bottom: 0.5rem !important;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #323b3e !important; border: 1px solid #323b3e !important;">
                                    <i class="fas fa-at" style="color: #f4d90c !important;"></i>
                                </span>
                            </div>
                            <input id="reg_email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required>
                            <span class="invalid-feedback d-none" id="email_response" role="alert">
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
                            <input id="reg_password" type="password" class="form-control" placeholder="Parola" required>
                            <span class="invalid-feedback d-none" id="password_response" role="alert">
                                <strong>Password is required</strong>
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
                            <input id="reg_password_confirm" type="password" class="form-control" placeholder="Confirma parola" required>
                            <span class="invalid-feedback d-none" id="password_response" role="alert">
                                <strong>Password is required</strong>
                            </span>
                        </div>
                    </div>

                    <div class="row" style="padding-left: 10;">
                        <div class="col-md-12 pr-0" style="text-align: right;">
                            <button type="submit" id="register-request" class="loginBtnCustom">{{ __('Creaza cont') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>