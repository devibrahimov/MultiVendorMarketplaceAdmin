<?php


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

