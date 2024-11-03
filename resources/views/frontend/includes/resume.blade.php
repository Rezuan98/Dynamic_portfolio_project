<section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Resume</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Summery</h3>

          <div class="resume-item pb-0">
            <h4>{{ $summery->name }}</h4>
            <p><em>{{ $summery->description }}</em></p>
            <ul>
              <li>{{ $summery->address }}</li>
              <li>{{ $summery->phone }}</li>
              <li>{{ $summery->email }}</li>
            </ul>
          </div><!-- Edn Resume Item -->

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            @foreach ($education as $item)
                
            
            <h4>{{ $item->subject }}</h4>
            <h5>{{ $item->session }}</h5>
            <p><em>{{ $item->institute_name }}</em></p>
            <p>{{ $item->description }}</p>
            @endforeach
          </div><!-- Edn Resume Item -->

          
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            @foreach ($experiance as $newitem)
                
            
      <h4>{{ $newitem->job_title }}</h4>
            <h5>{{ $newitem->job_time_range }}</h5>
            <p><em>{{ $newitem->office_address }} </em></p>
            <p>{{ $newitem->description }}</p>
            @endforeach
          </div><!-- Edn Resume Item -->

          

        </div>

      </div>

    </div>

  </section>