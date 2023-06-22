@extends('frontend.layouts.main')

@section('main-container')

<div class="projet_banner banner">
    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <h1>Projects</h1>
        </div>
      </div>
    </main>
</div>

    <div class="content">
      <div class="projects">
        <div class="container">
          <h2 style="text-align: center;">Our Projects</h2>
        </div>
        <div class="grid-items js-isotope js-grid-items">
          @foreach ($table as $data)
            
          
          <div class="grid-item building js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('/uploads/project/'.$data->thumbnail_image)}}" alt="thumbnail_image">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Beach<br>View<br>Villa</h3>
                  <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
                </div>
              </div>
              <a href="{{route('details.project',$data->id)}}" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>
          @endforeach
          {{-- <div class="grid-item building js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('frontend/images/projects/p1.jpg')}}">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Rose<br>Garden<br>Ressorts</h3>
                  <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
                </div>
              </div>
              <a href="rose_garden.php" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div> --}}
          {{-- <div class="grid-item villa js-isotope-item js-grid-item">
            <div class="project-item item-shadow">
              <img alt="" class="img-responsive" src="{{url('frontend/images/projects/p4.jpg')}}">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Chuti<br>Cox's <br>Bazar</h3>
                  <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
                </div>
              </div>
              <a href="chuti_ressort.php" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div> --}}
          
        </div>
      </div>
    </div>   
    
@endsection