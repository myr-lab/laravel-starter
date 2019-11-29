<?php

namespace App\Social;
use Illuminate\Contracts\View\View;

class SocialComposer{

	public function allSocialLinks()
	{
		 $data = [
         
	         "facebook-f" => "www.facebook.com",
	         "twitter" => "www.twitter.com",
	         "github" => "www.github.com",

         ];

         return $data;
      
	}

	public function compose(View $view) {

      $view->with('links', $this->allSocialLinks());

    }
}