<?php


if (eregi("config.php",$_SERVER['PHP_SELF'])) {
    Header("Location: ../index.html");
    die();
}


$dbhost = "localhost";
$dbname = "aaccu02_xmb2";
$dbuname = "aaccu02";
$dbpass = "nkhp1515";



$dbtype = "MySQL";




$index_file="index.php";
$admin_file="admin.php";

$mainframe = Array("frame.html","frame1.html");
// ��� Upload 仺� host ���� ����� ��� �ѹ�Ѵ��ҧ��ҧ���
$Host="http://www.aaccu.net/benchmarking";

$admin_home="movie";

// Set Path Upload �ٻ   ���������� � chom mode  777 �������� ������
$OS="WINDOWS_NT";
      if($OS=="WINDOWS_NT")
	{
	$SaveSMPath="products\\small";
	$SaveBGPath="products\\big";
    $file_slash="\\";
	}else{
	$SaveSMPath="products/small";
	$SaveBGPath="products/big";
   $file_slash="/";

	}



$SENDMAIL=ture;

define("ADMINISTRATOR",1000);
define("SUPER_USER",100);
define("MEMBER_USER",10);


?>