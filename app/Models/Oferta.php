<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    public function getPorcentajeDescuento()
        {
            if ($this->precio_original == 0) 
            {
                return 0;
            }

            return (($this->precio_original - $this->precio_descuento) / $this->precio_original) * 100;
        }
}
