<?php
include_once "base.php";

$do=(!empty($_GET['do']))?$_GET['do']:"";

switch($do){
    case "total":
        $total=find("total",1);
        $total['total']=$_POST['total'];
        save("total",$total);

        to("admin.php?do=total");
    break;
    case "bottom":
        $bottom=find("bottom",1);
        $bottom['bottom']=$_POST['bottom'];
        save("bottom",$bottom);

        to("admin.php?do=bottom");
    break;
    case "newdata":

        $table=$_POST['table'];
        if(!empty($_FILES['file']['tmp_name'])){
            $data['file']=$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'],"./img/".$data['file']);
        }

        switch($table){
            case "title":
            case "ad":
            case "news":
                $data['text']=$_POST['text'];
            break;
            case "admin":
                $data['acc']=$_POST['acc'];
                $data['pw']=$_POST['pw'];
            break;
            case "menu":
                $data['text']=$_POST['text'];
                $data['href']=$_POST['href'];
            break;

        }

        save($table,$data);
        to("admin.php?do=$table");
    break;
    case "editdata":
        $table=$_POST['table'];

        foreach($_POST['id'] as $k =>$id){
            if(in_array($id,$_POST['del'])){
                del($table,$id);
            }else{
                $data=find($table,$id);

                switch($table){
                    case "title":
                        $data['text']=$_POST['text'][$key];
                        $data['sh']=($_POST['sh']==$id)?1:0;
                    break;
                    case "mvim":
                    case "image":
                        $data['sh']=(in_array($id,$_POST['sh']))?"checked":"";
                    break;
                    case "ad":
                    case "news":
                        $data['text']=$_POST['text'][$key];
                        $data['sh']=(in_array($id,$_POST['sh']))?"checked":"";
                    break;
                    case "admin":
                        $data['acc']=$_POST['acc'][$key];
                        $data['pw']=$_POST['pw'][$key];
                    break;
                    case "menu":
                        $data['text']=$_POST['text'][$key];
                        $data['href']=$_POST['href'][$key];
                        $data['sh']=(in_array($id,$_POST['sh']))?"checked":"";
                    break;


                }
                save($table,$data);
            }
        }
        to("admin.php?do=$table");
        break;
        case "updateimage":
            $table=$_POST['table'];
            $image=find($table,$_POST['id']);

            if(!empty($_FILES['file']['tmp_name'])){
                $image['file']=$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'],"./img/".$image['file']);
            }
            save($table,$image);
            to("admin.php?do=$table");
        break;
        case "editsub":
            $table=$_POST['table'];
            $parent=$_POST['parent'];

            foreach($_POST['id'] as $k =>$id){
                if(in_array($id,$_POST['del'])){
                    del($table,$id);
                }else{
                    $sub=find("menu",$id);
                    $sub['text']=$_POST['text'][$k];
                    $sub['href']=$_POST['href'][$k];
                    save("menu",$sub);
                }
            }

            if(!empty($_POST['text2'])){
                foreach($_POST['text2'] as $k =>$newtext){
                    if(empty($newtext))continue;
                    $new['text']=$newtext;
                    $new['href']=$_POST['href2'][$k];
                    $new['parent']=$parent;
                    $new['sh']="checked";
                    save("menu",$new);

                }
            }
            to("admin.php?do=menu");
        break;
        default:

        echo "非法入侵";



    

}

?>