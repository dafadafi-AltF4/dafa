<?php

namespace App\Http\Controllers;

use illuminate\Foundation\Auth\Access\AuthorizesRequests;
use illuminate\Foundation\validation\ValidatesRequests;
use illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}