<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;
class Delete extends Component
{
    public $musId;

    public function getMusicProperty(){
        return Music::select('id','song', 'artist', 'published')
        ->find($this->musId);

    }
    public function deleteMusic(){
        $this->music->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.musics.delete');
    }

    public function back(){
        return redirect('/index');
    }
}

