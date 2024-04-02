@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>Paste Job Description below</h3>
        </div>
        <div class="">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="linkedinLink">Job Description</label>
                    <textarea id="job_description" placeholder="Paste job description here" class="form-control" ></textarea>
                </div>
            </div>
        </div>     
    </div>  
</div>

<br>
<!-- Navigation Buttons with Inline Style for Correct Positioning -->
<div style="display: flex; justify-content: space-between; padding: 0 10%;">
    <button  style="background-color:#0052C1;" type="button" class="btn btn-primary btn-prev" data-page="begin"><span><</span>Previous</button>
    <button style="background-color:#0052C1;" type="button" class="btn btn-primary btn-next" data-page="heading" >Next <span>></span></button>
</div>

@endsection

<script>
window.addEventListener('load', function() {

$('.btn-prev').click(function() {
    let href = document.referrer;
    if(href) {
        window.location = href;
    }
});
$('.btn-next').click(function() {
    var job_description = $('#job_description').val();
    $.ajax({
                url: "{{url('set-resume-option')}}", // Replace with your controller route
                method: 'GET', // or 'GET', depending on your controller route
                data: {
                    job_description: job_description // Send the value to the controller
                },
                success: function(response) {
                    // Handle success response
                    //alert('Value set in session: ' + job_role_id);
                    let href = "{{url('/create-resume?page=3')}}";
                    if(href) {
                        window.location = href;
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
});

});

</script>