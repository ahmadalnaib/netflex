<?php


class FormSanitizer
{
    public static function FormString($inputText) {
//        $inputText=strip_tags($inputText);
        $inputText=htmlspecialchars($inputText);
//    $inputText=str_replace(" ","",$inputText);
        $inputText=trim($inputText);  #remove speaceing
        $inputText=strtolower($inputText);  # make the name small
        $inputText=ucfirst($inputText); #make the first charter captel
        return $inputText;

    }

    public static function FormUsername($inputText) {
        $inputText=strip_tags($inputText);
        $inputText=str_replace(" ","",$inputText);
        return $inputText;
    }


    public static function FormPassword($inputText) {
        $inputText=strip_tags($inputText);
        return $inputText;
    }


    public static function FormEmail($inputText) {
        $inputText=htmlspecialchars($inputText);
        $inputText=trim($inputText);
        return $inputText;
    }

}