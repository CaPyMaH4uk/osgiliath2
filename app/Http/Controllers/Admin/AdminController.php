<?php
/**
 * Created by PhpStorm.
 * User: Rognar
 * Date: 03.06.2015
 * Time: 15:08
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;


class AdminController extends Controller {



    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth');
    }

    public function getIndex(){

            return view('admin.app');
    }



}