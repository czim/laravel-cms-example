<?php
namespace App\Cms\Modules\Dashboard;

use App\Http\Controllers\Controller;

class DashboardWebController extends Controller
{

    public function index()
    {
        return view('cms.dashboard.index');
    }

    public function admin()
    {
        return view('cms.dashboard.admin');
    }
}
