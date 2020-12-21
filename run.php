#!/usr/bin/php
<?php
//print_r($argv);
//echo'123';
if(!isset($argv[1]))
	{
	$argv[1]	='/';
	}
$_SERVER['REQUEST_URI']		=$argv[1];
require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');
require_once('/home/EDRO.SetOfTools/System/5.Templates/0.strKIIM.Template.php');

require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');
$str.=$strKIIMWindowHTML; 
$objEDRO	=new Event($objKIIM);
$str.=FileRead::strGetDesignHTML($objKIIM, $objEDRO->arrDesign['strTemplate'], $objEDRO);



$str.=include('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/3.HTML_CloseInterface.php');


?>
