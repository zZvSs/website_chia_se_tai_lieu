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
            <form role="form" action="index.php?act=suand" method="POST">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Sửa người dùng
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="iduser" value="<?=$ndsua[0]['iduser']?>">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control" name="name" value="<?=$ndsua[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>    
                        <input type="text" class="form-control" name="email" value="<?=$ndsua[0]['email']?>">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>    
                        <input type="text" class="form-control" name="password" value="<?=$ndsua[0]['password']?>">
                    </div>
                    <div class="form-group">
                        <label>Vai trò</label>
                        <div class="form-radio">
                            <label class="mr-3">
                                <input type="radio" name="role" value="Giảng viên" <?= isset($ndsua[0]['role']) && $ndsua[0]['role'] == 'Giảng viên' ? 'checked' : '' ?>>
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Giảng viên
                            </label>
                            <label class="mr-3">
                                <input type="radio" name="role" value="Học viên" <?= isset($ndsua[0]['role']) && $ndsua[0]['role'] == 'Học viên' ? 'checked' : '' ?>>
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Học viên
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" name="suand" class="btn btn-outline-primary "><i class="ti-settings"></i> Sửa</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->