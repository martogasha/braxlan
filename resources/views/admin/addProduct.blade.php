@include('APartials.header')
<div class="page-body">

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
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
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
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li><input class="upload" type="file"></li>
                                                <li><input class="upload" type="file"></li>
                                                <li><input class="upload" type="file"></li>
                                                <li><input class="upload" type="file"></li>
                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" novalidate="">
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="text" required="">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                            <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="text" required="">
                                            <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                                <option>Extra Large</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Category :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                                <option>Groceries</option>
                                                <option>Supermarket</option>
                                                <option>Kitchen Utencils</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
                                            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                <div class="input-group">
                                                    <input class="touchspin" type="text" value="1">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Add Description :</label>
                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

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

</div>

</div>

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
<script src="assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="assets/js/editor/ckeditor/styles.js"></script>
<script src="assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="assets/js/editor/ckeditor/ckeditor.custom.js"></script>

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

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:23:40 GMT -->
</html>
