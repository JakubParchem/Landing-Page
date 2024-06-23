<?php

class Opinion
{
private $sender;
private $content;
public function __construct($str)
{
    $strarr=explode("\n",$str);
    $name=false;
    for ($i = 0; $i < sizeof($strarr); $i++) {
        if(!$name){
            $this->sender.=$strarr[$i];
        }
        else{
            $this->content.=$strarr[$i];
        }
        if(str_contains("(<name>)",$strarr[$i])){
            $name=true;
            $this->sender=substr($this->sender,0,-7);
        }
    }
    $this->content=substr($this->content,0,-5);
}
public function __toString(){
    return "<div class='opinion'> 
              <p>$this->content</p>
              <h3>$this->sender</h3>
          </div>";
}
}
?>