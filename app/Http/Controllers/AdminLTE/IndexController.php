<?php

namespace App\Http\Controllers\AdminLTE;

class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }


    /*
     * 首页
     */
    public function index()
    {
        return view('AdminLTE.index.index');
    }
}
