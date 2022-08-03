<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KanyeAPI;

class ApiController extends Controller
{
    public function get_quotes(){
        echo KanyeAPI::getQuotesForApi();
    }
}
