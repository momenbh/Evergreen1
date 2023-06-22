@extends('frontend.layouts.main')

@section('main-container')

    
  <div class="post-thumbnail masked" style="background-image:url({{url('/uploads/thumimg', $details->t_image)}})">   
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-6 col-md-offset-1 col-lg-offset-2">
            <div class="title-info">{{$details->category_name}}</div>
            <h1 class="display-1">{{$details->news_title}}</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="page-content">
      <div class="primary">
        <div class="container">
          <article class="post">
            <div class="row">
              <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <div class="posted-on">
                   
                    {{$details->created_at}}
                </div>
              </div>
            </div>
            <div class="entry-content">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                  <p>{{$details->description}}</p>
                </div>
              </div>
              <div class="row-images row">
                
                @foreach ($detailimg as $data)
                  
                {{-- @dd($data) --}}
                <div class="col-image col-sm-12">
                  <img class="img-fluid project_image" src="{{ url('/uploads/newsimage/' . $data->fileName) }}" alt="project_image">
                </div>
                @endforeach
              </div>
              
              
            </div>
            <div class="entry-footer">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                 
                </div>
              </div>
            </div>
          </article>
          
        </div>
      </div>
      
    </div>

    </div> 

@endsection