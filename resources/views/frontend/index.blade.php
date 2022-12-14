@extends('frontend.layouts.master')


@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ url('vlog/assets/img/home-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            @if (Session::has('success'))
                <div class='success'>
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($vlogs as $vlog)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ route('vlogs.single', $vlog->id) }}">
                            <h2 class="post-title">{{ $vlog->title }}</h2>
                            <h3 class="post-subtitle">{{ $vlog->sub_title }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Paras Shrestha</a>
                            on {{ $vlog->date }}
                        </p>
                        <a href="{{ route('deletePost', $vlog->id) }}" class="btn btn-danger btn-sm" title="Delete">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="{{ route('editPost', $vlog->id) }}" class="btn btn-warning btn-sm" title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach

                {{-- <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{route('sample')}}"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 18, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{route('sample')}}">
                        <h2 class="post-title">Science has not yet mastered prophecy</h2>
                        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{route('sample')}}">
                        <h2 class="post-title">Failure is not an option</h2>
                        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it???s actually our duty to future generations.</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on July 8, 2022
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" /> --}}
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
                        href="{{ route('sample') }}">Older Posts ???</a></div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script></script>
@endsection
