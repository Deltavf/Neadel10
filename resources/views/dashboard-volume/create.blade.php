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
                            <form action="/dashboard/novel/{{ $novel->slug }}/volume" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="judul" class="form-control-label">Judul</label>
                                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" class="form-control" placeholder="Judul volume" required>
                                    @error('judul')<small class="text-danger">{{ $message }}</small>@enderror
                                    @if(session()->has('status'))<small class="text-danger">{{ session('status') }}</small>@endif
                                </div>
                                <div class="form-group">
                                    <label for="story" class="form-control-label">Story</label>
                                    <input id="story" type="hidden" name="story" value="{{ old('story') }}">
                                    <trix-editor input="story"></trix-editor>
                                    @error('story')<small class="text-danger">{{ $message }}</small>@enderror
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