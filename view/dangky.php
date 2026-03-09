<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 16:20:40 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Signup</title>

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
                        <h4 class="card-title">Đăng ký</h4>
                        <p class="card-subtitle">Tạo tài khoản mới</p>
                    </div>
                    <div class="card-body">
                        <form action="https://learnplus.demo.frontendmatter.com/student-dashboard.html"
                              novalidate
                              method="get">
                            <div class="form-group">
                                <label class="form-label"
                                       for="name">Tên:</label>
                                <div class="input-group input-group-merge">
                                    <input id="name"
                                           type="text"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Nhập họ tên">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Nhập email">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Mật khẩu:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Nhập mật khẩu">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password2">Vai trò:</label>
                                <div class="input-group input-group-merge">
                                    <div class="custom-control custom-radio">
                                        <input id="radioStacked1"
                                            name="radio-stacked"
                                            type="radio"
                                            class="custom-control-input">
                                        <label for="radioStacked1"
                                            class="custom-control-label">Giảng viên</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="radioStacked2"
                                            name="radio-stacked"
                                            type="radio"
                                            class="custom-control-input">
                                        <label for="radioStacked2"
                                            class="custom-control-label">Học viên</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-block mb-3">Đăng ký</button>
                            <div class="form-group text-center mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input id="terms"
                                           type="checkbox"
                                           class="custom-control-input"
                                           checked
                                           required="">
                                    <label for="terms"
                                           class="custom-control-label text-black-70">Tôi đồng ý với <a href="#"
                                           class="text-black-70"
                                           style="text-decoration: underline;">Điều khoản sử dụng</a></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">Bạn đã đăng ký ? <a href="guest-login.html">Đăng nhập</a></div>
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


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 16:20:40 GMT -->
</html>