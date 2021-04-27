<?php
require_once __DIR__.DIRECTORY_SEPARATOR."../iexport/iexport.php";

class xmlExport implements iexport {


    public function doExport()
    {
        echo"exporting xml";
    }
}
class htmlExport implements iexport {


    public function doExport()
    {
        echo"exporting html";
    }
}
class jsonExport implements iexport {


    public function doExport()
    {
       echo"exporting json";
    }
}