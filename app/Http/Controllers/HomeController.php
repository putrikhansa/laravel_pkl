<?php
namespace App\Http\Controllers;
use App\Models\User;

use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();

        if ($user->isAdmin == 1) {
            return redirect('admin');
        } else {
            return redirect('/');
        }
        // return view('home');
    }
}
