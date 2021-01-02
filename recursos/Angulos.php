<?php

/**
 * Class Angulos
 * @package Recursos
 */
class Angulos{

    /**
     * @var PuntoCartesiano
     */
    public $punto_a;
    /**
     * @var PuntoCartesiano
     */
    public $punto_b;
    /**
     * @var PuntoCartesiano
     */
    public $punto_c;
    /**
     * @var PuntoCartesiano
     */
    public $punto_d;
    /**
     * @var PuntoCartesiano
     */
    public $punto_z;
    public $distancia_a;
    public $distancia_zx_h;
    public $distancia_zy_v;
    public $rotacion;

    /**
     * @param $pos_x int
     * @param $pos_y int
     * @param $punto string a,b,c,d
     *
     */
    public function AsignarPunto($pos_x,$pos_y,$punto)
    {
        switch ($punto){
            case 'a':
                $this->punto_a = new PuntoCartesiano();
                $this->punto_a->Asignar($pos_x, $pos_y);
                break;
            case 'b':
                $this->punto_b = new PuntoCartesiano();
                $this->punto_b->Asignar($pos_x, $pos_y);
                break;
            case 'c':
                $this->punto_c = new PuntoCartesiano();
                $this->punto_c->Asignar($pos_x, $pos_y);
                break;
            case 'd':
                $this->punto_d = new PuntoCartesiano();
                $this->punto_d->Asignar($pos_x, $pos_y);
                break;
            case 'z':
                $this->punto_z = new PuntoCartesiano();
                $this->punto_z->Asignar($pos_x, $pos_y);
                break;
        }
    }

    /**
     * @param $primer_punto PuntoCartesiano
     * @param $segundo_punto PuntoCartesiano
     * @return int
     */
    public function CalcularDistancia($primer_punto, $segundo_punto){
        $p_x = pow($segundo_punto->getPosX() - $primer_punto->getPosX(),2);
        $p_y = pow($segundo_punto->getPosY() - $primer_punto->getPosY(),2);
        $distancia = sqrt($p_x+$p_y);
        return $distancia;
    }

    public function DevolverInclinacion(){
        $this->AsignarPunto($this->punto_b->getPosX(),$this->punto_a->pos_y,'z');
        $this->distancia_zx_h = $this->CalcularDistancia($this->punto_a,$this->punto_z);
        $this->distancia_zy_v = $this->CalcularDistancia($this->punto_z,$this->punto_b);
        $this->distancia_a = $this->CalcularDistancia($this->punto_a,$this->punto_b);
        $this->rotacion = acos($this->distancia_zx_h / $this->distancia_a);
        return $this->rotacion;
    }

}