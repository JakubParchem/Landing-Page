<?php
include "Opinion.php";
class Opinions
{
    private $opinion_list=[];
    public function __construct()
    {
        $f=fopen("../opinions.txt","r");
        $str="";
        while(!feof($f)){
            $str.=fgets($f);
        }
        $arr=explode("~",$str);
        for ($i=0;$i<sizeof($arr)-1;$i++){
            $this->opinion_list[]=new Opinion($arr[$i]);
        }
    }
    public function show($i)
    {
        if($i<=$this->size()) {
            for ($j = 0; $j < $i; $j++) {
                echo $this->opinion_list[$j];
            }
        }
    }
    public function showall()
    {
        for ($j = 0; $j < $this->size(); $j++) {
            echo $this->opinion_list[$j];
        }
    }
    public function size(){
        return sizeof($this->opinion_list);
    }
    private function save(){
        $f=fopen("../opinions.txt","w");
        for ($i = 0; $i < sizeof($this->opinion_list)-1; $i++) {
            fwrite($f,$this->opinion_list[$i]->display());
        }
        fclose($f);
    }
}