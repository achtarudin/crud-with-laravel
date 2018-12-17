<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Skill;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('experiences')->truncate();
        DB::table('skills')->truncate();
        DB::table('items')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        $token = "10";
        foreach(range(1,10) as $index){
                $name = $faker->name;
                $item = new Item();
                $item->name = $name;
                $item->filename = 'image/'.$faker->catchPhrase.'.jpg';
                $item->phone = $faker->phoneNumber;
                $item->email = $faker->safeEmail;
                $item->github_account =  $faker->email;
                $item->api_token = $token.'0'.$index;
                $item->save();
                $counter = rand(1, 3);
                for($i = 0; $i < $counter; $i++){
                    $skill = new Skill();
                    $skill->skill = $faker->word;
                    $item->skills()->save($skill);
                }            
        }

    }
}
