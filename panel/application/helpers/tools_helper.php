<?php
function convertToSeo($text){

    $turkce=array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş",".",",","!","'","\""," ","?","*","_","|","<",">","=","(",")","[","]","{","}","+","/","$","#","@","%","&","é");
    $convert=array("c","c","g","g","u","u","o","o","i","i","s","s","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");

    return strtolower(str_replace($turkce,$convert,$text));

}
function get_readable_date($date){
    setlocale(LC_ALL, 'tr_TR.utf-8');
    setlocale(LC_CTYPE, 'C');
    return strftime('%e %B %Y', strtotime($date));
}