<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $genre = 'all', $album = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadMusic(){

        $query = Music::orderBy('song')
        ->search($this->search);

        if($this->genre != 'all'){
            $query->where('genre', $this->genre);
        }

        if($this->album != 'all'){
            $query->where('album', $this->album);
        }

        $musics = $query->paginate(2);

        return compact('musics');
    }
    public function render()
    {
        return view('livewire.musics.index', $this->loadMusic());
    }
}
