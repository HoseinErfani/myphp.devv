<?php
 include_once "functions.php";
include "oop/export/Export.php";
$myDate = getData();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            font-weight: bold;
        }

        td {
            width: 70px;
            height: 50px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<?php
/*$db=new Db();
$db->table_name="tablename";
$db->getSelect(2,array("col1","col2"));*/
/*
echo __DIR__;
echo __LINE__;
echo __FILE__;
ss*/

//new Test();
//f("Test");
/*new Test();
function spl_autoload_register($className){
    $fileName=$className.'Class.php';
    $filePath=__DIR__.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$fileName;
    var_dump($filePath);
    if(file_exists($filePath)){
        include $filePath;
    }

}*/
$input="xml";
$className=$input.'Export';

$exportObject=new $className;
$exportObject->doExport();
?>
</body>
<script>
    //setTimeout(function () {    location.reload(); },500);
</script>
</html>