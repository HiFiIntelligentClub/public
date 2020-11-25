<?php
//echo'123';
$_SERVER['REQUEST_URI']='/';
require_once('/home/EDRO.SOT/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SOT/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SOT/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SOT/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SOT/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SOT/System/2.VectorKIIM/1.objKIIM.activation.php');
require_once('/home/EDRO.SOT/System/5.Templates/0.strKIIM.Template.php');
require_once('/home/EDRO.SOT/System/3.Buffer/1.EDRO_Buffering.php');

$objEDRO	=new Event($objKIIM);
//echo'<pre>';
//print_r($objEDRO);
//echo'</pre>';
//exit;

FileRead::_GetDesignHTML($objKIIM, $objEDRO->arrDesign['strTemplate'], $objEDRO);
require_once('/home/EDRO.SOT/System/6.HTML_Interfaces/3.HTML_CloseInterface.php');
?>
