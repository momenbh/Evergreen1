@extends('frontend.layouts.main')

@section('main-container')   

    <main class="jumbotron">

      <!-- Start revolution slider -->

      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
          <ul>

            <!-- Slide 1 -->

            <li  data-transition='slideleft' data-slotamount='default' data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="{{url('frontend/images/banner/13.jpg')}}" data-bgparallax="5"  alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-250']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>

              <!-- Layer 2 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['370']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>


              <!-- Layer 3 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['289']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>


              <!-- Layer 4 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>

              <!-- Layer 5 -->

              <div class="slider-title tp-caption tp-resizeme" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                data-textAlign="['left']"
                data-fontsize="['72', '63','57','50']"
                data-lineheight="['72','68', '62','54']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">luxary residencial land<br> and affordable housing in<br> tranquil environment<br>  purbachol<br> 
              </div>


              <!-- Layer 6 -->

              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Village!
              </div>

              <!-- Layer 7 -->

              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600;">
                  <a href="project_details.php" class="link-arrow">See project <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>

            <!-- Slide 2 -->

            <li  data-transition='slideleft' data-slotamount='default' data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="{{url('frontend/images/banner/7.jpg')}}"  data-bgparallax="5" alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-250']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>

              <!-- Layer 2 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['370']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>


              <!-- Layer 3 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['289']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>


              <!-- Layer 4 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>

              <!-- Layer 5 -->

              <div class="slider-title tp-caption tp-resizeme" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                data-textAlign="['left']"
                data-fontsize="['72', '63','57','50']"
                data-lineheight="['72','68', '62','54']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">will be your
utmost<br> desire for modern and healthy<br> living place at purbachol
              </div>


              <!-- Layer 6 -->

              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Nest!
              </div>

              <!-- Layer 7 -->

              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; ">
                  <a href="project_details.php" class="link-arrow">See project <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>

            <!-- Slide 3 -->

            <li  data-transition='slideleft' data-slotamount='default' data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="{{url('frontend/images/banner/3.jpg')}}"  data-bgparallax="5" alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['-250']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>

              <!-- Layer 2 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['370']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>


              <!-- Layer 3 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['289']" 
                data-width="270"
                data-height="5"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="background-color:#cee002;"> </div>


              <!-- Layer 4 -->

              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
                data-x="['left']" data-hoffset="['100']" 
                data-y="['middle','middle','middle','middle']" data-voffset="['19']" 
                data-width="5"
                data-height="544"
                data-whitespace="nowrap"
                data-type="shape" 
                data-responsive_offset="on" 
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="background-color:#cee002;"> </div>

              <!-- Layer 5 -->

              <div class="slider-title tp-caption tp-resizeme" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                data-textAlign="['left']"
                data-fontsize="['72', '63','57','50']"
                data-lineheight="['72','68', '62','54']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="500" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">when all else fails<br> own a vacation place at<br> rose garden , birulia<br>& chuti ,coxbazar
              </div>


              <!-- Layer 6 -->

              <!-- <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="chars" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Village!
              </div> -->

              <!-- Layer 7 -->

              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; ">
                  <a href="project_details.php" class="link-arrow">See project <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </main>

    <div class="content">   

      <!-- Section About -->

      <section class="section-about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <strong class="section-subtitle">about us</strong>
              <h2 class="section-title section-about-title">We Are The Leader In The Architectural</h2>
              <p><strong class="text-dark" style="color: green;">Evergreen’92</strong> is a dream of green time that started in Covid-19. It’s an emotional birth of our friends Architect, Farhad Mostafa Chowdhury, Md. Mostofa Monwar Bhuiyan, Md. Nasim Haider, Mahidul Munsur khan. We started our journey 16 December 2020 from Chuti Resort in Purbachal by keeping in mind to build affordable living for maintaining a luxuries lifestyle and  quality time with your family in our resort…..</p>

              <a href="about.php" class="btn btn-success">See More</a>
              <div class="experience-box">
                <div class="experience-border"></div>
                <div class="experience-content">
                  <div class="experience-number">04</div>
                  <div class="experience-info wow fadeInDown">Years<br>Experience<br>Working</div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <div class="dots-image">
                <img alt="" class="about-img img-responsive" src="{{url('frontend/images/banner/122.jpg')}}">
                <div class="dots"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Projects -->

      <section class="section-projects section">
        <div class="content">
      <div class="projects">
        <div class="container">
          <h2>Our Projects</h2>
        </div>
        <div class="grid-items js-isotope js-grid-items">
          <div class="grid-item building js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('frontend/images/projects/chuti_villa.jpeg')}}">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Beach<br>View<br>Villa</h3>
                  <!--<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>-->
                </div>
              </div>
              <a href="project_details.php" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>
          <div class="grid-item building js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('frontend/images/projects/rose_garden.jpeg')}}">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Rose<br>Garden<br>Ressorts</h3>
                  <!--<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>-->
                </div>
              </div>
              <a href="rose_garden.php" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>
          <div class="grid-item villa js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('frontend/images/projects/chuti_ressort.jpeg')}}">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Chuti<br>Cox's <br>Bazar</h3>
                  <!--<p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>-->
                </div>
              </div>
              <a href="chuti_ressort.php" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
      </section>

      <!-- Section Clients -->

      <section class="section-clients section bg-dots">
        <div class="container">
          <h2 class="section-title">From Great Our Clients</h2>
          <div class="client-carousel owl-carousel">
            <div class="client-carousel-item">
              <img alt="" class="client-img" src="{{url('frontend/images/clients/1.jpg')}}" style="height: 100px; width: 100px;">
              <div class="client-box">
                <img alt="" class="image-quote" src="{{url('frontend/images/image-icons/icon-quote.png')}}">
                <div class="client-title">
                  <span class="client-name">Zunayed Evan</span> 
                  <span class="client-company"></span>
                </div>
                <p class="client-description">Really a good company. I'm pleased with their work</p>
              </div>
            </div>
            <div class="client-carousel-item">
              <img alt="" class="client-img" src="{{url('frontend/images/clients/2.jpg')}}" style="height: 100px; width: 100px;">
              <div class="client-box">
                <img alt="" class="image-quote" src="{{url('frontend/images/image-icons/icon-quote.png')}}">
                <div class="client-title">
                  <span class="client-name">Sohel Ahmed </span> 
                  <span class="client-company"></span>
                </div>
                <p class="client-description">It was a good experience to work with them.</p>
              </div>
            </div>
            <div class="client-carousel-item"> 
              <img alt="" class="client-img" src="{{url('frontend/images/clients/3.jpg')}}" style="height: 100px; width: 100px;">
              <div class="client-box">
                <img alt="" class="image-quote" src="{{url('frontend/images/image-icons/icon-quote.png')}}">
                <div class="client-title">
                  <span class="client-name">Iqbal Hassan</span> 
                  <span class="client-company"></span>
                </div>
                <p class="client-description">Really a good company. I'm pleased with their work</p>
              </div>
            </div>
            
          </div>
          <!--<div class="partner-carousel owl-carousel">-->
          <!--  <div class="partner-carousel-item">-->
          <!--    <img alt="" src="images/partners/1.png">-->
          <!--  </div>-->
          <!--  <div class="partner-carousel-item">-->
          <!--    <img alt="" src="images/partners/2.png">-->
          <!--  </div>-->
          <!--  <div class="partner-carousel-item">-->
          <!--    <img alt="" src="images/partners/3.png">-->
          <!--  </div>-->
          <!--  <div class="partner-carousel-item">-->
          <!--    <img alt="" src="images/partners/4.png">-->
          <!--  </div>-->
          <!--  <div class="partner-carousel-item">-->
          <!--    <img alt="" src="images/partners/5.png">-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </section>

      <!-- Section News -->

      <section class="section-news section">
        <div class="container">
          <h2 class="section-title">Latest News <a href="news_list.php" class="link-arrow-2 pull-right">All Articles <i class="icon ion-ios-arrow-right"></i></a></h2>
          <div class="news-carousel owl-carousel">
            <div class="news-item">
              <img alt="" src="{{url('frontend/images/news/1-370x370.jpg')}}">
              <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Dec 15th, 2016</div>
                  <h3 class="news-title">Discover Architecture Of Bario</h3>
                  <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                </div>
                <a class="read-more" href="#">Continue</a>
              </div>
            </div>
            <div class="news-item">
              <img alt="" src="{{url('frontend/images/news/2-370x370.jpg')}}">
              <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Dec 15th, 2016</div>
                  <h3 class="news-title">Discover Architecture Of Bario</h3>
                  <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                </div>
                <a class="read-more" href="#">Continue</a>
              </div>
            </div>
            <div class="news-item">
              <img alt="" src="{{url('frontend/images/news/3-370x370.jpg')}}">
              <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Dec 15th, 2016</div>
                  <h3 class="news-title">Discover Architecture Of Bario</h3>
                  <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                </div>
                <a class="read-more" href="#">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection