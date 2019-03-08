<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContributionController extends Controller
{
    public function contribution()
    {
        return view('admin.contribution');
    }
}
