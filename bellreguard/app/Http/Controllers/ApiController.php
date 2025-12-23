<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class ApiController extends Controller
{
    public function jugadores(){
        try{
            $response = Http::get('https://www.balldontlie.io/api/v1/players');

            if($response->failed()){
                return response()->json(['Error' => 'error en obtener datos'], 500);
            }

            return response()->json($response->json());

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
*/
