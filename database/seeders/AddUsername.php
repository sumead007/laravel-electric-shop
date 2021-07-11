<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AddUsername extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "idcard" => "154687984612",
                "fname" => "สุเมธ",
                "lname" => "ดวงมาลัย",
                "username" => "sumead007",
                "password" => bcrypt(12345678),
                "position" => "0",
                "dob" => "08/02/1999",
            ]
        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
