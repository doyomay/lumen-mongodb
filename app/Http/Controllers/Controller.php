<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function getIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public function parseHeaders()
    {
        $headers = [
            'HTTP_HOST',
            'HTTP_USER_AGENT',
            'HTTP_REFERER',
            'HTTP_CONNECTION',
            'HTTP_ACCEPT',
            'HTTP_ACCEPT_LANGUAGE'
        ];
        $parse_data = [];
        foreach ($headers as $header) {
            if (isset($_SERVER[$header])) {
                $parse_data[$header] = $_SERVER[$header];
            }
        }
        return $parse_data;
    }
}
