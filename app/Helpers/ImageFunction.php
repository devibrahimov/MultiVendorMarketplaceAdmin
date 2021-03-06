<?php

/*
 * IMAGE COMPRESS FUNCTION
 */
function compressImage($data) {
    $info = getimagesize($data['source']);

    if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg'){
        $image = imagecreatefromjpeg($data['source']);

        $imagesize = filesize($data['source']) ;

        if ($imagesize >= 1500000)
            return    imagejpeg($image, $data['destination'], 35);

        if ($imagesize >= 1000000)
            return   imagejpeg($image, $data['destination'],40);

        if ($imagesize >= 50000)
            return    imagejpeg($image, $data['destination'], 60);

        if ($imagesize < 50000)
            return   imagejpeg($image, $data['destination'] );

    }
}

    function makedirectory($dirpath){

        $direcoties =  explode('/',$dirpath);

        $path = '';
        if (!file_exists($dirpath) ) {

            foreach ($direcoties as $dir){

                if (!file_exists(public_path($path.'/'.$dir))) {
                    mkdir( public_path($path.'/'.$dir), 0777, true);
                }
                $path.='/'.$dir;
            }
        }
        //echo $path ;
    }

    function deleteimage($imagepath ){
        if(file_exists($imagepath)){
            unlink($imagepath );
        }
    }

