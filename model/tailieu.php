<?php 
function xoatl($id){
    $conn = connectdb();
    $sql = "DELETE FROM documents WHERE iddocument=".$id;
    $conn->exec($sql);
}

function laytlsua($id){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM documents WHERE iddocument=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tl=$stmt->fetchAll();
    return $tl;
}
function suatl($id, $title, $description, $document){
    $conn = connectdb();
    $sql = "UPDATE documents SET title='".$title."', description='".$description."', document='".$document."' WHERE iddocument=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function themtl($title, $description, $document){
    $conn = connectdb();
    $sql = "INSERT INTO documents (title, description, document) VALUES ('".$title."', '".$description."', '".$document."')";
    $conn->exec($sql);
}

function getall_tl(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM documents");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tl=$stmt->fetchAll();
    return $tl;
}
?>