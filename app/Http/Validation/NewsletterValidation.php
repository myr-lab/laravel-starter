<?php

namespace App\Http\Validation;

Trait NewsletterValidation {

   
   public function newsletterFormValidation($data)
   {
       $data = request()->validate([
          
          'email' => 'required'

       ]);

       return $data;

   }


}