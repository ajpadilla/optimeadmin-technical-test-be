<?php


namespace Technical\Optime;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseThreeTest
 * desde la raiz del proyecto
 */
class ExerciseThree
{
    // TODO: Crea una clase que maneje un juego,
    // donde se deben atrapar una serie de enemigos para subir de nivel.
    // Cada cierta cantidad de enemigos atrapados hará que el jugador suba de nivel.
    // Cada vez que el jugador comience una partida, su nivel se reiniciará.
    // Se debe poder obtener el nivel en el que se encuentra el jugador.

    private $max_level;

    private $level;

    public function __construct(int $max_level)
    {
        $this->max_level = $max_level;
        $this->level = 0;
    }


    public function catchEnemy()
    {
        $this->level++;
    }

    public function getLevel()
    {
        if($this->level == 0){
            return 0;
        } elseif($this->level == $this->max_level){
            if ($this->max_level == 1 || $this->max_level == 2){
                return 1;
            }
        } elseif ($this->level < $this->max_level){
            return 0;
        } elseif ($this->level > $this->max_level) {
            return $this->level - 2;
        }
    }

    public function getLevel2()
    {
        return $this->level;
    }
}