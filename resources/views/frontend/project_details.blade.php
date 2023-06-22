@extends('frontend.layouts.main')

@section('main-container')
    <!-- Pageheader -->

    <div class="post-video">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <span>
                    

                    <iframe width="722" height="350" src="{{ $table->video_url }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </span>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="primary">
            <div class="container">
                <article class="post">

                    <div class="entry-content">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                                <h2 class="entry-description">{{ $table->project_name }}</h2>
                                {{ $table->description }}
                            </div>
                        </div>
                        <div class="row">

                            @foreach($images as $image)
                            <div class="col-md-6">
                                <img class="img-fluid project_image" src="{{ url('/uploads/projects/' . $image->filename) }}" alt="project_image">
                            </div>
                            @endforeach
                           
                        </div>

                    </div>

                </article>

            </div>
        </div>

    </div>
@endsection
