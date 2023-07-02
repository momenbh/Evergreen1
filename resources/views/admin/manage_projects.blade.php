@extends('admin.layouts.main')

@section('main-container')
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
<div class="layout-px-spacing">
<div class="row layout-top-spacing">


<div class="col-lg-12 col-md-12 layout-spacing">
<div class="statbox widget box box-shadow">
<div class="widget-header">
<div class="row">
<div class="col-xl-12 col-md-12 col-sm-12 col-12">
<h2>Manage Projects</h2>
</div>
</div>
</div>
<div class="widget-content widget-content-area">
<div class="table-responsive">
<table class="table table-bordered mb-4">
<thead>
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Description</th>
        <th>VIDEO URL</th>
        <th>Thumbnail Images</th>
        <th>Project Images</th>
        
        <th class="text-center">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($table as $key => $data)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $data->project_name }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->video_url }}</td>
            <td>
                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/project/'.$data->thumbnail_image)}}" alt="thumbnail_image">
            </td>
            <td>
                @foreach($images as $image)
                <div>
                    <img width="50px" style="border-radius: 10px" src="{{ url('/uploads/projects/' . $image->filename) }}" alt="project_image">
                </div>
                @endforeach
            </td>
            <td class="text-center">

                <div class="dropdown custom-dropdown">
                    <a class="dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-more-horizontal">
                            <circle cx="12" cy="12" r="1">
                            </circle>
                            <circle cx="19" cy="12" r="1">
                            </circle>
                            <circle cx="5" cy="12" r="1">
                            </circle>
                        </svg>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                        <a class="dropdown-item" href="{{route('edit.project',$data->id)}}">Edit</a>
                        <a class="dropdown-item" href="{{route('deete.project',$data->id)}}">Delete</a>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
</tbody>

</table>
</div>
</div>
</div>
</div>

</div>
</div>
{{$table->links()}}
@endsection
