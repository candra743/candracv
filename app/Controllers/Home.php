<?php

namespace App\Controllers;

use App\Models\about;

class Home extends BaseController
{
    public function index()
    {
        $model = new about();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}
