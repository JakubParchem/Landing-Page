<?php

class Opinion
{
private $sender;
private $content;
public function __construct($str)
{
    $strarr=explode(";;",$str);
    for ($i = 0; $i < sizeof($strarr); $i++) {
        if($i==0){
            $this->sender.=$strarr[$i];
        }
        else{
            $this->content.=$strarr[$i];
        }
    }
}
public function __toString(){
    return "<div class='opinion'> 
              <p>$this->content</p>
              <h3>$this->sender</h3>
          </div>";
}
public function display(){
  return $this->sender.";;\n".$this->content."~";
}
}
?>