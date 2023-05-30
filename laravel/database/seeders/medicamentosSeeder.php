<?php

namespace Database\Seeders;

use App\Models\medicamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class medicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicamentos = [
            ['nombre' => 'Paracetamol', 'cantidad' => 5, 'fabricante' => 'Laboratorio Chile'],
            ['nombre' => 'Lozartan', 'cantidad' => 3, 'fabricante' => 'Laboratorio Chile'],
            ['nombre' => 'Centralina', 'cantidad' => 4, 'fabricante' => 'Laboratorio Chile'],
            ['nombre' => 'Omeprazol', 'cantidad' => 8, 'fabricante' => 'Pfizer'],
        ];

        $timestamp = date("Y-m-d H:i:s");

        foreach ($medicamentos as &$item) {
            $item['created_at'] = $timestamp;
            $item['updated_at'] = $timestamp;
        }

        medicamento::insert($medicamentos);
    }
}
