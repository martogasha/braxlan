@include('APartials.header')
<title>Braxlan- Posters</title>
<div class="page-body">
@include('flash-message')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Posters
                            <small>Braxlan Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"><i data-feather="home"></i></a></li>
                       <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">Add Poster</li>
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
                <form action="{{route('poster.store')}}" method="post" enctype="multipart/form-data">
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
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="poster_category">
                                                <option value="first">First</option>
                                                <option value="second">Second</option>
                                                <option value="third">Third</option>
                                                <option value="four">4th</option>



                                            </select>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="{{url('admin')}}"> <button type="button" class="btn btn-light">Discard</button></a>
                                    </div>
                            </div>
                        </div>
                </form>
                    </div>
                <section class="collection-banner section-pt-space b-g-white ">
                    <div class="custom-container">
                        <div class="row collection2">
                            @if(isset($poster))
                            <div class="col-md-4">
                                <div class="collection-banner-main banner-1  p-right">
                                    <div class="collection-img" style="background-color: aquamarine">
                                        <img src="{{asset('uploads/product/'.$poster->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                                    </div>
                                    <div class="collection-banner-contain">
                                        <div>
                                            <div class="shop">
                                                <button class="btn btn-primary">Shop Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <td><a href="{{route('poster.edit',$poster->id)}}"><button class="btn btn-secondary">Edit</button></a></td>

                            </div>
                            @else
                                <div class="col-md-4">
                                    <div class="collection-banner-main banner-1  p-right">
                                        <div class="collection-img" style="background-color: aquamarine">
                                            <img src="" class="img-fluid bg-img  " alt="banner">
                                        </div>
                                        <div class="collection-banner-contain">
                                            <div>
                                                <div class="shop">
                                                    <a>
                                                        <button class="btn btn-primary">Shop Now</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <td><a href=""><button class="btn btn-secondary">Edit</button></a></td>

                                </div>
                            @endif
                                @if(isset($poster2))
                                <div class="col-md-4">
                                <div class="collection-banner-main banner-1  p-right">
                                    <div class="collection-img" style="background-color: aquamarine">
                                        <img src="{{asset('uploads/product/'.$poster2->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                                    </div>
                                    <div class="collection-banner-contain">
                                        <div>
                                            <div class="shop">
                                                <a>
                                                    <button class="btn btn-primary">Shop Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <td><a href="{{route('poster.edit',$poster->id)}}"><button class="btn btn-secondary">Edit</button></a></td>

                            </div>
                                @else
                                    <div class="col-md-4">
                                        <div class="collection-banner-main banner-1  p-right">
                                            <div class="collection-img" style="background-color: aquamarine">
                                                <img src="" class="img-fluid bg-img  " alt="banner">
                                            </div>
                                            <div class="collection-banner-contain">
                                                <div>
                                                    <div class="shop">
                                                        <a>
                                                           <button class="btn btn-primary">Shop Now</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <td><a href=""><button class="btn btn-secondary">Edit</button></a></td>

                                    </div>
                                @endif
                                @if(isset($poster3))
                                <div class="col-md-4">
                                <div class="collection-banner-main banner-1  p-right">
                                    <div class="collection-img" style="background-color: aquamarine">
                                        <img src="{{asset('uploads/product/'.$poster3->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                                    </div>
                                    <div class="collection-banner-contain">
                                        <div>
                                            <div class="shop">
                                                <a>
                                                    <button class="btn btn-primary">Shop Now</button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <td><a href="{{route('poster.edit',$poster->id)}}"><button class="btn btn-secondary">Edit</button></a></td>

                            </div>
                                @else
                                    <div class="col-md-4">
                                        <div class="collection-banner-main banner-1  p-right">
                                            <div class="collection-img" style="background-color: aquamarine">
                                                <img src="" class="img-fluid bg-img  " alt="banner">
                                            </div>
                                            <div class="collection-banner-contain">
                                                <div>
                                                    <div class="shop">
                                                        <a>
                                                            shop now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <td><a href=""><button class="btn btn-secondary">Edit</button></a></td>

                                    </div>
                                @endif

                        </div>
                    </div>
                </section>
                <br>

                <section class="collection-banner section-pb-space ">
                    <div class="custom-container">
                        <div class="row">
                            <div class="col">
                                <div class="collection-banner-main banner-5 p-center">
                                    <div class="collection-img">
                                        <img src="assets/images/layout-2/collection-banner/bbb.jpg" class="bg-img  " alt="banner">
                                    </div>
                                    <div class="collection-banner-contain ">
                                        <div class="sub-contain">
                                            <div class="shop">
                                                <a class="btn btn-normal" href="#">
                                                    shop now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


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



<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="assets/js/sidebar-menu.js"></script>

<!-- touchspin js-->
<script src="assets/js/touchspin/vendors.min.js"></script>
<script src="assets/js/touchspin/touchspin.js"></script>
<script src="assets/js/touchspin/input-groups.min.js"></script>

<!-- form validation js-->
<script src="assets/js/dashboard/form-validation-custom.js"></script>

<!-- ckeditor js-->
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>

<!-- Zoom js-->
<script src="assets/js/jquery.elevatezoom.js"></script>
<script src="assets/js/zoom-scripts.js"></script>

<!--Customizer admin-->
<script src="assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="assets/js/admin-script.js"></script>

</body>
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('ajax2')}}",
            data:{'post':$value},
            success:function (data) {
                $('.modal-body').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:23:40 GMT -->
</html>
