<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, ValidatesRequests;

    /*Factory que retorna uma resposta base para a API  */
    public function response($message, $data, $status = true, $statusCode = 200) {
        $response = [
            'success' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return response($response, $statusCode);
    }
}