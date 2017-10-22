@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">\

                <form class="m-form m-form--fit" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="m-form__heading">
													<h3 class="m-form__heading-title">
														Login
													</h3>
												</div>
												<div class="form-group m-form__group">
													<label>
														Email :
													</label>
                          <input id="email" type="email" class="form-control m-input" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif

												</div>
                        <div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : '' }}">
													<label>
														Password :
													</label>
                          <input id="password" type="password" class="form-control m-input" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="m-form__group form-group">
                        <div class="m-checkbox-list">
                          <label class="m-checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            <span></span>
                          </label>
  											</div>
                      </div>
										</div>
									</div>

							       <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<button type="submit" class="btn btn-success">
													Submit
												</button>
												<button type="reset" class="btn btn-secondary">
													Cancel
												</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
											</div>
										</div>
									</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
