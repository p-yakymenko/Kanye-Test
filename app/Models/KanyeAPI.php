<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class KanyeAPI extends Model
{
    use HasFactory;

    public static $number_of_quotes = 5;

    public static function getQuotes(){
        $quotes = [];
        for($i = 1; $i <= self::$number_of_quotes; $i++){
            $quotes[] = self::getSingleQuote();
        }
        return $quotes;
    }

    public static function getQuotesForApi(){
        $quotes = [];
        for($i = 1; $i <= self::$number_of_quotes; $i++){
            $quotes[] = self::getSingleQuote();
        }
        return json_encode($quotes);
    }

    private static function getSingleQuote(){
        $quote_raw = Http::get('https://api.kanye.rest/');
        return json_decode($quote_raw)->quote;
    }
}
