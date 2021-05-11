<?php
  
   namespace interfaces;

   interface CoverLetterInterface{
    
    protected $subject = 'candidature poste développeur';
         
    public function newCover($coverName);

   }



