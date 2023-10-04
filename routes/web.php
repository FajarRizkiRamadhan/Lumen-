<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'penjualan'], function () use ($router) {
    $router->get('/', function () {
        return response()->json([
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
            [
                "id " => "1",
                "nomor" => "SALE/0001",
                "customer"=> "Joko",
            ],
        ]);
    });
    $router->get('/{id}', function ($id) {
        return response()->json(['data' => 
        [
            "id"=> "1",
            "nomor"=> "SALE/0001",
            "customer"=> "Ibnu",
            "total"=> "2000000",
            "alamat"=> "Jakarta"
        ]]); 
    });
    $router->post('/', function ()
    {
        return response()->json(
            [
                'msg'=>'berhasil',
                "id"=>4
            ]
            );
    });

    $router->put('/{id}', function (Request $request, $id) {
        
        $nomor = $request->input('nomor');

        return response()->json(['data' => 
        [
            "id"=> $id,
            "nomor"=> $nomor,
            "customer"=> "Ibnu",
            "total"=> 2000000,
            "alamat"=> "Jakarta"
        ]]); 
    });

    $router->delete('/{id}', function ($id) {

        return response()->json(['data' => 
            "Berhasil Delete"
        ]); 
    });
    
    // $router->get('/{id}/confirm', function (Request $request, $id) {
    //     $user = $request->$user();
    //     if($user == NULL)
    //     {
    //         return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
    //     }

    //     return response()->json(['msg' => "Berhasil confirm"]); 
    // });
    $router->get('/{id}/confirm', function(Request $request, $id)
    {

        $user = $request->user();
        Log::debug('<<<<<<<<<');
        Log::debug($user);
        if($user == NULL){
            return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
        }
        return response()->json(['msg' => "Berhasil Confirm"]);
    });
    $router->get('/{id}/send-email', function(Request $request, $id)
    {
        $user = $request->user();
        Mail::raw('This is the email body.', function ($message) {
            $message->to('fajarrizki961@gmail.com')
                ->subject('Lumen email test');
            });
        return response()->json(['msg' => "Berhasil Send Email"]);
    });




});