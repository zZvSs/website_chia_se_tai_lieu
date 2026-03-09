<?php

session_start();
ob_start();

include "model/connectdb.php";
include "model/nguoidung.php";
include "model/tailieu.php";
include "model/monhoc.php";
include "model/tailieumonhoc.php";
include "model/khoahoc.php";


connectdb();
       
        if(isset($_GET["act"])){

                $act=$_GET["act"];
            
                switch($act){

                    case 'gvthemtl':

                        if(isset($_GET['idsubject'])){
                            $idsubject = isset($_GET['idsubject']);
                            laymhsua($idsubject);
                            getall_mh();
                        }


                        if(isset($_POST['gvthemtl'])){
                            $title=$_POST['title'];
                            $description=$_POST['description'];
                            $document=$_FILES['document']['name'];
                            $idsubject = $_POST['idsubject'];
                            move_uploaded_file($_FILES['document']['tmp_name'], "admin/uploads/".$_FILES['document']['name']);
                            
                            
                            

                            gvthemtl($idsubject, $title, $description, $document,);
                            
                            header('location:index.php?act=laytlmhgv&idsubject='.$idsubject.'');
                            exit();
                        }

                        include "view/header.php";
                        include "view/themtl.php";
                        break;

                    case 'laytlmhhv':

                        if(isset($_GET['idsubject'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            $tlmh= laytlmhhv($idsubject);
                            
                            include "view/header.php";
                            include "view/tailieuhv.php";
                            break;
                            
                        }

                    case 'laytlmhgv':

                        if(isset($_GET['idsubject'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            $tlmh= laytlmhgv($idsubject);
                            
                            include "view/header.php";
                            include "view/tailieugv.php";
                            break;
                            
                        }

                    case 'dkkhgv':

                        if(isset($_GET['idsubject']) && isset($_GET['iduser'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            dkkhgv($idsubject,$iduser);
    
                        }
                        header('location:index.php?act=giangvien');
                        exit();

                    case 'dkkhhv':

                        if(isset($_GET['idsubject']) && isset($_GET['iduser'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            dkkhhv($idsubject,$iduser);
    
                        }
                        header('location:index.php?act=hocvien');
                        exit();

                    case 'huykhgv':

                        if(isset($_GET['idsubject']) && isset($_GET['iduser'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            huykhgv($idsubject,$iduser);
                            
    
                        }
                        header('location:index.php?act=khdatggv');
                        exit();

                    case 'huykhhv':

                        if(isset($_GET['idsubject']) && isset($_GET['iduser'])){
                            $idsubject = $_GET['idsubject'];
                            $iduser = $_SESSION['iduser'];

                            huykhhv($idsubject,$iduser);
                            
                        }
                        
                        header('location:index.php?act=khdatghv');
                        exit();

                    case 'khdatghv':
                        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                            
                            $iduser = $_SESSION['iduser'];
                            $mh=laykhdatg($iduser);
                            
                            
                            //$mh=getall_mh();
                            include "view/header.php";
                            include 'view/khdatghv.php';
                            break;
                        }
                        else{
                            header('location:index.php?act=hocvien');
                            exit(); 
                        }

                    case 'khdatggv':
                        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                            
                            $iduser = $_SESSION['iduser'];
                            $mh=laykhdatg($iduser);
                            
                            
                            //$mh=getall_mh();
                            include "view/header.php";
                            include 'view/khdatggv.php';
                            break;
                        }
                        else{
                            header('location:index.php?act=giangvien');
                            exit(); 
                        }

                    case 'themmh':
                        if(isset($_POST['themmh'])){
                            $name=$_POST['name'];
                            $description=$_POST['description'];
                            themmh($name, $description);
                            $mh=getall_mh();
                            include 'view/header.php';
                            include 'view/giangvien.php';
                            break;
                        }
                        include 'view/header.php';
                        include 'view/themmh.php';
                        break;

                    case 'giangvien':

                        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                            
                            $iduser = $_SESSION['iduser'];
                            $idnganh = $_SESSION['idnganh'];
                            $mh=laykhchuatg($iduser,$idnganh);
                            
                            
                            //$mh=getall_mh();
                            include "view/header.php";
                            include 'view/giangvien.php';
                            break;
                        }
                        else{
                            header('location:index.php?act=dangnhap');
                            exit(); 
                        }
                        
            
                    case 'hocvien':
                        if(isset($_SESSION['email']) && isset($_SESSION['password'])){

                            $iduser = $_SESSION['iduser'];
                            $idnganh = $_SESSION['idnganh'];
                            $mh=laykhchuatg($iduser,$idnganh);
                            // if (isset($idnganh) && !empty($idnganh)) {
                            //     $_SESSION['idnganh'] = $idnganh;
                            // } else {
                            //     die("Lỗi: Giá trị idnganh không hợp lệ hoặc không được xác định.");
                            // }
                            include "view/header.php";
                            include 'view/hocvien.php';
                            break;
                        }
                        else{
                            header('location:index.php?act=dangnhap');
                            exit(); 
                        }
                         
                    case 'dangnhap':
                        if(isset($_POST['dangnhap'])){

                            
                            $email= $_POST['email'];
                            $password = $_POST['password'];
                            $kiemtrand = kiemtrand($email,$password);
                        

                            if($kiemtrand){
                                $iduser = $kiemtrand[0]['iduser'];
                                $role = $kiemtrand[0]['role'];
                                $name = $kiemtrand[0]['name'];
                                $idnganh = $kiemtrand[0]['idnganh'];

                                if($role == "Giảng viên"){
                                    $_SESSION['idnganh'] =$idnganh;
                                    $_SESSION['email'] = $_POST['email'];
                                    $_SESSION['password'] = $_POST['password'];
                                    $_SESSION['name'] = $name;
                                    $_SESSION['iduser'] = $iduser;
                                    header('location:index.php?act=giangvien');
                                    exit();
                                } 
                                else if($role == "Học viên"){
                                    $_SESSION['idnganh'] =$idnganh;
                                    $_SESSION['email'] = $_POST['email'];
                                    $_SESSION['password'] = $_POST['password'];
                                    $_SESSION['name'] =$name;
                                    $_SESSION['iduser'] = $iduser;
                                    header('location:index.php?act=hocvien');
                                    exit();
                                }
                                else{
                                    $_SESSION['massge'] = "tài khoản sai nguoi dung không đúng";
                                }
                            
                            }else{
                                $_SESSION['massge'] = "tài khoản mạt khẩu không đúng";
                            }        

                        }
                        include 'view/dangnhap.php';
                        break;
                    case 'dangxuat':
                        session_unset();
                        session_destroy();

                        header('location:index.php?act=dangnhap');
                        exit();

                    
                    default:
                        header('location:index.php?act=dangnhap');
                        exit();

                }
            }else{
                header('location:index.php?act=dangnhap');
                exit();
            }
            
    
    

    include "view/footer.php";


?>