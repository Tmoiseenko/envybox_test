<?php


namespace App\Interfaces;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


interface SaveDataInterface
{
    public static function saveData(Arrayable $request);
}
