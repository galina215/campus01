<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=db01-1";
$pdo = new PDO($dsn,"root","");
session_start();


if(empty($_SESSION['total'])){
  $total=find("total",1);
  $total['total']= $total['total']+1;
  save("total",$total);
  $_SESSION['total']=$total['total'];
}



function find($table,$def){
  global $pdo;
  if(is_array($def)){
    foreach($def as $k =>$v){
      $str[] = sprintf("%s='%s'",$k,$v);
    }
    return $pdo->query("select * from $table where ".implode("&&",$str)."")->fetch(PDO::FETCH_ASSOC);
  }else{
    return $pdo->query("select * from $table where id='$def'")->fetch(PDO::FETCH_ASSOC);
  }
}


function all($table,$def){
  global $pdo;
  if(is_array($def)){
    foreach($def as $k =>$v){
      $str[]=sprintf("%s='%s'",$k,$v);
    }
    // echo "select * from $table where ".implode(" && ",$str)."";
    return $pdo->query("select * from $table where ".implode("&&",$str)."")->fetchAll();
  }else{
    // echo "select * from $table";
    return $pdo->query("select * from $table")->fetchAll();
  }
}
function nums($table,$def){
  global $pdo;
  if(is_array($def)){
    foreach($def as $k =>$v){
      $str[] = sprintf("%s='%s'",$k,$v);
    }
    return $pdo->query("select count(*) from $table where ".implode("&&",$str)."")->fetchColumn();
  }else{
    return $pdo->query("select count(*) from $table")->fetchColumn();
  }
}

function del($table,$def){
  global $pdo;
  if(is_array($def)){
    foreach($def as $k =>$v){
      $str[] = sprintf("%s='%s'",$k,$v);
    }
    return $pdo->exec("delete from $table where ".implode("&&",$str)."");
  }else{
    return $pdo->exec("delete from $table where id='$def'");
  }
}
function save($table,$def){
  global $pdo;
  if(!empty($def['id'])){
    foreach($def as $k =>$v){
      if($k!='id'){

        $str[] = sprintf("%s='%s'",$k,$v);
      }
    }
    return $pdo->exec("update $table set ".implode(",",$str)." where id='".$def['id']."'");
  }else{
    return $pdo->exec("insert into $table(`".implode("`,`",array_keys($def))."`)value('".implode("','",$def)."')");
  }
}

function to($url){
  header("location:$url");
}

function q($str){
  global $pdo;
  return $pdo->query($str)->fetchAll();
}
?>