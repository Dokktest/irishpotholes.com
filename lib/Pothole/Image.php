<?php

namespace Pothole;

class Image extends \Base\BaseClass 
{
    protected $_table = 'image';
    protected $_index = 'image_id';


    public function delete() 
    {
        if(parent::delete()) { 
          $mask = UPLOAD_DIR.DIRECTORY_SEPARATOR."*".$filename;
          array_map( "unlink", glob( $mask ) );
        }
    }

 
}
