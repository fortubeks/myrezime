@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>Preview</h3>
        </div>
        <header>
            <h1>{{ $resume->name() }}</h1>
            <p>{{ $resume->email }}</p>
            <p>{{ $resume->phone }}</p>
            <p>{{ $resume->address. ', '.  $resume->state}}</p>
        </header>
        <hr>
        <section class="section">
            <h2>Education</h2>
            @forelse ($resume->education as $edu)
                <p><strong>{{ $edu->degree }}</strong> - {{ $edu->institution }} ({{ $edu->year }})</p>
            @empty
                <!-- Handle case where education exists but there are no items -->
            @endforelse
        </section>
        <hr>
        <section class="section">
            <h2>Work Experience</h2>
            @forelse ($resume->workExperiences as $exp)
                <p><strong>{{ $exp->position }}</strong> - {{ $exp->company }} ({{ $exp->start_date }} - {{ $exp->end_date }})</p>
                <p>{{ $exp->description }}</p>
            @empty
                <!-- Handle case where education exists but there are no items -->
            @endforelse
        </section>
        <hr>
        <section class="section">
            <h2>Skills</h2>
            <ul class="skills">
            @forelse ($resume->skills as $skill)
                <li>{{ $skill }}</li>
            @empty
                <!-- Handle case where education exists but there are no items -->
            @endforelse
            </ul>
        </section>     
    </div>  
</div>

<br>
<!-- Navigation Buttons with Inline Style for Correct Positioning -->
<div style="display: flex; justify-content: space-between; padding: 0 10%;">
    <button  style="background-color:#0052C1;" type="button" class="btn btn-primary btn-nav" data-page="begin"><span><</span>Previous</button>
    <button style="background-color:#0052C1;" type="button" class="btn btn-primary btn-nav" data-page="heading" >Next <span>></span></button>
</div>

@endsection
<script>
window.addEventListener('load', function() {

})

</script>