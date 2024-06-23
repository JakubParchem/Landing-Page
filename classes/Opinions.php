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
    public function specialopinions($lang)
    {
        if($lang=="pl"){
            echo "<div class='specialopinion'><img src='https://img.freepik.com/darmowe-zdjecie/portret-usmiechnietej-odnoszacej-sukcesy-bizneswoman-patrzacej-w-kamere-siedzaca-w-restauracji-biznesowa-dama-ze-stylowa-fryzura-nosi-elegancki-garnitur-spotkanie-biznesowe-atrakcyjny-wyglad_8353-12611.jpg?size=626&ext=jpg&ga=GA1.1.1788614524.1718928000&semt=ais_user' alt='portait'> <p>".$this->opinion_list[0]->getContent()."</p><h3>".$this->opinion_list[0]->getSender()."</h3></div>";
            echo "<div class='specialopinion'><img src='https://thumbs.dreamstime.com/b/business-man-standing-confident-smile-portrait-successful-suit-smiling-proud-outdoors-44304293.jpg'> <p>".$this->opinion_list[1]->getContent()."</p><h3>".$this->opinion_list[1]->getSender()."</h3></div>";
            echo "<div class='specialopinion'><img src='https://t2.ftcdn.net/jpg/02/12/05/47/1000_F_212054798_y9JOgCWReOOgnfHYJWUIEvnTd1EnDEu2.jpg' alt='portait'> <p>".$this->opinion_list[2]->getContent()."</p><h3>".$this->opinion_list[2]->getSender()."</h3></div>";


        }
        else if($lang=="en"){
            echo "<div class='specialopinion'><img src='https://img.freepik.com/darmowe-zdjecie/przekonana-pretty-business-woman-z-przekroczone-rece_1262-2992.jpg' alt='portait'> <p>".$this->opinion_list[3]->getContent()."</p><h3>".$this->opinion_list[3]->getSender()."</h3></div>";
            echo "<div class='specialopinion'><img src='https://previews.123rf.com/images/michaeljung/michaeljung1509/michaeljung150900153/45020213-close-up-portrait-of-young-african-business-man.jpg' alt='portrait'> <p>".$this->opinion_list[4]->getContent()."</p><h3>".$this->opinion_list[4]->getSender()."</h3></div>";
            echo "<div class='specialopinion'><img src='https://img.freepik.com/premium-photo/young-hispanic-business-woman-wearing-professional-look-smiling-confident-city_908985-5470.jpg' alt='portait'> <p>".$this->opinion_list[5]->getContent()."</p><h3>".$this->opinion_list[5]->getSender()."</h3></div>";
        }
    }
}