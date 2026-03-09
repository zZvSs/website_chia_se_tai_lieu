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
<!--------------->
<div class="page ">
<?php
    $iduser = $_SESSION['iduser'];
    //var_dump($mh);
    //echo $_SESSION['iduser'];
    if(isset($tlmh)&&(count($tlmh)>0)){
            $httlmh =$tlmh[0];
            $idsubject = $httlmh['sd_idsubject'];
            $_SESSION['idsubject']  = $idsubject;
            //echo $htmh['idsubject'];
            echo'
    <div class="container page__container">
        <div class="media mb-headings align-items-center">
            <div class="media-left">
                <img src="assets/images/learnplus.png"
                        alt=""
                        width="80"
                        class="rounded">
            </div>
            <div class="media-body">
                <h1 class="h2">'.$httlmh['name'].'</h1>
                <p class="text-muted">'.$httlmh['s_description'].'</p>
            </div>
        </div>
        <div class="media mb-headings align-items-center">
            <div class="media-body">
                <h1 class="h2">Tài liệu</h1>
            </div>
            <a href="index.php?act=gvthemtl&idsubject='.$idsubject.'"
                class="btn btn-success">Thêm tài liệu</a>
        </div>';
        $i=1;
        foreach($tlmh as $httlmh){
        echo'
        
            <tbody class="list">

                <tr>
                    <td>
                        <div class="media align-items-center">
                            <a class="avatar avatar-4by3 avatar-sm mr-3">
                                <img src="assets/images/learnplus.png"
                                        alt="course"
                                        class="avatar-img rounded">
                            </a>
                            <div class="media-body">
                                <a class="text-body js-lists-values-course">
                                    <strong>'.$httlmh['title'].'-<a href="../admin/uploads/'.$httlmh['document'].'" target="_blank" >'.$httlmh['document'].'</a></strong></a><br>
                                <small class="text-muted mr-1">
                                    '.$httlmh['d_description'].'
                                </small>
                                
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>';
    
    $i++ ;
        }
    } 
    ?>
    </div>
</div>

<div class="container page__container">
    <div class="footer">
    </div>
</div>
</div>