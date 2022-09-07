<?php

class Visibility
{
   public $public = 'Public';
   protected $protected = 'Protected';
   private $private = 'Private';
   
   function show()
    {
    echo $this->public . "<br>\n";
    echo $this->protected . "<br>\n";
    echo $this->private . "<br>\n";
   }
}