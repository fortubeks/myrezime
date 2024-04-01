@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
    <div class="blue-box">
        <h3>Preview</h3>
    </div>
         
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{url('/resume-preview?id='.$resume->id)}}"></iframe>
    </div>
     
</div>

<br>
<!-- Navigation Buttons with Inline Style for Correct Positioning -->
<div style="display: flex; justify-content: space-between; padding: 0 10%;">
    <button  style="background-color:#0052C1;" type="button" class="btn btn-primary btn-nav" data-page="begin"><span><</span>Previous</button>
    <button style="background-color:#0052C1;" type="button" class="btn btn-primary btn-next" data-page="heading" >Download <span>></span></button>
</div>

@endsection
<script>
window.addEventListener('load', function() {
    $('.btn-next').click(function() {
    
    let href = "{{url('/download-resume?id='.$resume->id)}}";
    if(href) {
        window.location = href;
    }
});
})

</script>