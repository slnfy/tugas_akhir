<?php

namespace App\Helpers;

class AuthCommon {
    function __construct() { }

    public static function setUserSession($body) {
        @app('session')->forget('user');
        return app('session')->put('user',$body);
    }

    public static function getUserSession() {
        return session('user');
    }
}