<?php
class Data {

public $id;
public $title;
public $post;
public $errors = [];

//return all articles
public static function getAll($conn) {
    
    $sql = "SELECT id,title,substring(post,1,30) as post
    FROM article 
    ORDER BY id DESC";
    
    $result = $conn->query($sql);
   
    return $result->fetchAll(PDO::FETCH_ASSOC);
    }


}