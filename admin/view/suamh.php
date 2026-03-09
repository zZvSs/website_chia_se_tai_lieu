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
            <form role="form" action="index.php?act=suamh" method="POST">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Sửa người dùng
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="idsubject" value="<?=$mhsua[0]['idsubject']?>">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control" name="name" value="<?=$mhsua[0]['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>    
                        <input type="text" class="form-control" name="description" value="<?=$mhsua[0]['description']?>">
                    </div>
                    <button type="submit" name="suamh" class="btn btn-outline-primary "><i class="ti-settings"></i> Sửa</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->