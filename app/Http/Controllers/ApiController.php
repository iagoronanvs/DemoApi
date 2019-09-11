<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test(Request $r)
    {
        $faker = \Faker\Factory::create();
        $arr = [];
        for($i = 0; $i < 10; $i++) {
            $arr[] = (object) [
                'id' => ($i+1),
                'name' => $faker->name,
                'address' => $faker->address,
                'text' => $faker->text,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'phone' => $faker->tollFreePhoneNumber,
                'email' => $faker->email
            ];
        }
        return $arr;
    }
}
