<?php
    session_start();
    ob_start();

    include "../model/connectdb.php";
    include "../model/nguoidung.php";
    include "../model/tailieu.php";
    include "../model/monhoc.php";
    include "../model/tailieumonhoc.php";
    include "../model/khoahoc.php";


    connectdb();

    include "view/header.php";

    include "view/slide.php";

    if(isset($_GET["act"])){

        $act=$_GET["act"];
    
        switch($act){

            case 'xoakh':
                if(isset($_GET['idcourse'])){
                    $id=$_GET['idcourse'];
                    xoakh($id);
                }
                $kh=getall_kh();
                include 'view/khoahoc.php';
                break;
            
            
            case 'suakh':
                if(isset($_GET['idcourse'])){
                    $id=$_GET['idcourse'];
                    $khsua=laykhsua($id);
                    $kh=getall_kh();
                    include 'view/suakh.php';
                }
            
                if(isset($_POST['suakh']) ){
                    $id=$_POST['idcourse'];
                    $idsubject=$_POST['idsubject'];
                    $iduser=$_POST['iduser'];
                    suakh($id, $idsubject, $iduser);
                    $kh = getall_kh();
                    include 'view/khoahoc.php';
                }
            
                break;
            
            case 'themkh':
                if(isset($_POST['themkh'])){
                    $idsubject=$_POST['idsubject'];
                    $iduser=$_POST['iduser'];
                    themkh($idsubject, $iduser);
                    $kh=getall_kh();
                    include 'view/khoahoc.php';
                    break;
                }
                include 'view/themkh.php';
                break;
            
            case 'khoahoc':
                $kh=getall_kh();
                include 'view/khoahoc.php';
                break;

            case 'xoatlmh':
                if(isset($_GET['idsubject_document'])){
                    $id=$_GET['idsubject_document'];
                    xoatlmh($id);
                }
                $tlmh=getall_tlmh();
                include 'view/tailieumonhoc.php';
                break;


            case 'suatlmh':
                if(isset($_GET['idsubject_document'])){
                    $id=$_GET['idsubject_document'];
                    $tlmhsua=laytlmhsua($id);
                    $tlmh=getall_tlmh();
                    include 'view/suatlmh.php';
                }

                if(isset($_POST['suatlmh']) ){
                    $id=$_POST['idsubject_document'];
                    $idsubject=$_POST['idsubject'];
                    $iddocument=$_POST['iddocument'];
                    suatlmh($id, $idsubject, $iddocument);
                    $tlmh = getall_tlmh();
                    include 'view/tailieumonhoc.php';
                }

                break;

            case 'themtlmh':
                if(isset($_POST['themtlmh'])){
                    $idsubject=$_POST['idsubject'];
                    $iddocument=$_POST['iddocument'];
                    themtlmh($idsubject, $iddocument);
                    $tlmh=getall_tlmh();
                    include 'view/tailieumonhoc.php';
                    break;
                }
                include 'view/themtlmh.php';
                break;

            case 'tailieumonhoc':
                $tlmh=getall_tlmh();
                include 'view/tailieumonhoc.php';
                break;

            case 'xoamh':
                if(isset($_GET['idsubject'])){
                    $id=$_GET['idsubject'];
                    xoamh($id);
                }
                $mh=getall_mh();
                include 'view/monhoc.php';
                break;


            case 'suamh':
                if(isset($_GET['idsubject'])){
                    $id=$_GET['idsubject'];
                    $mhsua=laymhsua($id);
                    $mh=getall_mh();
                    include 'view/suamh.php';
                }

                if(isset($_POST['suamh']) ){
                    $id=$_POST['idsubject'];
                    $name=$_POST['name'];
                    $description=$_POST['description'];
                    suamh($id, $name, $description);
                    $mh = getall_mh();
                    include 'view/monhoc.php';

                }

                break;

            case 'themmh':
                if(isset($_POST['themmh'])){
                    $name=$_POST['name'];
                    $description=$_POST['description'];
                    themmh($name, $description);
                    $mh=getall_mh();
                    include 'view/monhoc.php';
                    break;
                }
                include 'view/themmh.php';
                break;

            case 'monhoc':
                $mh=getall_mh();
                include 'view/monhoc.php';
                break;

            case 'xoatl':
                if(isset($_GET['iddocument'])){
                    $id=$_GET['iddocument'];
                    xoatl($id);
                }
                $tl=getall_tl();
                include 'view/tailieu.php';
                break;


            case 'suatl':
                if(isset($_GET['iddocument'])){
                    $id=$_GET['iddocument'];
                    $tlsua=laytlsua($id);
                    $tl=getall_tl();
                    include 'view/suatl.php';
                }

                if(isset($_POST['suatl']) ){
                    $id=$_POST['iddocument'];
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $document=$_FILES['document']['name'];
                    $role=$_POST['role'];
                    suatl($id, $title, $description, $document);
                    move_uploaded_file($_FILES['document']['tmp_name'], "uploads/".$_FILES['document']['name']);
                    $tl = getall_tl();
                    include 'view/tailieu.php';

                }

                break;

            case 'themtl':
                if(isset($_POST['themtl'])){
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $document=$_FILES['document']['name'];
                    move_uploaded_file($_FILES['document']['tmp_name'], "../admin/uploads/".$_FILES['document']['name']);
                    themtl($title, $description, $document,);
                    $tl=getall_tl();
                    include 'view/tailieu.php';
                    break;
                }
                include 'view/themtl.php';
                break;

            case 'tailieu':
                $tl=getall_tl();
                include 'view/tailieu.php';
                break;

            case 'xoand':
                if(isset($_GET['iduser'])){
                    $id=$_GET['iduser'];
                    xoand($id);
                }
                $nd=getall_nd();
                include 'view/nguoidung.php';
                break;

            case 'suand':
                if(isset($_GET['iduser'])){
                    $id=$_GET['iduser'];
                    $ndsua=layndsua($id);
                    $nd=getall_nd();
                    include 'view/suand.php';
                }

                if(isset($_POST['suand']) ){
                    $id=$_POST['iduser'];
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $role=$_POST['role'];
                    suand($id, $name, $email, $password, $role);
                    $nd = getall_nd();
                    include 'view/nguoidung.php';
                }

                break;

            case 'themnd':
                if(isset($_POST['themnd'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $role=$_POST['role'];
                    themnd($name, $email, $password, $role);
                    $nd=getall_nd();
                    include 'view/nguoidung.php';
                    break;
                }
                include 'view/themnd.php';
                break;
            
            case 'nguoidung':
                $nd=getall_nd();
                include 'view/nguoidung.php';
                break;
    
            case 'menu':
                include 'view/menu.php';
                break;
    
            case 'trangchu':
                include 'view/home.php';
                break;
    
            default:
                include "view/home.php";
        
                break;
        }
    }
    else{
            include "view/home.php";
        }

    include "view/footer.php";

?>