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
    <form action="{{url('/download-resume?id='.$resume->id)}}" id="paymentForm" method="post" >
        @csrf
    <button style="background-color:#0052C1;" type="submit" class="btn btn-primary btn-next" data-page="heading" >Download <span>></span></button>
    </form>
    
</div>


<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
<?php $resume = session()->get('resume'); ?>
function payWithPaystack(e) {
    e.preventDefault();
    let href = document.referrer;
    
    let handler = PaystackPop.setup({
    key: 'pk_test_f9687f302e571234a9b0b9c576c08b11fba3dae8', // Replace with your public key
    //key: 'pk_test_83e6df1aacdbcaa5dfde5fd900f511693cb4981b',
    email: '<?php echo auth()->user()->email ?? $resume->email?>',
    amount: 500000,
    //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        // $.ajax({
        // url: 'https://counselling.truthshare.com.ng/volunteer-session-campaign',
        // method: 'get',
        // success: function (response) {
            
        // }
        // });
    },
    callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        //alert(message);
        $.ajax({
        url: 'https://app.truthshare.com.ng/p-verify.php?reference='+ response.reference,
        method: 'get',
        success: function (response) {
            // the transaction status is in response.data.status
            //alert('Payment Successful, Form will submit now');
            paymentForm.submit();
        }
        });
    }
    });
    handler.openIframe();
}
</script> 
@endsection