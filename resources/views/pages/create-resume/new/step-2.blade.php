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
                        <option value="Accountant" data-value="1">Accountant</option>
                        <option value="Administrator" data-value="2">Administrator</option>
                        <option value="Architect" data-value="3">Architect</option>
                        <option value="Artist" data-value="4">Artist</option>
                        <option value="Attorney" data-value="5">Attorney</option>
                        <option value="Baker" data-value="6">Baker</option>
                        <option value="Banker" data-value="7">Banker</option>
                        <option value="Barista" data-value="8">Barista</option>
                        <option value="Bartender" data-value="9">Bartender</option>
                        <option value="Chef" data-value="10">Chef</option>
                        <option value="Civil Engineer" data-value="11">Civil Engineer</option>
                        <option value="Cleaner" data-value="12">Cleaner</option>
                        <option value="Consultant" data-value="13">Consultant</option>
                        <option value="Customer Service Representative" data-value="14">Customer Service Representative</option>
                        <option value="Data Analyst" data-value="15">Data Analyst</option>
                        <option value="Dentist" data-value="16">Dentist</option>
                        <option value="Doctor" data-value="17">Doctor</option>
                        <option value="Electrician" data-value="18">Electrician</option>
                        <option value="Engineer" data-value="19">Engineer</option>
                        <option value="Financial Analyst" data-value="20">Financial Analyst</option>
                        <option value="Graphic Designer" data-value="21">Graphic Designer</option>
                        <option value="Human Resources Manager" data-value="22">Human Resources Manager</option>
                        <option value="Information Technology (IT) Specialist" data-value="23">Information Technology (IT) Specialist</option>
                        <option value="Journalist" data-value="24">Journalist</option>
                        <option value="Lawyer" data-value="25">Lawyer</option>
                        <option value="Marketing Manager" data-value="26">Marketing Manager</option>
                        <option value="Nurse" data-value="27">Nurse</option>
                        <option value="Pharmacist" data-value="28">Pharmacist</option>
                        <option value="Photographer" data-value="29">Photographer</option>
                        <option value="Pilot" data-value="30">Pilot</option>
                        <option value="Police Officer" data-value="31">Police Officer</option>
                        <option value="Professor" data-value="32">Professor</option>
                        <option value="Programmer" data-value="33">Programmer</option>
                        <option value="Project Manager" data-value="34">Project Manager</option>
                        <option value="Real Estate Agent" data-value="35">Real Estate Agent</option>
                        <option value="Receptionist" data-value="36">Receptionist</option>
                        <option value="Sales Representative" data-value="37">Sales Representative</option>
                        <option value="Software Developer" data-value="38">Software Developer</option>
                        <option value="Teacher" data-value="39">Teacher</option>
                        <option value="Web Developer" data-value="40">Web Developer</option>
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
                    job_role: job_role_id // Send the value to the controller
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