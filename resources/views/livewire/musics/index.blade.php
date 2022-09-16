<div>
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
</div>
