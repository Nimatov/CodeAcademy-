<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question; // Savollar modeli (loyihangizdagi nomga qarab o'zgartiring)

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
        $user = auth()->user();

        // Har bir fan bo'yicha bazada nechta savol borligini hisoblaymiz
        // (Bu kod ishlashi uchun bot savollarni bazaga qo'shayotganda 'subject' ustuniga mos nomlarni yozishi kerak)
        $counts = [
            'html'       => Question::where('subject', 'HTML')->count(),
            'css'        => Question::where('subject', 'CSS')->count(),
            'bootstrap'  => Question::where('subject', 'Bootstrap')->count(),
            'javascript' => Question::where('subject', 'JavaScript')->count(),
            'sql'        => Question::where('subject', 'SQL')->count(),
            'laravel'    => Question::where('subject', 'Laravel')->count(),
        ];

        // Ma'lumotlarni home.blade.php shabloniga jo'natamiz
        return view('home', compact('user', 'counts'));
    }
}   