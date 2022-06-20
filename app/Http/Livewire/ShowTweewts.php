<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweewts extends Component
{
    public $message = "M";
    public function render()
    {
        $tweets = Tweet::with('user')->get();
        // dd($tweets);

        return view(
            'livewire.show-tweewts',
            ['tweets' => $tweets]
        );
    }

    public function create()
    {
        Tweet::create([
            'content' => $this->message,
            'user_id' => 1
        ]);
        $this->message = '';
    }
}
