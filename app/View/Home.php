<?php

namespace App\View;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Image;
use App\Models\Vote;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Component;
use Illuminate\Http\Request;
use Validator;
use function PHPUnit\Framework\isEmpty;

/**
 *
 */
class Home extends Controller
{
    public string $mssv;

    /**
     * @param string|null $mssv
     * @return View|RedirectResponse
     */
    public function show(string $mssv): View|RedirectResponse
    {
        if (is_numeric($mssv) && strlen($mssv) == 8) {
            $vote_count = Vote::where('mssv', $mssv)->get()->count();
            return view('home', ['mssv' => $mssv, 'vote_count' => $vote_count]);
        }
        return redirect('/');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $mssv = $request['mssv'];
        return redirect()->route('home.show', ['mssv' => $mssv]);
    }

//    private function getToken(): string
//    {
//        $count = Image::all()->count();
//        return hash('sha256', $count + 1);
//    }
}
