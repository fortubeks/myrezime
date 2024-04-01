@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>How would you prefer to begin?</h3>
        </div>
        <div class="option-boxes">
            <div class="white-box" data-option="new"  role="button" >
                <h4>CREATE A NEW RESUME</h4><br>
                <img src="assets/img/edit_document.svg" alt="Edit Document" style="width: 48px; height: 48px;"><br>
                <br><p>We will commence from the beginning</p>
            </div>
            <div class="white-box" data-option="upload"  role="button" >
                <h4>USE YOUR RESUME</h4><br>
                <img src="assets/img/upload.svg" alt="Upload" style="width: 48px; height: 48px;"><br>
                <br><p>We will import information from your resume</p>
            </div>
        </div>     
    </div>  
</div>

<br>
<!-- Navigation Buttons with Inline Style for Correct Positioning -->
<div style="display: flex; justify-content: space-between; padding: 0 10%;">
    <button  style="background-color:#0052C1;" type="button" class="btn btn-primary btn-nav" data-page="home"><span><</span>Previous</button>
    <button style="background-color:#0052C1;" type="button" class="btn btn-primary btn-nav" data-page="select-option">Next <span>></span></button>
</div>

@endsection

<script>
window.addEventListener('load', function() {
$('.white-box').click(function() {
    var val = $(this).attr("data-option");
    $('.white-box').css('border', ''); // Clear background-color
    // Add style to the clicked div
    $(this).css('border', '1px solid #0052C1');
    $.ajax({
                url: "{{url('set-resume-option')}}", // Replace with your controller route
                method: 'GET', // or 'GET', depending on your controller route
                data: {
                    begin: val // Send the value to the controller
                },
                success: function(response) {
                    // Handle success response
                    //alert('Value set in session: ' + val);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
});
$('.btn-nav').click(function() {
    var page = $(this).attr("data-page");
    let href = "{{url('/create-resume?page=')}}"+page;
    if(href) {
        window.location = href;
    }
});
});
</script>