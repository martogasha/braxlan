@include('CPartials.header')
<title>Braxlan - Dashboard</title>

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2></div>
                        <div class="welcome-msg">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <p>Hello, {{\Illuminate\Support\Facades\Auth::user()->name}} !</p>
                            @endif
                            <p>From your My Account Dashboard you have the ability to <track> completed orders.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                            <h6>{{\Illuminate\Support\Facades\Auth::user()->phone}}</h6>
                                            <h6>{{\Illuminate\Support\Facades\Auth::user()->email}}</h6>
                                            <h6><a href="#">Change Password</a></h6></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="#">Edit</a></div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Location</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                            <address>{{\Illuminate\Support\Facades\Auth::user()->location}}.<br><a href="#">Edit Address</a></address></div>
                                        @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@include('CPartials.settings')

<script>
    $('.col-lg-9').hide();

</script>
<!-- section end -->
@include('CPartials.footer1')
@include('CPartials.footer')
