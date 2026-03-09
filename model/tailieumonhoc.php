<?php
function gvthemtl($idsubject, $title, $description, $document){
    $conn = connectdb();
    $stmt = $conn->prepare("INSERT INTO documents (title, description, document) VALUES ('".$title."', '".$description."', '".$document."')");
    $stmt->execute();
    $lastIdDocument = $conn->lastInsertId();
    $stmt = $conn->prepare("INSERT INTO subject_document (idsubject, iddocument) VALUES ('".$idsubject."', $lastIdDocument)");
    $stmt->execute();
}

if (!function_exists('laytlmhhv')) {
    function laytlmhhv($id){
        $conn = connectdb();
        $stmt = $conn->prepare( "SELECT sd.idsubject as sd_idsubject, s.name, s.description as s_description, d.title, d.description as d_description, d.document FROM subject_document sd JOIN subjects s ON sd.idsubject = s.idsubject JOIN documents d ON sd.iddocument = d.iddocument WHERE s.idsubject ='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tlmh=$stmt->fetchAll();
        return $tlmh;
    }
}

if (!function_exists('laytlmhgv')) {
    function laytlmhgv($id){
        $conn = connectdb();
        $stmt = $conn->prepare( "SELECT sd.idsubject as sd_idsubject, s.name, s.description as s_description, d.title, d.description as d_description, d.document FROM subject_document sd JOIN subjects s ON sd.idsubject = s.idsubject JOIN documents d ON sd.iddocument = d.iddocument WHERE s.idsubject ='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tlmh=$stmt->fetchAll();
        return $tlmh;
    }
}

function xoatlmh($id){
    $conn = connectdb();
    $sql = "DELETE FROM subject_document WHERE idsubject_document=".$id;
    $conn->exec($sql);
}
function laytlmhsua($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM subject_document WHERE idsubject_document=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tlmh=$stmt->fetchAll();
    return $tlmh;
}

function suatlmh($id, $idsubject, $iddocument){
    $conn = connectdb();
    $sql = "UPDATE subject_document SET idsubject='".$idsubject."', iddocument='".$iddocument."' WHERE idsubject_document=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function themtlmh($idsubject, $iddocument){
    $conn = connectdb();
    $sql = "INSERT INTO subject_document (idsubject, iddocument) VALUES ('".$idsubject."', '".$iddocument."')";
    $conn->exec($sql);
}
function getall_tlmh(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM subject_document");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tlmh=$stmt->fetchAll();
    return $tlmh;
}
?>