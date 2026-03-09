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
            
            <form role="form" action="index.php?act=themmh" method="POST">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Thêm môn học
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên môn học</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>    
                        <input type="text" class="form-control" name="description" >
                    </div>
                    <button type="submit" name="themmh" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Thêm</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->