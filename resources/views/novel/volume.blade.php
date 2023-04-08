@extends('layout.navbar.index') 
@section('konten')
<div class="row">
    <div class="col-xl-10 mx-auto">
        <h4 class="mb-4">{{ $novel->title .  ' ' . $volume->title }}</h4>      
        <div class="card">
            <div class="card-body py-3">{!! $volume->story !!}</div>
        </div>
        <div class="card py-2 mt-3">
            <div class="row text-center">
                <div class="col-4">
                    @if($previous !== null)
                        <a href="/novel/{{ $novel->slug }}/{{ $previous->slug }}" style="color: black;">Previous</a>
                    @endif
                </div>
                <div class="col-4">
                    <a href="." style="color: black;">Back</a>
                </div>
                <div class="col-4">
                    @if($next !== null)
                        <a href="/novel/{{ $novel->slug }}/{{ $next->slug }}" style="color: black;">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection