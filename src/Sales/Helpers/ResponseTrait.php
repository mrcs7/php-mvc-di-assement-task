<?php

namespace Sales\Helpers;

trait ResponseTrait
{
    /**
     * @param array $data
     * @return false|string
     */
    public function successResponse($data=[])
    {
        http_response_code(200);
        return json_encode($data);
    }

    /**
     * @param array $errors
     * @return false|string
     */
    public function validationErrorsResponse($errors=[])
    {
        http_response_code(422);
        return json_encode($errors);
    }
}
