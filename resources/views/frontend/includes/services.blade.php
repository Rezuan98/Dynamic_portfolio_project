<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p class="p-3">As a seasoned digital marketer with a wealth of experience, I specialize in crafting tailored strategies that drive online growth and engagement for businesses of all sizes. My services encompass a comprehensive range of digital marketing solutions, including search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, content creation, and email campaigns. By leveraging data-driven insights and the latest industry trends, I develop innovative campaigns that not only enhance brand visibility but also foster lasting relationships with target audiences. With a commitment to delivering measurable results, I am dedicated to helping businesses navigate the digital landscape and achieve their marketing goals.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
@foreach ($services as $item)
    

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
          <div>
            <h4 class="title"><a href="service-details.html" class="stretched-link">{{ $item->service_title }}</a></h4>
            <p class="description">{{ $item->service_description }}</p>
          </div>
        </div>
        <!-- End Service Item -->


        @endforeach

       

      </div>

    </div>

  </section>