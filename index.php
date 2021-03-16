<?php
set_time_limit(0);
  require('/home/EDRO.SetOfTools/System/0.Loader/0.loader.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_CitizenCountry1_Country2_.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportComplain_Violation_УКРФ.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViloationLaw_ResidenceCountry.php');
  require('/home/EDRO.SetOfTools/System/1.Reporter/2.ReportViolation_ResourceRules.php');

//require('/home/EDRO.SetOfTools/System/1.Оповещение/ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SendMail/');
//require('/home/EDRO.SetOfTools/System/1.Оповещение/ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Complains');
//require('/home/EDRO.SetOfTools/System/1.Оповещение/ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResidenceCountryLaw');
//require('/home/EDRO.SetOfTools/System/1.Оповещение/ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/ResurceRules');
//require('/home/EDRO.SetOfTools/System/1.Оповещение/ОтправкаПисьмаАдминистраторуСистемы/ПочтовыйРобот/SuspectKeys/Violation/Rights_ResidentCounttry1_residentCountry2');
require('/home/EDRO.SetOfTools/System/2.Functions/0.key.php');
require('/home/EDRO.SetOfTools/System/2.Functions/1.FunctionsSetup.php');
require('/home/EDRO.SetOfTools/System/2.Functions/2.Platforms.php');
require('/home/EDRO.SetOfTools/System/2.Functions/3.Functions.php');
require('/home/EDRO.SetOfTools/System/2.Functions/4.Dyn.php');
require('/home/EDRO.SetOfTools/System/2.Functions/5.StringFunctions.php');
require('/home/EDRO.SetOfTools/System/2.Functions/5.StringFunctions.php');
require('/home/EDRO.SetOfTools/System/3.VectorKIIM/0.KIIM.php');
require('/home/EDRO.SetOfTools/System/3.VectorKIIM/1.objKIIM.activation.php');
require('/home/EDRO.SetOfTools/System/3.VectorKIIM_Helper/1.objKIIM.activation.php');
require('/home/EDRO.SetOfTools/System/4.RAM/0.EDRO_Objects.php');
require('/home/EDRO.SetOfTools/System/5.Styles/0.CSS.Styles.php');
require('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php');
require('/home/EDRO.SetOfTools/System/7.Templates/0.strKIIM.Template.php');

require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');

$objEDRO=new EDRO();

$objEDRO=new EDRO();
$objEDRO->strVOID();
echo $objEDRO->strHTML();


/*



*/

?>
