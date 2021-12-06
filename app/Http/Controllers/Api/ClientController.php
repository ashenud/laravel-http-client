<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function customer_list(Request $request, $client_uuid){
        $token = $request->bearerToken();
        $url = config('settings.api_source').'/api/clients/'.$client_uuid.'/customers';
        $per_page = $request->perPage ? $request->perPage : config('settings.per_page');
        $page = $request->page ? $request->page : config('settings.page');

        $response = Http::withToken($token)->get($url, [
            'perPage' => $per_page,
            'page' => $page,
        ]);
        return $response;
    }
}
