<?php
 
error_reporting(1);
 
require_once ('koneksi.php');
 
mysql_select_db("discuss",$koneksi);
 
extract($_POST);
 
$target_dir = "image/";
$deskripsi = $_POST['des'];
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "JPEG" && $imageFileType != "JPG" && $imageFileType != "GIF" && $imageFileType != "PNG" && $imageFileType != "BMP" && $imageFileType != "TIFF" && $imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "gif" && $imageFileType != "png" && $imageFileType != "bmp" && $imageFileType != "tiff")
{
    echo "File Format Not Suppoted";
} 
 
else
{
 
$video_path=$_FILES['fileToUpload']['name'];
 
mysql_query("insert into video(video_name,deskripsi_video) values('$video_path','$deskripsi')");
 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
 
echo "uploaded ";
 
}
 
}
 
?>
