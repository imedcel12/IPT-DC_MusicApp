<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;
use App\Events\UserLog;

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

        $music = Music::create([
            'song'               =>        $this->song,
            'artist'             =>        $this->artist,
            'published'          =>        $this->published,
            'genre'              =>        $this->genre,
            'album'              =>        $this->album,
        ]);

        $log_entry = 'Added Music: "' . $music->song . ' " with an ID: ' . $music->id;
        event(new UserLog($log_entry));

            return redirect('/index')->with('message', $this->song . ' Added Successfully!');
    }

    public function updated($propertyEmail)
    {
        $this->validateOnly($propertyEmail, [
            'email'  => ['required','email','unique:musics'],

        ]);
    }

    public function render()
    {
        return view('livewire.musics.create');
    }
}
