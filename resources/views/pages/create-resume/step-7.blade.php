@extends('layouts.guest')
@section('content')
<style>
    .form-container{
        margin-bottom: 20px;
    }
</style>
</br></br></br></br></br>
<div class="container">
    <div class="blue-box">
        <h3>Your Skills</h3>
    </div>
    <div class="col-md-12 ">
        <div class="col-md-12 form-container" style="background: #f7f7f7; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            @php $resume = session('resume'); @endphp
            <form id="information_form" method="post" action="{{url('/save-skills-info/')}}">
            @csrf
                @foreach($resume->skills as $skill)
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">Skill</label>
                        <input type="text" class="form-control" name="name[]" value="{{$skill->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Years</label>
                        <input type="text" class="form-control" name="years[]" value="{{$skill->years}}">
                    </div>
                    <input type="hidden" name="skill[]" value="{{$skill->id}}">
                </div>
                @endforeach
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">Skill</label>
                        <input type="text" class="form-control" name="name[]" placeholder="Leadership">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Years</label>
                        <input type="text" class="form-control" name="years[]" placeholder="1 Year">
                    </div>
                </div>
                
                <input type="hidden" name="resume_id" value="{{$resume->id}}">
            </form>
        </div>
    </div>  
    
    <div class="col-md-12 text-center" style="margin-top:20px">
        <button type="button" id="addMore" class="btn btn-success" >Add More</button>
    </div> 
</div>

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
// Load forms from local storage on page load
loadForms();
    
document.getElementById('addMore').addEventListener('click', function() {
    addForm();
    saveForms();
});

})
function addForm(data = {}) {
    var original = document.querySelector('.form-container');
    var clone = original.cloneNode(true); // Clone the form-container

    // Optionally fill the form with data
    if (data.id) {
        clone.dataset.id = data.id; // Assign a unique identifier to each form
    } else {
        clone.dataset.id = Date.now(); // Use timestamp as a unique identifier
    }

    // Add a delete button to the cloned form
    var deleteButton = document.createElement('button');
    deleteButton.innerHTML = '<i class="fas fa-trash"></i>'; // Assuming you're using FontAwesome for icons
    deleteButton.className = 'btn btn-danger deleteBtn';
    deleteButton.type = 'button';
    clone.insertBefore(deleteButton, clone.firstChild); // Insert the delete button at the beginning of the form

    // Append the cloned form to the parent container
    original.parentNode.appendChild(clone);

    // Add an event listener to the delete button to remove the cloned form and save the updated state
    deleteButton.addEventListener('click', function() {
        this.parentNode.remove();
        saveForms();
    });
}

function saveForms() {
    var forms = document.querySelectorAll('.form-container');
    var formsData = [];
    forms.forEach(function(form, index) {
        if (index > 0) { // Skip the first form since it's the template
            formsData.push({id: form.dataset.id});
        }
    });
    localStorage.setItem('forms-work', JSON.stringify(formsData));
}

function loadForms() {
    var savedForms = localStorage.getItem('forms-work');
    if (savedForms) {
        JSON.parse(savedForms).forEach(function(form) {
            addForm(form);
        });
    }
}
</script>