@extends('layout.layout')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        @include('shared.success-message')
        @include('ideas.shared.submit-idea')
        <hr>
        @include('shared.search-results-for-message')
        @forelse ($ideas as $idea)
            <div class="mt-3">
                @include('ideas.shared.idea-card')
            </div>
        @empty
            <p class="text-center my-3">No Results Found</p>
        @endforelse
        <div class="m-4">
            {{ $ideas->withQueryString()->links() }}
        </div>
    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
</div>

@endsection
