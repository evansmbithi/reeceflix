<?php

class FormSanitizer{
    /*
      since we are not initializing any variables
      up here, we would use a static function. But if 
      we had some variables here, then we'd use a non-
      static function
    */
    public static function sanitizeFormString ($inputText){
        # Static functions mean that we do not need 
        # to create an instance of a class in order 
        # to call it e.g.
        # $fs = new FormSanitizer();
        # Allows us to call a class directly

        //remove HTML tags from any string
        $inputText = strip_tags($inputText);
        //remove spaces from text and replace any space with an empty string in $inputText
        $inputText = str_replace(" ", "", $inputText); 
        # for people with spaces in their names e.g Al Mashauri
        # $inputText = trim($inputText); //removes spaces from before and after but not within the string

        //convert strings to lowercase
        $inputText = strtolower($inputText);
        //uppercase the first character of the string
        $inputText = ucfirst($inputText);

        return $inputText;
    }

    public static function sanitizeFormUsername ($inputText){      
      $inputText = strip_tags($inputText);      
      $inputText = str_replace(" ", "", $inputText);
      $inputText = ucfirst($inputText);       
      
      return $inputText;
    }

    public static function sanitizeFormEmail ($inputText){      
      $inputText = strip_tags($inputText);      
      $inputText = str_replace(" ", "", $inputText);
      $inputText = strtolower($inputText);       
      
      return $inputText;
    }

    public static function sanitizeFormPassword ($inputText){      
      $inputText = strip_tags($inputText);      
      
      return $inputText;
    }
}

?>