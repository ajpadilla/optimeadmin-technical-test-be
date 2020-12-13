<?php


namespace Technical\Optime;


/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit  --filter ExerciseTwoTest
 * desde la raiz del proyecto
 */
class ExerciseTwo
{
    // TODO: Suponga que se recibe los datos de un formulario para subscribirse a un newsletter.
    // Este formulario sólo recibe un campo que es el de email. Valida lo ingresado por el usuario.

    /**
     * Email input validation method
     * @param string $input
     * @return string
     */
    public function solution($input)
    {
        if ($this->inputIsNullOrEmpty($input)){
            return "Debe completar el campo del email";
        }else if ($this->isValidEmail($input)){
            return "¡{$input} gracias por subscribirte!";
        }else{
            return "{$input} no es válido";
        }
    }

    private function inputIsNullOrEmpty($input)
    {
        if ($input == "" || empty($input)){
            return true;
        }
    }

    private function isValidEmail($input){
        return filter_var($input, FILTER_VALIDATE_EMAIL) ? true : false;
    }
}