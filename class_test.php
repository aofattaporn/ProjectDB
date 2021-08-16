<?php 

class Book {
   public $title; 
   public $author; 
   public $pages; 

   function __construct($aTitle, $aAuyrjher, $aPages ) {
      $this->title = $aTitle;
      $this->author = $aAuyrjher;
      $this->pages = $aPages; 
   }

   function overPages(){
      if($this->pages >= 500){
         return "this book has more than 500 pages"; 
      }
      else {
         return "this book has not more than 500 pages";
      }
   }

   function setInfomation(){

   }
   function getInfomation(){

   }

}

$book1 = new Book("Harry Potter", "J.K.Rollong", 400); 

$book2 = new Book("Lord of the rings", "Tolkiirn", 700); 

echo $book2->title."  \t\t\n => "; 

echo $book2->overPages(); 






?>