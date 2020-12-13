<?php
declare(strict_types = 1);

namespace Technical\Optime;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseOneTest
 * desde la raiz del proyecto
 */
class ExerciseOne
{
    // TODO: La funcion solution recibe dos cadenas de carateres
    // completa el codigo para que devuelva si str1 contiene str2 o no

    /**
     * Phrase contains another phrase validation method
     * @param string $str1
     * @param string $str2
     * @return string
     */
    public function solution(string $str1, string $str2)
    {
        $contains_string = "\"" . $str1 . "\" contiene \"" . $str2 . "\"";
        $does_not_contain_string = "\"" . $str1 . "\" no contiene \"" . $str2 . "\"";


        if ($this->isEmptyString($str2)) {
            $str2 = ' ';
            $contains_string = $this->replaceStringContent($contains_string, 'contiene ""', 'contiene ');
        }

        if ($this->compareStrings($str1, $str2)) {
            return $contains_string;
        } else {
            return $does_not_contain_string;
        }
    }

    private function compareStrings(string $string_1, string $string_2)
    {
        return strpos($string_1, $string_2) !== false ? true : false;
    }

    private function replaceStringContent(string $string, string $search, string $replace){
            return str_replace($search, $replace , $string);
    }

    private function isEmptyString(string $string){
        return $string == '' || empty($string) ? true : false;
    }

}