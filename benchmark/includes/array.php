<?php


$MonthArr =  array(  "",
										"���Ҥ�",
										 "����Ҿѹ��",
										 "�չҤ�",
										"����¹",
										"����Ҥ�",
										"�Զع�¹",
										"�á�Ҥ�",
										"�ԧ�Ҥ�" ,
										"�ѹ��¹",
										"���Ҥ�" ,
										"��Ȩԡ�¹",
										"�ѹ�Ҥ�"  );

$MonthArr =  array(  "",
										"January",
										"February",
										"March",
										"April",
										"May",
										"June",
										"July",
										"August",
										"September",
										"October",
										"November",
										"December" );
$DayArr = array();
for($a=0;$a<=31;$a++)
{
	$DayArr[]=$a;
}

$mtoday = date("j, n, Y");
$datearry = explode(",",$mtoday);

$YearArr = array();

for($a = $datearry[2] -70; $a<=$datearry[2] +0 ; $a++)
{
$YearArr[] = $a;
}


//RadioCK(1,count($SexArr)-1,$sex,"sex",$SexArr),

$TitleArr = array("",
								"Mr.",
								"Ms.",
								"Mrs.",
								"Miss",
								"Dr.",
								"Prof.");

$AddressTypeArr = array("",
													"Business"
													);

$PlayerArr = array("",
									"Academic",
									"Donor",
									"Investor",
									"MFI",
									"Network",
									"Other",
									"Service Provider (rater, auditor, consultant)");


$ProvinceArr = array( "",
"��к��",
"��ا෾��ҹ��",
"�ҭ������",
"����Թ���",
"��ᾧྪ�", 
"�͹��",
"�ѹ�����",
"���ԧ���",
"�ź���",
"��¹ҷ",
"�������",
"�����",
"��§���",
"��§����",
"��ѧ",
"�ҡ",
"��ù�¡",
"��û��",
"��þ��",
"����Ҫ����",
"�����ո����Ҫ",
"������ä�",
"�������",
"��Ҹ����",
"��ҹ",
"���������",
"�����ҹ�",
"��ШǺ���բѹ��",
"��Ҩչ����",
"�ѵ�ҹ�",
"��й�������ظ��",
"�����",
"�ѧ��",
"�ѷ�ا",
"�ԨԵ�",
"��ɳ��š",
"ྪú���",
"ྪú�ó�",
"���",
"����",
"�����ä��",
"�ء�����",
"�����ͧ�͹",
"��ʸ�",
"����",
"�������",
"�йͧ",
"���ͧ",
"�Ҫ����",
"ž����",
"�ӻҧ",
"�Ӿٹ",
"�������",
"ʡŹ��",
"ʧ���",
"��طû�ҡ��",
"��ط�ʧ����",
"��ط��Ҥ�",
"ʵ��",
"������",
"��к���",
"�ԧ�����",
"��⢷��",
"�ؾ�ó����",
"����ɮ��ҹ�",
"���Թ���",
"˹ͧ���", 
"˹ͧ�������",
"��ҧ�ͧ",
"�ӹҨ��ԭ", 
"�شøҹ�",
"�صôԵ��",
"�ط�¸ҹ�",
"�غ��Ҫ�ҹ�" );	

 $CountryArr = array("",
"Afghanistan",		
"Albania",
"Algeria",
"American Somoa",
"Andorra",
"Angola",
"Anguilla",
"Antarctica",
"Antigua and Barbuda",
"Argentina",
"Armenia",
"Aruba",
"Australia",
"Austria",
"Azerbaijan",
"Bahamas",
"Bahrain",
"Bangladesh",
"Barbados",
"Belarus",
"Belgium",
"Belize",
"Benin",
"Bermuda",
"Bhutan",
"Bolivia",
"Bosnia and Herzegovina",
"Botswana",
"Bouvet Island",
"Brazil",
"British Indian Ocean Territory",
"Brunei",
"Bulgaria",
"Burkina",
"Burundi",
"Cambodia",
"Cameroon",
"Canada",
"Cape Verde",
"Caribbean",
"Central African Republic",
"Chad",
"Channel Islands, Guernsey",
"Channel Islands, Jersey",
"Chile",
"China",
"Christmas Island",
"Cocos (Keeling) Islands",
"Colombia",
"Comoros",
"Congo",
"Cook Islands",
"Costa Rica",
"Cote d lvoire",
"Croatia",
"Cuba",
"Cyprus",
"Czech Republic",
"Denmark",
"Djibouti",
"Dominica",
"Dominican Republic",
"East Timor",
"Ecuador",
"Egypt",
"El Salvador",
"Equatorial Guinea",
"Eritrea",
"Estonia<",
"Ethiopia",
"Falklands Islands",
"Faroe Islands",
"Fiji",
"Finland",
"France",
"French Guiana",
"French Polynesia",
"French Southern Territories",
"French, Metropolitan",
"Gabon",
"Georgia",
"Germany",
"Ghana",
"Gibraltar",
"Greece",
"Greenland",
"Grenada",
"Guadeloupe",
"Guam",
"Guatemala",
"Guinea",
"Guyana",
"Haiti",
"Heard and McDonald Islands",
"Honduras",
"Hong Kong",
"Hungary",
"Iceland",
"India",
"Indonesia",
"Iran",
"Iraq",
"Ireland",
"Israel",
"Italy",
"Jamaiga",
"Japan",
"Jordan",
"Kazakhstan",
"Kenya",
"Kiribati",
"Korea Democratic People s Republic",
"Korea Republic",
"Kuwait",
"Kyrgyzstan",
"Laos",
"Latvia",
"Lebanon",
"Lesotho",
"Liberia",
"Libyan Arab Jamahiriya",
"Liechtenstein",
"Lithuania",
"Luxemburg",
"Macao",
"Macedonia",
"Madagascar",
"Malawi",
"Malaysia",
"Mali",
"Malta",
"Marshall Islands",
"Martinique",
"Mauritania",
"Mauritius",
"Mayotte",
"Mexico",
"Micronesia",
"Moldova",
"Monaco",
"Mongolia",
"Montserrat",
"Morocco",
"Mozambique",
"Myanmar",
"Namibia",
"Nauru",
"Nepal",
"Netherlands",
"Netherlands Antilles",
"New Caledonia",
"New Zealand",
"Nicaragua",
"Niger",
"Nigeria",
"Niue",
"Norfolk Island",
"Northern Mariana Islands",
"Norway",
"Oman",
"Pakistan",
"Palau",
"Panama",
"Papua New Guinea",
"Paraguay",
"Peru",
"Philippines",
"Pitcairn",
"Poland",
"Portugal",
"Puerto Rico",
"Qatar",
"Reunion",
"Russia",
"Rwanda",
"Saint Kitts and Nevis",
"Saint Lucia",
"Saint Vincent and the Grenadines",
"Samoa",
"San Marino",
"Sao Tome and Principe",
"Saudi Arabia",
"Senegal",
"Seychelles",
"Sierra Leone",
"Singapore",
"Slovakia",
"Slovenia",
"Solomon Islands",
"Somalia",
"South Africa",
"Spain",
"Sri Lanka",
"St. Helena",
"St. Pierre and Miquelon",
"Sudan",
"Suriname",
"Svalbard and Jan Mayen Islands",
"Swaziland",
"Sweden",
"Switzerland",
"Syria",
"Taiwan",
"Tajikistan",
"Tanzania",
"Thailand",
"The Bahamas",
"The Cayman Islands",
"Tonga",
"Trinidad and Tobago",
"Tunisia",
"Turkey",
"Turkmenistan",
"Turks and Caicos Islands",
"Tuvalu",
"Uganda",
"Ukraine",
"United Arab Emirates",
"United Kingdom",
"United States",
"Uniteds States Minor Outlying Islands",
"Uruguay",
"Uzbekistan",
"Vanuatu",
"Vatican City State",
"Venezuela",
"Vietnam",
"Virgin Islands (US)",
"Virgin Islands(British)",
"Wallis and Futuna Islands",
"Western Sahara",
"Yemen",
"Yugoslavia",
"Zaire",
"Zambia",
"Zimbabwe",
"Not Listed");

 $StateArr = array("",
                       "Alabama", 
                       "Alaska", 
                       "Arizona", 
                       "Arkansas", 
                       "California", 
                       "Colorado", 
                       "Connecticut", 
                       "Delaware", 
                       "District of Columbia",
                       "Florida", 
                       "Georgia", 
                       "Hawaii", 
                       "Idaho", 
                       "Illinois", 
                       "Indiana", 
                       "Iowa", 
                       "Kansas", 
                       "Kentucky", 
                       "Louisiana", 
                       "Maine", 
                       "Maryland", 
                       "Massachusetts", 
                       "Michigan", 
                       "Minnesota", 
                       "Mississippi", 
                       "Missouri", 
                       "Montana", 
                       "Nebraska", 
                       "Nevada", 
                       "New Hampshire",  
                       "New Jersey",  
                       "New Mexico",  
                       "New York",  
                       "North Carolina",  
                       "North Dakota",  
                       "Ohio", 
                       "Oklahoma", 
                       "Oregon", 
                       "Pennsylvania", 
                       "Rhode Island",  
                       "South Carolina",  
                       "South Dakota",  
                       "Tennessee", 
                       "Texas", 
                       "Utah", 
                       "Vermont", 
                       "Virginia", 
                       "Washington", 
                       "West Virginia",  
                       "Wisconsin", 
                       "Wyoming" );
					   

 $StateArr2 = array("",
 "Alberta (AB)",
 "British Columbia (BC)",
 "Manitoba (MB)",
 "New Brunswick (NB)",
 "Newfoundland (NF)",
 "Northwest Territories (NT)",
 "Nova Scotia (NS)",
 "Ontario (ON)",
 "Prince Edward Island (PE)",
 "Quebec (QC)",
 "Saskatchewan (SK)",
 "Yukon (YT)",
 "    ",
 "Alabama (AL)",
 "Alaska (AK)",
 "American Samoa (AS)",
 "Arizona (AZ)",
 "Arkansas (AR)",
 "California (CA)",
 "Colorado (CO)",
 "Connecticut (CT)",
 "Delaware (DE)",
 "District of Columbia (DC)",
 "Federated States of Micronesia (FM)",
 "Florida (FL)",
 "Georgia (GA)",
 "Guam (GU)",
 "Hawaii (HI)",
 "Idaho (ID)",
 "Illinois (IL)",
 "Indiana (IN)",
 "Iowa (IA)",
 "Kansas (KS)",
 "Kentucky (KY)",
 "Louisiana (LA)",
 "Maine (ME)",
 "Marshall Islands (MH)",
 "Maryland (MD)",
 "Massachusetts (MA)",
 "Michigan (MI)",
 "Minnesota (MN)",
 "Mississippi (MS)",
 "Missouri (MO)",
 "Montana (MT)",
 "Nebraksa (NE)",
 "Nevada (NV)",
 "New Hampshire (NH)",
 "New Jersey (NJ)",
 "New Mexico (NM)",
 "New York (NY)",
 "North Carolina (NC)",
 "North Dakota (ND)",
 "Northern Mariana Islands (MP)",
 "Ohio (OH)",
 "Oklahoma (OK)",
 "Oregon (OR)",
 "Palau (PW)",
 "Pennsylvania (PA)",
 "Puerto Rico (PR)",
 "Rhode Island (RI)",
 "South Carolina (SC)",
 "South Dakota (SD)",
 "Tennessee (TN)",
 "Texas (TX)",
 "U. S. Armed Forces: Africa (AE)",
 "U. S. Armed Forces: Americas (AA)",
 "U. S. Armed Forces: Canada (AE)",
 "U. S. Armed Forces: Europe (AE)",
 "U. S. Armed Forces: Middle East (AE)",
"U. S. Armed Forces: Pacific (AP)",
"Utah (UT)",
"Vermont (VT)",
"Virgin Islands (VI)",
"Virginia (VA)",
"Washington (WA)",
"West Virginia (WV)".
"Wisconsin (WI)",
"Wyoming (WY)",
"   ",
"Not Listed ()" );




?>