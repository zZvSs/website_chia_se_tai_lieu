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
            
            <form role="form" action="index.php?act=themkh" method="POST">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Thêm khoá học
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Id môn học</label>
                        <input type="text" class="form-control" name="idsubject" >
                    </div>
                    <div class="form-group">
                        <label>Id người dùng</label>    
                        <input type="text" class="form-control" name="iduser" >
                    </div>
                    <button type="submit" name="themkh" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Thêm</button>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
</div>
<!-- EOF MAIN-BODY -->

</div>
<!-- EOF MAIN -->