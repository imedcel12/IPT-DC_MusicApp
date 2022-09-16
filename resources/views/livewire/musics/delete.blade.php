<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header bg-primary text-center">
                <h2>Delete Music</h2>
            </div>
            <div class="card-body bg-secondary">
                <table class="table">
                    <tr>
                        <th>Song</th>
                        <td>{{$this->music->song}}</td>
                    </tr>
                    <tr>
                        <th>Artist</th>
                        <td>{{$this->music->artist}}</td>
                    </tr>
                    <tr>
                        <th>Date Published</th>
                        <td>{{$this->music->published}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deleteMusic()">
                        Delete
                    </button>
                    <button class="btn btn-primary btn-sm mx-2" wire:click="back()"  >
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
