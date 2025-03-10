<?php include "../inc/database.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Include file header -->
    <?php include "../inc/header.php" ?>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row ">
            <div class="col">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="../img/carousel1.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="../img/carousel2.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="../img/carousel3.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Giao hàng miễn phí</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Trả hàng trong 14 ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Truy vấn để lấy danh mục sản phẩm -->
    <?php
    $sqlDanhMuc = "SELECT * FROM danhmuc;";
    $resultDanhMuc = $conn->query($sqlDanhMuc);
    if (!$resultDanhMuc) {
        echo "Lỗi truy vấn: " . $conn->error;
        exit;
    }
    // Lấy sản phẩm
    $sqlSanPham = "SELECT * FROM SanPham";
    $resultSanPham = $conn->query($sqlSanPham);

    ?>
    <!-- Danh mục sản phẩm -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Danh mục
                sản phẩm</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php if ($resultDanhMuc->num_rows > 0): ?>
                <?php while ($row = $resultDanhMuc->fetch_assoc()): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="show-category.php?ma_danh_muc=<?php echo $row['MaDanhMuc']; ?>">
                            <div class="cat-item d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src="../NiceAdmin/img/<?php echo ($row['Images']); ?>" alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6><?php echo ($row['TenDanhMuc']); ?></h6>
                                    <small class="text-body"><?php echo ($row['SoLuong']); ?> Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không có danh mục sản phẩm.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Categories End -->

    <?php
    // Đóng kết nối
    $conn->close();
    ?>
    <!-- Sản phẩm nổi bật -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Sản phẩm nổi bật</span>
        </h2>
        <div class="row px-xl-5">
            <?php
            include "../inc/database.php";

            // Truy vấn sản phẩm nổi bật
            $sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT 4"; // Giới hạn 4 sản phẩm
            $resultSanPham = $conn->query($sql);

            if ($resultSanPham->num_rows > 0):
                while ($row = $resultSanPham->fetch_assoc()): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="../NiceAdmin/img/<?php echo $row['ANhMH']; ?>" alt="">
                                <div class="product-action">
                                    <form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="MaSP" value="<?php echo $row['MaSP']; ?>">
                                        <input type="hidden" name="TenSP" value="<?php echo $row['TenSP']; ?>">
                                        <input type="hidden" name="SoLuong" value="1">
                                        <input type="hidden" name="Gia" value="
                                        <?php
                                        if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0) {
                                            $tongTien = $row['GiaUuDai'];
                                        } else {
                                            $tongTien = $row['DonGiaNhap'];
                                        }
                                        ?>">
                                        <input type="hidden" name="TongTien" value="<?php echo $tongTien; ?>">

                                        <button type="submit" class="btn" style="display: flex; align-items: center;">
                                            <a class="btn btn-outline-dark btn-square" href="#" name="add_to_cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i
                                                    class="fa fa-sync-alt"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-search"></i></a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="#"
                                    style="max-width: 200px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['TenSP']; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <?php
                                    // Kiểm tra giá ưu đãi và gán giá hiện tại
                                    if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0) {
                                        $giaHienTai = $row['GiaUuDai'];
                                    } else {
                                        $giaHienTai = $row['DonGiaNhap'];
                                    }
                                    ?>
                                    <h5><?php echo $giaHienTai; ?> VNĐ</h5>
                                    <?php if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0): ?>
                                        <h6 class="text-muted ml-2"><del><?php echo $row['DonGiaNhap']; ?> VNĐ</del></h6>
                                    <?php endif; ?>
                                </div>

                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                    <?php endfor; ?>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không có sản phẩm.</p>
            <?php endif; ?>

        </div>
    </div>
    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="../img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Giảm giá 20%</h6>
                        <h3 class="text-white mb-3">Ưu đãi đặt biệt</h3>
                        <a href="" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="../img/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End --> 
     

            <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Sản phẩm Mới Nhất</span>
        </h2>
        <div class="row px-xl-5">
            <?php
            include "../inc/database.php";

            // Truy vấn sản phẩm nổi bật
            $sql = "SELECT * FROM sanpham ORDER BY MaSP DESC LIMIT 4"; // Lấy 4 sản phẩm mới nhất
            $resultSanPham = $conn->query($sql);

            if ($resultSanPham->num_rows > 0):
                while ($row = $resultSanPham->fetch_assoc()): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="../NiceAdmin/img/<?php echo $row['ANhMH']; ?>" alt="">
                                <div class="product-action">
                                    <form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="MaSP" value="<?php echo $row['MaSP']; ?>">
                                        <input type="hidden" name="TenSP" value="<?php echo $row['TenSP']; ?>">
                                        <input type="hidden" name="SoLuong" value="1">
                                        <input type="hidden" name="Gia" value="
                                        <?php
                                        if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0) {
                                            $tongTien = $row['GiaUuDai'];
                                        } else {
                                            $tongTien = $row['DonGiaNhap'];
                                        }
                                        ?>">
                                        <input type="hidden" name="TongTien" value="<?php echo $tongTien; ?>">

                                        <button type="submit" class="btn" style="display: flex; align-items: center;">
                                            <a class="btn btn-outline-dark btn-square" href="#" name="add_to_cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i class="far fa-heart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i
                                                    class="fa fa-sync-alt"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="#"><i class="fa fa-search"></i></a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="#"
                                    style="max-width: 200px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['TenSP']; ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <?php
                                    // Kiểm tra giá ưu đãi và gán giá hiện tại
                                    if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0) {
                                        $giaHienTai = $row['GiaUuDai'];
                                    } else {
                                        $giaHienTai = $row['DonGiaNhap'];
                                    }
                                    ?>
                                    <h5><?php echo $giaHienTai; ?> VNĐ</h5>
                                    <?php if ($row['GiaUuDai'] != NULL && $row['GiaUuDai'] > 0): ?>
                                        <h6 class="text-muted ml-2"><del><?php echo $row['DonGiaNhap']; ?> VNĐ</del></h6>
                                    <?php endif; ?>
                                </div>

                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                    <?php endfor; ?>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không có sản phẩm.</p>
            <?php endif; ?>

        </div>
    </div>

    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="../img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="../img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    <?php include "../inc/footer.php" ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>