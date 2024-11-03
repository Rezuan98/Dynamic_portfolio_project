<section id="skills" class="skills section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Skills</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row skills-content skills-animation">

        <div class="row">
          @foreach ($skill as $item)
            <div class="col-md-6"> <!-- Change col-lg-6 to col-md-6 for two-column layout -->
              <div class="progress">
                <span class="skill"><span>{{ $item->skill_name }}</span> <i class="val">{{ $item->skill_capacity }} %</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->skill_capacity }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->
            </div>
          @endforeach
        </div>
        

    </div>

  </section>