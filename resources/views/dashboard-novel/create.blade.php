@extends('layout.dashboard.index')
@section('css')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>
@endsection
@section('isi')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="d-inline">Tambah data</h6>
                </div>
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="/dashboard/novel" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="judul" class="form-control-label">Judul</label>
                                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" class="form-control" placeholder="Judul novel" required>
                                    @error('judul')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="status" class="form-control-label">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="" disabled selected>Pilih status novel</option>
                                        <option value="Ongoing" @if(old('status') == 'Ongoing') selected @endif>Ongoing</option>
                                        <option value="End" @if(old('status') == 'End') selected @endif>End</option>
                                    </select>
                                    @error('status')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="genre" class="form-control-label">Genre</label>
                                    <div class="form-check ms-1">
                                        <div class="row" required>
                                            @foreach($genres as $genre)
                                            <div class="col-md-3 col-6">
                                                <input class="form-check-input" type="checkbox" value="{{ $genre->id }}" id="{{ $genre->id }}" name="genre[]" @if(old('genre')) @foreach(old('genre') as $oldGenre)  @if($oldGenre == $genre->id) checked @endif @endforeach @endif>
                                                <label class="custom-control-label" for="{{ $genre->id }}">{{ $genre->name }}</label>
                                            </div>  
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('genre')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover" class="form-control-label">Cover</label>
                                    <input type="file" name="cover" id="cover" class="form-control" required>
                                    @error('cover')<small class="text-danger">{{ $message }}</small>@enderror
                                    @if(session()->has('status'))<small class="text-danger">{{ session('status') }}</small>@endif
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis" class="form-control-label">Sinopsis</label>
                                    <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis') }}">
                                    <trix-editor input="sinopsis"></trix-editor>
                                    @error('sinopsis')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                                    <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e,preventDefault()
    })
</script>
@endsection