<?php
//外部ファイル読み込む
require_once("class/Building.php");
?>


<?php
class Tower extends Building{
    private $builYear;
    
    function __construct(string $name, int $height , int $builYear){
        perent::__construct($name,$height);
        $this->builYear;
    }
    
    function setBuildingYear(int $year):void{
        $this->builYear = $year;
    }
    function getBuildingYear():int{
        return $this->builYear;
    }
    
    function getProfile(){
        $profile = "{$this->name} の高さは {$this->height}mで、{$this->year}年に開業しました。";
    }
}
?>