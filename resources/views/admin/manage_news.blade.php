@extends('admin.layouts.main')

@section('main-container')
    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">

                {{-- @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}}


                <div class="col-lg-12 col-md-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h2>Manage News</h2>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>News Title</th>
                                            <th>Description</th>
                                            <th>thum Image</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->news_title }}</td>
                                                <td>{{ $data->description }}</td>
                                                <td>
                                                    <img width="100px" style="border-radius: 10px" src="{{url('/uploads/thumimg/'.$data->t_image)}}" alt="thum_image">
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
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                <a class="dropdown-item"
                                    href="{{ route('delete.newes',$data->id) }}">Delete</a>
                            </div>
                        </div>

                    </td>
                </tr>

        </tbody>
        @endforeach
    </table>
</div>
</div>
                    </div>
                </div>

            </div>
        </div>

        {{ $news->links() }}
    @endsection
