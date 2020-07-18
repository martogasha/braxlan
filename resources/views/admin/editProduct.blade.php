@include('APartials.header')
<title>Braxlan- Edit Product Details</title>
<div class="page-body">
@include('flash-message')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit Product Details
                            <small>Bigdeal Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"><i data-feather="home"></i></a></li>
                       <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">Edit Product Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Product Details</h5>
                    </div>
                <form action="{{url('eProduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="prodId" value="{{$getProduct->id}}">

                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                    <div class="row">
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li><input class="upload" name="product_image" type="file"></li>
                                                <br>
                                                <br>
                                                <li><input class="upload" name="product_image1" type="file"></li>
                                                <br>
                                                <br>
                                                <li><input class="upload" name="product_image2" type="file"></li>
                                                <br>
                                                <br>
                                                <li><input class="upload" name="product_image3" type="file"></li>
                                                <br>
                                                <br>
                                            </ul>
                                        </div>


                                        </div>
                                    </div>
                            </div>
                        <br>
                            <div class="col-xl-7">
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" name="product_name" value="{{$getProduct->product_name}}" type="text" required="">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Describe :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" name="product_desc" value="{{$getProduct->product_desc}}" required="">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price:</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price" value="{{$getProduct->product_price}}" type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price750ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price750" value="{{$getProduct->product_price750}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price500ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price500" value="{{$getProduct->product_price500}}"type="text">
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price375ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price375" value="{{$getProduct->product_price375}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price350ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price350" value="{{$getProduct->product_price350}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price330ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price330" value="{{$getProduct->product_price330}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price250ML :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price250" value="{{$getProduct->product_price250}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price1.5L :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price1500" value="{{$getProduct->product_price1500}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price4.5L :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price4500" value="{{$getProduct->product_price4500}}"type="text">
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price5L :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" name="product_price5000" value="{{$getProduct->product_price5000}}"type="text">
                                        </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category">
                                                <option value="{{$getProduct->product_category}}">{{$getProduct->product_category}}</option>
                                                <option value="whisky">Whisky</option>
                                                <option value="vodka">Vodka</option>
                                                <option value="gin">Gin</option>
                                                <option value="mostSold">Most Sold</option>
                                                <option value="mostSold">Extras</option>
                                                <option value="mostSold">Cigarette</option>
                                                <option value="mostSold">Condoms</option>



                                            </select>
                                        </div>
                                    </div>
                                <div class="form">
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category1">
                                            <option value="{{$getProduct->product_category1}}">{{$getProduct->product_category1}}</option>
                                            <option value="mostSold">Most Sold</option>
                                            <option value="">Remove</option>



                                        </select>
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category2">
                                            <option value="{{$getProduct->product_category2}}">{{$getProduct->product_category2}}</option>
                                            <option value="under1000">Under Ksh: 1000</option>
                                            <option value="">Remove</option>

                                        </select>
                                    </div>
                                </div>
                                        <div class="form">
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                                <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category3">
                                                    <option value="{{$getProduct->product_category3}}">{{$getProduct->product_category3}}</option>
                                                    <option value="trending">Trending</option>
                                                    <option value="">Remove</option>

                                                </select>
                                            </div>
                                        </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{url('productList')}}"> <button type="button" class="btn btn-light">Discard</button></a>
                                    </div>
                            </div>
                        </div>
                </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2019 © Bigdeal All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->



@include('APartials.footer')
</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:23:40 GMT -->

