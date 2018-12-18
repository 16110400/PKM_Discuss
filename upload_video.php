<?php
 
error_reporting(1);

require_once ('koneksi.php');
 
extract($_POST);
 
$target_dir = "video/";
$deskripsi = $_POST['des'];
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "MP4" && $imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 
 
else
{
 
$video_path=$_FILES['fileToUpload']['name'];
 
mysqli_query("insert into video(nama_video,deskripsi_video) values('$video_path','$deskripsi')");
 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
 
echo "uploaded ";
 
}
 
}
 
?>
