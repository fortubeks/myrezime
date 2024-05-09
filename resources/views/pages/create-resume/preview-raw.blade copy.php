

 <page size="A4">
    <div class="container">
      <div class="leftPanel">
        <img src="avatar.png"/>
        <div class="details">
          <div class="item bottomLineSeparator">
            <h2>
              CONTACT
            </h2>
            <div class="smallText">
              <p>
                <i class="fa fa-phone contactIcon" aria-hidden="true"></i>
                 {{$resume->phone}}
              </p>
              <p>
                <i class="fa fa-envelope contactIcon" aria-hidden="true"></i>
                <a href="{{$resume->email}}">
                {{$resume->email}}
                </a>
              </p>
              <p>
                <i class="fa fa-map-marker contactIcon" aria-hidden="true"></i>
                {{$resume->address}}
              </p>
              <p>
                <i class="fa fa-linkedin-square contactIcon" aria-hidden="true"></i>
                <a href="#">
                {{$resume->state}}
                </a>
              </p>
              <p class="lastParagrafNoMarginBottom">
                <i class="fa fa-skype contactIcon" aria-hidden="true"></i>
                <a href="#">
                  Nigeria
                </a>
              </p>
            </div>
          </div>
          <div class="item bottomLineSeparator">
            <h2>
              SKILLS
            </h2>
            <div class="smallText">
              @foreach($resume->skills as $skill)
              <div class="skill">
                <div>
                  <span>{{$skill->name}}</span>
                </div>
                <div class="yearsOfExperience">
                  <span class="alignright">{{$skill->years}}</span>
                  <span class="alignleft">years</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="item">
            <h2>
              EDUCATION
            </h2>
            @foreach($resume->education as $education)
            <div class="smallText">
              <p class="bolded white">
                {{$education->degree}}
              </p>
              <p>
                {{$education->school_name}}
              </p>
              <p>
                {{$education->month_year}}
              </p>
            </div>
            @endforeach
          </div>
        </div>
        
      </div>
      <div class="rightPanel">
        <div>
          <h1>
            {{$resume->name()}}
          </h1>
          <div class="smallText">
            <h3>
            @if(isset($resume->jobRole))
              {{$resume->jobRole->name}}          
            @else             
              Job Role Not Specified
            @endif
            </h3>
          </div>
        </div>
        <div>
          <h2>
            About me
          </h2>
          <div class="smallText">
            <p>
             {{$resume->about}}
            </p>
          </div>
        </div>
        <div class="workExperience">
          <h2>
            Work experience
          </h2>
          <ul>
            @foreach($resume->workExperiences as $work_experience)
            <li>
              <div class="jobPosition">
                <span class="bolded">
                  {{$work_experience->job_role}}
                </span>
                <span>
                {{$work_experience->duration}}
                </span>
              </div>
              <div class="projectName bolded">
                <span>
                {{$work_experience->company}}
                </span>
              </div>
              <div class="smallText">
                <p>
                  {{$work_experience->about}}
                </p>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </page>
  

