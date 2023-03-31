<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Word;
use Illuminate\Http\Request;

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
        $users = User::count();
        $words = Word::count();
        $totalSearchCount = Word::sum('view_count');
        $data = Word::orderBy('view_count', 'desc')->first();
        if ($data !== null) {
            $obj = json_decode($data);
            $mostViewedWord = $obj->name;
        } else {
            $mostViewedWord = '';
        }
        $widget = [
            'users' => $users,
            'words' => $words,
            'totalSearchCount' => $totalSearchCount,
            'mostViewedWord' => $mostViewedWord
        ];

        return view('admin/home', compact('widget'));
    }
}
