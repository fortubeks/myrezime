@extends('layouts.guest')
@section('content')
    <!-- Start Banner desktop-1-child 
    ============================================= -->
    <div class="banner-area content-double box-nav background-move bg-gray" style="background-image: url(assets/img/bg-2.png);">
        <div class="container">
            <div class="row">
                <div class="double-items">
                    <div class="col-md-6 left-info simple-video">
                        <div class="content" data-animation="animated fadeInUpBig">
                            <br>
                            <h1>
                               Free Resume Builder:
                            </h1>
                             <p><span> Generate a Professional Resume Online</span></p>
                             <p>Start building your professional journey today</p>
                           <p>
        Your gateway to crafting a professional resume online. With a
        user-friendly interface, diverse templates, and customization options,
        you can create a standout resume tailored to your unique strengths.
        Benefit from dynamic sections, guidance throughout the process, and
        instant downloads in various formats.
      </p>
                            <a class="btn btn-theme  btn-md" href="{{route('begin')}}">Build My Resume</a>
                            
                        </div>
                    </div>
                    <div class="col-md-6 right-info">
                        <div class="thumb animated">
                           <img src="assets/img/hero.png" alt="Thumb" class="img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Banner -->

  <div id="features" class="features-area icon-link carousel-shadow default-padding" style="background-color: #f9f9f9; width: 100%;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="site-heading col-12 text-center">
                <h3 class="site-heading ">Build your Professional Resume in Minutes</h3>
            </div>
        </div>
        
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-4 mb-5 d-flex flex-column align-items-center">
                <img class="img-fluid mb-4" src="{{env('APP_URL')}}/assets/img/group-58.svg" alt="" style="max-width: 80%; height: auto;">
                <br><br>
                <p>Select a Template</p>
            </div>

            <div class="col-12 col-md-4 mb-5 d-flex flex-column align-items-center">
                <img class="img-fluid mb-4" src="{{env('APP_URL')}}/assets/img/group-59.svg" alt="" style="max-width: 80%; height: auto;">
                <br><br>
                <p>Customize Your Resume</p>
            </div>

            <div class="col-12 col-md-4 mb-5 d-flex flex-column align-items-center">
                <img class="img-fluid mb-4" src="{{env('APP_URL')}}/assets/img/group-60.svg" alt="" style="max-width: 80%; height: auto;">
                <br><br>
                <p>Download in PDF, Doc, or Txt</p>
            </div>
        </div>
    </div>
</div>

    <!-- Start Features Area 
    ============================================= -->
    <div id="features" class="features-area icon-link carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Select from a Customizable Resume Template</h2>
                    <p> Explore a diverse selection of user-friendly resume templates,
          complemented by expert guidance. Ensure a polished and professional
          resume structure using pre-approved templates. Select a template that
          aligns seamlessly with your industry by choosing appropriate colors,
          fonts, and text sizes. Craft a standout resume effortlessly with our
          comprehensive tools.
        </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="features-carousel owl-carousel owl-theme">
                    <!-- Single Image Item -->
                    <div class="item">
                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" alt="Feature 1" class="img-fluid">
                    </div>
                    <!-- Single Image Item -->
                    <div class="item">
                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" alt="Feature 2" class="img-fluid">
                    </div>
                    <!-- Single Image Item -->
                    <div class="item">
                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" alt="Feature 3" class="img-fluid">
                    </div>
                    <!-- Single Image Item -->
                    <div class="item">
                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" alt="Feature 4" class="img-fluid">
                    </div>
                    <!-- Single Image Item -->
                    <div class="item">
                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" alt="Feature 5" class="img-fluid">
                    </div>
                    <!-- End Single Image Item -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- End Features Area -->

<!-- Start Work Step 
    ============================================= -->
    <div id="process" class="work-step-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Discover the benefits awaiting you with our resume maker</h2>
                        <a class="btn btn-theme  btn-md" href="{{route('begin')}}">Build My Resume</a>
                    </div>

                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="work-step-items">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <h2>Choose a template</h2>
                                        </div>
                                        <p>
                                           Tailor your resume to cater to a range of industries, showcasing your
          versatile skill set and adaptability across diverse professional
          landscapes. This approach underscores your ability to excel in
          different sectors, making you a compelling candidate for various
          opportunities. Craft a resume that reflects your versatility and
          stands out in any industry 
                                        </p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item reverse">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                        <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                         <h2>Transform and refine your resume instantly</h2>
                                        </div>
                                        <p>
                                           Engage in the transformative process of creating your resume
                with our innovative real-time preview feature. Witness your
                resume come to life instantly as you make edits and
                adjustments. With the dynamic experience, you have the power
                to see the impact of every change in real-time, ensuring that
                your resume reflects your professional story with precision.
                Witness the resume evolve before your eyes.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                       <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                       <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <h2>Experience your resume come to life with real-time preview</h2>
                                        </div>
                                        <p>
                                             Elevate your job application with a professionally crafted cover
          letter that complements your resume seamlessly. With our user-friendly
          platform, you can effortlessly create matching cover letter in just
          few minutes. Tailor your message to align perfectly with yor resume,
          showcasing a cohesive and compelling narrative to potential employers.
          Experience the ease and efficiency of producing a polished cover
          letter enhances your job application and highlights your unique
          qualifications
                                        </p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item reverse">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 thumb">
                                       <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                       <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid d-block mx-auto" style="height: auto; max-height: 300px;" alt="Thumb">
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                         <h2>Craft a matching cover letter</h2>
                                        </div>
                                        <p>
                                            Enhance your project effortlessly by incorporating pre-designed content crafted by industry experts. Benefit from the wealth of knowledge and experience as you seamlessly integrate expert-approved material into your work. Save time and ensure the quality of your project by leveraging the insights of professionals in the field. Elevate your content with the expertise it deserves
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Step Area -->

    </div>
    <!-- End About -->

  

  <!-- Start Overview 
    ============================================= -->
    <div id="overview" class="overview-area bg-theme text-light default-padding" style="border-bottom-left-radius: 200px; border-bottom-right-radius: 50px; overflow: hidden;">
    <!-- Side Bg -->
    <div class="side-bg">
        <img src="{{env('APP_URL')}}/assets/img/circle-shape.png" alt="Thumb">
    </div>
    <!-- End Side Bg -->
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
            <div class="site-heading text-center">
                <h2>Build your resume for various industries to highlight your versatility</h2>
                <p>
                    Tailor your resume to cater to a range of industries, showcasing
                    your versatile skill set and adaptability across diverse
                    professional landscapes. This approach underscores your ability
                    to excel in different sectors, making you a compelling
                    candidate for various opportunities. Craft a resume that
                    reflects your versatility and stands out in any industry.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6 mb-4 position-relative">
            <a  href="assets/img/1500x700.png">
                <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid" alt="Thumb">
                 <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); padding: 5px 20px; background-color: #007bff; color: white; border: none; z-index: 1;">Choose</button>
            </a>
        </div>
        <!--class="popup-link"-->
        <div class="col-lg-3 col-md-6 mb-4 position-relative">
            <a  href="assets/img/1500x700.png">
                <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid" alt="Thumb">
                <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); padding: 5px 20px; background-color: #007bff; color: white; border: none; z-index: 1;">Choose</button>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 position-relative">
            <a  href="{{env('APP_URL')}}/assets/img/1500x700.png">
                <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid" alt="Thumb">
                <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); padding: 5px 20px; background-color: #007bff; color: white; border: none; z-index: 1;">Choose</button>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 position-relative">
            <a  href="{{route('begin')}}">
                <img src="{{env('APP_URL')}}/assets/img/stylish.png" class="img-fluid" alt="Thumb">
                <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); padding: 5px 20px; background-color: #007bff; color: white; border: none; z-index: 1;">Choose</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right mt-3"> 
            <a href="{{route('begin')}}" class="btn btn-light btn-md" style="color: #007bff; border-color: #007bff;">More Templates</a>
        </div>
    </div>
</div>

    </div>
</div>

    </div>
</div>

    <!-- End Overview -->


    <!-- Start FAQs Step 
    ============================================= -->
    <div id="process" class="work-step-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Rezime AI Resume Builder FAQs</h2>
                        
                    </div>

                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="work-step-items">
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <h2>What is a resume builder?</h2>
                                        </div>
                                        <p>
                                           A resume builder is an online tool or software that assists individuals in creating and formatting their resumes. It typically provides templates, prompts, and guidance to help users input their professional information, skills, and experiences. The purpose of a resume builder is to simplify the resume creation process, ensuring that the document is well-organized, visually appealing, and tailored to industry standards. Users can often choose from various templates, customize content, and generate a professional-looking resume that reflects their qualifications and achievements.
                                        </p>
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <h2>Is Rezime AI builder free?</h2>
                                        </div>
                                        <p>
                                            Rezime AI resume builder is free to use for creating resumes, CVs, and cover letters. Pay only if satisfied, with options to download your document for free as a text file or choose a premium plan for PDF or MS Word downloads at a cost of 2.99 USD for a two-week trial. Pricing may vary based on the subscription plan selected.
                                        </p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item reverse">
                        <div class="col-md-12">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 info">
                                        <div class="title">
                                            <h2> Is it necessary to tailor my resume for each job application?</h2>
                                        </div>
                                        <p>
                                            Yes! You absolutely should! Crafting a distinct resume for each job application significantly enhances your likelihood of securing the position. Generic resumes lack the impact of a targeted one.
                                        </p>
                                    </div>
                                    <div class="col-md-6 info">
                                        <div class="title">
                                         <h2>How long does it take to make a resume?</h2>
                                        </div>
                                        <p>
                                           Harness the efficiency of Rezime’s Resume Builder, where crafting your resume becomes a swift and seamless task, taking as little as 10-15 minutes. Simply choose a template, input your information into the user-friendly interface, and eliminate the guesswork and formatting complexities that often prolong the process. Streamline your resume creation with precision and speed, ensuring a polished document that perfectly represents your qualifications.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End FAWQs Area -->

  <!-- Start Contact -->
<div id="contact" class="contact-area bg-gray default-padding">
    <div class="container">
        <div class="row align-items-center"> <!-- Ensure vertical alignment -->
            <!-- Left SVG (Group 46) -->
            <div class="col-lg-4 col-md-4 text-center">
                <img class="img-fluid d-lg-none d-md-block" alt="" src="./assets/img/group-47.svg" />
            </div>
            
            <!-- Content in the Middle -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="site-title">
                    <h2>Build your customized resume now</h2>
                    <a class="btn btn-theme btn-md" href="{{route('begin')}}">Build My Resume</a>
                </div>
            </div>
            
            <!-- Right SVG (Group 47) -->
            <div class="col-lg-4 col-md-4 text-center">
                <img class="img-fluid d-lg-block d-md-none" alt="" src="./assets/img/group-46.svg" />
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

             
@endsection