@include('APartials.header')
<title>Braxlan- Edit</title>
<div class="page-body">
@include('flash-message')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Bigdeal Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"><i data-feather="home"></i></a></li>
                       <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h5>Add Product</h5>
                    </div>
                <form action="{{url('PosterEdit',$edit->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                    <div class="row">
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li><input class="upload" name="poster_image" type="file" required></li>
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
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="poster_category">
                                                <option value="first">First</option>
                                                <option value="second">Second</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="{{url('posterView')}}"> <button type="button" class="btn btn-light">Discard</button></a>
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
