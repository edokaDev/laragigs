<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class Devices extends Controller
{
    function getAll()
    {
        return Device::all();
    }
    function getOne($id)
    {
        return Device::find($id);
    }
}
