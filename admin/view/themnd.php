<!-- BOF MAIN -->
<div class="main">

<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active">Form Control</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->

<!-- BOF MAIN-BODY -->
<div class="row">
    <!-- BOF General Form -->
    <div class="col">
        <div class="card mb-3">
            
            <form role="form" action="index.php?act=themnd" method="POST">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Thêm người dùng
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>    
                        <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>    
                        <input type="password" class="form-control" name="password" >
                    </div>
                    <div class="form-group">
                        <label>Vai trò</label>
                        <div class="form-radio">
                            <label class="mr-3">
                                <input type="radio" name="role" value="Giảng viên">
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Giảng viên
                            </label>
                            <label class="mr-3">
                                <input type="radio" name="role" value="Học viên">
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Học viên
                            </label>
                        </div>   
                    </div>
                    
                    <button type="submit" name="themnd" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Thêm</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->