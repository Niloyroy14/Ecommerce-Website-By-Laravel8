<?php

namespace App\Helper;

/**
 *  GravatarHelper 
 */
class GravatarHelper {


/**



***/

   public static  function validate_gravater($email){

      $hash = md5('email');
      $url  = 'https://www.gravatar.com/avatar/' . $hash . '?d=404';
      $headers = @get_headers($url);

      if(!preg_match("|200|",$headers[0] )){

      	$has_valid_avatar = FALSE;
      }
      else{

      	$has_valid_avatar = TRUE;
      }
       
       return $has_valid_avatar;
    }


/**

* gravatar image
*
*get Avatar Image From An Email Address


***/

public static function gravatar_image($email,$size=0,$id=""){

    $hash = md5('email');
    $image_url  = 'https://www.gravatar.com/avatar/' . $hash . '?s='.$size.'$d='.$d;

      return $image_url;


      }








}
	
	








?>
