<?php
include "../admin/config.php" ; 
$sql = mysqli_query($koneksi,"insert into profile_respondens(
    usia,
    pendidikan,
    pendapatan,
    profesi,
    responden,
    token
)values(
    '".$_POST['usia']."',
    '".$_POST['pendidikan']."',
    '".$_POST['pendapatan']."',
    '".$_POST['profesi']."', 
    '".$_POST['responden']."', 
    '".$_POST['token']."'
)");
if($sql){
    echo "success";
}else{
    echo "failed";
}

?>