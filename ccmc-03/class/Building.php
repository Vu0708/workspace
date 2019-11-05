<?php
class Building {
    protected $name;
    protected $height;
    
    function __contrust($name,$height){
        $this->name = $name;
        $this->height = $height;
    }
    
    function setName(string $name):void{
          $this->name = $name;
      }
      
      function getName():string{
          return $this->name;
      }
      
      function setHeight(int $height):void{
          $this->height = $height;
      }
      
      function getHeight():int{
          return $this->height;
      }
      
      function getProfile(){
          $profile = "{$this->name} の高さは {$this->height}";
          return $profile;
      }
}
?>