<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;

class Index extends Component
{
    public function loadMusic(){
        $musics = Music::orderBy('song')->get();

        return compact('musics');
    }
    public function render()
    {
        return view('livewire.musics.index', $this->loadMusic());
    }
}
