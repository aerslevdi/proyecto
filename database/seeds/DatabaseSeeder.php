<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //$this->call(UsersTableSeeder::class);

      factory(App\User::class)->times(50)->create();
        factory(App\Contact::class)->times(50)->create();
    }
}
