<?php

class Movie {
   private $title; 
   private $wacther; 

   function __construct($cTitle, $cWatcher)
   {
      $this->title = $cTitle; 
      $this->wacther = $cWatcher; 
   }

   function getWacther(){
      return $this->wacther;
   }
   function setWatcher($watcher){
      $this->wacther =  $watcher; 
   }
}


$avengers = new Movie("Avengers", "PG-13");


$avengers->setWatcher("Dog");
echo $avengers->getWacther(); 


?> 