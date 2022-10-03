<?php

namespace App\Http\Livewire\Musics;

use App\Events\UserLog;
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

        $log_entry = 'Deleted Music: "' .$this->music->song . ' " with an ID: ' .$this->music->id;
        event(new UserLog($log_entry));

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

