<html
	lang="ru"
	xml:lang="ru"
	style="
		position:fixed;
		z-index:1;
		"
	>
	<!--
	Made by ИП Чекмарёв А.А. assminog@gmail.com
	-->
	<head>
		<title>CloudRepublic.ru and HiFiIntelligentClub</title>
		<meta http-equiv="expires" content="Tue, 18 Dec 2019 18:52:06 GMT"/>
		<meta name="milliseconds" content=".1282">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta charset="utf-8"/>
		<!--link rel="manifest" href="/manifest.json"/-->
	</head>
		<style>
			/*RCe father*/
			body		{font-family:sans-serif;}
			.feetScreen	{width:100vw;height:93.5vh;}
			
			/*RCe matrix*/
			.matrixTop	{position:fixed;top:0px;}
			.matrixLeft	{position:fixed;top:40px;left:0;}
			.matrixRight	{position:fixed;top:40px;right:0;}
			.matrixBottom	{position:fixed;bottom:0px;}
			/*//RCe matrix*/

			/*RCe player*/
			/*/RCe.Author.table*/
			audioTrack {border-top: 1px solid #aaa;border-bottom: 1px solid #aaa;}
			audioTrack:hover {background-color:#ccc;}
			/*//RCe player*/

			  /*RCe base*/
			window 		{}
			.block		{display:block;overflow:hidden;}
			.rel		{position:relative;}
			.abs		{position:absolute;}
			.fixed		{position:fixed;}
			.left		{float:left;}
			.right		{float:right;}
			.scrollerY	{overflow-x:hidden;overflow-y:scroll;height:100vh;}
			.scrollerGlide	{-webkit-overflow-scrolling:touch;}
			.border		{border:1px solid #aaa}
			 /*//RCe base*/          

			  /*RCe layers*/
			.layer_1 {z-index:1;}
			.layer_1_1{z-index:2;}
			.layer_1_2{z-index:3;}
			.layer_1_3{z-index:4;}
			.layer_1_4{z-index:5;}

			.layer_2 {z-index:20;}
			.layer_2_1{z-index:21;}
			.layer_2_2{z-index:22;}
			.layer_2_3{z-index:23;}
			.layer_2_4{z-index:24;}

			.layer_3 {z-index:30;}
			.layer_3_1{z-index:31;}
			.layer_3_2{z-index:32;}
			.layer_3_3{z-index:33;}
			.layer_3_4{z-index:34;}

			.layer_4 {z-index:40;}
			.layer_4_1{z-index:41;}
			.layer_4_2{z-index:42;}
			.layer_4_3{z-index:43;}
			.layer_4_4{z-index:44;}
			/*//RCe layers*/
			
		</style>
	<body>
<?php

function _Image()
	{
	global $strDjName;
	$_strDjName	= $strDjName;
	global $strImage;
	$_strImage	= $strImage;
	echo '<image title="'.$_strDjName.'" src="'.$_strImage.'" style="width:100%"/>';
	}
function strNameVallue($_arrName=array("_strStyle"=>"","_strName"=>''),$_arrValue=array("_strStyle"=>"","_strName"=>''))
	{
	$strSize='';
	$strNameLeft='left';
	$strValueLeft='left';
	$str='<element class="block">';
	if(!empty($_arrName['_strName']))
		{
		if(!empty($_arrName['_strLeft']))
			{
			$strNameLeft=$_arrName['_strLeft'];
			}
		$str.='<title class="block '.$strNameLeft.'" style="width:120px;'.$_arrName['_strStyle'].'">'.$_arrName['_strName'].'</title>';
		}
	if(!empty($_arrValue['_strName']))
		{
		if(!empty($_arrValue['_strLeft']))
			{
			$strValueLeft=$_arrValue['_strLeft'];
			}
		if(!empty($_arrValue['_strSize']))
			{
			$strSize='<unitSize class="block left"> '.$_arrValue['_strSize'].'</unitSize>';
			}
		$str.='<value class="block '.$strValueLeft.'" style="width:187px;'.$_arrValue['_strStyle'].'" class="block left">'.$_arrValue['_strName'].'</value>'.$strSize;
		}
	$str.='</element>';
	return $str;
		
	}
function strTrackInfo($_arr)
	{
	/*
	Состав  произведения:
	Коипозиция <?=$arrTrack['intNumber']?>:
	strTrackInfo($arrTrack);
	strLabelInfo($arrTrack['label']);
	'strOffset'	=> '00:00:00',
	'strOffsetTitle'=> 'Смещение',
	'strOffsetUnit'	=> 'Сек',
	'intNumberTitle'=> 'Часть',
	'intNumber'	=> 1,
	'strRecordType'	=> 'Цифровая копия',
	'strTrackName'	=> 'BentleyMusic - Квартирный вопрос',
	*/
	$str=$_arr['intNumber'].': Композиция.<br/>'.' '.$_arr['strOffsetTitle'].' от начала: '.$_arr['strOffset'].'<br/>'.
			$_arr['strOffsetUnit'].'.<br/>Тип записи: '.$_arr['strRecordType'].'.<br/> Название композиции: '.$_arr['strTrackName'];
	return $str;
	}

function strAutortInfo($_arr)
	{
	$str='';
	foreach($_arr as $_arrUnit)
		{
		if(!empty($_arrUnit['strName']))
			{
			$str.=$_arrUnit['strPosition'];
			$str.=': '.$_arrUnit['strName'];
			if(!empty($_arrUnit['strInstrument']))
				{
				$str.='.<br/>'.$_arrUnit['strInstrument'].'.';
				}
			if(!empty($_arrUnit['strWork']))
				{
				$str.='<br/>'.$_arrUnit['strWork'].'.';
				}
			if(!empty($_arrUnit['strYear']))
				{
				$str.='<br/>'.$_arrUnit['strYear'].'.';
				}
			
			$str.='<hr/>';
			}
		}
	return $str;
	}
function strLabelInfo($_arr=array(
		'strLabelLogo'	=> 'img',
		'strLabelName'	=> '',
		)
	)
	{
	if(!empty($_arr['strLabelLogo']))
		{
		$str='Логотип: <LabelLogo>'.$_arr['strLabelLogo'].'</LabelLogo>';
		}
	if(!empty($_arr['strLabelName']))
		{
		$str.='Лейбл: <LabelName>'.$_arr['strLabelName'].'</LabelName>';
		}
	else
		{
		$str.='Лейбл: <LabelName> Не определён. Пожалуйста добавьтесь.</LabelName>';
		}

	return $str;
	}
function strLabelContacts($_arr=array(
		'strCountryTitle'=>'',
		'strCountry'=>'',

		'strCityTitle'=>'',
		'strCity'=>'',

		'strDisrictTitle'=>'',
		'strDisrict'=>'',

		'strEmailTitle'=>'',
		'strEmail'=>'',

		'strTelegramTitle'=>'',
		'strTelegram'=>'',

		'strWatsappTitle'=>'',
		'strWatsapp'=>'',

		'strViberTitle'=>'',
		'strViber'=>'',

		'strICQTitle'=>'',
		'strICQ'=>'',

		'strVkTitle'=>'',
		'strVk'=>'',

		'strFacebookTitle'=>'',
		'strFacebook'=>'',
		)
	)
	{
	$str='';
	if(!empty($_arr['strCountry']))
		{
		$str.='
		<Country	name="'.$_arr['strCountryTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strCountryTitle'].':'),array('_strName'=>$_arr['strCountry'])).'</Country>';
		}
	if(!empty($_arr['strCity']))
		{
		$str.='			
		<City		name= "'.$_arr['strCityTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strCityTitle'].':'),array('_strName'=>$_arr['strCity'])).'</City>';
		}
	if(!empty($_arr['strDistrict']))
		{
		$str.='
		<District	name="'.$_arr['strDistrictTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strDistrictTitle'].':'),array('_strName'=>$_arr['strDistrict'])).'</District>';
		}
	if(!empty($_arr['strContactEmail']))
		{
		$str.='
		<email 		name="'.$_arr['strContactEmailTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactEmailTitle'].':'),array('_strName'=>$_arr['strContactEmail'])).'</email>';
		}
	if(!empty($_arr['strContactTelegram']))
		{
		$str.='				
		<telegram	name="'.$_arr['strContactTelegramTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactTelegramTitle'].':'),array('_strName'=>$_arr['strContactTelegram'])).'</telegram>';
		}
	if(!empty($_arr['strContactWhatsapp']))
		{
		$str.='	
		<whatsapp 	name="'.$_arr['strContactWhatsappTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactWhatsappTitle'].':'),array('_strName'=>$_arr['strContactWhatsapp'])).'</whatsapp>';
		}
	if(!empty($_arr['strContactViber']))
		{
		$str.='
		<viber		name="'.$_arr['strContactViberTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactViberTitle'].':'),array('_strName'=>$_arr['strContactViber'])).'</viber>';
		}
	if(!empty($_arr['strContactSkype']))
		{
		$str.='
		<skype		name="'.$_arr['strContactSkypeTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactSkypeTitle'].':'),array('_strName'=>$_arr['strContactSkype'])).'</skype>';
		}
	if(!empty($_arr['strContactICQ']))
		{
		$str.='
		<icq 		name="'.$_arr['strContactICQTitle'].'">'.strNameVallue(array('_strName'=>$_arr['strContactICQTitle'].':'),array('_strName'=>$_arr['strContactICQ'])).'</icq>';
		}
	if(!empty($_arr['strContactVk']))
		{
		$str.='
		<vk 		name="'.$_arr['strContactVkTitle'].'" >'.strNameVallue(array('_strName'=>$_arr['strContactVkTitle'].':'),array('_strName'=>$_arr['strContactVk'])).'</vk>';
		}
	if(!empty($_arr['strContactFacebook']))
		{
		$str.='
		<facebook 	name="'.$_arr['strContactFacebookTitle'].'">'.strNameVallue(array('_strName'=> $_arr['strContactFacebookTitle'].':'),array('_strName'=>$_arr['strContactFacebook'])).'</facebook>';
		}
	return $str;
	};
?>
<!--
Article programma constructor.
-->
<?php
//1 DATE PUBLISH
$strDatePublished		= "Fri 20.DEC.2019 23:50:22.7237";

//2 Ddjmix
$strDjMixTitle			= "radio selection 2018";
$strDjMixName			= "LastDayRadio last  record";
$strImage			= "https://sun9-33.userapi.com/c854020/v854020812/1b01ad/mxOxABpcQGc.jpg";
$strMixFile			= "/music/CloudRepublic.Ru/Dj/Assminog/CloudRepublic.Ru_assminog_crashed_from_LastDayRadio.COM.mp3";

//3 DJ+MC
$strDjType			= "Dj";
$strDjName			= "Assminog";
$strMcType			= "MC";
$strMc				= "Assminog";
$strPublisherType		= "";
//$strAuthorTitle		= "Author";
//$strAuthor			= "Dj Assminog";

//4 PUBLISHER
$strPublisherlType		= "Record-label";
$strPublisherName		= "CloudRepublic.Ru";

//5 LABEL
//$strPublisherName		=> "DjAssminog";
$arrLabel			=	array(
	'strLabelType'			=> "Record label",
	'strLabelName'			=> "CloudRepublic.Ru",
	'strCountryTitle'		=> "Country",
	'strCountry'			=> "Russia",
	'strCityTitle'			=> "City",
	'strCity'			=> "Sankt-Petersburg",
	'strDistrictTitle'		=> "District",
	'strDistrict'			=> "World Wide Admiralteyskiy paradise district",
	'strContactEmailTitle'		=> "Email",
	'strContactEmail'		=> "assminog@gmail.com",
	'strContactTelegramTitle'	=> "Telegram",
	'strContactTelegram'		=> '<a href="https://t.me/hifiint" target="_blanc">hifiint</a>',
	'strContactWhatsappTitle'	=> "Whatsapp",
	'strContactWhatsapp'		=> "+7(911)787-44-57",
	'strContactViberTitle'		=> "Viber",
	'strContactViber'		=> "--none--",
	'strContactSkypeTitle'		=> "Skype",
	'strContactSkype'		=> "--none--",
	'strContactICQTitle'		=> "ICQ",
	'strContactICQ'			=> "--none--",
	'strContactVkTitle'		=> "Vk",
	'strContactVk'			=> '<a href="https://vk.com/hifiintelligentclub">hifiintelligentclub</a>',
	'strContactFacebookTitle'	=> "FaceBook",
	'strContactFacebook'		=> "--none--",
);

//5 TRACKLIST
$arrTrackList	= array(
/*1[1] */			array(
				'strOffset'	=> '00:00:00',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Часть',
				'intNumber'	=> 1,
				'strRecordType'	=> 'Цифровая копия',
/*2[1][arrLabel]*/		'strTrackName'	=> 'BentleyMusic - Квартирный вопрос',
				'arrLabel'=>array(
					'strLabelLogo'			=> '',
					'strLabelName'			=> 'ИП Чекмарёв А.А.',
					'strCountryTitle'		=> 'Страна',
					'strCountry'			=> 'Россия',
					'strCityTitle'			=> 'Город',
					'strCity'			=> 'Санкт-Петербург',
					'strDistrictTitle'		=> 'Район',
					'strDistrict'			=> 'Адмиралтейский р-н',
					'strContactEmailTitle'		=> 'Электронная почта',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Телеграм:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",
					'arrAuthor'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор',
							),
						),
					'arrMusician'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Исполнитель',
							),
						),
					'arrInstrumentalist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strInstrument'	=> 'ZzzuzzZ Sintesizer',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
						),
					'arrHarmonist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Коипозитор',
							),
						),
					'arrEngeneer'=>array(
						array(
							'strName'	=> 'Циринский И.С.',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Балансировка аудио записи',
							),
						array(
							'strName'	=> 'Тесёлкин М.',
							'strPosition'	=> 'Ритмические нюансы',
							),
						),
					'arrDirector'=>array(
						array(
							'strName'	=> 'Циринский И.С.',
							'strPosition'	=> 'Директор',
							),
						),
					'arrVocalist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Вокалист',
							),
						),
					'arrPoet'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор стихов',
							),
						),
					'arrStudio'=>array(
						array(
							'strName'	=> 'Циринский И.С.',
							'strWork'	=> 'Создание арранжировки',
							'strInstrument'	=> 'Оборудование ZzzuzzZ',
							'strYear'	=> '2012г',
							'strPosition'	=> 'Студия: Малый проспект п-с',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strWork'	=> 'Запись вокала, мастеринг, публикация',
							'strInstrument'	=> 'Оборудование ZzzuzzZ',
							'strYear'	=> '2018г',
							'strPosition'	=> 'Домашняя студия: Троицкий пр, Адмиралтейский р-н',
							),
						),
					),
				),
			array(
				'strOffset'	=> '00:05:08',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 2,
				'strRecordType'	=> 'Цифровая копия',
/*2[1][arrLabel]*/		'strTrackName'	=> 'Beautiful Now',
				'arrLabel'=>array(
					'strLabelName'			=> '',
					'strLabelLogo'			=> '',
					'strCountryTitle'		=> '',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
/*					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Zedd Feat.John Bellion',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:08:30',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 3,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Бедная Овечка (Аккустическая версия)',
				'arrLabel'=>array(
					'strLabelName'			=> '',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Алёна Свиридова',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:12:24',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 4,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Не определено N1273. Добавьтесь пожалуйста assminog@gmal.com',
				'arrLabel'=>array(
					'strLabelName'			=> '',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Не определено. Добавьтесь пожалуйста. assminog@gmal.com',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:13:34',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 5,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Малыш',
				'arrLabel'=>array(
					'strLabelName'			=> '',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Маяковская',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:17:22',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 6,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Николь',
				'arrLabel'=>array(
					'strLabelName'			=> '',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Чугунный скороход',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:21:57',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 7,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Лесной Олень',
				'arrLabel'=>array(
					'strLabelName'			=> 'Пиратская станция',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> '',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:21:57',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 7,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Лесной Олень',
				'arrLabel'=>array(
					'strLabelName'			=> 'Пиратская станция',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> '',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:25:34',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 9,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Что делать если поругался, не работает.',
				'arrLabel'=>array(
					'strLabelName'			=> 'CloudRepublic.Ru',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'TV',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:31:07',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 8,
/*2[1][arrLabel]*/		'strTrackName'	=> '',
				'arrLabel'=>array(
					'strLabelName'			=> 'CloudRepublic.Ru',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'TV',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),
/*1[1] */		array(
				'strOffset'	=> '00:31:07',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Номер',
				'intNumber'	=> 8,
/*2[1][arrLabel]*/		'strTrackName'	=> 'Breeze of the cape',
				'arrLabel'=>array(
					'strLabelName'			=> 'CloudRepublic.Ru',
/*					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Country',
					'strCountry'			=> '',
					'strCityTitle'			=> '',
					'strCity'			=> '',
					'strDistrictTitle'		=> '',
					'strDistrict'			=> '',
					'strContactEmailTitle'		=> '',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Telegram:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",*/
/*3[1][arrLabel][arrAuthor]*/		'arrAuthor'=>array(
/*4[1][arrLabel][arrAuthor][strName]*/		array(
							'strName'	=> 'Lalu',
							'strPosition'	=> 'Автор',
/*3*/							),
/*4*/						),
					'arrMusician'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Исполнитель',
							),
						),
/*3*/					'arrInstrumentalist'=>array(
/*4*/						array(
							'strName'	=> '',
							'strInstrument'	=>'',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
/*3*/						),
/*4*/					'arrHarmonist'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> '',
					
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> '',
							'strPosition'	=> 'Коипозитор',
							),
						),
/*3*/					'arrEngeneer'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> '',
							'strPosition'	=> 'Сведение',
							),
						),
/*3*/					'arrDirector'=>array(
/*4*/						array(
							'strName'	=> '',
							'strPosition'	=> 'Директор',
							),
						),
					),
				),

			);
?>
<!--
EOF.
-->
<debug class="block" style="width:320px">
<meta charset="utf-8">
<DjMix
	name	="<?=$strDjmixTitle?>"
	title	="<?=$arrLabel['strLabelType'].': '.$arrLabel['strLabelName'].', '.$strDjType.': '.$strDjName.', '.$strDjMixTitle.': '.$strDjMixName?>"
	date	="<?=$strDatePublished?>"
	class	="block scrollerY"
	style	="
		border-top:1px solid #aaa;
		border-bottom:1px solid #aaa;
		margin: 5px 0 5px 0;
		"
		>


		<h1 
			style="
				color: #000;
				margin-bottom: 0;
				
				"
			>
			<?=$arrLabel['strLabelName']?>
			<?=$arrLabel['strLabelType']?>
		</h1>
		<h2><?=strNameVallue(array('_strName'=>$strDjType.':'),array('_strName'=>$strDjName));?></h2>
		<datePublished><?=$strDatePublished?></datePublished>
		<h3><?=$strDjMixName?></h3>
			
		<audio controls>
			<source src="<?=$strMixFile?>"/>
	    	</audio>					
		<Publisher name="<?=$strPublisherlType.';'.$strPublisherName?>">
			<Contacts>
				<?=strLabelContacts($arrLabel);?>
			</Contacts>
			<dj name="<?=$strDjName?>">
				Состав  произведения:
				Композиции:
				<trackList
					class="block"
					style="border: 1px solid #00"
					>
					<?php

					foreach($arrTrackList as $intI=>$arrTrack)
						{
						?>
						<audioTrack
							number="<?=$arrTrack['intNumber']?>"
							name="<?=$arrTrack['strName']?>"
							offsetSek="<?=$arrTrack['strOffset']?>"
							class="block"
							style="
								border: 1px solid #000;
								background-color:#DDD;
								"
							>
							<?php
							echo strTrackInfo($arrTrack);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrAuthor']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrMusician']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrInstrumentalist']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrDj']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrHarmonist']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrArranger']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrComposer']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrEngeneer']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrDirector']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrVocalist']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrPoet']);
							echo '<hr/>';
							echo strAutortInfo($arrTrack['arrLabel']['arrStudio']);
							echo '<hr/>';
							echo strLabelInfo($arrTrack['arrLabel']);
							echo '<hr/>';
							echo strLabelContacts($arrTrack['label']);
							echo '<hr/>';  
							?>
<?php
	/*				'arrAuthor'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор',
							),
						),
					'arrMusician'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Исполнитель',
							),
						),
					'arrInstrumentalist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strInstrument'	=> 'ZzzuzzZ Sintesizer',
							'strPosition'	=> 'Исполнитель-инструменталист',
							),
						),
					'arrDj'=>array(
						array(
							'strName'	=> '',
							'strInstrument'	=>'Scratch',
							'strPosition'	=> 'Диджей',
							),
						),
					'arrHarmonist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор гармонии',
							),
						),
					'arrArranger'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Аранжировщик',
							),
						),
					'arrComposer'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Коипозитор',
							),
						),
					'arrEngeneer'=>array(
						array(
							'strName'	=> 'Циринский И.С.',
							'strPosition'	=> 'Техническое оснащение',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Мастеринг',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Балансировка аудио записи',
							),
						array(
							'strName'	=> 'Тесёлкин М.',
							'strPosition'	=> 'Ритмические нюансы',
							),
						),
					'arrDirector'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Директор',
							),
						),
					'arrVocalist'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Вокалист',
							),
						),
					'arrPoet'=>array(
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strPosition'	=> 'Автор стихов',
							),
						),
					'arrStudio'=>array(
						array(
							'strName'	=> 'Циринский И.С.',
							'strWork'	=> 'Создание арранжировки',
							'strEquipment'	=> 'Оборудование ZzzuzzZ',
							'strPosition'	=> 'Студия Малый проспект п-с',
							),
						array(
							'strName'	=> 'Чекмарёв А.А.',
							'strWork'	=> 'Запись вокала, мастеринг, публикация',
							'strEquipment'	=> 'Оборудование ZzzuzzZ',
							'strPosition'	=> 'Троицкий пр адм. р-н',
							),
						),*/
?>
<?php /*
				'strOffset'	=> '00:00:00',
				'strOffsetTitle'=> 'Смещение',
				'strOffsetUnit'	=> 'Сек',
				'intNumberTitle'=> 'Часть',
				'intNumber'	=> 1,
				'strRecordType'	=> 'Цифровая копия',
		'strTrackName'	=> 'BentleyMusic - Квартирный вопрос',
				'arrLabel'=>array(
					'strLabelLogo'			=> 'img',
					'strCountryTitle'		=> 'Страна',
					'strCountry'			=> 'Россия',
					'strCityTitle'			=> 'Город',
					'strCity'			=> 'Санкт-Петербург',
					'strDistrictTitle'		=> 'Район',
					'strDistrict'			=> 'Адмиралтейский р-н',
					'strContactEmailTitle'		=> 'Электронная почта',
					'strContactEmail'		=> "assminog@gmail.com",
					'strContactTelegramTitle'	=> "Телеграм:",
					'strContactTelegram'		=> "<a href='https://t.me/hifiint' target='_blanc'>hifiint</a>",
					'strContactWhatsappTitle'	=> "Whatsapp:",
					'strContactWhatsapp'		=> "+7(911)787-44-57",
					'strContactViberTitle'		=> "Viber:",
					'strContactViber'		=> "--none--",
					'strContactSkypeTitle'		=> "Skype:",
					'strContactSkype'		=> "--none--",
					'strContactICQTitle'		=> "ICQ:",
					'strContactICQ'			=> "--none--",
					'strContactVkTitle'		=> "Vk:",
					'strContactVk'			=> "<a href='https://vk.com/hifiintelligentclub'>Vk</a>",
					'strContactFacebookTitle'	=> "FaceBook:",
					'strContactFacebook'		=> "--none--",
	'arrAuthor'=>array(
	array(
							'strName'	=> '',
							'strPosition'	=> 'Автор',
							),					),

							<?php /* ?>
							<?=strNameVallue(array('_strName'=>$arrTrack['strOffsetTitle'].':'),array('_strName'=>$arrTrack['strOffset'],'_strSize'=>$arrTrack['strOffsetUnit']));?>
							<?=strNameVallue(array('_strName'=>$arrTrack['arrAuthor']['strPosition'].':'),array('_strName'=>$arrTrack['arrLabel']['arrAuthor']['strName']));?>
							<?php */ ?>
						</audioTrack>
					<?php
					}
				?>
				</trackList>
			</dj>
		</Publisher>
	</DjMix>
</debug>
</body>