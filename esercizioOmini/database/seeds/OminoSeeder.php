<?php

use Illuminate\Database\Seeder;

use App\Omino;

class OminoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Omino::class, 20) -> create();
    }
}
