<?php
$do=(!empty($_GET['do']))?$_GET['do']:"";
switch($do){
    case "title":
?>
<h4 class="cent">新增網站標題</h4>
<hr>
<form action="api.php?do=newData" method="post" enctype="multipart/form-data"></form>
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
}