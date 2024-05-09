@extends('layouts.dashboard')

@section('content')
	
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <h4 class="fs-20 mb-3">Your Resumes</h4>
                    @forelse($resumes as $resume)
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-4 align-items-center">
                                    <div class="col-xl-9 col-sm-12">
                                        <h4 class="fs-20 mb-3">Your Resumes</h4>
                                        
                                        
                                    </div>
                                    <div class="col-xl-3 col-sm-12 text-right">
                                        <!-- Button added here -->
                                        <a href="{{url('resumes')}}" type="button" style="background-color: white; color: #007bff; border: 1px solid #007bff; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
                                            View Resumes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    No Resumes yet
                    @endforelse
                </div>
            </div>
            
        </div>	
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->



<!--**********************************
    Footer start
***********************************-->
<!-- <div class="footer">
    <div class="text-center justify-content-center copyright">
        <p>Copyright © Rezmi  2023</p>
    </div>
</div> -->
<!--**********************************
    Footer end
***********************************-->
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
