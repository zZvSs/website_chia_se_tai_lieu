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
                    <a href="index.php?act=themtl" class="btn btn-outline-primary "><i class="ti-pencil-alt"></i> Thêm</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>ID tài liệu</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Tài liệu</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($tl)&&(count($tl)>0)){
                                $i=1;
                                foreach($tl as $httl){
                                    echo 
                                    '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$httl['title'].'</td>
                                    <td>'.$httl['description'].'</td>  
                                    <td><a href="../admin/uploads/'.$httl['document'].'" target="_blank">'.$httl['document'].'</a></td> 
                                    <td>
                                    <a href="index.php?act=suatl&iddocument='.$httl['iddocument'].'" class="btn btn-outline-primary "><i class="ti-settings"></i> Sửa</a>
                                    <a href="index.php?act=xoatl&iddocument='.$httl['iddocument'].'" class="btn btn-outline-primary "><i class="ti-trash"></i> Xoá</a></td>
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