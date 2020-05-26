<?php


class FormSanitizer
{
    public static function FormString($inputText) {
        $inputText=htmlspecialchars($inputText);
//    $inputText=str_replace(" ","",$inputText);
        $inputText=trim($inputText);  #remove speaceing
        $inputText=strtolower($inputText);  # make the name small
        $inputText=ucfirst($inputText); #make the first charter captel
        return $inputText;

    }

}