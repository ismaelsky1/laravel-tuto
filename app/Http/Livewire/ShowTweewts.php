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

        $tweets = Tweet::with('user')->latest()->paginate(10);
        // dd($tweets);

        return view(
            'livewire.show-tweewts',
            ['tweets' => $tweets]
        );
    }



    public function create()
    {

        $this->validate();

        auth()->user()->tweets()->create([
            'content' => $this->content,
        ]);

        // Tweet::create([
        //     'user_id' =>
        //     'user_id' => auth()->user()->id
        // ]);
        $this->content = '';
    }
}
