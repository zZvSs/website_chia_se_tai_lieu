<!-- BOF MAIN -->
<div class="main">

<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">DataTables</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
 <?php
 //var_dump( $dm);
 ?>

<!-- BOF Datatable Complex Headers -->
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Complex Headers (rowspan and colspan)
                </div>
                <div class="tools">
                    <a href="index.php?act=themkh" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Thêm</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>Id khoá học</th>
                                <th>Id môn học</th>
                                <th>Id người dùng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($kh)&&(count($kh)>0)){
                                $i=1;
                                foreach($kh as $htkh){
                                    echo 
                                    '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$htkh['idsubject'].'</td>
                                    <td>'.$htkh['iduser'].'</td>
                                    <td>
                                    <a href="index.php?act=suakh&idcourse='.$htkh['idcourse'].'" class="btn btn-outline-primary "><i class="ti-settings"></i> Sửa</a>
                                    <a href="index.php?act=xoakh&idcourse='.$htkh['idcourse'].'" class="btn btn-outline-primary "><i class="ti-trash"></i> Xoá</a></td>
                                    </tr>';
                                $i++ ;
                                }
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Datatable Complex Headers -->

</div>
<!-- EOF MAIN -->