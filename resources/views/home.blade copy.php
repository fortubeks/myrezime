@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('My Resumes') }}</div>

                <div class="card-body">
                    <div class="list-group">          
                        @forelse(auth()->user()->resumes as $resume)
                        <button type="button" class="list-group-item list-group-item-action">
                                {{$resume->first_name}}
                        </button>
                        @empty
                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">No Resumes. Create one now!</button>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('My Cover Letters') }}</div>

                <div class="card-body">
                    <div class="list-group">          
                        @forelse(auth()->user()->coverLetters as $cover_letter)
                        <button type="button" class="list-group-item list-group-item-action">
                                {{$cover_letter->user_id}}
                        </button>
                        @empty
                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">No Cover Letter. Create one now!</button>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
<script>
window.addEventListener('load', function() {

$('.active').click(function() {
    let href = "{{url('/build')}}";
    if(href) {
        window.location = href;
    }
});

});
</script>
