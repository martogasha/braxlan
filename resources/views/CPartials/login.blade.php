<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <form class="theme-form" action="{{route('loginCustom')}}" method="post" id="form">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" name="password" id="review" placeholder="Enter your password" required="">
            </div>
            <div class="form-group">
                <a href="javascript:document.getElementById('form').submit();" class="btn btn-rounded btn-block">Sign In</a>
                <a href="{{url('login/google')}}" class="btn btn-rounded btn-block">Sign In with Google</a>

            </div>
            <div>
                <h5 class="forget-class"><a href="forget-pwd.html" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="{{url('register')}}" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>

</div>
