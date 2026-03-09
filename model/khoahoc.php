<?php



function xoakh($id){
    $conn = connectdb();
    $sql = "DELETE FROM course WHERE idcourse=".$id;
    $conn->exec($sql);
}
function laykhsua($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM course WHERE idcourse=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kh=$stmt->fetchAll();
    return $kh;
}

function suakh($id, $idsubject, $iduser){
    $conn = connectdb();
    $sql = "UPDATE course SET idsubject='".$idsubject."', iduser='".$iduser."' WHERE idcourse=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function themkh($idsubject, $iduser){
    $conn = connectdb();
    $sql = "INSERT INTO course (idsubject, iduser) VALUES ('".$idsubject."', '".$iduser."')";
    $conn->exec($sql);
}
function getall_kh(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM course");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kh=$stmt->fetchAll();
    return $kh;
}
?>