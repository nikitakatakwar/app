<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/fontawesome.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/templatemo-finance-business.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/owl.css')?>" type="text/css">
        

      

       


        <style>
           .service-item{
          border-radius: 4px;
         /* background: #fff;*/
          box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        padding: 14px 80px 18px 36px;
        cursor: pointer;
      }

      .service-item:hover{
           transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
      .more-info-content:hover{
           transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
        </style>
    </head>
    <body >
        <div class="" >
          
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline float-right font-weight-bold" style="margin-top: 35px">Log in  &nbsp;&nbsp;</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline float-right font-weight-bold " style="margin-top: 35px">Register &nbsp;&nbsp;</a>
                    @endif
                @endauth
          
           
                </div>
            @endif

            
     <!-- ***** Preloader Start ***** -->
     
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>SYMULCAST IT SOLUTIONS PVT LMT</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="services.html">Our Services</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="one-page.html">One Page</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we are ready to help you</h6>
                  <h4>Helping StartUps<br>&amp; We Help you to Grow</h4>
                  <p>SYMULCAST IT SOLUTIONS PVT LMT IS A LEADING IT & SOFTWARE DEVELOPMENT COMPANY, WE PROVIDE BEST EFFECTIVE & CREATIVE SOLUTIONS FOR YOUR BUSINESS THAT SATISFY THE NEEDS OF TODAY AND UNLOCK THE OPPORTUNITIES FOR TOMORROW. <a href="one-page.html">One-page version</a> is available as of 2021 February.</p>
                  <a href="contact.html" class="filled-button">contact us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          
          <!-- Item -->
          
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.html" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Best<em>&nbsp;&nbsp;Services</em></h2>
              <span>SYMULCAST IS A LEADING IT & SOFTWARE DEVELOPMENT COMPANY.</span>
            </div>
          </div>
          <div class="col-md-4 bg-light">
            <div class="service-item bg-light">
              <img src="{{ asset('images/service_01.jpg') }}" alt="">
              <div class="down-content">
                <h4>Web Development</h4>
                <p>Our Symulcast Experts Can Create Latest Application,Plateforms And Products to Meet The Requirements of Your Business or New Venture</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item bg-light">
              <img src="{{ asset('images/service_02.jpg') }}" alt="">
              <div class="down-content">
                <h4> StartUp Product Development  </h4>
                <p>New start-up or venture, Let us help you with the most challenging aspect of starting a business: developing your software application.</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item bg-light">
              <img src=" {{ asset('images/service_03.jpg') }}" alt="">
             
              <div class="down-content">
                <h4>UI and UX Designing</h4>
                <p>Our Team will help you to Design a unique website design which is an important part of the branding and marketing process of your business.</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>

          <div class="row mt-5">
             <div class="col-md-4 bg-light">
            <div class="service-item bg-light">
              <img src="{{ asset('images/service_01.jpg') }}" alt="">
         
              <div class="down-content">
                <h4>App Development</h4>
                <p>Our INDIA-based team of mobile app developers can help you to grow your brand engagement with an fast, creative,interactive and Best User experience native app.</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item bg-light">
              <img src="{{ asset('images/videos-banner2.jpg') }}" alt="">
              
              <div class="down-content">
                <h4>CCTV CAMERA</h4>
                <p>We provide excellent installation services as per the customers requirement in the minimum devices.</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item bg-light">
              <img src="{{ asset('images/service_03.jpg') }}" alt="">
              
              <div class="down-content">
                <h4>Cloud / Hosting Services</h4>
                <p>Set up your Cloud Hosting and find your website on the cloud.A private cloud consists of cloud computing resources used exclusively by one business.</p>
                <a href="{{ route('register') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          </div>

        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span>SYMULCAST IT SOLUTIONS PVT LMT</span>
              <h2>Our solutions for your <em>business growth</em></h2>
              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
              <a href="{{route('index')}}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">945</div>
                  <div class="count-title">Work Hours</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title">Great Reviews</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title">Projects Done</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    
                    <img src="{{ asset('images/more-info.jpg') }}" alt="">
                    
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Who we are</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>SYMULCAST IT SOLUTIONS, one of the INDIA’s leading young Software development company and we are a team of professionals who have extensive experience in App/ website design, development and Digital marketing and each one of us has spent a great deal of time working in corporate, addressing issues and solving problems. <br><br>We design intelligent, cost-effective and User friendly web applications, desktop applications and mobile apps that help streamline processes for businesses as well as create new revenue streams for start-ups and established businesses alike.</p>
                    <a href="{{route('index')}}" class="filled-button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              
              <div class="partner-item">
                <img src="{{ asset('images/client-01.png') }}" title="1" alt="1">
               

                
              </div>
              
              <div class="partner-item">
                <img src="{{ asset('images/client-01.png') }}" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="{{ asset('images/client-01.png') }}" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="{{ asset('images/client-01.png') }}" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="{{ asset('images/client-01.png') }}" title="5" alt="5">
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>SYMULCAST IT SOLUTIONS PVT LMT</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">About Us</a></li>
              <li><a href="#">How We Work</a></li>
              <li><a href="#">Quick Support</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy;SYMULCAST IT SOLUTIONS PVT LMT.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a><br>
            Distributed By: <a rel="nofollow noopener" href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
          </div>
        </div>
      </div>
    </div>

    <link href="{{ URL::asset('js/bootstrap.min.js') }}" rel="script">
    <link href="{{ URL::asset('js/bootstrap.bundle.min') }}" rel="script">

    <link href="{{ URL::asset('js/custom.js') }}" rel="script">
    <link href="{{ URL::asset('js/owl.js') }}" rel="script">
    <link href="{{ URL::asset('js/slick.js') }}" rel="script">
    <link href="{{ URL::asset('js/accordions.js') }}" rel="script">

   
        <script language = "text/Javascript"> 
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t){                   //declaring the array outside of the
            if(! cleared[t.id]){                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value='';         // with more chance of typos
                t.style.color='#fff';
                }
            }
          </link>
    </body>
</html>
