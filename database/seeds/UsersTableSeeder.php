<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        if (\DB::table("users")->find(1) == null) {
            \DB::table("users")->insert([
                "id"         => 1,
                "name"   => "Admin",
                "email"      => "admin@corona.com",
                "password"   => bcrypt('savanah2020'),
                "created_at" => $now,
                "updated_at" => $now,
            ]);
        }
        else echo "Already seeded, aborting...\n";
    }
}
