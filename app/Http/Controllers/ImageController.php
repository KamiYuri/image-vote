<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use App\Models\Vote;

class ImageController extends Controller
{
    public function vote(VoteRequest $request) {
        $validated = $request->validated();

        Vote::create([
            'image_id' => $validated['image_id'],
            'vote' => $validated['vote'],
            'token' => $validated['token']
        ]);

        return redirect()->route('welcome');
    }
}
