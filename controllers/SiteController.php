<?php

namespace app\controllers;

use app\core\Application;

class SiteController extends BaseController
{
    public static function home()
    {
        $params = [
            'name' => "Ayobami"
        ];
        return self::render('home', $params);
    }
    public static function contact()
    {
        return self::render('contact');
    }
    public static function handleSubmit()
    {
        return "E file E jo Submit";
    }
}