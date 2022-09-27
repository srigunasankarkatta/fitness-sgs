@extends('frontend.layouts.master')
@section('content')
<div class="section-banner" style="background-image: url('images/banner07.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-8">
        <div class="banner-content">
          <div class="section-title">
            <h1 class="title-xl">The new way of Yoga Workout</h1>
          </div>
          <p>Explore at-home yoga workout classes with our library of on-demand videos. Strengthen the core, increase flexibility and lengthen the body.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-search">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form autocomplete="off">
          <div class="input-group">
            <div class="input-group-prepend position-relative">
              <select class="select2">
                <option selected="">Online</option>
                <option>Offline</option>
                <option>Offline/Online</option>
              </select>
            </div>
            
            <input type="text" class="form-control" placeholder="Search for Yoga Pose, Yoga Trainers, Yoga studio.." />

            <button type="button" class="btn"><i class="icon icon-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="section-feature">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title section-title-bar mb-4">
          <h2 class="title-lg">Yoga Benefit</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="feature-box">
          <div class="feature-box-image">
            <img src="images/flexibility.svg" class="img-fluid">
          </div>
          <h4>Flexibility</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="feature-box">
          <div class="feature-box-image">
            <img src="images/streess.svg" class="img-fluid">
          </div>
          <h4>Stress reduction</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="feature-box">
          <div class="feature-box-image">
            <img src="images/everyone.svg" class="img-fluid">
          </div>
          <h4>Yoga is for Everyone</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="feature-box">
          <div class="feature-box-image">
            <img src="images/experts.svg" class="img-fluid">
          </div>
          <h4>Ask an experts</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-session">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title mb-3">
          <h3 class="title-lg">Livestream & upcoming sessions</h3>
        </div>

        <p class="lead font-weight-normal">Try online yoga home workout classes on FitMi. Add power yoga,<br/> vinyasa flow and more to your daily at-home routine.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="swiper-container swiper-session">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session01.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">
                  <span class="card-session-label-price">Free</span>

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-hatha"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session01.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">
                  <span class="card-session-label-price">Free</span>

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-insight"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session02.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-hatha"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session01.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">
                  <span class="card-session-label-price">Free</span>

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-hatha"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session01.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">
                  <span class="card-session-label-price">Free</span>

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-insight"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-session">
                <div class="card-session-image">
                  <img src="images/session02.jpg" class="img-fluid" />

                  <div class="card-session-play">
                    <i class="icon icon-play"></i>
                  </div>
                </div>

                <div class="card-session-label">
                  <span class="card-session-label-price">Free</span>

                  <span class="card-session-label-category">INTENSITY</span>
                </div>

                <div class="card-session-content">
                  <div class="card-session-icon">
                    <i class="icon icon-hatha"></i>
                  </div>

                  <h3 class="card-session-title">Hatha Yoga</h3>

                  <p class="card-session-description">Hatha Yoga is a particular system of Yoga that focuses on the purification of the physical body as leading to the purification of mind and the vital energies within.</p>

                  <div class="card-session-detail">
                    <div class="card-session-detail-calorie">
                      <i class="icon icon-calories"></i>

                      <p>250 <span>kcal</span></p>
                    </div>

                    <div class="card-session-detail-rating">
                      <p>4.5 <i class="icon icon-star"></i></p>
                    </div>

                    <div class="card-session-detail-time">
                      <p><i class="icon icon-clock"></i> 12-20min</p>
                    </div>
                  </div>

                  <div class="card-session-time">
                    <i class="icon icon-calendar"></i>

                    <div class="card-session-time-list">
                      <span>6.00 am</span>
                      <span>9.00 am</span>
                      <span class="selected">5.00 pm</span>
                      <span>8.00 pm</span>
                    </div>
                  </div>
                </div>

                <div class="card-session-book">
                  <a href="#">Book Sessions <i class="icon icon-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-nav">
            <div class="swiper-button-prev swiper-session-button-prev"></div>
            <div class="swiper-button-next swiper-session-button-next"></div>
          </div>

          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar swiper-session-scrollbar"></div>
        </div>

        <div class="text-lg-right text-center">
          <a class="text-find-more" href="#">See all yoga sessions &gt;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-meet">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title section-title-bar">
          <h3 class="title-lg">Meet our Yogi / Yogini</h3>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="swiper-container swiper-meet">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="card-meet">
                <img src="images/yogi01.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-meet">
                <img src="images/yogi02.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-meet">
                <img src="images/yogi03.png" class="img-fluid" alt="">
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card-meet">
                <img src="images/yogi04.png" class="img-fluid" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-meet">
                <img src="images/yogi03.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-nav">
          <div class="swiper-button-prev swiper-meet-button-prev"><i class="icon icon-right-chev icon-180"></i></div>
          <div class="swiper-button-next swiper-meet-button-next"><i class="icon icon-right-chev"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-type">
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-12">
        <div class="row align-items-end">
          <div class="col-lg-auto">
            <div class="section-title">
              <h3 class="title-xl">Types of Yoga</h3>
            </div>
          </div>
          <div class="col">
            <p class="lead mt-lg-0 mt-3">Like you, your yoga practice is an ever-evolving endeavor. We couldn’t possibly name all the different shapes and forms yoga has taken, but here’s some of the most popular: </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="swiper-container swiper-type">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="type-card">
                <div class="type-card-image">
                  <img src="images/yoga01.jpg" class="img-fluid" />
                </div>

                <div class="type-card-content">
                  <h4>Hatha yoga</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="type-card">
                <div class="type-card-image">
                  <img src="images/yoga02.jpg" class="img-fluid" />
                </div>

                <div class="type-card-content">
                  <h4>Vinyasa yoga</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="type-card">
                <div class="type-card-image">
                  <img src="images/yoga03.jpg" class="img-fluid" />
                </div>

                <div class="type-card-content">
                  <h4>Power yoga</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="type-card">
                <div class="type-card-image">
                  <img src="images/yoga01.jpg" class="img-fluid" />
                </div>

                <div class="type-card-content">
                  <h4>Pragya Yoga</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="type-card">
                <div class="type-card-image">
                  <img src="images/yoga01.jpg" class="img-fluid" />
                </div>

                <div class="type-card-content">
                  <h4>Lower Body Stretch</h4>
                </div>
              </div>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-nav">
            <div class="swiper-button-prev swiper-type-button-prev"></div>
            <div class="swiper-button-next swiper-type-button-next"></div>
          </div>

          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar swiper-type-scrollbar"></div>
        </div>

        <div class="text-lg-right text-center">
          <a class="text-find-more" href="#">Find out more &gt;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-app">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="app-content">
          <div class="section-title">
            <h3 class="title-lg">Available now on each Platform!</h3>
          </div>

          <p>Download the FitMi app today. Start your workout.</p>

          <div class="app-store-icon">
            <a href="#" target="_blank"><img class="img-fluid d-block" src="images/app-store.png"></a>
            <a href="#" target="_blank"><img class="img-fluid d-block" src="images/play-store.png"></a>
          </div>
          <div class="app-store-qr">
            <img src="images/qr.png" class="img-fluid">

            <p>Scan the QR Code to download the app</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5 ml-auto">
        <div class="app-image">
          <img src="images/phone.png" class="img-fluid d-block ml-lg-auto mx-auto" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
@endpush




 
