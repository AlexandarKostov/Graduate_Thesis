@extends('layouts.master')

@section('content')
<div class="container-fluid pt-5">
    <div class="row bg-warning">
        <div class="col-12">
            <hr />
            <h1 class="fw-bold text-black mt-5 text-center mb-5">Podcasts</h1>
        </div>
    </div>
</div>
<div class="container-fluid bg-warning py-5">
    <div class="row justify-content-center align-items-center padding-projects">
        @forelse ($categoriesPodcasts as $category)
            @foreach ($category->podcasts as $podcast)
            <div class="col-12 col-md-4">
                <div class="card rounded text-shadow" style="width: 18rem">
                    <div class="card-body">
                        <p class="card-text">
                            <small class="bg-warning fw-bold py-1 px-1">{{ $category->name }}</small>
                        </p>
                        <h5 class="card-title fw-bold">
                        {{ $podcast->name }}
                        </h5>
                        <p class="card-text">
                            <small class="text-muted fw-bold">{{ $podcast->publisher }}</small>
                        </p>
                        <div class="text-end">
                            <a href="{{ $podcast->url }}" target="_blank" class="btn btn-danger text-end fw-bold">Preview video</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @empty 
        <p class="mb-0 text-white-fw bold">Nothing found</p>
        @endforelse
    </div>
</div>
@endsection