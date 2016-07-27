<?php

/**
 * @author sally
 * @copyright 2009
 */



 $connect=@mysql_connect('localhost','root','');
 if($connect){
 $db=@mysql_select_db('bellnet');

 if(!$db) echo "no database",mysql_error();
 }else{

    echo "there is no connection";
 }




  mysql_set_charset('utf -8');//arabic

?>