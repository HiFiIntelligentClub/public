#!/usr/bin/php
<?php
//Copyright © assminog@gmail.com Andrey A. Chekmarev

//arrElectronicContactServices = array('str@strServiceName'=>'strContact');
class ElectronicContactServices
	{
	private $arrConstructTemplates		=array(); 
//array('arr@strServiceName'=>array(
//		'arr@strLang'=>array(
//			'arr@strServicePropery=array(
//				'strPropertyName'=>'strServiceInput',
//				)
//			)
//		);
	//arrElectronicContacts=array('str@strServiceName' => 'strServiceContact');
	public  $strHTML				='';
	public	$arrKIIM				=array('intK'=>0);
	private $arrContacts				=array(); 
	private $strLanguage				='EN'; 		//Default
	private $strPlatform				='Windows';	//Default
	private	$strDirection				='Output';
	private $strName				='';

	public function __construct($_arrKIIM, $_strDirection='Output', $_arr=array(
				'_arrConstructTemplates' 	=>array(), 
				'_arrContacts'			=>array(),
				'_strLanguage'			=>'',
				'_strPlatform'			=>'',
				)
			)
		{
		$this->arrKIIM			=$_arrKIIM;
		$this->strPlatform		=$_arr['_strPlatform'];
		$this->strLanguage		=$_arr['_strLanguage'];
		$this->strDirection		=$_strDirection;
		$this->arrConstructTemplates	=$_arr['_arrConstructTemplates'];
		$this->arrContacts		=$_arr['_arrContacts'];
		$this->_ElectronicContacts_constructHTML();
		/*
		if($this->arrKIIM['intK']>8)
			echo'intK'."\n";
		if($this->arrKIIM['intI']>2)
			echo'intI'."\n";
		if($this->arrKIIM['intII']>4)
			echo'intII'."\n";
		if($this->arrKIIM['intIII']>16)
			echo'intIII'."\n";
		if($this->arrKIIM['intM']>2)
			echo'intM'."\n";
		*/
		//print_r($this->arrKIIM);
		
		}
	private function _ElectronicContacts_constructHTML() //$_strInputOutput='Input/Output'
		{
		//$this->arrKIIM['intM']++;
		foreach($this->arrContacts as $strServiceName=>$strContact)
			{
			//$this->arrKIIM['intK']++;
		
			$strPlatformTemplate=$this->arrConstructTemplates[$strServiceName][$this->strLanguage][$this->strDirection]['Templates'][$this->strPlatform];
			$strServiceName=$this->arrConstructTemplates[$strServiceName][$this->strLanguage][$this->strDirection]['Names']['Name'];
			$strPlatformTemplateHTML=str_replace('{ServiceName}',$strServiceName,str_replace('{Contact}',$strContact,$strPlatformTemplate));
			echo $strPlatformTemplateHTML."\n";
			//print_r($this->strName);
			//echo "\n";
			//$strElectronicContactServiceName=$this->arrElectronicContactTemplatesForShow[$strServiceName][$this->strLanguage]['Names']['Name'];
			//$this->arrElectronicContactTemplatesForShow[$strServiceName][$this->strLanguage]['Names']['templateContactName'];
			}
		}
	private function arrElectronicContacts_attachInputTemplate()
		{
		foreach($this->arrElectronicContacts as $strServiceName=>$strServiceContact)
			{
			}
		}
	}

$arrElectronicContactIOTemplates= array(
	'Email'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Email',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					),
				),			
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Email',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'		=>'Электронная почта',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="mailto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Электронная почта',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="mailto:{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Telegram'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'			=>'Telegram',
					'inputName'		=>'Telegram link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Telegram',
					),
				
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'			=>'Телеграм',
					'inputName'	=>'Ссылка на Телеграм',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Телеграм',
					'inputName'	=>'Ссылка на Телеграм',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://t.me/{Contact}" target="_blanc">{Contact}</a>',
					)
				)
			)
		),
	'Whatsapp'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'		=>'Whatsapp',		
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'		=>'Whatsapp',		
				),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Whatsapp',		
					'inputName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Whatsapp',		
					'inputName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="whatsapp:send?abid={Contact}&text=Hello, im from RCe.">{Contact}</a>',
					)
				)
			)
		),
	'VK'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'VK',			
					'inputName'	=>'Vk link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'VK',			
					'inputName'	=>'Vk link',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'ВК',			
					'inputName'	=>'Ссылка на ВК',
					),
				'Templates'=>array(
					'Default'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https://vk.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'ВК',			
					'inputName'	=>'Ссылка на ВК',
					),
				'Templates'=>array(
					'Default'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https://vk.com/{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Skype'=>array(
		'EN'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Skype',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="callto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Skype',
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					)
				)
			),
		'RU'=>array(
			'Input'=>array(
				'Names'	=>array(
					'Name'	=>'Скайп',
					'inputName'	=>'Номер телефона Скайп',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="callto:{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'	=>'Скайп',
					'inputName'	=>'Номер телефона Скайп',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="callto:{Contact}">{Contact}</a>',
					)
				)
			)
		),
	'Viber'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Viber',			
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Viber',			
					'inputName'	=>'Phone number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				),
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Вайбер',
					'templateContactName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'<a href="viber://add?number={Contact}">{Contact}</a>',
					),
				    ),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'Вайбер',
					'templateContactName'	=>'Номер телефона',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="viber://add?number={Contact}">{Contact}</a>',
					)
				)
			)
		),
	'ICQ'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'		=>'ICQ number',
					),
				'Templates'	=>array(
					'Default'	=>'{Contact}',
					'Android'	=>'{Contact}',
					'IOS'		=>'{Contact}',
					'Windows'	=>'{Contact}',
				    ),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'		=>'ICQ number',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					),
				),
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
	    			'Templates'	=>array(
					'Default'	=>'{Contact}',
					'Android'	=>'{Contact}',
					'IOS'		=>'{Contact}',
					'Windows'	=>'{Contact}',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
	    			'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					)
				)
			)
		),
	'Facebook'=>array(
		'EN'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'			=>'Facebook',
					'inputName'	=>'Facebook link',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					),
				),
			'Output'=>array(
				'Names'	=>array(
					'Name'			=>'ICQ',
					'inputName'	=>'Номер ICQ',
					),
	    			'Templates'	=>array(
					'Default'	=>'{ServiceName}{Contact}',
					'Android'	=>'{ServiceName}{Contact}',
					'IOS'		=>'{ServiceName}{Contact}',
					'Windows'	=>'{ServiceName}{Contact}',
					)
				)
			),
		'RU'=>array(
			'Input'	=>array(
				'Names'	=>array(
					'Name'	=>'Фейсбук',
					'inputName'	=>'Ссылка на Фейсбук',
					),
				'Templates'	=>array(
					'Default'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'<a href="https:facebook.com/{Contact}">{Contact}</a>',
					),
		    		),
			'Output'	=>array(
				'Names'	=>array(
					'Name'	=>'Фейсбук',
					'inputName'	=>'Ссылка на Фейсбук',
					),
				'Templates'	=>array(
					'Default'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Android'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'IOS'		=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					'Windows'	=>'{ServiceName}<a href="https:facebook.com/{Contact}">{Contact}</a>',
					)
		    		)		
			)
		)
	);
//arrElectronicContactServices= array('str@strServiceName'=>strContact);
$arrElectronicContacts= array(
	'Email'		=> 'assminog@gmail.com',
	//	'actionTemplate'	=> 'ElectronicContactServicesTemplates',
	'Telegram'	=> 'hifiint',
	'Whatsapp'	=> '+79117874457',
	'Viber'		=> '',
	'Skype'		=> '',
	'ICQ'		=> '',
	'VK'		=> 'assminog',
	'Facebook'	=> 'assminog',
	'Facebook'	=> 'assminog',
	'Facebook'	=> 'assminog',
	'Facebook'	=> 'assminog'
	);
//int_r($arrElectronicContactIOTemplates);
//foreach(array('Input', 'Output') as $strDirection)
//	{
	$arrKIIM=array('intK'=>0, 'intI'=>0, 'intII'=>0, 'intIII'=>0 , 'intM'=>0, 'strM'=>'');
	foreach(array('Input', 'Output') as $strDirection)
		{
		/*$arrKIIM['intI']++;
		$arrKIIM['strI']='Input, Output, Values=1,2, MAX=2';*/
		foreach(array('RU', 'EN') as $strLanguage)
			{
			/*$arrKIIM['intII']++;
			$arrKIIM['strII']='RU,EN, Values=(1,2)*intI, MAX=2*intI=4';*/
			foreach(array('Default', 'Android', 'IOS', 'Windows') as $strPlatform)
				{
				$arrKIIM['intIII']++;
				$arrKIIM['strIII']='Default, Android, IOS, Windows, Values=(1,2,3,4)*intI*intII, MAX=4*intI*intII=16';
				$objNewElectronicContactsOutputHTML=new ElectronicContactServices($arrKIIM,'Output', array(
					'_arrConstructTemplates' 	=>$arrElectronicContactIOTemplates, 
					'_arrContacts'			=>$arrElectronicContacts,
					'_strLanguage'			=>$strLanguage,
					'_strPlatform'			=>$strPlatform,
				));
				/*if($objNewElectronicContactsOutputHTML->arrKIIM['intK']!=8)
					{
					echo 'Not all constructor processed'."\n";
					}
				if($objNewElectronicContactsOutputHTML->arrKIIM['intM']!=1)
					{
					echo 'Not all arrElectronicContacts'.$objNewElectronicContactsOutputHTML->arrKIIM['intM']."\n";
					}
				*/
		
				}
			}
		}
//	}
//print_r($objNewElectronicContactsOutputHTML);
/*arrElectronicContacts_PrepareToShow($arrElectronicContactServices);
arrElectronicContacts_PrepareToShow($_arrElectronicContactServices, $_strLang)
	{
	foreach($_arrElectronicContactServices as $strServiceName=>$strContact)
		{
		}
	}
strShowList($_strContactAction, $_strContactData)
	{
	}
foreach($arrElectronicContactServicesActionTemplates[$arrElectronicContactServiceName][$_strLang] as $strContactAction => $strActionData)
	{
	if($strContactName=='templateContactName')
		{
		}
	else
		{
		}
	}
function ElectronicContactServicesTemplates($_arrElectronicContactServices, $_strLang, $_strOS)
	{
	
	}
ElectronicContactServicesTemplates($arrElectronicContactServices);*/
?>
