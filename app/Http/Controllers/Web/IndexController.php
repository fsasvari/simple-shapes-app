<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Response;

class IndexController extends Controller
{
    /**
     * GET welcome page
     *
     * @return \Illuminate\Http\Response
     */
     public function welcome(): Response
     {
         return $this->responseFactory->view('welcome');
     }
}
