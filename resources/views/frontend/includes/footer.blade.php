<footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <div class="footer-left">
              <div class="row w-100">
                <div class="col-lg-2">
                  <div class="footer-logo">
                    <img src="images/logo-white.svg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg">
                  <div class="footer-link">
                    <a class="d-block" href="#">Workout at studio</a>
                    <a class="d-block" href="#">Workout at home</a>
                    <a class="d-block" href="#">Yoga</a>
                    <a class="d-block" href="#">Meditation</a>
                    <a class="d-block" href="#">FitMi@work</a>
                    <a class="d-block" href="#">Health</a>
                  </div>
                </div>

                <div class="col-lg">
                  <div class="footer-link">
                    <a class="d-block" href="#">About FitMi</a>
                    <a class="d-block" href="#">Team</a>
                    <a class="d-block" href="#">Contact Us</a>
                    <a class="d-block" href="#">Partner with us</a>
                    <a class="d-block" href="#">Corporate Enquiry</a>
                    <a class="d-block" href="#">Help Center</a>
                  </div>
                </div>

                <div class="col-lg">
                  <div class="footer-link">
                    <a class="d-block" href="#">Terms of use</a>
                    <a class="d-block" href="#">Privacy Policy</a>
                    <a class="d-block" href="#">Refunds & Cancellations</a>
                    <a class="d-block" href="#">Sitemap</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="footer-right text-lg-right text-center">
              <div class="footer-social footer-left-social">
                <p>Follow us:</p>
                <a href="#"><i class="icon icon-facebook"></i></a>
                <a href="#"><i class="icon icon-instagram"></i></a>
                <a href="#"><i class="icon icon-twitter"></i></a>
                <a href="#"><i class="icon icon-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-lg-12">
            <p>© FitMi Health & Wellness Pvt. Ltd., All Rights Reserved </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal modal-signup fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <img src="images/logo.svg" class="img-fluid" data-dismiss="modal">
        </div>
        <div class="modal-body">
          <div class="section-title mb-3">
            <h3 class="title-md mb-2 font-weight-normal">Log in to your</h3>
            <h4 class="title-lg">FitMi account</h4>
          </div>

          <form autocomplete="off">
            <div class="form-group">
              <i class="icon icon-envelope"></i>
              <input type="email" class="form-control" placeholder="abc@gamil.com" name="email" />
            </div>

            <div class="form-group  mb-3">
              <i class="icon icon-lock"></i>
              <input type="password" class="form-control" placeholder="password" name="password" />
              <a href="javascript:void(0);" class="text-password">
                <i class="icon icon-password-view"></i>
              </a>
            </div>

            <div class="form-group text-right">
              <a href="#" class="text-forgot">Forgot Password?</a>
            </div>

            <div class="form-group mb-3 text-center">
              <button type="button" class="button button-lg button-primary"><span>Sign In</span></button>
            </div>
            
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            <div class="text-center mb-5 pb-2">
              <p class="text-forgot">By logging in, you agree to <a href="#" class="text-primary">Privacy Policy</a> and <a href="#" class="text-primary">Terms of Use</a></p>
            </div>

            <div class="text-center form-group-social">
              <div class="divider text-light">
                <span>Or Sign In with</span>
              </div>

              <div class="form-group-social-list">
                <button class="btn" type="button"><i class="icon icon-facebook"></i></button>
                <button class="btn" type="button"><i class="icon icon-twitter"></i></button>
                <button class="btn" type="button"><i class="icon icon-google"></i></button>
              </div>
            </div>

            <div class="text-center">
              <p class="text-light small">Don’t have partner account? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#modalRegister" class="text-primary">Sign Up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-signup fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <img src="images/logo.svg" class="img-fluid" data-dismiss="modal">
        </div>
        <div class="modal-body">
          <div class="section-title mb-3">
            <h3 class="title-md mb-2 font-weight-normal">Create</h3>
            <h4 class="title-lg">FitMi account</h4>
          </div>

          <form autocomplete="off">
            <div class="form-group">
              <i class="icon icon-user icon-2x"></i>
              <input type="text" class="form-control" placeholder="Name of business/ brand " name="namebusiness" />
            </div>

            <div class="form-group">
              <i class="icon icon-envelope"></i>
              <input type="email" class="form-control" placeholder="abc@gamil.com" name="email" />
            </div>

            <div class="form-group">
              <i class="icon icon-lock"></i>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" />
              <a href="javascript:void(0);" class="text-password">
                <i class="icon icon-password-view"></i>
              </a>
            </div>

            <div class="form-group mb-4">
              <i class="icon icon-lock"></i>
              <input type="password" class="form-control" placeholder="Retype password" name="password" />
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="acceptpolicy">
                <label class="custom-control-label" for="acceptpolicy"></label>
                <span class="text-forgot">I agree with <a href="#" class="text-primary">Privacy Policy</a> and <a href="#" class="text-primary">Terms of Use</a></span>
              </div>
            </div>

            <div class="form-group text-center">
              <button type="button" class="button button-lg button-primary"><span>Create an account</span></button>
            </div>

            <div class="text-center form-group-social">
              <div class="divider text-light">
                <span>Or Sign In with</span>
              </div>

              <div class="form-group-social-list">
                <button class="btn" type="button"><i class="icon icon-facebook"></i></button>
                <button class="btn" type="button"><i class="icon icon-twitter"></i></button>
                <button class="btn" type="button"><i class="icon icon-google"></i></button>
              </div>
            </div>

            <div class="text-center">
              <p class="text-light small">Already have account? <a href="javascript:void(0);"  data-dismiss="modal" data-toggle="modal" data-target="#modalLogin" class="text-primary">Sign In</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('assets/fitmi/js/jquery.min.j')}}s"></script>
  <script src="{{asset('assets/fitmi/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/fitmi/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/fitmi/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/fitmi/js/main.js')}}"></script>