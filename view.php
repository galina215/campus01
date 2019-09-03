<?php
$do=(!empty($_GET['do']))?$_GET['do']:"";
switch($do){
    case "title":
?>
<h4 class="cent">新增網站標題</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">網站標題圖片</td>
        <td><input type="file" name="file" ></td>
    </tr>
    <tr>
        <td style="text-align:right">網站標題文字</td>
        <td><input type="text" name="text" ></td>
    </tr>
    <tr>
        
        <td colspan="2" class="cent">
        <input type="hidden" name="table" value="title">
        <input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "ad":
    ?>
<h4 class="cent">新增動態文字廣告</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">

    <tr>
        <td style="text-align:right">動態文字廣告</td>
        <td><input type="text" name="text" id=""></td>
    </tr>
    <tr>
        <input type="hidden" name="table" value="ad">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "mvim":
    ?>
<h4 class="cent">新增動畫圖片</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">網站動畫圖片</td>
        <td><input type="file" name="file" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="table" value="mvim">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "image":
    ?>
<h4 class="cent">新增校園映象圖片</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">校園映象圖片</td>
        <td><input type="file" name="file" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="table" value="image">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "news":
    ?>
<h4 class="cent">新增最新消息資料</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">

    <tr>
        <td style="text-align:right">最新消息資料</td>
        <td><textarea name="text" cols="40" rows="10"></textarea></td>
    </tr>
    <tr>
        <input type="hidden" name="table" value="news">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "admin":
    ?>
<h4 class="cent">新增管理者帳號</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">

    <tr>
        <td style="text-align:right">帳號：</td>
        <td><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td style="text-align:right">密碼：</td>
        <td><input type="password" name="pw" id=""></td>
    </tr>
    <tr>
        <td style="text-align:right">確認密碼：</td>
        <td><input type="password" name="pw2" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="table" value="admin">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "menu":
    ?>
<h4 class="cent">新增主選單</h4>
<hr>
<form action="api.php?do=newdata" method="post" enctype="multipart/form-data">
<table style="margin:auto;">

    <tr>
        <td style="text-align:right">主選單名稱：</td>
        <td><input type="text" name="text" id=""></td>
    </tr>
    <tr>
        <td style="text-align:right">選單連結網址：</td>
        <td><input type="text" name="href" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="table" value="menu">
        <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "updatetitle":
    ?>
<h4 class="cent">更新標題圖片</h4>
<hr>
<form action="api.php?do=updateimage" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">網站標題圖片</td>
        <td><input type="file" name="file" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="title">
        <td colspan="2" class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "updatemvim":
    ?>
<h4 class="cent">更新動畫圖片</h4>
<hr>
<form action="api.php?do=updateimage" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">動畫圖片</td>
        <td><input type="file" name="file" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="mvim">
        <td colspan="2" class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "updateimage":
    ?>
<h4 class="cent">更換校園映像圖片</h4>
<hr>
<form action="api.php?do=updateimage" method="post" enctype="multipart/form-data">
<table style="margin:auto;">
    <tr>
        <td style="text-align:right">校園映像圖片</td>
        <td><input type="file" name="file" id=""></td>
    </tr>

    <tr>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="image">
        <td colspan="2" class="cent"><input type="submit" value="更新"><input type="reset" value="重置"></td>
    </tr>
</table>
</form>
<?php
    break;
    case "submenu":
    ?>
    <h4 class="cent">編輯次選單</h4>
    <hr>
    <form action="api.php?do=editsub" method="post" enctype="multipart/form-data">
    <table style="margin:auto;"class="cent">
    <tr>
      <td>次選單名稱</td>
      <td>次選單連結網址</td>
      <td>刪除</td>
    </tr>
    <?php
    include_once "base.php";
    $subs=all('menu',['parent'=>$_GET['id']]);
    foreach($subs as $s){

    

    ?>
    <tr>
      <td><input type="text"name="text[]"value="<?=$s['text'];?>"></td>
      <td><input type="text"name="href[]"value="<?=$s['href'];?>"></td>
      <td><input type="checkbox" name="del[]" value="<?=$s['id'];?>"></td>
      <input type="hidden" name="id[]"value="<?=$s['id'];?>">
    </tr>
    <?php
        }

    ?>
    
        <tr id="more">
            <input type="hidden" name="table" value="menu">
            <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
            <td colspan="2" class="cent">
            <input type="submit" value="修改確認">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單" onclick="moresub()">
            </td>
        </tr>
    </table>
    </form>
    <script>
    function moresub(){
        let newtr=
      `<tr>
      <td><input type="text" name="text2[]"></td>
      <td><input type="text" name="href2[]"></td>
      
    </tr>`
    $("#more").before(newtr)
    }
    
    </script>
    <?php
    break;

}
?>