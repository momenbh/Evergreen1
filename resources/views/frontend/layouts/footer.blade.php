<!-- Footer -->
<div class="footer-div">
    <footer id="footer" class="footer section container"> 
      <div class="footer-flex">
        
          
       
        <div class="flex-item">
          <a class="footer_brand pull-left">
            <img src="{{ url('/uploads/settings/' . $settings->logo_image) }}" alt="logo_img">
            <h5>Corporate Office</h5>
            <span class="address">{{$contact->address}}</span>
            <div class="brand-info">
              <div class="brand-name"></div>
              <div class="brand-text"></div>
            </div>
          </a>
        </div>
        
        <div class="flex-item">
          <h5>Quick Links</h5>
          <ul>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Term & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Customer Service</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <h5>About Us</h5>
          <ul>
            <li><a href="#">Our Location</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul> 
        </div>
        
        <div class="flex-item">
          <h5>Find Us</h5>
          <div class="social-list">
            <a target="_blank" href="{{$settings->facebook_link}}" class="icon ion-social-facebook"></a>
            <a target="_blank" href="{{$settings->instagram_link}}" class="icon ion-social-instagram"></a>
            <a href="{{$settings->youtube_link}}" class="icon ion-social-youtube"></a>
            <a target="_blank" href="{{$settings->linked_in_link}}" class="icon ion-social-linkedin"></a>
          </div>
        </div>
      </div>

      
    </footer>
</div>
    <div class="copyrite_div">
      <div class="container">
        <div class="row copyrite">
          <div class="col-md-6">
              <p>{{$settings->copyrite_text}}</p>
          </div>

          <div class="col-md-6">
              <p>Designed & Developed by <a href="#">N I Biz Soft</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->

<script src="{{url('frontend/js/jquery.min.js')}}"></script>
<script src="{{url('frontend/js/animsition.min.js')}}"></script>
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/js/smoothscroll.js')}}"></script>
<script src="{{url('frontend/js/jquery.validate.min.js')}}"></script>
<script src="{{url('frontend/js/wow.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('frontend/js/plugins.js')}}"></script>
<script src="{{url('frontend/js/sly.min.js')}}"></script>


<!-- Slider revolution -->
<script src="{{url('frontend/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="{{url('frontend/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{url('frontend/js/rev-slider/revolution.extension.video.min.js')}}"></script>


<!-- Scripts -->
<script src="{{url('frontend/js/scripts.js')}}"></script> 
<script src="{{url('frontend/js/rev-slider-init.js')}}"></script>


<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "Evergreen92Propertybd", // Facebook page ID
            whatsapp: "+8801730588098", // WhatsApp number
            call_to_action: "", // Call to action
            button_color: "#00A519", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->



</body>
</html>