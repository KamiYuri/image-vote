<?php

namespace App\View;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\Request;

/**
 *
 */
class Welcome extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function show(Request $request): View|Factory|Application
    {
        return view('welcome', ['token' => $request->ip()]);
    }

//    private function getToken(): string
//    {
//        $count = Image::all()->count();
//        return hash('sha256', $count + 1);
//    }
}
