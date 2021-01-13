@extends('layouts.front.master')
@section('title','Home')
@section('content')
    <!-- END header -->

    <section class="site-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                        @foreach($featured_posts as $post)
                            <div>
                                <a href="{{ route('post.details',$post->id) }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset($post->image) }}'); ">
                                    <div class="text half-to-full">
                                        <span class="category mb-5">{{ $post->category->name }}</span>
                                        <div class="post-meta">

                                            <span class="author mr-2"><img src="{{ asset($post->image) }}" alt="Colorlib"> {{ $post->author->name }}</span>&bullet;
                                            <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }} </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                        </div>
                                        <h3>{{ $post->title }}</h3>

                                        <p>{{ Str::limit($post->content,100) }}..</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Latest Posts</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        @foreach($latest_posts as $post)
                            <div class="col-md-6">
                                <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <img src="{{ asset($post->image) }}" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="author mr-2">{{ $post->author->name }}</span>&bullet;
                                            <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }} </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> {{ $post->category->name }}</span>
                                        </div>
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            {{ $latest_posts->render() }}
                        </div>
                    </div>
                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    @include('front._right_sidebar')
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
@endsection