<?php

use Illuminate\Database\Seeder;

class Test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();
        Event::create([
            'name' => 'Supomo',
            'skills' => 'Ngoding',
            'file_name' => 'Resume'
        ]);

        Event::create([
            'name' => 'Raihan',
            'skills' => 'Cook',
            'file_name' => 'Gado-Gado'
        ]);

    }
}
