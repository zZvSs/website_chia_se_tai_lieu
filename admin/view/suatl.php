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
            
            <form role="form" action="index.php?act=suatl" method="POST" enctype="multipart/form-data">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Sửa tài liệu
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="iddocument" value="<?=$tlsua[0]['iddocument']?>">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title" value="<?=$tlsua[0]['title']?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>    
                        <input type="text" class="form-control" name="description" value="<?=$tlsua[0]['description']?>">
                    </div>
                    <div class="">
                        <label>Tài liệu</label>    
                        <input type="file" class="form-control" name="document" value="<?=$tlsua[0]['document']?>">
                    </div>
                    <button type="submit" name="suatl" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Sửa</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->