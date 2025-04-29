<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.home.index', [
            'users'=> $users
        ]); // Dashboard page or your default home page
    }

    /**
     * Show the users page in the admin section.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        // Return the admin users view
        return view('admin.user');
    }
}
