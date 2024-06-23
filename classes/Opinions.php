<?php
include Opinion::class;
class Opinions
{
    private Opinion $opinion_list;
    public function __construct()
    {
        $f=fopen("../opinions.txt","r");
        $str="";
        while(!feof($f)){
            $str.=fgets($f);
        }
        $arr=explode("~",$str);
        foreach ($arr as $s){
            $this->opinion_list[]=new Opinion($s);
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
}