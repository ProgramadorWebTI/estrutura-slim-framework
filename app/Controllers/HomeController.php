<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $req, Response $res, array $args)
    {
        // $this->c->paginacao->render(); Paginação
        echo $this->c->blade->make('home');
    }
}
