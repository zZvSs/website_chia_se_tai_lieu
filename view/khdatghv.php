<!-- Header Layout Content -->
<div class="mdk-header-layout__content d-flex flex-column">

<div class="page__header">
    <div class="navbar bg-dark navbar-dark navbar-expand-sm d-none2 d-md-flex2">
        <div class="container">

            <div class="navbar-collapse collapse"
                 id="navbarsExample03">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="index.php?act=hocvien"
                           class="nav-link">Học viên</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.php?act=khdatghv"
                           class="nav-link">Môn học đã tham gia</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!------------------------>

<div class="page ">

                    <div class="container page__container">
                        <div class="media mb-headings align-items-center">
                            <div class="media-body">
                                <h1 class="h2">Môn học</h1>
                            </div>
                        </div>
                        <?php
                        $iduser = $_SESSION['iduser'];
                        //var_dump($mh);
                        //echo $_SESSION['iduser'];
                        if(isset($mh)&&(count($mh)>0)){
                            $i=1;
                            foreach($mh as $htmh){
                                //echo $htmh['idsubject'];
                                $idsubject = $htmh['idsubject'];
                                $_SESSION['idsubject']  = $idsubject;
                                echo
                                '
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column flex-sm-row">
                                                <div class="media-left">
                                                    <a href="#"
                                                        class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                        <img src="assets/images/learnplus.png"
                                                                alt="Card image cap"
                                                                width="100"
                                                                class="rounded">
                                                    </a>
                                                </div>
                                                    <div class="flex"
                                                            style="min-width: 200px;">
                                                        <h4 class="card-title mb-1"><a href="#">'.$htmh['name'].'</a></h4>
                                                        <p class="text-black-70">'.$htmh['description'].'</p>
                                                        <div class="d-flex align-items-end">
                                                            <div class="d-flex flex flex-column mr-3">
                                                                <div class="d-flex align-items-center py-1 border-bottom">
                                                                </div>
                                                                <div class="d-flex align-items-center py-1">
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <a href="index.php?act=laytlmhhv&idsubject='.$idsubject.'" class="btn btn-sm btn-white" >Tài liệu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__options dropdown right-0 pr-2">
                                                <a href="#"
                                                    class="dropdown-toggle text-muted"
                                                    data-caret="false"
                                                    data-toggle="dropdown">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="index.php?act=huykhhv&idsubject='.$idsubject.'&iduser='.$iduser.'" class="dropdown-item text-danger" type="text">Huỷ khoá học</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        $i++ ;
                            }
                        } 
                        ?>

                        <!-- Pagination -->
                    <div class="container page__container">
                        <div class="footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->

        </div>
        <!-- // END Header Layout -->