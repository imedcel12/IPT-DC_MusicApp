
<div>
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h2>Add Music</h2>
        </div>
        <div class="card-body bg-secondary">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="song">
                <label for="song">Song</label>
                @error('song')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="artist">
                <label for="artist">Artist</label>
                @error('artist')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="published">
                <label for="published">Date Published</label>
                @error('published')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="genre" class="form-select" wire:model.defer="genre">
                    <option hidden="true">Moods & Genre</option>
                    <option selected disabled>Select Genre</option>
                    <option value="POP">Pop</option>
                    <option value="HIP-HOP">Hip-hop</option>
                    <option value="REGGAE">Reggae</option>
                    <option value="ROCK">Rock</option>
                    <option value="PARTY">Party</option>
                    <option value="JAZZ">Jazz</option>
                    <option value="LATIN">Latin</option>
                </select>
                <label for="genre">Music</label>
                @error('genre')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="album" class="form-select" wire:model.defer="album">
                    <option hidden="true">Album songs</option>
                    <option selected disabled>Select album</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Opm">OPM</option>
                </select>
                <label for="album">Albums</label>
                @error('album')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-success" type="submit" wire:click="addMusic()">
                    Add Music
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    .form-floating{
        color: rgb(14, 26, 255);
    }
</style>
