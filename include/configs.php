<?php
/*
 * last modified: 1/1/10 
 */

	// Global variable configs
$monthsArray = array('00' => "MM", '01' => "1", '02' => "2", '03' => "3", '04' => "4", '05' => "5", '06' => "6", '07' => "7", '08' => "8", '09' => "9", '10' => "10", '11' => "11", '12' => "12");
$monthdaysArray = array('DD'=>"DD",'01'=>"1",'02'=>"2",'03'=>"3",'04'=>"4",'05'=>"5",'06'=>"6",'07'=>"7",'08'=>"8",'09'=>"9",'10'=>"10",'11'=>"11",'12'=>"12",'13'=>"13",'14'=>"14",'15'=>"15",'16'=>"16",'17'=>"17",'18'=>"18",'19'=>"19",'20'=>"20",'21'=>"21",'22'=>"22",'23'=>"23",'24'=>"24",'25'=>"25",'26'=>"26",'27'=>"27",'28'=>"28",'29'=>"29",'30'=>"30",'31'=>"31");
$coachhire1 = array('1'=>"1",'2'=>"2",'3'=>"3",'4'=>"4",'5'=>"5",'6'=>"6",'7'=>"7",'8'=>"8",'9'=>"9",'10'=>"10",'11'=>"11",'12'=>"12");
$coachhire2 = array( 'Week' => "Week", 'Month' => "Month");
$parentrelationship = array('Select'=>"Select",'Parent'=>"Parent",'Grandparent'=>"Grandparent",'Teacher'=>"Teacher",'Sibling'=>"Sibling",'Friend'=>"Friend",'Coach'=>"Coach",'Other'=>"Other");
//$extra_expertise = array('Select'=>"Select", 'Ballet'=>"Ballet", 'Baseball'=>"Baseball", 'Basketball'=>"Basketball", 'Bass'=>"Bass", 'Cooking'=>"Cooking", 'Dance'=>"Dance", 'Drums'=>"Drums", 'Electronics'=>"Electronics", 'Entrepreneurship'=>"Entrepreneurship", 'Film & Video Production'=>"Film & Video Production", 'Fine Arts'=>"Fine Arts", 'Fitness'=>"Fitness", 'Golf'=>"Golf", 'Graphic / Web Design'=>"Graphic / Web Design", 'Guitar'=>"Guitar", 'Hockey'=>"Hockey", 'Horn / Brass Instrument'=>"Horn / Brass Instrument", 'Martial Arts'=>"Martial Arts", 'Photography'=>"Photography", 'Rocketry'=>"Rocketry", 'Soccer'=>"Soccer", 'Softball'=>"Softball", 'String Instruments'=>"String Instruments", 'Tennis'=>"Tennis", 'Track / Field'=>"Track / Field", 'Writing'=>"Writing", 'Other'=>"Other (Specify Below)");
$extra_expertise = array('Select'=>"Select",'SPORTS'=>"SPORTS",'Baseball'=>"Baseball",'Basketball'=>"Basketball",'Fitness'=>"Fitness",'Football'=>"Football",'Golf'=>"Golf",'Gymnastics / Cheerleading'=>"Gymnastics / Cheerleading",'Hockey'=>"Hockey",'Soccer'=>"Soccer",'Softball'=>"Softball",'Surfing'=>"Surfing",'Tennis'=>"Tennis",'Track / Field'=>"Track / Field",'MUSIC'=>"MUSIC",'Bass'=>"Bass",'Cello / Other String Instrument'=>"Cello / Other String Instrument",'Drums'=>"Drums",'Guitar'=>"Guitar",'Horn / Brass Instrument'=>"Horn / Brass Instrument",'Piano'=>"Piano",'Singing'=>"Singing",'Violin / Viola'=>"Violin / Viola",'PERFORMING ARTS'=>"PERFORMING ARTS",'Acting / Theater'=>"Acting / Theater",'Ballet / Studio Dancing'=>"Ballet / Studio Dancing",'Film & Video Production'=>"Film & Video Production",'Modern Dance / Hip Hop'=>"Modern Dance / Hip Hop",'FINE ARTS'=>"FINE ARTS",'Drawing / Sketching'=>"Drawing / Sketching",'Painting'=>"Painting",'Photography'=>"Photography",'Sculpture'=>"Sculpture",'TECH / OTHER HOBBIES'=>"TECH / OTHER HOBBIES",'Computer Engineering'=>"Computer Engineering",'Cooking'=>"Cooking",'Electronics'=>"Electronics",'Entrepreneurship'=>"Entrepreneurship",'Graphic / Web Design'=>"Graphic / Web Design",'Fashion / Interior Design'=>"Fashion / Interior Design",'Martial Arts'=>"Martial Arts",'Rocketry'=>"Rocketry",'Writing'=>"Writing",'Other'=>"Other (Specify Below)");


//NOT USED
$workweekdayArray = array('1' => "Monday", '2' => "Tuesday", '3' => "Wednesday", '4' => "Thursday", '5' => "Friday");
$statesArray = array('00'=>"Select a State",'AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut",'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois", 'IN'=>"Indiana", 'IA'=>"Iowa",  'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland", 'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana",'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York",'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma", 'OR'=>"Oregon",'PA'=>"Pennsylvania",'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah",'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming");
$cctypeArray = array('visa'=>"Visa",'mastercard'=>"Mastercard");
//NOT USED ENDS

	// File uploading configurations
$target_path = "resumes/";
$allowedExtensions = array("doc","docx","pdf","txt"); 
$maxfilesize = "500000"; 	//500KB

	// DB CONFIGURATIONS
include ("dbconfigurations.php");

	// Common DB configs
$students_table="students";
$coaches_table="coaches";

	// error message related: file, email
$sqlerrors = "sqlerrors.txt";
$error_emailnotify = "ekohanchi@gmail.com";

	// email messages notification
$emailnotify = "ekohanchi@gmail.com";

	// Debug
$debugmsgs=false;

	// Login page credentials
//put sha1() encrypted password here - example is 'hello'
$login_info = array(
  'ekohanchi' => '9d67cd1209ff3ca2fde13fe70b1d417a623b7ac0',	//adm!np4w
  'dgold' => '8acb298ee35afc885a08d5951435016d62a13b18',		//adminp4dan
  'efieldman' => 'f97c96a4d3b9f061dc657b16cf037a40b537461b'		//adminp4evan
);
?>