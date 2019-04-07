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

    /**
     * 普擎科技官网外链
     * 
     */
    public function pqlink()
    {
        return view('AdminLTE.pqlink.pqlink');
    }
}
