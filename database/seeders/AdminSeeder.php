<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj = new Admin;
        $obj->name = "Faisal ahmed";
        $obj->email = "faisal@gmail.com";
        $obj->photo = "admin.jpg";
        $obj->password = Hash::make('1234');
        $obj->token = "";
        $obj->save();
    }
}
