<?php

use Illuminate\Database\Seeder;

class tabelObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = factory(App\modelObat::class, 10)->create();
    }
}
