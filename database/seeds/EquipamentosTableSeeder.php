<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EquipamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Equipamento::class, 50)->create();


    }
}
