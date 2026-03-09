<!-- Header Layout Content -->
<div class="mdk-header-layout__content d-flex flex-column">

<div class="page__header">
    <div class="navbar bg-dark navbar-dark navbar-expand-sm d-none2 d-md-flex2">
        <div class="container">

            <div class="navbar-collapse collapse"
                 id="navbarsExample03">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="index.php?act=giangvien"
                           class="nav-link">Giảng viên</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index.php?act=khdatggv"
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
                                <h1 class="h2">Khoá học</h1>
                            </div>
                            <a href="index.php?act=themmh"
                               class="btn btn-success">Thêm môn học</a>
                        </div>
                        <div class="card-columns">
                            <?php
                            $iduser = $_SESSION['iduser'];
                            //var_dump($mh);
                            //echo $_SESSION['iduser'];
                            if(isset($mh)&&(count($mh)>0)){
                                $i=1;
                                foreach($mh as $htmh){
                                    $idsubject = $htmh['idsubject'];
                                    $_SESSION['idsubject']  = $idsubject;
                                    //echo $htmh['idsubject'];
                                    echo
                                    '<div class="card">
                                        <div class="card-header">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="fixed-student-student-take-course.html">
                                                        <img src="assets/images/learnplus.png"
                                                            alt="Card image cap"
                                                            width="100"
                                                            class="rounded">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="card-title m-0"><a href="fixed-student-take-course.html">'.$htmh['name'].'</a></h4>
                                                    <small class="text-muted">'.$htmh['description'].'</small>
                                                </div>
                                                <div class="card-footer bg-white">
                                                    <a href="index.php?act=dkkhgv&idsubject='.$idsubject.'&iduser='.$iduser.'" class="btn btn-primary btn-sm">Tham gia khoá học<i class="material-icons btn__icon--right">play_circle_outline</i></a>
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