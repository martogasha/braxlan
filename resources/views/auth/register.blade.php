@include('CPartials.header')
<title>Braxlan - Register</title>
<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="theme-card">
                    <h3 class="text-center">Create account</h3>
                    <form class="theme-form" action="{{route('registerCustom')}}" method="post" id="registerForm">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="review">Full Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                                <div class="col-md-12 form-group">
                                    <label for="review">Phone Number</label>
                                    <input type="text" class="form-control" name="phone"  placeholder="0700000000" required>
                                </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleFormControlSelect1">Location:</label>
                                <select class="form-control" name="location">
                                    <option value="Embakasi">Embakasi</option>
                                    <option value="Kikuyu">Kikuyu</option>

                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleFormControlSelect1">Role:</label>
                                <select class="form-control" name="role">
                                    <option value="customer">Customer</option>
                                    <option value="vendor">Vendor</option>

                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password Confirmation</label>
                                <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Enter your password">
                            </div>

                            <div class="col-md-12 form-group"><a href="javascript:document.getElementById('registerForm').submit();" class="btn btn-normal">create Account</a></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <p >Have you already account? <a href="{{url('login')}}" class="txt-default">click</a> here to &nbsp;<a href="{{url('login')}}" class="txt-default">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->


<!--footer start-->
<!--footer end-->

<!-- tap to top -->
@include('CPartials.login')


@include('CPartials.footer1')
@include('CPartials.footer')
