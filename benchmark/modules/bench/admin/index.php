<?php
//###############################################################
//### Gen Code  By phpform V 4.012  
//###  Module For db table  bench
//###
//###  By Mr. Piya Pimchankam
//###  email : a_piya_p@hotmail.com
//###############################################################
$m		=	isset( $_GET['m'])?$_GET['m']:$_POST['m'];
$op		=	isset( $_GET['op'])?$_GET['op']:$_POST['op'];
$url	=	isset( $_GET['url'])?$_GET['url']:$_POST['url'];
$MEMBER = $_GET['d'];

				//$cookie = cookieAdmindecode($ADMIN);
				$cookie = cookieMemberdecode($MEMBER);
				//$mem_id=$cookie[0];
				//$username=$cookie[1];
				//$password=$cookie[2];
				$member_ofck=$cookie[3];
				//$name=$cookie[4];
				//$brance_id=$cookie[5];

				if( $member_ofck!=ADMINISTRATOR )
				{
					Header("Refresh: 0;url=$index_file?m=member&op=login");
					exit();
				}

$module_name = "bench";
$gr = "admin";
$index_file = "admin.php";

$template->set_filenames(array(
		'body' => $mainframe[1])
	);
//######################

if(empty($op)){$op="";}

switch($op)
{
	    //#####   bench #########
		case "savebench":
			Savebench($bench_id,$mem_id,$balance_sheet,$C6,$C7,$C8,$C11,$C14,$C15,$C16,$C19,$C20,$C21,$C22,$C23,$C26,$C27,$C28,$C29,$C32,$C33,$C34,$C35,$C36,$C37,$C40,$C41,$C42,$C43,$C46,$C47,$C48,$C49,$C52,$C53,$C54,$C55,$C56,$income_month,$income_ended,$C63,$C64,$C65,$C66,$C67,$C68,$C69,$C72,$C73,$C74,$C75,$C76,$C78,$C79,$C80,$C81,$C82,$C83,$C84,$C85,$C86,$C87,$C88,$C91,$C92,$C93,$C94,$C95,$C96,$C98,$C99,$C100,$C101,$C102,$C103,$C104,$C105,$C106,$C107,$C108,$C109,$C110,$C111,$C112,$C113,$ANS6,$ANS7,$ANS8,$ANS16,$ANS21,$ANS22,$ANS23,$ANS26,$ANS27,$ANS29,$ANS32,$ANS33,$ANS35,$ANS36,$ANS37,$ANS40,$ANS41,$ANS43,$ANS46,$ANS48,$ANS52,$ANS53,$ANS54,$ANS65,$ANS66,$ANS67,$ANS68,$ANS72,$ANS73,$ANS75,$ANS83,$ANS84,$ANS87,$ANS88,$ANS92,$ANS98,$ANS99,$ANS100,$ANS101,$ANS102,$ANS103,$ANS104,$ANS105,$ANS106,$ANS107,$ANS108,$ANS109,$ANS110,$ANS111,$ANS112,$ANS113,$remark6,$remark7,$remark8,$remark16,$remark21,$remark22,$remark23,$remark26,$remark27,$remark29,$remark32,$remark33,$remark35,$remark36,$remark37,$remark40,$remark41,$remark43,$remark46,$remark48,$remark52,$remark53,$remark54,$remark65,$remark66,$remark67,$remark68,$remark72,$remark73,$remark75,$remark83,$remark84,$remark87,$remark88,$remark92,$remark98,$remark99,$remark100,$remark101,$remark102,$remark103,$remark104,$remark105,$remark106,$remark107,$remark108,$remark109,$remark110,$remark111,$remark112,$remark113);
			break;
		case "inputbench":
			//Inputbench($bench_id);
		  GetBench($bench_id);
			break;
		case "listbench":
			AListbench();
			break;
		case "detailbench":
			Detailbench($bench_id);
			break;

		//###########################
		case "del":
			Del($tb,$key,$id,$bk,$rt,$page);
			break;
	default :
AListbench();
		break;

}

function Del($tb,$key,$id,$bk,$rt,$page)
{
  global $admin,$db,$index_file,$module_name,$SaveSMPath,$SaveBGPath,$SaveFilePath, $template,$mainframe,$adminframe,$gr;


		unset($query);
		unset($result);

		$query="DELETE FROM $tb WHERE $key=$id ";
		$db->sql_query($query);
			if(!empty($rt))
			{
			$goto = "$index_file?m=$module_name&op=$rt&gr=$gr";
			}else{
			$goto="$index_file?m=$module_name&op=game&page=$page&gr=$gr#$bk";
			}
	Header("Refresh: 0;url=$goto");

	
}


function Savebench($bench_id,$mem_id,$balance_sheet,$C6,$C7,$C8,$C11,$C14,$C15,$C16,$C19,$C20,$C21,$C22,$C23,$C26,$C27,$C28,$C29,$C32,$C33,$C34,$C35,$C36,$C37,$C40,$C41,$C42,$C43,$C46,$C47,$C48,$C49,$C52,$C53,$C54,$C55,$C56,$income_month,$income_ended,$C63,$C64,$C65,$C66,$C67,$C68,$C69,$C72,$C73,$C74,$C75,$C76,$C78,$C79,$C80,$C81,$C82,$C83,$C84,$C85,$C86,$C87,$C88,$C91,$C92,$C93,$C94,$C95,$C96,$C98,$C99,$C100,$C101,$C102,$C103,$C104,$C105,$C106,$C107,$C108,$C109,$C110,$C111,$C112,$C113,$ANS6,$ANS7,$ANS8,$ANS16,$ANS21,$ANS22,$ANS23,$ANS26,$ANS27,$ANS29,$ANS32,$ANS33,$ANS35,$ANS36,$ANS37,$ANS40,$ANS41,$ANS43,$ANS46,$ANS48,$ANS52,$ANS53,$ANS54,$ANS65,$ANS66,$ANS67,$ANS68,$ANS72,$ANS73,$ANS75,$ANS83,$ANS84,$ANS87,$ANS88,$ANS92,$ANS98,$ANS99,$ANS100,$ANS101,$ANS102,$ANS103,$ANS104,$ANS105,$ANS106,$ANS107,$ANS108,$ANS109,$ANS110,$ANS111,$ANS112,$ANS113,$remark6,$remark7,$remark8,$remark16,$remark21,$remark22,$remark23,$remark26,$remark27,$remark29,$remark32,$remark33,$remark35,$remark36,$remark37,$remark40,$remark41,$remark43,$remark46,$remark48,$remark52,$remark53,$remark54,$remark65,$remark66,$remark67,$remark68,$remark72,$remark73,$remark75,$remark83,$remark84,$remark87,$remark88,$remark92,$remark98,$remark99,$remark100,$remark101,$remark102,$remark103,$remark104,$remark105,$remark106,$remark107,$remark108,$remark109,$remark110,$remark111,$remark112,$remark113)
{
  global $admin,$db,$index_file,$module_name,$SaveSMPath,$SaveBGPath,$SaveFilePath,$gr;

		$table="bench";
		if(empty($bench_id))
		{
		$field="bench_id,mem_id,balance_sheet,C6,C7,C8,C11,C14,C15,C16,C19,C20,C21,C22,C23,C26,C27,C28,C29,C32,C33,C34,C35,C36,C37,C40,C41,C42,C43,C46,C47,C48,C49,C52,C53,C54,C55,C56,income_month,income_ended,C63,C64,C65,C66,C67,C68,C69,C72,C73,C74,C75,C76,C78,C79,C80,C81,C82,C83,C84,C85,C86,C87,C88,C91,C92,C93,C94,C95,C96,C98,C99,C100,C101,C102,C103,C104,C105,C106,C107,C108,C109,C110,C111,C112,C113,ANS6,ANS7,ANS8,ANS16,ANS21,ANS22,ANS23,ANS26,ANS27,ANS29,ANS32,ANS33,ANS35,ANS36,ANS37,ANS40,ANS41,ANS43,ANS46,ANS48,ANS52,ANS53,ANS54,ANS65,ANS66,ANS67,ANS68,ANS72,ANS73,ANS75,ANS83,ANS84,ANS87,ANS88,ANS92,ANS98,ANS99,ANS100,ANS101,ANS102,ANS103,ANS104,ANS105,ANS106,ANS107,ANS108,ANS109,ANS110,ANS111,ANS112,ANS113,remark6,remark7,remark8,remark16,remark21,remark22,remark23,remark26,remark27,remark29,remark32,remark33,remark35,remark36,remark37,remark40,remark41,remark43,remark46,remark48,remark52,remark53,remark54,remark65,remark66,remark67,remark68,remark72,remark73,remark75,remark83,remark84,remark87,remark88,remark92,remark98,remark99,remark100,remark101,remark102,remark103,remark104,remark105,remark106,remark107,remark108,remark109,remark110,remark111,remark112,remark113";
		$data="NULL,'$mem_id','$balance_sheet','$C6','$C7','$C8','$C11','$C14','$C15','$C16','$C19','$C20','$C21','$C22','$C23','$C26','$C27','$C28','$C29','$C32','$C33','$C34','$C35','$C36','$C37','$C40','$C41','$C42','$C43','$C46','$C47','$C48','$C49','$C52','$C53','$C54','$C55','$C56','$income_month','$income_ended','$C63','$C64','$C65','$C66','$C67','$C68','$C69','$C72','$C73','$C74','$C75','$C76','$C78','$C79','$C80','$C81','$C82','$C83','$C84','$C85','$C86','$C87','$C88','$C91','$C92','$C93','$C94','$C95','$C96','$C98','$C99','$C100','$C101','$C102','$C103','$C104','$C105','$C106','$C107','$C108','$C109','$C110','$C111','$C112','$C113','$ANS6','$ANS7','$ANS8','$ANS16','$ANS21','$ANS22','$ANS23','$ANS26','$ANS27','$ANS29','$ANS32','$ANS33','$ANS35','$ANS36','$ANS37','$ANS40','$ANS41','$ANS43','$ANS46','$ANS48','$ANS52','$ANS53','$ANS54','$ANS65','$ANS66','$ANS67','$ANS68','$ANS72','$ANS73','$ANS75','$ANS83','$ANS84','$ANS87','$ANS88','$ANS92','$ANS98','$ANS99','$ANS100','$ANS101','$ANS102','$ANS103','$ANS104','$ANS105','$ANS106','$ANS107','$ANS108','$ANS109','$ANS110','$ANS111','$ANS112','$ANS113','$remark6','$remark7','$remark8','$remark16','$remark21','$remark22','$remark23','$remark26','$remark27','$remark29','$remark32','$remark33','$remark35','$remark36','$remark37','$remark40','$remark41','$remark43','$remark46','$remark48','$remark52','$remark53','$remark54','$remark65','$remark66','$remark67','$remark68','$remark72','$remark73','$remark75','$remark83','$remark84','$remark87','$remark88','$remark92','$remark98','$remark99','$remark100','$remark101','$remark102','$remark103','$remark104','$remark105','$remark106','$remark107','$remark108','$remark109','$remark110','$remark111','$remark112','$remark113'";
		SaveDB( $table,$field,$data);
		}else{
		$dataset="mem_id='$mem_id' ,balance_sheet='$balance_sheet' ,C6='$C6' ,C7='$C7' ,C8='$C8' ,C11='$C11' ,C14='$C14' ,C15='$C15' ,C16='$C16' ,C19='$C19' ,C20='$C20' ,C21='$C21' ,C22='$C22' ,C23='$C23' ,C26='$C26' ,C27='$C27' ,C28='$C28' ,C29='$C29' ,C32='$C32' ,C33='$C33' ,C34='$C34' ,C35='$C35' ,C36='$C36' ,C37='$C37' ,C40='$C40' ,C41='$C41' ,C42='$C42' ,C43='$C43' ,C46='$C46' ,C47='$C47' ,C48='$C48' ,C49='$C49' ,C52='$C52' ,C53='$C53' ,C54='$C54' ,C55='$C55' ,C56='$C56' ,income_month='$income_month' ,income_ended='$income_ended' ,C63='$C63' ,C64='$C64' ,C65='$C65' ,C66='$C66' ,C67='$C67' ,C68='$C68' ,C69='$C69' ,C72='$C72' ,C73='$C73' ,C74='$C74' ,C75='$C75' ,C76='$C76' ,C78='$C78' ,C79='$C79' ,C80='$C80' ,C81='$C81' ,C82='$C82' ,C83='$C83' ,C84='$C84' ,C85='$C85' ,C86='$C86' ,C87='$C87' ,C88='$C88' ,C91='$C91' ,C92='$C92' ,C93='$C93' ,C94='$C94' ,C95='$C95' ,C96='$C96' ,C98='$C98' ,C99='$C99' ,C100='$C100' ,C101='$C101' ,C102='$C102' ,C103='$C103' ,C104='$C104' ,C105='$C105' ,C106='$C106' ,C107='$C107' ,C108='$C108' ,C109='$C109' ,C110='$C110' ,C111='$C111' ,C112='$C112' ,C113='$C113' ,ANS6='$ANS6' ,ANS7='$ANS7' ,ANS8='$ANS8' ,ANS16='$ANS16' ,ANS21='$ANS21' ,ANS22='$ANS22' ,ANS23='$ANS23' ,ANS26='$ANS26' ,ANS27='$ANS27' ,ANS29='$ANS29' ,ANS32='$ANS32' ,ANS33='$ANS33' ,ANS35='$ANS35' ,ANS36='$ANS36' ,ANS37='$ANS37' ,ANS40='$ANS40' ,ANS41='$ANS41' ,ANS43='$ANS43' ,ANS46='$ANS46' ,ANS48='$ANS48' ,ANS52='$ANS52' ,ANS53='$ANS53' ,ANS54='$ANS54' ,ANS65='$ANS65' ,ANS66='$ANS66' ,ANS67='$ANS67' ,ANS68='$ANS68' ,ANS72='$ANS72' ,ANS73='$ANS73' ,ANS75='$ANS75' ,ANS83='$ANS83' ,ANS84='$ANS84' ,ANS87='$ANS87' ,ANS88='$ANS88' ,ANS92='$ANS92' ,ANS98='$ANS98' ,ANS99='$ANS99' ,ANS100='$ANS100' ,ANS101='$ANS101' ,ANS102='$ANS102' ,ANS103='$ANS103' ,ANS104='$ANS104' ,ANS105='$ANS105' ,ANS106='$ANS106' ,ANS107='$ANS107' ,ANS108='$ANS108' ,ANS109='$ANS109' ,ANS110='$ANS110' ,ANS111='$ANS111' ,ANS112='$ANS112' ,ANS113='$ANS113' ,remark6='$remark6' ,remark7='$remark7' ,remark8='$remark8' ,remark16='$remark16' ,remark21='$remark21' ,remark22='$remark22' ,remark23='$remark23' ,remark26='$remark26' ,remark27='$remark27' ,remark29='$remark29' ,remark32='$remark32' ,remark33='$remark33' ,remark35='$remark35' ,remark36='$remark36' ,remark37='$remark37' ,remark40='$remark40' ,remark41='$remark41' ,remark43='$remark43' ,remark46='$remark46' ,remark48='$remark48' ,remark52='$remark52' ,remark53='$remark53' ,remark54='$remark54' ,remark65='$remark65' ,remark66='$remark66' ,remark67='$remark67' ,remark68='$remark68' ,remark72='$remark72' ,remark73='$remark73' ,remark75='$remark75' ,remark83='$remark83' ,remark84='$remark84' ,remark87='$remark87' ,remark88='$remark88' ,remark92='$remark92' ,remark98='$remark98' ,remark99='$remark99' ,remark100='$remark100' ,remark101='$remark101' ,remark102='$remark102' ,remark103='$remark103' ,remark104='$remark104' ,remark105='$remark105' ,remark106='$remark106' ,remark107='$remark107' ,remark108='$remark108' ,remark109='$remark109' ,remark110='$remark110' ,remark111='$remark111' ,remark112='$remark112' ,remark113='$remark113' ";
		$condition=" bench_id='$bench_id' ";
		SaveEditDB( $table,$dataset,$condition);
		}
		Header("Refresh: 0;url=$index_file?m=$module_name&op=listbench&gr=$gr");

}



function Inputbench($bench_id)
{
  global $admin,$db,$index_file,$module_name,$SaveSMPath,$SaveBGPath,$SaveFilePath, $template,$mainframe,$adminframe,$gr;

						$mem_id="";
				$balance_sheet="";
				$C6="";
				$C7="";
				$C8="";
				$C11="";
				$C14="";
				$C15="";
				$C16="";
				$C19="";
				$C20="";
				$C21="";
				$C22="";
				$C23="";
				$C26="";
				$C27="";
				$C28="";
				$C29="";
				$C32="";
				$C33="";
				$C34="";
				$C35="";
				$C36="";
				$C37="";
				$C40="";
				$C41="";
				$C42="";
				$C43="";
				$C46="";
				$C47="";
				$C48="";
				$C49="";
				$C52="";
				$C53="";
				$C54="";
				$C55="";
				$C56="";
				$income_month="";
				$income_ended="";
				$C63="";
				$C64="";
				$C65="";
				$C66="";
				$C67="";
				$C68="";
				$C69="";
				$C72="";
				$C73="";
				$C74="";
				$C75="";
				$C76="";
				$C78="";
				$C79="";
				$C80="";
				$C81="";
				$C82="";
				$C83="";
				$C84="";
				$C85="";
				$C86="";
				$C87="";
				$C88="";
				$C91="";
				$C92="";
				$C93="";
				$C94="";
				$C95="";
				$C96="";
				$C98="";
				$C99="";
				$C100="";
				$C101="";
				$C102="";
				$C103="";
				$C104="";
				$C105="";
				$C106="";
				$C107="";
				$C108="";
				$C109="";
				$C110="";
				$C111="";
				$C112="";
				$C113="";
				$ANS6="";
				$ANS7="";
				$ANS8="";
				$ANS16="";
				$ANS21="";
				$ANS22="";
				$ANS23="";
				$ANS26="";
				$ANS27="";
				$ANS29="";
				$ANS32="";
				$ANS33="";
				$ANS35="";
				$ANS36="";
				$ANS37="";
				$ANS40="";
				$ANS41="";
				$ANS43="";
				$ANS46="";
				$ANS48="";
				$ANS52="";
				$ANS53="";
				$ANS54="";
				$ANS65="";
				$ANS66="";
				$ANS67="";
				$ANS68="";
				$ANS72="";
				$ANS73="";
				$ANS75="";
				$ANS83="";
				$ANS84="";
				$ANS87="";
				$ANS88="";
				$ANS92="";
				$ANS98="";
				$ANS99="";
				$ANS100="";
				$ANS101="";
				$ANS102="";
				$ANS103="";
				$ANS104="";
				$ANS105="";
				$ANS106="";
				$ANS107="";
				$ANS108="";
				$ANS109="";
				$ANS110="";
				$ANS111="";
				$ANS112="";
				$ANS113="";
				$remark6="";
				$remark7="";
				$remark8="";
				$remark16="";
				$remark21="";
				$remark22="";
				$remark23="";
				$remark26="";
				$remark27="";
				$remark29="";
				$remark32="";
				$remark33="";
				$remark35="";
				$remark36="";
				$remark37="";
				$remark40="";
				$remark41="";
				$remark43="";
				$remark46="";
				$remark48="";
				$remark52="";
				$remark53="";
				$remark54="";
				$remark65="";
				$remark66="";
				$remark67="";
				$remark68="";
				$remark72="";
				$remark73="";
				$remark75="";
				$remark83="";
				$remark84="";
				$remark87="";
				$remark88="";
				$remark92="";
				$remark98="";
				$remark99="";
				$remark100="";
				$remark101="";
				$remark102="";
				$remark103="";
				$remark104="";
				$remark105="";
				$remark106="";
				$remark107="";
				$remark108="";
				$remark109="";
				$remark110="";
				$remark111="";
				$remark112="";
				$remark113="";
				
		if( 1 and  !empty($bench_id))
		{
			$table="bench";
			$fieldArr ="bench_id,mem_id,balance_sheet,C6,C7,C8,C11,C14,C15,C16,C19,C20,C21,C22,C23,C26,C27,C28,C29,C32,C33,C34,C35,C36,C37,C40,C41,C42,C43,C46,C47,C48,C49,C52,C53,C54,C55,C56,income_month,income_ended,C63,C64,C65,C66,C67,C68,C69,C72,C73,C74,C75,C76,C78,C79,C80,C81,C82,C83,C84,C85,C86,C87,C88,C91,C92,C93,C94,C95,C96,C98,C99,C100,C101,C102,C103,C104,C105,C106,C107,C108,C109,C110,C111,C112,C113,ANS6,ANS7,ANS8,ANS16,ANS21,ANS22,ANS23,ANS26,ANS27,ANS29,ANS32,ANS33,ANS35,ANS36,ANS37,ANS40,ANS41,ANS43,ANS46,ANS48,ANS52,ANS53,ANS54,ANS65,ANS66,ANS67,ANS68,ANS72,ANS73,ANS75,ANS83,ANS84,ANS87,ANS88,ANS92,ANS98,ANS99,ANS100,ANS101,ANS102,ANS103,ANS104,ANS105,ANS106,ANS107,ANS108,ANS109,ANS110,ANS111,ANS112,ANS113,remark6,remark7,remark8,remark16,remark21,remark22,remark23,remark26,remark27,remark29,remark32,remark33,remark35,remark36,remark37,remark40,remark41,remark43,remark46,remark48,remark52,remark53,remark54,remark65,remark66,remark67,remark68,remark72,remark73,remark75,remark83,remark84,remark87,remark88,remark92,remark98,remark99,remark100,remark101,remark102,remark103,remark104,remark105,remark106,remark107,remark108,remark109,remark110,remark111,remark112,remark113";
			$searchkey=" and bench_id='$bench_id' ";
			$result=SearchDB( $searchkey,$table,$fieldArr);
			if($db->sql_numrows())
			{
				$row = $db->sql_fetchrow($result);
								$bench_id=$row["bench_id"];
				$mem_id=$row["mem_id"];
				$balance_sheet=$row["balance_sheet"];
				$C6=$row["C6"];
				$C7=$row["C7"];
				$C8=$row["C8"];
				$C11=$row["C11"];
				$C14=$row["C14"];
				$C15=$row["C15"];
				$C16=$row["C16"];
				$C19=$row["C19"];
				$C20=$row["C20"];
				$C21=$row["C21"];
				$C22=$row["C22"];
				$C23=$row["C23"];
				$C26=$row["C26"];
				$C27=$row["C27"];
				$C28=$row["C28"];
				$C29=$row["C29"];
				$C32=$row["C32"];
				$C33=$row["C33"];
				$C34=$row["C34"];
				$C35=$row["C35"];
				$C36=$row["C36"];
				$C37=$row["C37"];
				$C40=$row["C40"];
				$C41=$row["C41"];
				$C42=$row["C42"];
				$C43=$row["C43"];
				$C46=$row["C46"];
				$C47=$row["C47"];
				$C48=$row["C48"];
				$C49=$row["C49"];
				$C52=$row["C52"];
				$C53=$row["C53"];
				$C54=$row["C54"];
				$C55=$row["C55"];
				$C56=$row["C56"];
				$income_month=$row["income_month"];
				$income_ended=$row["income_ended"];
				$C63=$row["C63"];
				$C64=$row["C64"];
				$C65=$row["C65"];
				$C66=$row["C66"];
				$C67=$row["C67"];
				$C68=$row["C68"];
				$C69=$row["C69"];
				$C72=$row["C72"];
				$C73=$row["C73"];
				$C74=$row["C74"];
				$C75=$row["C75"];
				$C76=$row["C76"];
				$C78=$row["C78"];
				$C79=$row["C79"];
				$C80=$row["C80"];
				$C81=$row["C81"];
				$C82=$row["C82"];
				$C83=$row["C83"];
				$C84=$row["C84"];
				$C85=$row["C85"];
				$C86=$row["C86"];
				$C87=$row["C87"];
				$C88=$row["C88"];
				$C91=$row["C91"];
				$C92=$row["C92"];
				$C93=$row["C93"];
				$C94=$row["C94"];
				$C95=$row["C95"];
				$C96=$row["C96"];
				$C98=$row["C98"];
				$C99=$row["C99"];
				$C100=$row["C100"];
				$C101=$row["C101"];
				$C102=$row["C102"];
				$C103=$row["C103"];
				$C104=$row["C104"];
				$C105=$row["C105"];
				$C106=$row["C106"];
				$C107=$row["C107"];
				$C108=$row["C108"];
				$C109=$row["C109"];
				$C110=$row["C110"];
				$C111=$row["C111"];
				$C112=$row["C112"];
				$C113=$row["C113"];
				$ANS6=$row["ANS6"];
				$ANS7=$row["ANS7"];
				$ANS8=$row["ANS8"];
				$ANS16=$row["ANS16"];
				$ANS21=$row["ANS21"];
				$ANS22=$row["ANS22"];
				$ANS23=$row["ANS23"];
				$ANS26=$row["ANS26"];
				$ANS27=$row["ANS27"];
				$ANS29=$row["ANS29"];
				$ANS32=$row["ANS32"];
				$ANS33=$row["ANS33"];
				$ANS35=$row["ANS35"];
				$ANS36=$row["ANS36"];
				$ANS37=$row["ANS37"];
				$ANS40=$row["ANS40"];
				$ANS41=$row["ANS41"];
				$ANS43=$row["ANS43"];
				$ANS46=$row["ANS46"];
				$ANS48=$row["ANS48"];
				$ANS52=$row["ANS52"];
				$ANS53=$row["ANS53"];
				$ANS54=$row["ANS54"];
				$ANS65=$row["ANS65"];
				$ANS66=$row["ANS66"];
				$ANS67=$row["ANS67"];
				$ANS68=$row["ANS68"];
				$ANS72=$row["ANS72"];
				$ANS73=$row["ANS73"];
				$ANS75=$row["ANS75"];
				$ANS83=$row["ANS83"];
				$ANS84=$row["ANS84"];
				$ANS87=$row["ANS87"];
				$ANS88=$row["ANS88"];
				$ANS92=$row["ANS92"];
				$ANS98=$row["ANS98"];
				$ANS99=$row["ANS99"];
				$ANS100=$row["ANS100"];
				$ANS101=$row["ANS101"];
				$ANS102=$row["ANS102"];
				$ANS103=$row["ANS103"];
				$ANS104=$row["ANS104"];
				$ANS105=$row["ANS105"];
				$ANS106=$row["ANS106"];
				$ANS107=$row["ANS107"];
				$ANS108=$row["ANS108"];
				$ANS109=$row["ANS109"];
				$ANS110=$row["ANS110"];
				$ANS111=$row["ANS111"];
				$ANS112=$row["ANS112"];
				$ANS113=$row["ANS113"];
				$remark6=$row["remark6"];
				$remark7=$row["remark7"];
				$remark8=$row["remark8"];
				$remark16=$row["remark16"];
				$remark21=$row["remark21"];
				$remark22=$row["remark22"];
				$remark23=$row["remark23"];
				$remark26=$row["remark26"];
				$remark27=$row["remark27"];
				$remark29=$row["remark29"];
				$remark32=$row["remark32"];
				$remark33=$row["remark33"];
				$remark35=$row["remark35"];
				$remark36=$row["remark36"];
				$remark37=$row["remark37"];
				$remark40=$row["remark40"];
				$remark41=$row["remark41"];
				$remark43=$row["remark43"];
				$remark46=$row["remark46"];
				$remark48=$row["remark48"];
				$remark52=$row["remark52"];
				$remark53=$row["remark53"];
				$remark54=$row["remark54"];
				$remark65=$row["remark65"];
				$remark66=$row["remark66"];
				$remark67=$row["remark67"];
				$remark68=$row["remark68"];
				$remark72=$row["remark72"];
				$remark73=$row["remark73"];
				$remark75=$row["remark75"];
				$remark83=$row["remark83"];
				$remark84=$row["remark84"];
				$remark87=$row["remark87"];
				$remark88=$row["remark88"];
				$remark92=$row["remark92"];
				$remark98=$row["remark98"];
				$remark99=$row["remark99"];
				$remark100=$row["remark100"];
				$remark101=$row["remark101"];
				$remark102=$row["remark102"];
				$remark103=$row["remark103"];
				$remark104=$row["remark104"];
				$remark105=$row["remark105"];
				$remark106=$row["remark106"];
				$remark107=$row["remark107"];
				$remark108=$row["remark108"];
				$remark109=$row["remark109"];
				$remark110=$row["remark110"];
				$remark111=$row["remark111"];
				$remark112=$row["remark112"];
				$remark113=$row["remark113"];
				
			}

		}else{
		     $bench_id="";
	
	
		}//end if

	if(!empty($gr))
		{
	 $module_file = "modules/$module_name/$gr/inputbench.php";
	 $template->SetImagePath("modules/$module_name/$gr/");
		}else{
	 $module_file = "modules/$module_name/inputbench.php";
	 $template->SetImagePath("modules/$module_name/");
		}

	 $template->set_filenames(array(
		'inputform' => $module_file)
		);

	$template->assign_vars(array(
       'BENCH_ID'=>$bench_id,
			    'MEM_ID'=>$mem_id,
			    'BALANCE_SHEET'=>$balance_sheet,
			    'C6'=>$C6,
			    'C7'=>$C7,
			    'C8'=>$C8,
			    'C11'=>$C11,
			    'C14'=>$C14,
			    'C15'=>$C15,
			    'C16'=>$C16,
			    'C19'=>$C19,
			    'C20'=>$C20,
			    'C21'=>$C21,
			    'C22'=>$C22,
			    'C23'=>$C23,
			    'C26'=>$C26,
			    'C27'=>$C27,
			    'C28'=>$C28,
			    'C29'=>$C29,
			    'C32'=>$C32,
			    'C33'=>$C33,
			    'C34'=>$C34,
			    'C35'=>$C35,
			    'C36'=>$C36,
			    'C37'=>$C37,
			    'C40'=>$C40,
			    'C41'=>$C41,
			    'C42'=>$C42,
			    'C43'=>$C43,
			    'C46'=>$C46,
			    'C47'=>$C47,
			    'C48'=>$C48,
			    'C49'=>$C49,
			    'C52'=>$C52,
			    'C53'=>$C53,
			    'C54'=>$C54,
			    'C55'=>$C55,
			    'C56'=>$C56,
			    'INCOME_MONTH'=>$income_month,
			    'INCOME_ENDED'=>$income_ended,
			    'C63'=>$C63,
			    'C64'=>$C64,
			    'C65'=>$C65,
			    'C66'=>$C66,
			    'C67'=>$C67,
			    'C68'=>$C68,
			    'C69'=>$C69,
			    'C72'=>$C72,
			    'C73'=>$C73,
			    'C74'=>$C74,
			    'C75'=>$C75,
			    'C76'=>$C76,
			    'C78'=>$C78,
			    'C79'=>$C79,
			    'C80'=>$C80,
			    'C81'=>$C81,
			    'C82'=>$C82,
			    'C83'=>$C83,
			    'C84'=>$C84,
			    'C85'=>$C85,
			    'C86'=>$C86,
			    'C87'=>$C87,
			    'C88'=>$C88,
			    'C91'=>$C91,
			    'C92'=>$C92,
			    'C93'=>$C93,
			    'C94'=>$C94,
			    'C95'=>$C95,
			    'C96'=>$C96,
			    'C98'=>$C98,
			    'C99'=>$C99,
			    'C100'=>$C100,
			    'C101'=>$C101,
			    'C102'=>$C102,
			    'C103'=>$C103,
			    'C104'=>$C104,
			    'C105'=>$C105,
			    'C106'=>$C106,
			    'C107'=>$C107,
			    'C108'=>$C108,
			    'C109'=>$C109,
			    'C110'=>$C110,
			    'C111'=>$C111,
			    'C112'=>$C112,
			    'C113'=>$C113,
			    'ANS6'=>$ANS6,
			    'ANS7'=>$ANS7,
			    'ANS8'=>$ANS8,
			    'ANS16'=>$ANS16,
			    'ANS21'=>$ANS21,
			    'ANS22'=>$ANS22,
			    'ANS23'=>$ANS23,
			    'ANS26'=>$ANS26,
			    'ANS27'=>$ANS27,
			    'ANS29'=>$ANS29,
			    'ANS32'=>$ANS32,
			    'ANS33'=>$ANS33,
			    'ANS35'=>$ANS35,
			    'ANS36'=>$ANS36,
			    'ANS37'=>$ANS37,
			    'ANS40'=>$ANS40,
			    'ANS41'=>$ANS41,
			    'ANS43'=>$ANS43,
			    'ANS46'=>$ANS46,
			    'ANS48'=>$ANS48,
			    'ANS52'=>$ANS52,
			    'ANS53'=>$ANS53,
			    'ANS54'=>$ANS54,
			    'ANS65'=>$ANS65,
			    'ANS66'=>$ANS66,
			    'ANS67'=>$ANS67,
			    'ANS68'=>$ANS68,
			    'ANS72'=>$ANS72,
			    'ANS73'=>$ANS73,
			    'ANS75'=>$ANS75,
			    'ANS83'=>$ANS83,
			    'ANS84'=>$ANS84,
			    'ANS87'=>$ANS87,
			    'ANS88'=>$ANS88,
			    'ANS92'=>$ANS92,
			    'ANS98'=>$ANS98,
			    'ANS99'=>$ANS99,
			    'ANS100'=>$ANS100,
			    'ANS101'=>$ANS101,
			    'ANS102'=>$ANS102,
			    'ANS103'=>$ANS103,
			    'ANS104'=>$ANS104,
			    'ANS105'=>$ANS105,
			    'ANS106'=>$ANS106,
			    'ANS107'=>$ANS107,
			    'ANS108'=>$ANS108,
			    'ANS109'=>$ANS109,
			    'ANS110'=>$ANS110,
			    'ANS111'=>$ANS111,
			    'ANS112'=>$ANS112,
			    'ANS113'=>$ANS113,
			    'REMARK6'=>$remark6,
			    'REMARK7'=>$remark7,
			    'REMARK8'=>$remark8,
			    'REMARK16'=>$remark16,
			    'REMARK21'=>$remark21,
			    'REMARK22'=>$remark22,
			    'REMARK23'=>$remark23,
			    'REMARK26'=>$remark26,
			    'REMARK27'=>$remark27,
			    'REMARK29'=>$remark29,
			    'REMARK32'=>$remark32,
			    'REMARK33'=>$remark33,
			    'REMARK35'=>$remark35,
			    'REMARK36'=>$remark36,
			    'REMARK37'=>$remark37,
			    'REMARK40'=>$remark40,
			    'REMARK41'=>$remark41,
			    'REMARK43'=>$remark43,
			    'REMARK46'=>$remark46,
			    'REMARK48'=>$remark48,
			    'REMARK52'=>$remark52,
			    'REMARK53'=>$remark53,
			    'REMARK54'=>$remark54,
			    'REMARK65'=>$remark65,
			    'REMARK66'=>$remark66,
			    'REMARK67'=>$remark67,
			    'REMARK68'=>$remark68,
			    'REMARK72'=>$remark72,
			    'REMARK73'=>$remark73,
			    'REMARK75'=>$remark75,
			    'REMARK83'=>$remark83,
			    'REMARK84'=>$remark84,
			    'REMARK87'=>$remark87,
			    'REMARK88'=>$remark88,
			    'REMARK92'=>$remark92,
			    'REMARK98'=>$remark98,
			    'REMARK99'=>$remark99,
			    'REMARK100'=>$remark100,
			    'REMARK101'=>$remark101,
			    'REMARK102'=>$remark102,
			    'REMARK103'=>$remark103,
			    'REMARK104'=>$remark104,
			    'REMARK105'=>$remark105,
			    'REMARK106'=>$remark106,
			    'REMARK107'=>$remark107,
			    'REMARK108'=>$remark108,
			    'REMARK109'=>$remark109,
			    'REMARK110'=>$remark110,
			    'REMARK111'=>$remark111,
			    'REMARK112'=>$remark112,
			    'REMARK113'=>$remark113,
			    
	 'M'=>$module_name,
	'OP'=>"savebench",
	'GR'=>$gr
	)	);


	   $menu=GetMenu();

	$html_code =  $template->pparse_str('inputform');
	$template->assign_vars(array(
      'HTML_CODE'=> $html_code,
		'MENU'=>$menu,
		'COUNT'=>Counter()
		)	);
	 $template->SetImagePath("");
   $template->pparse('body');
	
}

function AListbench()
{
  global $admin,$db,$index_file,$module_name,$SaveSMPath,$SaveBGPath,$SaveFilePath, $template,$mainframe,$adminframe,$page,$gr,$mem_id;

	if(!empty($gr))
		{
	 $module_file = "modules/$module_name/$gr/listbench.php";
	 $template->SetImagePath("modules/$module_name/$gr/");
		}else{
	 $module_file = "modules/$module_name/listbench.php";
	 $template->SetImagePath("modules/$module_name/");
		}

	 $template->set_filenames(array(
		'listform' => $module_file)
		);

		if(empty($page))
		{
		$page=1;
		}
		$page_list=50;
		$table="bench";
		$fieldArr ="bench_id,mem_id,balance_sheet,C6,C7,C8,C11,C14,C15,C16,C19,C20,C21,C22,C23,C26,C27,C28,C29,C32,C33,C34,C35,C36,C37,C40,C41,C42,C43,C46,C47,C48,C49,C52,C53,C54,C55,C56,income_month,income_ended,C63,C64,C65,C66,C67,C68,C69,C72,C73,C74,C75,C76,C78,C79,C80,C81,C82,C83,C84,C85,C86,C87,C88,C91,C92,C93,C94,C95,C96,C98,C99,C100,C101,C102,C103,C104,C105,C106,C107,C108,C109,C110,C111,C112,C113,ANS6,ANS7,ANS8,ANS16,ANS21,ANS22,ANS23,ANS26,ANS27,ANS29,ANS32,ANS33,ANS35,ANS36,ANS37,ANS40,ANS41,ANS43,ANS46,ANS48,ANS52,ANS53,ANS54,ANS65,ANS66,ANS67,ANS68,ANS72,ANS73,ANS75,ANS83,ANS84,ANS87,ANS88,ANS92,ANS98,ANS99,ANS100,ANS101,ANS102,ANS103,ANS104,ANS105,ANS106,ANS107,ANS108,ANS109,ANS110,ANS111,ANS112,ANS113,remark6,remark7,remark8,remark16,remark21,remark22,remark23,remark26,remark27,remark29,remark32,remark33,remark35,remark36,remark37,remark40,remark41,remark43,remark46,remark48,remark52,remark53,remark54,remark65,remark66,remark67,remark68,remark72,remark73,remark75,remark83,remark84,remark87,remark88,remark92,remark98,remark99,remark100,remark101,remark102,remark103,remark104,remark105,remark106,remark107,remark108,remark109,remark110,remark111,remark112,remark113";
		
$query=" SELECT member.member_name , bench.*  ";
$query.=" from member,bench ";
$query.=" where bench.mem_id=member.mem_id ";

		$searchkey=" ";
		if(!empty($mem_id)) { $searchkey.=" and bench.mem_id=$mem_id "; }

		$searchkey.=" order by bench.bench_id DESC ";
		
		$query .= $searchkey;

		list($totalpage,$result)=QueryListPage( $query,$page,$page_list);

		//list($totalpage,$result)=SearchDBListPage( $searchkey,$table,$fieldArr,$page,$page_list);
		 if($db->sql_numrows())
		{
		while($v= $db->sql_fetchrow($result) )
		{
						$member_name = $v["member_name"];
						$bench_id=$v["bench_id"];
				$mem_id=$v["mem_id"];
				$balance_sheet=$v["balance_sheet"];
				$C6=$v["C6"];
				$C7=$v["C7"];
				$C8=$v["C8"];
				$C11=$v["C11"];
				$C14=$v["C14"];
				$C15=$v["C15"];
				$C16=$v["C16"];
				$C19=$v["C19"];
				$C20=$v["C20"];
				$C21=$v["C21"];
				$C22=$v["C22"];
				$C23=$v["C23"];
				$C26=$v["C26"];
				$C27=$v["C27"];
				$C28=$v["C28"];
				$C29=$v["C29"];
				$C32=$v["C32"];
				$C33=$v["C33"];
				$C34=$v["C34"];
				$C35=$v["C35"];
				$C36=$v["C36"];
				$C37=$v["C37"];
				$C40=$v["C40"];
				$C41=$v["C41"];
				$C42=$v["C42"];
				$C43=$v["C43"];
				$C46=$v["C46"];
				$C47=$v["C47"];
				$C48=$v["C48"];
				$C49=$v["C49"];
				$C52=$v["C52"];
				$C53=$v["C53"];
				$C54=$v["C54"];
				$C55=$v["C55"];
				$C56=$v["C56"];
				$income_month=$v["income_month"];
				$income_ended=$v["income_ended"];
				$C63=$v["C63"];
				$C64=$v["C64"];
				$C65=$v["C65"];
				$C66=$v["C66"];
				$C67=$v["C67"];
				$C68=$v["C68"];
				$C69=$v["C69"];
				$C72=$v["C72"];
				$C73=$v["C73"];
				$C74=$v["C74"];
				$C75=$v["C75"];
				$C76=$v["C76"];
				$C78=$v["C78"];
				$C79=$v["C79"];
				$C80=$v["C80"];
				$C81=$v["C81"];
				$C82=$v["C82"];
				$C83=$v["C83"];
				$C84=$v["C84"];
				$C85=$v["C85"];
				$C86=$v["C86"];
				$C87=$v["C87"];
				$C88=$v["C88"];
				$C91=$v["C91"];
				$C92=$v["C92"];
				$C93=$v["C93"];
				$C94=$v["C94"];
				$C95=$v["C95"];
				$C96=$v["C96"];
				$C98=$v["C98"];
				$C99=$v["C99"];
				$C100=$v["C100"];
				$C101=$v["C101"];
				$C102=$v["C102"];
				$C103=$v["C103"];
				$C104=$v["C104"];
				$C105=$v["C105"];
				$C106=$v["C106"];
				$C107=$v["C107"];
				$C108=$v["C108"];
				$C109=$v["C109"];
				$C110=$v["C110"];
				$C111=$v["C111"];
				$C112=$v["C112"];
				$C113=$v["C113"];
				$ANS6=$v["ANS6"];
				$ANS7=$v["ANS7"];
				$ANS8=$v["ANS8"];
				$ANS16=$v["ANS16"];
				$ANS21=$v["ANS21"];
				$ANS22=$v["ANS22"];
				$ANS23=$v["ANS23"];
				$ANS26=$v["ANS26"];
				$ANS27=$v["ANS27"];
				$ANS29=$v["ANS29"];
				$ANS32=$v["ANS32"];
				$ANS33=$v["ANS33"];
				$ANS35=$v["ANS35"];
				$ANS36=$v["ANS36"];
				$ANS37=$v["ANS37"];
				$ANS40=$v["ANS40"];
				$ANS41=$v["ANS41"];
				$ANS43=$v["ANS43"];
				$ANS46=$v["ANS46"];
				$ANS48=$v["ANS48"];
				$ANS52=$v["ANS52"];
				$ANS53=$v["ANS53"];
				$ANS54=$v["ANS54"];
				$ANS65=$v["ANS65"];
				$ANS66=$v["ANS66"];
				$ANS67=$v["ANS67"];
				$ANS68=$v["ANS68"];
				$ANS72=$v["ANS72"];
				$ANS73=$v["ANS73"];
				$ANS75=$v["ANS75"];
				$ANS83=$v["ANS83"];
				$ANS84=$v["ANS84"];
				$ANS87=$v["ANS87"];
				$ANS88=$v["ANS88"];
				$ANS92=$v["ANS92"];
				$ANS98=$v["ANS98"];
				$ANS99=$v["ANS99"];
				$ANS100=$v["ANS100"];
				$ANS101=$v["ANS101"];
				$ANS102=$v["ANS102"];
				$ANS103=$v["ANS103"];
				$ANS104=$v["ANS104"];
				$ANS105=$v["ANS105"];
				$ANS106=$v["ANS106"];
				$ANS107=$v["ANS107"];
				$ANS108=$v["ANS108"];
				$ANS109=$v["ANS109"];
				$ANS110=$v["ANS110"];
				$ANS111=$v["ANS111"];
				$ANS112=$v["ANS112"];
				$ANS113=$v["ANS113"];
				$remark6=$v["remark6"];
				$remark7=$v["remark7"];
				$remark8=$v["remark8"];
				$remark16=$v["remark16"];
				$remark21=$v["remark21"];
				$remark22=$v["remark22"];
				$remark23=$v["remark23"];
				$remark26=$v["remark26"];
				$remark27=$v["remark27"];
				$remark29=$v["remark29"];
				$remark32=$v["remark32"];
				$remark33=$v["remark33"];
				$remark35=$v["remark35"];
				$remark36=$v["remark36"];
				$remark37=$v["remark37"];
				$remark40=$v["remark40"];
				$remark41=$v["remark41"];
				$remark43=$v["remark43"];
				$remark46=$v["remark46"];
				$remark48=$v["remark48"];
				$remark52=$v["remark52"];
				$remark53=$v["remark53"];
				$remark54=$v["remark54"];
				$remark65=$v["remark65"];
				$remark66=$v["remark66"];
				$remark67=$v["remark67"];
				$remark68=$v["remark68"];
				$remark72=$v["remark72"];
				$remark73=$v["remark73"];
				$remark75=$v["remark75"];
				$remark83=$v["remark83"];
				$remark84=$v["remark84"];
				$remark87=$v["remark87"];
				$remark88=$v["remark88"];
				$remark92=$v["remark92"];
				$remark98=$v["remark98"];
				$remark99=$v["remark99"];
				$remark100=$v["remark100"];
				$remark101=$v["remark101"];
				$remark102=$v["remark102"];
				$remark103=$v["remark103"];
				$remark104=$v["remark104"];
				$remark105=$v["remark105"];
				$remark106=$v["remark106"];
				$remark107=$v["remark107"];
				$remark108=$v["remark108"];
				$remark109=$v["remark109"];
				$remark110=$v["remark110"];
				$remark111=$v["remark111"];
				$remark112=$v["remark112"];
				$remark113=$v["remark113"];
				

		$edit="$index_file?m=$module_name&op=inputbench&bench_id=$bench_id&gr=$gr&d=".$_GET['d'];
		$cap=str_replace("","",$cap);
		 $del="javascript:Del('tb=bench&key=bench_id&id=$bench_id&op=del&rt=listbench&gr=$gr&d=".$_GET['d']."','$cap')";

		$template->assign_block_vars('listrow', array(
			'M_NAME'=>$member_name,
		 'BENCH_ID'=>$bench_id,
			    'MEM_ID'=>$mem_id,
			    'BALANCE_SHEET'=>$balance_sheet,
			    'C6'=>$C6,
			    'C7'=>$C7,
			    'C8'=>$C8,
			    'C11'=>$C11,
			    'C14'=>$C14,
			    'C15'=>$C15,
			    'C16'=>$C16,
			    'C19'=>$C19,
			    'C20'=>$C20,
			    'C21'=>$C21,
			    'C22'=>$C22,
			    'C23'=>$C23,
			    'C26'=>$C26,
			    'C27'=>$C27,
			    'C28'=>$C28,
			    'C29'=>$C29,
			    'C32'=>$C32,
			    'C33'=>$C33,
			    'C34'=>$C34,
			    'C35'=>$C35,
			    'C36'=>$C36,
			    'C37'=>$C37,
			    'C40'=>$C40,
			    'C41'=>$C41,
			    'C42'=>$C42,
			    'C43'=>$C43,
			    'C46'=>$C46,
			    'C47'=>$C47,
			    'C48'=>$C48,
			    'C49'=>$C49,
			    'C52'=>$C52,
			    'C53'=>$C53,
			    'C54'=>$C54,
			    'C55'=>$C55,
			    'C56'=>$C56,
			    'INCOME_MONTH'=>$income_month,
			    'INCOME_ENDED'=>$income_ended,
			    'C63'=>$C63,
			    'C64'=>$C64,
			    'C65'=>$C65,
			    'C66'=>$C66,
			    'C67'=>$C67,
			    'C68'=>$C68,
			    'C69'=>$C69,
			    'C72'=>$C72,
			    'C73'=>$C73,
			    'C74'=>$C74,
			    'C75'=>$C75,
			    'C76'=>$C76,
			    'C78'=>$C78,
			    'C79'=>$C79,
			    'C80'=>$C80,
			    'C81'=>$C81,
			    'C82'=>$C82,
			    'C83'=>$C83,
			    'C84'=>$C84,
			    'C85'=>$C85,
			    'C86'=>$C86,
			    'C87'=>$C87,
			    'C88'=>$C88,
			    'C91'=>$C91,
			    'C92'=>$C92,
			    'C93'=>$C93,
			    'C94'=>$C94,
			    'C95'=>$C95,
			    'C96'=>$C96,
			    'C98'=>$C98,
			    'C99'=>$C99,
			    'C100'=>$C100,
			    'C101'=>$C101,
			    'C102'=>$C102,
			    'C103'=>$C103,
			    'C104'=>$C104,
			    'C105'=>$C105,
			    'C106'=>$C106,
			    'C107'=>$C107,
			    'C108'=>$C108,
			    'C109'=>$C109,
			    'C110'=>$C110,
			    'C111'=>$C111,
			    'C112'=>$C112,
			    'C113'=>$C113,
			    'ANS6'=>$ANS6,
			    'ANS7'=>$ANS7,
			    'ANS8'=>$ANS8,
			    'ANS16'=>$ANS16,
			    'ANS21'=>$ANS21,
			    'ANS22'=>$ANS22,
			    'ANS23'=>$ANS23,
			    'ANS26'=>$ANS26,
			    'ANS27'=>$ANS27,
			    'ANS29'=>$ANS29,
			    'ANS32'=>$ANS32,
			    'ANS33'=>$ANS33,
			    'ANS35'=>$ANS35,
			    'ANS36'=>$ANS36,
			    'ANS37'=>$ANS37,
			    'ANS40'=>$ANS40,
			    'ANS41'=>$ANS41,
			    'ANS43'=>$ANS43,
			    'ANS46'=>$ANS46,
			    'ANS48'=>$ANS48,
			    'ANS52'=>$ANS52,
			    'ANS53'=>$ANS53,
			    'ANS54'=>$ANS54,
			    'ANS65'=>$ANS65,
			    'ANS66'=>$ANS66,
			    'ANS67'=>$ANS67,
			    'ANS68'=>$ANS68,
			    'ANS72'=>$ANS72,
			    'ANS73'=>$ANS73,
			    'ANS75'=>$ANS75,
			    'ANS83'=>$ANS83,
			    'ANS84'=>$ANS84,
			    'ANS87'=>$ANS87,
			    'ANS88'=>$ANS88,
			    'ANS92'=>$ANS92,
			    'ANS98'=>$ANS98,
			    'ANS99'=>$ANS99,
			    'ANS100'=>$ANS100,
			    'ANS101'=>$ANS101,
			    'ANS102'=>$ANS102,
			    'ANS103'=>$ANS103,
			    'ANS104'=>$ANS104,
			    'ANS105'=>$ANS105,
			    'ANS106'=>$ANS106,
			    'ANS107'=>$ANS107,
			    'ANS108'=>$ANS108,
			    'ANS109'=>$ANS109,
			    'ANS110'=>$ANS110,
			    'ANS111'=>$ANS111,
			    'ANS112'=>$ANS112,
			    'ANS113'=>$ANS113,
			    'REMARK6'=>$remark6,
			    'REMARK7'=>$remark7,
			    'REMARK8'=>$remark8,
			    'REMARK16'=>$remark16,
			    'REMARK21'=>$remark21,
			    'REMARK22'=>$remark22,
			    'REMARK23'=>$remark23,
			    'REMARK26'=>$remark26,
			    'REMARK27'=>$remark27,
			    'REMARK29'=>$remark29,
			    'REMARK32'=>$remark32,
			    'REMARK33'=>$remark33,
			    'REMARK35'=>$remark35,
			    'REMARK36'=>$remark36,
			    'REMARK37'=>$remark37,
			    'REMARK40'=>$remark40,
			    'REMARK41'=>$remark41,
			    'REMARK43'=>$remark43,
			    'REMARK46'=>$remark46,
			    'REMARK48'=>$remark48,
			    'REMARK52'=>$remark52,
			    'REMARK53'=>$remark53,
			    'REMARK54'=>$remark54,
			    'REMARK65'=>$remark65,
			    'REMARK66'=>$remark66,
			    'REMARK67'=>$remark67,
			    'REMARK68'=>$remark68,
			    'REMARK72'=>$remark72,
			    'REMARK73'=>$remark73,
			    'REMARK75'=>$remark75,
			    'REMARK83'=>$remark83,
			    'REMARK84'=>$remark84,
			    'REMARK87'=>$remark87,
			    'REMARK88'=>$remark88,
			    'REMARK92'=>$remark92,
			    'REMARK98'=>$remark98,
			    'REMARK99'=>$remark99,
			    'REMARK100'=>$remark100,
			    'REMARK101'=>$remark101,
			    'REMARK102'=>$remark102,
			    'REMARK103'=>$remark103,
			    'REMARK104'=>$remark104,
			    'REMARK105'=>$remark105,
			    'REMARK106'=>$remark106,
			    'REMARK107'=>$remark107,
			    'REMARK108'=>$remark108,
			    'REMARK109'=>$remark109,
			    'REMARK110'=>$remark110,
			    'REMARK111'=>$remark111,
			    'REMARK112'=>$remark112,
			    'REMARK113'=>$remark113,
			       
        'U_DEL'=>$del,
		'U_EDIT'=>$edit
		)	);
	} // end while
}// end if

	$link="$index_file?m=$module_name&op=listbench";
	$template->assign_vars(array(
      'PAGE_LIST'=>List_PageStr($page,$totalpage,$link),
		'JAVA_URL'=>"$index_file?m=$module_name&op=del",
		'U_ADD'=>"$index_file?m=$module_name&op=inputbench&gr=$gr"
		)	);

	   $menu=GetMenu();

	$html_code =  $template->pparse_str('listform');
	$template->assign_vars(array(
      'HTML_CODE'=> $html_code ,
	  'MENU'=>$menu,
		'COUNT'=>Counter()
		)	);
  $template->SetImagePath("");
   $template->pparse('body');


}


function GetBench($bench_id)
{
  global $admin,$db,$index_file,$module_name,$SaveSMPath,$SaveBGPath,$SaveFilePath, $template,$mainframe,$adminframe,$gr,$next;

	 if(empty($next))
	{	
		 $module_file = "modules/$module_name/$gr/view.htm";
	}else{
         $module_file = "modules/$module_name/$gr/memberhome1.htm";
	}


	 $template->SetImagePath("modules/$module_name/$gr/");
	 $template->set_filenames(array(
		'view' => $module_file)
		);

	$template->assign_vars(array(
		'LINK1'=>"$index_file?m=$module_name&op=inputbench&bench_id=$bench_id",
		'LINK2'=>"$index_file?m=$module_name&op=inputbench&bench_id=$bench_id&next=1"
		));

//----- Get Member Name 
$query =" SELECT member.member_name , bench.bench_id  ";
$query .=" from member,bench  ";
$query .=" where bench.mem_id=member.mem_id ";
$query .=" and bench.bench_id=$bench_id ";
$result=$db->sql_query($query);
		while($v= $db->sql_fetchrow($result) )
		{
			$template->assign_vars(array('MEMBER_NAME'=>$v["member_name"] ));
		}

//echo $page;
		$page_list=1;
		$table="bench";

		$fieldArr=" * ";
		$searchkey=" and bench_id='$bench_id'    ";

		list($totalpage,$result)=SearchDBListPage( $searchkey,$table,$fieldArr,$page,$page_list);

		$link="$index_file?m=$module_name&op=listbench";
			$template->assign_vars(array(
				'PAGE_LIST'=>List_PageStr($page,$totalpage,$link)
				));

		 if($db->sql_numrows())
		{
		while($v= $db->sql_fetchrow($result) )
		{

				$bench_id=$v["bench_id"];
				$mem_id=$v["mem_id"];
				$balance_sheet=$v["balance_sheet"];
				$C6=$v["C6"];
				$C7=$v["C7"];
				$C8=$v["C8"];
				$C11=$v["C11"];
				$C14=$v["C14"];
				$C15=$v["C15"];
				$C16=$v["C16"];
				$C19=$v["C19"];
				$C20=$v["C20"];
				$C21=$v["C21"];
				$C22=$v["C22"];
				$C23=$v["C23"];
				$C26=$v["C26"];
				$C27=$v["C27"];
				$C28=$v["C28"];
				$C29=$v["C29"];
				$C32=$v["C32"];
				$C33=$v["C33"];
				$C34=$v["C34"];
				$C35=$v["C35"];
				$C36=$v["C36"];
				$C37=$v["C37"];
				$C40=$v["C40"];
				$C41=$v["C41"];
				$C42=$v["C42"];
				$C43=$v["C43"];
				$C46=$v["C46"];
				$C47=$v["C47"];
				$C48=$v["C48"];
				$C49=$v["C49"];
				$C52=$v["C52"];
				$C53=$v["C53"];
				$C54=$v["C54"];
				$C55=$v["C55"];
				$C56=$v["C56"];
				$income_month=$v["income_month"];
				$income_ended=$v["income_ended"];
				$C63=$v["C63"];
				$C64=$v["C64"];
				$C65=$v["C65"];
				$C66=$v["C66"];
				$C67=$v["C67"];
				$C68=$v["C68"];
				$C69=$v["C69"];
				$C72=$v["C72"];
				$C73=$v["C73"];
				$C74=$v["C74"];
				$C75=$v["C75"];
				$C76=$v["C76"];
				$C78=$v["C78"];
				$C79=$v["C79"];
				$C80=$v["C80"];
				$C81=$v["C81"];
				$C82=$v["C82"];
				$C83=$v["C83"];
				$C84=$v["C84"];
				$C85=$v["C85"];
				$C86=$v["C86"];
				$C87=$v["C87"];
				$C88=$v["C88"];
				$C91=$v["C91"];
				$C92=$v["C92"];
				$C93=$v["C93"];
				$C94=$v["C94"];
				$C95=$v["C95"];
				$C96=$v["C96"];
				$C98=$v["C98"];
				$C99=$v["C99"];
				$C100=$v["C100"];
				$C101=$v["C101"];
				$C102=$v["C102"];
				$C103=$v["C103"];
				$C104=$v["C104"];
				$C105=$v["C105"];
				$C106=$v["C106"];
				$C107=$v["C107"];
				$C108=$v["C108"];
				$C109=$v["C109"];
				$C110=$v["C110"];
				$C111=$v["C111"];
				$C112=$v["C112"];
				$C113=$v["C113"];
				$ANS6=$v["ANS6"];
				$ANS7=$v["ANS7"];
				$ANS8=$v["ANS8"];
				$ANS16=$v["ANS16"];
				$ANS21=$v["ANS21"];
				$ANS22=$v["ANS22"];
				$ANS23=$v["ANS23"];
				$ANS26=$v["ANS26"];
				$ANS27=$v["ANS27"];
				$ANS29=$v["ANS29"];
				$ANS32=$v["ANS32"];
				$ANS33=$v["ANS33"];
				$ANS35=$v["ANS35"];
				$ANS36=$v["ANS36"];
				$ANS37=$v["ANS37"];
				$ANS40=$v["ANS40"];
				$ANS41=$v["ANS41"];
				$ANS43=$v["ANS43"];
				$ANS46=$v["ANS46"];
				$ANS48=$v["ANS48"];
				$ANS52=$v["ANS52"];
				$ANS53=$v["ANS53"];
				$ANS54=$v["ANS54"];
				$ANS65=$v["ANS65"];
				$ANS66=$v["ANS66"];
				$ANS67=$v["ANS67"];
				$ANS68=$v["ANS68"];
				$ANS72=$v["ANS72"];
				$ANS73=$v["ANS73"];
				$ANS75=$v["ANS75"];
				$ANS83=$v["ANS83"];
				$ANS84=$v["ANS84"];
				$ANS87=$v["ANS87"];
				$ANS88=$v["ANS88"];
				$ANS92=$v["ANS92"];
				$ANS98=$v["ANS98"];
				$ANS99=$v["ANS99"];
				$ANS100=$v["ANS100"];
				$ANS101=$v["ANS101"];
				$ANS102=$v["ANS102"];
				$ANS103=$v["ANS103"];
				$ANS104=$v["ANS104"];
				$ANS105=$v["ANS105"];
				$ANS106=$v["ANS106"];
				$ANS107=$v["ANS107"];
				$ANS108=$v["ANS108"];
				$ANS109=$v["ANS109"];
				$ANS110=$v["ANS110"];
				$ANS111=$v["ANS111"];
				$ANS112=$v["ANS112"];
				$ANS113=$v["ANS113"];
				$remark6=$v["remark6"];
				$remark7=$v["remark7"];
				$remark8=$v["remark8"];
				$remark16=$v["remark16"];
				$remark21=$v["remark21"];
				$remark22=$v["remark22"];
				$remark23=$v["remark23"];
				$remark26=$v["remark26"];
				$remark27=$v["remark27"];
				$remark29=$v["remark29"];
				$remark32=$v["remark32"];
				$remark33=$v["remark33"];
				$remark35=$v["remark35"];
				$remark36=$v["remark36"];
				$remark37=$v["remark37"];
				$remark40=$v["remark40"];
				$remark41=$v["remark41"];
				$remark43=$v["remark43"];
				$remark46=$v["remark46"];
				$remark48=$v["remark48"];
				$remark52=$v["remark52"];
				$remark53=$v["remark53"];
				$remark54=$v["remark54"];
				$remark65=$v["remark65"];
				$remark66=$v["remark66"];
				$remark67=$v["remark67"];
				$remark68=$v["remark68"];
				$remark72=$v["remark72"];
				$remark73=$v["remark73"];
				$remark75=$v["remark75"];
				$remark83=$v["remark83"];
				$remark84=$v["remark84"];
				$remark87=$v["remark87"];
				$remark88=$v["remark88"];
				$remark92=$v["remark92"];
				$remark98=$v["remark98"];
				$remark99=$v["remark99"];
				$remark100=$v["remark100"];
				$remark101=$v["remark101"];
				$remark102=$v["remark102"];
				$remark103=$v["remark103"];
				$remark104=$v["remark104"];
				$remark105=$v["remark105"];
				$remark106=$v["remark106"];
				$remark107=$v["remark107"];
				$remark108=$v["remark108"];
				$remark109=$v["remark109"];
				$remark110=$v["remark110"];
				$remark111=$v["remark111"];
				$remark112=$v["remark112"];
				$remark113=$v["remark113"];
			$template->assign_block_vars('listrow', array(
		 'BENCH_ID'=>$bench_id,
			    'MEM_ID'=>$mem_id,
			    'BALANCE_SHEET'=>$balance_sheet,
		    'INCOME_MONTH'=>$income_month,
			    'INCOME_ENDED'=>$income_ended,

				));


	} // end while

		 if(empty($next))
	{	
//------ Comment ------
		$table="formula";
		$fieldArr ="for_id,code,name,goals,formula,comment";
		$searchkey=" ";
	$result=SearchDB( $searchkey,$table,$fieldArr);
		while($v= $db->sql_fetchrow($result) )
		{

				//$for_id=$v["for_id"];
				$code=$v["code"];
				//$name=$v["name"];
				//$goals=$v["goals"];
				//$formula=$v["formula"];
				$comment=$v["comment"];

				if( substr($code,0,1)=="P")
				{
				
					$v_name="CP";
				}else{
						$v_name=$code;
					}
				@eval($v_name);

				$template->assign_vars(array("$v_name"=>nl2br($comment )  ));
		}

	}
//***** Cal P =====
		$page=1;
		$page_list=500;
		$table="balancesheet";
		$fieldArr ="bal_id,NO,ASSETS,CVAL,P_FORMULA,PEARLS";
		$searchkey=" order by NO";

		list($totalpage1,$result)=SearchDBListPage( $searchkey,$table,$fieldArr,$page,$page_list);
		 if($db->sql_numrows())
		{
		while($v= $db->sql_fetchrow($result) )
		{

				$bal_id=$v["bal_id"];
				$NO=$v["NO"];
				$ASSETS=$v["ASSETS"];
				$CVAL=$v["CVAL"];
				$P_FORMULA=$v["P_FORMULA"];
				$PEARLS=$v["PEARLS"];

				if(!empty($P_FORMULA))
			   {
				 @eval($P_FORMULA);

			   }
	} // end while
}// end if

//----- Assign Value


for($i=6;$i<=113;$i++)
	{
	 $cval="C$i";
	 $pval ="P$i";
		$val ="ANS$i";

		 if($$cval!=0){ 
			 $C = number_format($$cval,2,'.',','); 
		 }else{
		$C="";
		 }


		 if($$pval!=0){ 
			 $P = number_format($$pval,2,'.',','); 
		 }else{
		$P="";
		 }
				if($$val!=0){
							$PEAR= number_format($$val,2,'.',','); 
				}else{
							$PEAR="";
				}

   $rem="remark$i";
		$template->assign_vars(array(
			"$cval"=>$C,
			"$pval"=>$P,
			"$val"=>$PEAR,
			"REMARK$i"=>$$rem
					));
	}



}// end if

	 if(!empty($next))
	{	

$table="bench_result";
			$fieldArr =" * ";
			$searchkey="   and   bench_id =$bench_id ";
			$result=SearchDB( $searchkey,$table,$fieldArr);
			if($db->sql_numrows())
			{
				$row = $db->sql_fetchrow($result);
								$resu=$row["resu"];
				$bench_id=$row["bench_id"];
				$mem_id=$row["mem_id"];
				$P1=$row["P1"];
				$P2=$row["P2"];
				$P3=$row["P3"];
				$P4=$row["P4"];
				$P5=$row["P5"];
				$P6=$row["P6"];
				$E1=$row["E1"];
				$E2=$row["E2"];
				$E3=$row["E3"];
				$E4=$row["E4"];
				$E5=$row["E5"];
				$E6=$row["E6"];
				$E7=$row["E7"];
				$E8=$row["E8"];
				$E9=$row["E9"];
				$A1=$row["A1"];
				$A2=$row["A2"];
				$A3=$row["A3"];
				$R1=$row["R1"];
				$R2=$row["R2"];
				$R3=$row["R3"];
				$R4=$row["R4"];
				$R5=$row["R5"];
				$R6=$row["R6"];
				$R7=$row["R7"];
				$R8=$row["R8"];
				$R9=$row["R9"];
				$R10=$row["R10"];
				$R11=$row["R11"];
				$R12=$row["R12"];
				$L1=$row["L1"];
				$L2=$row["L2"];
				$L3=$row["L3"];
				$S1=$row["S1"];
				$S2=$row["S2"];
				$S3=$row["S3"];
				$S4=$row["S4"];
				$S5=$row["S5"];
				$S6=$row["S6"];
				$S7=$row["S7"];
				$S8=$row["S8"];
				$S9=$row["S9"];
				$S10=$row["S10"];
				$S11=$row["S11"];
				$P1_SCORE=$row["P1_SCORE"];
				$P2_SCORE=$row["P2_SCORE"];
				$P5_SCORE=$row["P5_SCORE"];
				$P6_SCORE=$row["P6_SCORE"];
				$E1_SCORE=$row["E1_SCORE"];
				$E2_SCORE=$row["E2_SCORE"];
				$E3_SCORE=$row["E3_SCORE"];
				$E4_SCORE=$row["E4_SCORE"];
				$E5_SCORE=$row["E5_SCORE"];
				$E6_SCORE=$row["E6_SCORE"];
				$E7_SCORE=$row["E7_SCORE"];
				$E8_SCORE=$row["E8_SCORE"];
				$E9_SCORE=$row["E9_SCORE"];
				$A1_SCORE=$row["A1_SCORE"];
				$A2_SCORE=$row["A2_SCORE"];
				$A3_SCORE=$row["A3_SCORE"];
				$R9_SCORE=$row["R9_SCORE"];
				$L1_SCORE=$row["L1_SCORE"];
				$L2_SCORE=$row["L2_SCORE"];
				$L3_SCORE=$row["L3_SCORE"];
				
				$template->assign_vars(array(
			    'P1'=>number_format($P1,2,'.',','),
			    'P2'=>number_format($P2,2,'.',','),
			    'P3'=>number_format($P3,2,'.',','),
			    'P4'=>number_format($P4,2,'.',','),
			    'P5'=>number_format($P5,2,'.',','),
			    'P6'=>number_format($P6,2,'.',','),
			    'E1'=>number_format($E1,2,'.',','),
			    'E2'=>number_format($E2,2,'.',','),
			    'E3'=>number_format($E3,2,'.',','),
			    'E4'=>number_format($E4,2,'.',','),
			    'E5'=>number_format($E5,2,'.',','),
			    'E6'=>number_format($E6,2,'.',','),
			    'E7'=>number_format($E7,2,'.',','),
			    'E8'=>number_format($E8,2,'.',','),
			    'E9'=>number_format($E9,2,'.',','),
			    'A1'=>number_format($A1,2,'.',','),
			    'A2'=>number_format($A2,2,'.',','),
			    'A3'=>number_format($A3,2,'.',','),
			    'R1'=>number_format($R1,2,'.',','),
			    'R2'=>number_format($R2,2,'.',','),
			    'R3'=>number_format($R3,2,'.',','),
			    'R4'=>number_format($R4,2,'.',','),
			    'R5'=>number_format($R5,2,'.',','),
			    'R6'=>number_format($R6,2,'.',','),
			    'R7'=>number_format($R7,2,'.',','),
			    'R8'=>number_format($R8,2,'.',','),
			    'R9'=>number_format($R9,2,'.',','),
			    'R10'=>number_format($R10,2,'.',','),
			    'R11'=>number_format($R11,2,'.',','),
			    'R12'=>number_format($R12,2,'.',','),
			    'L1'=>number_format($L1,2,'.',','),
			    'L2'=>number_format($L2,2,'.',','),
			    'L3'=>number_format($L3,2,'.',','),
			    'S1'=>number_format($S1,2,'.',','),
			    'S2'=>number_format($S2,2,'.',','),
			    'S3'=>number_format($S3,2,'.',','),
			    'S4'=>number_format($S4,2,'.',','),
			    'S5'=>number_format($S5,2,'.',','),
			    'S6'=>number_format($S6,2,'.',','),
			    'S7'=>number_format($S7,2,'.',','),
			    'S8'=>number_format($S8,2,'.',','),
			    'S9'=>number_format($S9,2,'.',','),
			    'S10'=>number_format($S10,2,'.',','),
			    'S11'=>number_format($S11,2,'.',','),
			    'P1_SCORE'=>number_format($P1_SCORE,2,'.',','),
			    'P2_SCORE'=>number_format($P2_SCORE,2,'.',','),
			    'P5_SCORE'=>number_format($P5_SCORE,2,'.',','),
			    'P6_SCORE'=>number_format($P6_SCORE,2,'.',','),
			    'E1_SCORE'=>number_format($E1_SCORE,2,'.',','),
			    'E2_SCORE'=>number_format($E2_SCORE,2,'.',','),
			    'E3_SCORE'=>number_format($E3_SCORE,2,'.',','),
			    'E4_SCORE'=>number_format($E4_SCORE,2,'.',','),
			    'E5_SCORE'=>number_format($E5_SCORE,2,'.',','),
			    'E6_SCORE'=>number_format($E6_SCORE,2,'.',','),
			    'E7_SCORE'=>number_format($E7_SCORE,2,'.',','),
			    'E8_SCORE'=>number_format($E8_SCORE,2,'.',','),
			    'E9_SCORE'=>number_format($E9_SCORE,2,'.',','),
			    'A1_SCORE'=>number_format($A1_SCORE,2,'.',','),
			    'A2_SCORE'=>number_format($A2_SCORE,2,'.',','),
			    'A3_SCORE'=>number_format($A3_SCORE,2,'.',','),
			    'R9_SCORE'=>number_format($R9_SCORE,2,'.',','),
			    'L1_SCORE'=>number_format($L1_SCORE,2,'.',','),
			    'L2_SCORE'=>number_format($L2_SCORE,2,'.',','),
			    'L3_SCORE'=>number_format($L3_SCORE,2,'.',',')
			    

	)	);

}
	}//end if

	$menu=GetMenu();

	$html_code =  $template->pparse_str('view');
	$template->assign_vars(array(
      'HTML_CODE'=> $html_code,
	  'MENU'=>$menu,
		'COUNT'=>Counter()
		)	);
   $template->SetImagePath("");
   $template->pparse('body');
}

?>