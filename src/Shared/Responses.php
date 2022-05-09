<?php

namespace App\Shared;

use Symfony\Component\HttpFoundation\JsonResponse;

class Responses
{

    public function success(array $messages = Messages::SUCCESS, $data = null) : JsonResponse {
        return new JsonResponse([
            'title' => $messages['title'],
            'message' => $messages['message'] ,
            'data' => $data ,
        ], $messages['code']);
    }


    public function error(array $messages = Messages::ERROR) : JsonResponse {
        return new JsonResponse([
            'title' => $messages['title'],
            'message' => $messages['message'] ,
        ], $messages['code']);
    }

}