<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function vote(Request $request) {

        Vote::create([
            'image_id' => $request['image_id'],
            'mssv' => $request['mssv'],
            'vote' => $request['vote']
        ]);
        return redirect()->route('home.show', ['mssv' => $request['mssv']]);
    }
}
