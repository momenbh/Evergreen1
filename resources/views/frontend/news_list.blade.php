@extends('frontend.layouts.main')
@section('main-container')

<div class="news_banner banner">
    <main class="page-header-3">
      <div class="container">
        <div class="row">
          <h1>News</h1>
        </div>
      </div>
    </main>
</div>

  <div class="content">   
      <div class="container">                                      
        <div class="filter-content-4">
          {{-- <ul class="filter js-filter">
            <li class="active"><a href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".inspiration">Inspiration </a></li>
            <li><a href="#" data-filter=".architecture-inteior">Architecture & Inteior</a></li>
            <li><a href="#" data-filter=".decoration">Decoration</a></li>
            <li><a href="#" data-filter=".plants">Plants</a></li>
          </ul> --}}
        </div>
        <div class="js-isotope">
             @foreach ($newsimg as $data)
                 
             
          <div class="inspiration card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{url('/uploads/thumimg', $data->t_image)}})"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="{{url('/uploads/thumimg', $data->t_image)}}" alt="t_img">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted">{{$data->created_at}}</div>
              <h4 class="card-title">{{$data->news_title}}</h4>
              <div class="card-text">{{$data->description, 20}}</div>
              <a href="{{route('details.news',$data->id)}}" class="card-read-more">Continue</a>
            </div>
          </div>
            @endforeach
          
        </div>
      </div>
    </div>  
@endsection