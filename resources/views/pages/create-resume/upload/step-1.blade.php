@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>Upload Your Resume</h3>
        </div>
        <div class="option-boxes">
            
            
            <div class="white-box"  role="button" >
                <h4>Upload</h4><br>
                <img src="{{env('APP_URL')}}/assets/img/pdf.svg" alt="Upload" style="width: 48px; height: 48px;">
                <img src="{{env('APP_URL')}}/assets/img/txt.svg" alt="Upload" style="width: 48px; height: 48px;">
                <img src="{{env('APP_URL')}}/assets/img/document.svg" alt="Upload" style="width: 48px; height: 48px;"><br>
                <br><p><b>Files can be read:</b> PDF</p>
                <p id="fileName"></p>
                <form id="resume-upload" method="post" style="display: none;" action="{{url('/upload-resume')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" id="fileInput" name="resume" >
                </form>
            </div>
        </div>     
    </div>  
</div>

<br>
<!-- Navigation Buttons with Inline Style for Correct Positioning -->
<div style="display: flex; justify-content: space-between; padding: 0 10%;">
    <button  style="background-color:#0052C1;" type="button" class="btn btn-primary btn-prev"><span><</span>Previous</button>
    <button style="background-color:#0052C1;" type="button" class="btn btn-primary btn-next" data-page="step-2">Next <span>></span></button>
</div>

@endsection

<script>
window.addEventListener('load', function() {
$('.white-box').click(function() {
    $('.white-box').css('border', ''); // Clear background-color
    // Add style to the clicked div
    $(this).css('border', '1px solid #0052C1');
    document.getElementById('fileInput').click();
});
document.getElementById('fileInput').addEventListener('change', function() {
    var fileName = this.files[0].name;
    document.getElementById('fileName').innerText = 'Selected file: ' + fileName;
});
$('.btn-prev').click(function() {
    let href = document.referrer;
    if(href) {
        window.location = href;
    }
});
$('.btn-next').click(function() {
    
    $('#resume-upload').submit();
});
});
</script>