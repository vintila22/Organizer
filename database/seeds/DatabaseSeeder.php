<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /*
     Daca te-ai plictisit de ce ai in baza de date faci un php artisan db:seed si ai golit tot la user :)
     De cand cu noua sectiune tests este usor inutil DatabaseSeeder
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
    }
}
