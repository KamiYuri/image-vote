<?php

namespace App\View\Components;

use App\Models\Image;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 *
 */
class Vote extends Component
{
    /**
     * @var string
     */
    public string $token;

    /**
     * Create a new component instance.
     *
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    private function getRandomImageID(): int
    {
        $count = Image::all()->count();
        return rand(1, $count);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Factory|Application
     */
    public function render(): View|Factory|Application
    {
        return view('components.vote', ['image_id' => $this->getRandomImageID()]);
    }
}
