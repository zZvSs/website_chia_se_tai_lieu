<div class="page ">
    <form role="form" action="index.php?act=gvthemtl" method="POST" enctype="multipart/form-data">

        <div class="container page__container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item"></li>
            </ol>
            <div class="media align-items-center mb-headings">
                <div class="media-body">
                    <h1 class="h2">Thêm tài liệu</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Thông tin tài liệu</h4>
                        </div>
                        <div class="card-body">
                            <input type="text" name="idsubject" value="<?php echo $idsubject; ?>">
                            <div class="form-group">
                                <label class="form-label">Tiêu đề</label>
                                <input type="text"
                                        class="form-control"
                                        name="title">
                            </div>

                            <div class="form-group mb-0">
                                <label class="form-label">Mô tả</label>
                                <input type="text"
                                        class="form-control"
                                        name="description">
                            </div>
                            <div class="">
                                <label>Tài liệu</label>    
                                <input type="file" class="form-control" name="document" >
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="submit" name="gvthemtl" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
    </form>
                    