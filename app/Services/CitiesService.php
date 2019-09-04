<?php


namespace App\Services;


use App\Models\Cities;

class CitiesService
{
    public static function getAllCities()
    {
        return Cities::all();
    }
}
