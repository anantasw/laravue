<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class QuoteController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }
    
    public function index()
    {
        $quotes = [];
        $client = new Client();

        for ($i = 1; $i <= 5; $i++) {
            $response = $client->request('GET', 'https://api.kanye.rest?format=text');
            $data = $response->getBody()->getContents();
            array_push($quotes, ['key' => $i, 'data' => $data]);
        }
        
        if (!empty($quotes)) {
            return response()->json([
                'success' => true,
                'quotes' => $quotes 
            ], 200);
        }
    }
}
