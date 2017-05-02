<?php

use Illuminate\Database\Seeder;

class buku_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('buku')->insert([ //,
                'BUKU_Name' 		=> $faker->name,
                'BUKU_Penerbit' 	=> $faker->uuid,
                'BUKU_Pengarang'	=> $faker->title,
                'BUKU_Harga' 		=> 123,
            ]);
        }
    }
}
