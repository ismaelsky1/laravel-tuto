<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweewts extends Component
{
    use WithPagination;
    public $content = "";

    protected $rules = [
        'content' => 'required|min:3|max:45'
    ];

    public function render()
    {

        $tweets = Tweet::with('user')->paginate();
        // dd($tweets);

        return view(
            'livewire.show-tweewts',
            ['tweets' => $tweets]
        );
    }



    public function create()
    {

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);
        $this->content = '';
    }
}
