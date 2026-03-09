<?php 

function kiemtrand($email,$password){
    $conn= connectdb();
    $sql = "SELECT * FROM users WHERE email = '".$email."' AND password='".$password."' ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqtaikhoan= $stmt->fetchAll();
    
    return $kqtaikhoan;
    
}


function xoand($id){
    $conn = connectdb();
    $sql = "DELETE FROM users WHERE iduser=".$id;
    $conn->exec($sql);
}
function layndsua($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users WHERE iduser=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $nd=$stmt->fetchAll();
    return $nd;
}

function suand($id, $name, $email, $password, $role){
    $conn = connectdb();
    $sql = "UPDATE users SET name='".$name."', email='".$email."', password='".$password."', role='".$role."' WHERE iduser=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function themnd($name, $email, $password, $role){
    $conn = connectdb();
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('".$name."', '".$email."', '".$password."', '".$role."')";
    $conn->exec($sql);
}
function getall_nd(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $nd=$stmt->fetchAll();
    return $nd;
}


?>