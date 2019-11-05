<?php
require_once("class/Building.php");
require_once("class/Iintelligence.php");
?>

<?php
class IntelligentBuilding extends Building implements Iintelligence{
   function isAutoLocked(){
       $message = "オートロック完備しています。";
   }
   function  accessWifi(){
       $message = "無線LAN常時接続出来ます。";
   }
}
?>