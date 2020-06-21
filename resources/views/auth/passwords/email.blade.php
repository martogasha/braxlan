@include('CPartials.header')
<title>Password Reset</title>
@include('flash-message')

<!--section start-->
<section class="login-page pwd-page section-big-py-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="theme-card">
                    <h3>Forget Your Password</h3>
                    <form class="theme-form" action="{{route('password.email')}}" method="post">
                        @csrf
                        <div class="form-row">

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-normal">Send Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('CPartials.footer1')
@include('CPartials.footer')
