<?php

namespace App\Traits;

Trait  allTraits
{
     function saveImage($photo, $folder){
        //save photo in folder


        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_name);
        return $file_name;

    }


    function saveMainImage($MainPhoto, $folder){
        //save photo in folder
        $file_extension = $MainPhoto->getClientOriginalExtension();
        $file_nameMain = time().'.'.$file_extension;
        $path = $folder;
        $MainPhoto -> move($path,$file_nameMain);
        return $file_nameMain;
    }


}
