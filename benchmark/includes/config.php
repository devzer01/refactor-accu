<?php


if (eregi("config.php",$_SERVER['PHP_SELF'])) {
    Header("Location: ../index.html");
    die();
}


$dbhost = "localhost";
$dbname = "accubench";
$dbuname = "accu";
$dbpass = "accu";



$dbtype = "MySQL";




$index_file="index.php";
$admin_file="admin.php";

$mainframe = Array("frame.html","frame1.html");
// ��� Upload 仺� host ���� ����� ��� �ѹ�Ѵ��ҧ��ҧ���
$Host="AACCU/benchmark";

$admin_home="movie";

// Set Path Upload �ٻ   ���������� � chom mode  777 �������� ������

      if(strstr( PHP_OS, 'WIN') )
	{
	$SaveSMPath="products\\small";
	$SaveBGPath="products\\big";
	$SaveFilePath="lib";
    $file_slash="\\";
	}else{
	$SaveSMPath="products/small";
	$SaveBGPath="products/big";
   $file_slash="/";
		$SaveFilePath="lib";

	}



$SENDMAIL=ture;

define("ADMINISTRATOR",1000);
define("SUPER_USER",100);
define("MEMBER_USER",10);


?>
