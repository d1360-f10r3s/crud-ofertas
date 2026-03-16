<?php

namespace Database\Seeders;

use App\Models\Oferta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfertaSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            Oferta::create([
                'titulo' => 'Laptop',
                'vigencia' => '2026-05-27',
                'tienda' => 'Lenovo Oficial',
                'precio_original' => 19999,
                'precio_descuento' => 16999
            ]);

            Oferta::create([
                'titulo' => 'Monitor 144HZ',
                'vigencia' => '2026-05-19',
                'tienda' => 'Mercado Libre',
                'precio_original' => 6850,
                'precio_descuento' => 3480
            ]);

            Oferta::create([
                'titulo' => 'Kit de herramientas',
                'vigencia' => '2026-06-12',
                'tienda' => 'Trupper',
                'precio_original' => 1190,
                'precio_descuento' => 859
            ]);
        }
}
