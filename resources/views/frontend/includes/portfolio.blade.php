<section id="portfolio" class="portfolio section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
      <h2>Attachments</h2>
  </div><!-- End Section Title -->

  <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

              <!-- Apps Section -->
              @foreach($apps as $app)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <div class="portfolio-content h-100">
                      <img src="{{ asset('storage/' . $app->app_image) }}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>{{ $app->app_name }}</h4>
                          <a href="{{ asset('storage/' . $app->app_image) }}" title="{{ $app->app_name }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                              <i class="bi bi-zoom-in"></i>
                          </a>
                          <a href="{{ route('home') }}" title="More Details" class="details-link">
                              <i class="bi bi-link-45deg"></i>
                          </a>
                      </div>
                  </div>
              </div><!-- End App Item -->
              @endforeach

              <!-- Products Section -->
              @foreach($products as $product)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <div class="portfolio-content h-100">
                      <img src="{{ asset('storage/' . $product->product_image) }}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>{{ $product->product_name }}</h4>
                          <a href="{{ asset('storage/' . $product->product_image) }}" title="{{ $product->product_name }}" data-gallery="portfolio-gallery-product" class="glightbox preview-link">
                              <i class="bi bi-zoom-in"></i>
                          </a>
                          <a href="{{ route('home') }}" title="More Details" class="details-link">
                              <i class="bi bi-link-45deg"></i>
                          </a>
                      </div>
                  </div>
              </div><!-- End Product Item -->
              @endforeach

              <!-- Branding Section -->
              @foreach($branding as $brand)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <div class="portfolio-content h-100">
                      <img src="{{ asset('storage/' . $brand->branding_image) }}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                          <h4>{{ $brand->branding_name }}</h4>
                          <a href="{{ asset('storage/' . $brand->branding_image) }}" title="{{ $brand->branding_name }}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link">
                              <i class="bi bi-zoom-in"></i>
                          </a>
                          <a href="{{ route('home') }}" title="More Details" class="details-link">
                              <i class="bi bi-link-45deg"></i>
                          </a>
                      </div>
                  </div>
              </div><!-- End Branding Item -->
              @endforeach

          </div><!-- End Portfolio Container -->
      </div>
  </div>
</section>
