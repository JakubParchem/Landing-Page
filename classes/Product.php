<?php
class Product
{
    private $name;
    private $description;
    private $src;
    public function __construct($name,$description,$src)
    {
        $this->name = $name;
        $this->description = $description;
        $this->src = $src;
    }
    public function __toString(){
        return "
<div class='product'>
<img src='$this->src' alt='product image'>
<h3>$this->name</h3>
<p>$this->description</p>
</div>";
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getSrc()
    {
        return $this->src;
    }
    public function setSrc($src)
    {
        $this->src = $src;
    }
}