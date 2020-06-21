@include('CPartials.header')
<title>Password Reset</title>
@include('flash-message')

<!--section start-->
<section class="login-page pwd-page section-big-py-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="theme-card">
                    <h3>Reset Your Password</h3>
                    <form class="theme-form">
                        <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="review">New Password</label>
                                    <input type="text" class="form-control" name="name"  placeholder="New Password" required>
                                </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Confirm Password</label>
                                <input type="text" class="form-control" name="name"  placeholder="Confirm Password" required>
                            </div>
                        <a href="#" class="btn btn-normal">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('CPartials.footer1')
@include('CPartials.footer')
