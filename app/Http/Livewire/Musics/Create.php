<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;


class Create extends Component
{
    public $song, $artist, $published, $genre, $album, $email;

    public function addMusic(){
        $this->validate([
            'song'             =>            ['required' ,'string', 'max:255'],
            'artist'           =>            ['required' ,'string', 'max:255'],
            'published'        =>            ['required' ,'string', 'max:255'],
            'genre'            =>            ['required' ,'string', 'max:255'],
            'album'            =>            ['required' ,'string', 'max:255'],
        ]);

        Music::create([
            'song'               =>        $this->song,
            'artist'             =>        $this->artist,
            'published'          =>        $this->published,
            'genre'              =>        $this->genre,
            'album'              =>        $this->album,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!');
    }

    public function render()
    {
        return view('livewire.musics.create');
    }
}
