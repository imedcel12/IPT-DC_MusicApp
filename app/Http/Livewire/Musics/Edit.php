<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;
class Edit extends Component
{
    public $musId;
    public $song, $artist, $published, $genre, $album;

    public function mount(){
        $this->song = $this->music->song;
        $this->artist = $this->music->artist;
        $this->published = $this->music->published;
        $this->genre = $this->music->genre;
        $this->album = $this->music->album;

    }

    public function editMusic(){
        $this->validate([
            'song'             =>            ['required' ,'string', 'max:255'],
            'artist'           =>            ['required' ,'string', 'max:255'],
            'published'        =>            ['required' ,'string', 'max:255'],
            'genre'            =>            ['required' ,'string', 'max:255'],
            'album'            =>            ['required' ,'string', 'max:255'],
        ]);
        $this->music->update([
            'song'        =>        $this->song,
            'artist'      =>        $this->artist,
            'published'   =>        $this->published,
            'genre'       =>        $this->genre,
            'album'       =>        $this->album,
        ]);
        return redirect('/index')->with('message' , 'Updated Sucessfully!');
    }


    public function getMusicProperty(){
        return Music::find($this->musId);
    }


    public function render()
    {
        return view('livewire.musics.edit');
    }

    public function back(){
        return redirect('/index');
    }
}
