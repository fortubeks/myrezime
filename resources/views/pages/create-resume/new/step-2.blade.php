@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>Select a job role by typing below</h3>
        </div>
        <div class="">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="hidden" id="customer_id" name="customer_id">
                    <input required oninput="setCustomerID()" class="form-control" list="customerdatalistOptions" id="customer" placeholder="Type to search...">
                    <datalist id="customerdatalistOptions">
                        @foreach(getModelList('job-roles') as $job_role)
                        <option value="{{$job_role->name}}" data-value="{{$job_role->id}}">{{$job_role->name}}</option>
                        @endforeach
                    </datalist>
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
    
    let href = "{{url('/create-resume?page=3')}}";
    if(href) {
        window.location = href;
    }
});

});
function setCustomerID(){
    var value = $('#customer').val();
    $('#customer_id').val($('#customerdatalistOptions [value="' + value + '"]').data('value'));
    var job_role_id = $('#customer_id').val();
    $.ajax({
                url: "{{url('set-resume-option')}}", // Replace with your controller route
                method: 'GET', // or 'GET', depending on your controller route
                data: {
                    job_role_id: job_role_id // Send the value to the controller
                },
                success: function(response) {
                    // Handle success response
                    //alert('Value set in session: ' + job_role_id);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
}
</script>