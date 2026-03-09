<!DOCTYPE html>
<html lang="en"
      dir="ltr">

 
<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 16:20:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Đăng nhập</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class="login">

    <?php
    if(isset($_SESSION['massge'])){
        echo $email;
        echo '</br>';
        echo $password;
        
        session_unset();
        session_destroy();
    }
    ?>

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="assets/images/logo/primary.svg"
                             class="avatar-img rounded-circle"
                             alt="LearnPlus" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="student-dashboard.html"
                       class="navbar-brand m-0">LearnPlus</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Đăng nhập</h4>
                        <p class="card-subtitle">Truy cập tài khoản của bạn</p>
                    </div>
                    <div class="card-body">

                    <form action="index.php?act=dangnhap" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="email">Email:</label>
                            <div class="input-group input-group-merge">
                                <input type="text"  class="form-control " placeholder="Nhập email" name="email">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="far fa-envelope"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Mật khẩu:</label>
                            <div class="input-group input-group-merge">
                                <input type="password"  class="form-control " placeholder="Nhập mật khẩu" name="password">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="far fa-key"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="dangnhap">Đăng nhập</button>
                        </div>
                        <div class="text-center">
                            <a href="guest-forgot-password.html" class="text-black-70" style="text-decoration: underline;">Quên mật khẩu ?</a>
                        </div>


                    </form>

                    </div>
                    <div class="card-footer text-center text-black-50">
                        Bạn chưa có tài khoản <a href="dangky.php">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 16:20:20 GMT -->
</html>