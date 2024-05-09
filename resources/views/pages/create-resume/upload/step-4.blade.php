@extends('layouts.guest')
@section('content')
</br></br></br></br></br>
<div class="container">
        <div class="blue-box">
            <h3>Your Personal Information</h3>
        </div>
        <div class="col-md-12 form-container" style="background: #f7f7f7; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <form id="information_form" method="post" action="{{url('/save-resume')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$resume->first_name}}" placeholder="Emeka">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{$resume->last_name}}" placeholder="Jonathan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$resume->phone}}" placeholder="+234909448484">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$resume->email}}" placeholder="email@example.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$resume->address}}" placeholder="No 4 Ekimi Street">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="state" value="{{$resume->state}}" placeholder="Lagos">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="linkedinLink">LinkedIn Link</label>
                    <input type="url" class="form-control" name="linkedin" placeholder="https://linkedin.com/in/username">
                    </div>
                </div>
            </form>
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

$('.btn-next').click(function() {
    $('#information_form').submit();
});
$('.btn-prev').click(function() {
    let href = document.referrer;
    if(href) {
        window.location = href;
    }
});
})

</script>