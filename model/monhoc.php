<?php
if (!function_exists('dkkhgv')) {
    function dkkhgv($idsubject,$iduser){
        $conn = connectdb();
        $sql = "INSERT INTO course (idsubject, iduser) VALUES ('".$idsubject."', '".$iduser."');";
        $conn->exec($sql);
    }
}

if (!function_exists('dkkhhv')) {
    function dkkhhv($idsubject,$iduser){
        $conn = connectdb();
        $sql = "INSERT INTO course (idsubject, iduser) VALUES ('".$idsubject."', '".$iduser."');";
        $conn->exec($sql);
    }
}

if (!function_exists('huykhgv')) {
    function huykhgv($idsubject,$iduser){
        $conn = connectdb();
        $sql = "DELETE FROM course WHERE idsubject = '".$idsubject."' AND iduser = '".$iduser."';";
        $conn->exec($sql);
    }
}

if (!function_exists('huykhhv')) {
    function huykhhv($idsubject,$iduser){
        $conn = connectdb();
        $sql = "DELETE FROM course WHERE idsubject = '".$idsubject."' AND iduser = '".$iduser."';";
        $conn->exec($sql);
    }
}

if (!function_exists('laykhdatg')) {
    function laykhdatg($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM subjects WHERE idsubject IN (SELECT idsubject FROM course WHERE iduser ='".$id."' )");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kh=$stmt->fetchAll();
        return $kh;
    }
}

if (!function_exists('laykhchuatg')) {
    function laykhchuatg($id,$idnganh){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM subjects WHERE idnganh = '".$idnganh."' AND idsubject NOT IN (SELECT idsubject FROM course WHERE iduser ='".$id."')");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kh=$stmt->fetchAll();
        return $kh;
    }
}
function xoamh($id){
    $conn = connectdb();
    $sql = "DELETE FROM subjects WHERE idsubject=".$id;
    $conn->exec($sql);
}
function laymhsua($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM subjects WHERE idsubject=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $mh=$stmt->fetchAll();
    return $mh;
}

function suamh($id, $name, $description){
    $conn = connectdb();
    $sql = "UPDATE subjects SET name='".$name."', description='".$description."' WHERE idsubject=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function themmh($name, $description){
    $conn = connectdb();
    $sql = "INSERT INTO subjects (name, description) VALUES ('".$name."', '".$description."')";
    $conn->exec($sql);
}
function getall_mh(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM subjects");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $mh=$stmt->fetchAll();
    return $mh;
}
?>