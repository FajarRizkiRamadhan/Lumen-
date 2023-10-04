<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    // public function updateProduct(Request $request, $productId) {
    //     Log::emergency("hlo?????????");
    //     $user = $request->user();
    //     if ($user == null){
    //         return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
    //     }
    //     return response()->json([
    //         "id"=> $productId,
    //         "msg"=> "Berhasil update data",
    //         "data"=> $request->all(),
    //         "name"=> $request->input('name'),
    //         "user"=> $user
    //     ]);
    // }

    // public function sendEmail()
    // {
    //     Mail::raw('This is the email body.', function ($message) {
    //     $message->to('kuroi.nichirin@gmail.com')
    //         ->subject('Lumen email test');
    //     });
    //     return 'Great! eMail successfully sent ;)';
    // }

}
