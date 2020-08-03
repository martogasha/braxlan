@include('CPartials.header')
<title>Braxlan - Login</title>
@include('flash-message')

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                <div class="theme-card">
                    <h3 class="text-center">Login</h3>
                    <form class="theme-form" action="{{route('loginCustomOne')}}" method="post" id="loginForm">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" name="password" id="review" placeholder="Enter your password" required="">
                        </div>
                        <a href="javascript:document.getElementById('loginForm').submit();" class="btn btn-normal">Login</a>
                        <a class="float-right txt-default mt-2" href="{{url('password/reset')}}" id="fgpwd">Forgot your password?</a>
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                    <a href="{{url('registerUser')}}" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('CPartials.settings')

<!--Section ends-->
@include('CPartials.login')

@include('CPartials.footer1')
@include('CPartials.footer')

