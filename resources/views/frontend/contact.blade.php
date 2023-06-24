@extends('frontend.layouts.main')

@section('main-container')

<div class="contact_banner banner">
    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <h1>Contact</h1>
        </div>
      </div>
    </main>
</div>

    <div class="content">
      <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1534.5747118537915!2d90.42915898819285!3d23.823778427315823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c647b763c915%3A0x21d7dbcd42c27567!2z4Kaw4KeC4Kaq4Ka-4Kef4KaoIOCmtuCmquCmv-CmgiDgprjgp43gppXgp5_gpr7gprA!5e0!3m2!1sen!2sbd!4v1679383239390!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        
      </div>
      <div class="page-inner">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Keep in touch</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row-contact row">
                  <div class="col-contact col-lg-6">
                    <p class="contact-address"><strong><i class="fa fa-map-marker" style="padding-right: 10px;font-size: 22px;"></i>{{$contact->address}}</strong></p>
                    <p class="contact-address"><strong><i class="fa fa-envelope" style="padding-right: 10px;font-size: 22px;"></i> {{$contact->email}}</strong></p>
                    <p class="contact-address"><strong><i class="fa fa-globe" style="padding-right: 10px;font-size: 22px;"></i>{{$contact->website}}</strong></p>
                  </div>
                  <div class="col-contact col-lg-6">
                    <p class="contact-top"><strong class="text-muted">Call directly:</strong></p>
                    <p class="phone-lg text-dark"><a href="tel:+8801730588098"><i class="fa fa-phone" style="padding-right: 10px;font-size: 30px;"></i><b>{{$contact->number}}</b></a></p>
                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                     {{$contact->work_hour}}</p>
                    <div class="text-muted"><strong class="text-dark">Follow us</strong><br>
                      <div class="contact-social social-list">
                        <a target="_blank" href="{{$settings->facebook_link}}" class="icon ion-social-facebook"></a>
                        <a target="_blank" href="{{$settings->instagram_link}}" class="icon ion-social-instagram"></a>
                        <a href="{{$settings->youtube_link}}" class="icon ion-social-youtube"></a>
                        <a target="_blank" href="{{$settings->linked_in_link}}" class="icon ion-social-linkedin"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-message section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">You need help</div>
                </div>
              </div>
              <div class="col-md-9">
                <form class="js-form" action="mail.php" method="POST">
                  <div class="row">
                    <div class="form-group col-sm-6 col-lg-4">
                      <input class="input-gray" type="text" name="name" required placeholder="Name*">
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                      <input class="input-gray" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-sm-12 col-lg-4">
                      <input class="input-gray" type="text" name="mobile"  placeholder="Mobile *">
                    </div>
                    <div class="form-group col-sm-12">
                      <textarea class="input-gray" name="message"  required  placeholder="Message*"></textarea>
                    </div>
                    <div class="col-sm-12"><button type="submit" class="btn-upper btn">Send Message</button></div>
                  </div>
                  <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                  <div class="error-message">We're sorry, but something went wrong</div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    

@endsection



