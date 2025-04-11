<?php 
// koneksi database
include '../../include/koneksi.php';

$random = mysqli_query($koneksi, "SELECT *FROM `customer` WHERE bill>=100000 ORDER BY RAND() LIMIT 100");

$arrays = array("1", "2");
$rand = array_rand($arrays);
echo $arrays[$rand];

if($random)
{
	print "<script>alert(\"Success!!!\");
	location.href=\"index.php\";
	</script>";
}
else
{
	print "<script>alert(\"Failed !!!\");
	location.href=\"index.php\";
	</script>";
}
?>