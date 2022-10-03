<div>
    <div class="container mb-2">
        <div class="row">
            <div class="col">
                <select class="form-select" wire:model.lazy="genre">
                    <option value="all">All</option>
                    <option value="POP">Pop</option>
                    <option value="HIP-HOP">Hip-hop</option>
                    <option value="REGGAE">Reggae</option>
                    <option value="ROCK">Rock</option>
                    <option value="PARTY">Party</option>
                    <option value="JAZZ">Jazz</option>
                    <option value="LATIN">Latin</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" wire:model.lazy="album">
                    <option value="all">All</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Opm">OPM</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead class="bg-primary">
            <tr>
                <th>ID #</th>
                <th>Song</th>
                <th>Artist</th>
                <th>Published</th>
                <th>Genre</th>
                <th>Album</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musics as $mus)
                <tr>
                    <th>{{$mus->id}}</th>
                    <th>{{$mus->song}}</th>
                    <th>{{$mus->artist}}</th>
                    <th>{{$mus->published}}</th>
                    <th>{{$mus->genre}}</th>
                    <th>{{$mus->album}}</th>
                    <td >
                        <a href="{{url('edit', ['songs' => $mus->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{url('delete', ['songs' => $mus->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$musics->links()}}
</div>
