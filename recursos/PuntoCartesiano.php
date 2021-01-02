<?php

class PuntoCartesiano
{
    public $pos_x;
    public $pos_y;

    /**
     * PuntoCartesiano constructor.
     * @param $pos_x
     * @param $pos_y
     */
    public function Asignar($pos_x, $pos_y)
    {
        $this->pos_x = $pos_x;
        $this->pos_y = $pos_y;
    }

    /**
     * @return mixed
     */
    public function getPosX()
    {
        return $this->pos_x;
    }

    /**
     * @param mixed $pos_x
     */
    public function setPosX($pos_x): void
    {
        $this->pos_x = $pos_x;
    }

    /**
     * @return mixed
     */
    public function getPosY()
    {
        return $this->pos_y;
    }

    /**
     * @param mixed $pos_y
     */
    public function setPosY($pos_y): void
    {
        $this->pos_y = $pos_y;
    }
}