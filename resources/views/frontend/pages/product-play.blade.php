@extends('frontend.layouts.master')
@section('title','E-Paninting || HOME PAGE')
@section('main-content')

<style>
    .sc-button-group .sc-button-download .soundHeader{ 
        display:none !important;
    }
    .controls-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .media-buttons {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .media-buttons button {
        padding: 8px;
        border: none;
        background: none;
        cursor: pointer;
    }

    .progress-bar {
        flex-grow: 1;
        height: 6px;
        background-color: #777;
        border-radius: 3px;
        position: relative;
        margin: 0 20px;
    }

    .progress-fill {
        position: absolute;
        height: 100%;
        background-color: #c0392b;
        width: 50%; /* Set dynamically with JS if needed */
        border-radius: 3px;
    }

    .progress-thumb {
        position: absolute;
        top: 50%;
        left: 50%; /* center by default */
        transform: translate(-50%, -50%);
        width: 16px;
        height: 16px;
        background-color: #c0392b;
        border-radius: 50%;
    }

    .buy-print-btn {
        border: 1px solid #c0392b;
        color: #c0392b;
        background-color: transparent;
        padding: 8px 16px;
        font-size: 14px;
        border-radius: 25px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .buy-print-btn .arrow {
        font-size: 16px;
    }
    .social-links ul li a {
        width: 30px !important;
        height: 36px !important;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8z4+2e5c7e5a5b5e5a5b5e5a5b5e5a5b5e5" crossorigin="anonymous" />
    <script src="https://w.soundcloud.com/player/api.js"></script>
    <section class="subbanner-sec sectionpadding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                      </ol>
                    </nav>
                    <div class="section-heading">
                        <h3>Painting Title Painting Title </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subbanner sec end -->

   

   <!-- product play sec start -->
   <section class="product-play padding-top">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <div style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
                        @php
                            $photos = json_decode($product_play->photo);
                        @endphp
                        <a  href="{{ route('product-detail', $product_play->slug) }}">
                            <img src="{{asset($photos[0]) }}" id="coverImage"
                            alt="Play Song"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; cursor: pointer; z-index: 2;">
                        <a>
                        <iframe
                            id="sc-player"
                            width="100%"
                            height="80"
                            scrolling="no"
                            frameborder="no"
                            allow="autoplay"
                            src="{{$product_play->url}}"
                            style="z-index: 1; position: relative;">
                        </iframe>
                    </div>
                    <div class="controls-container">
                        <div class="media-buttons">
                            <button id="playBtn">
                                <img  id="playIcon" src="{{ asset('images/Prplay.png') }}" alt="Play" style="width: 20px;">
                            </button>
                            <button id="pauseBtn">
                                <img  id="pauseIcon" src="{{ asset('images/play.png') }}" alt="Pause" style="width: 20px;">
                            </button>
                        </div>

                        <!-- <div class="progress-bar">
                            <div class="progress-fill"></div>
                            <div class="progress-thumb"></div>
                        </div> -->
                        <a herf="{{ route('product-detail', $product_play->slug) }}">
                            <button class="buy-print-btn">
                                <span class="arrow">›</span> Interested to Buy Painting
                            </button>
                        </a>
                    </div>
               </div>

               <div class="lyrics-area mt-5">
                   <div class="row">
                       <div class="col-6 col-lg-10">
                           <h3>Lyrics</h3>
                       </div>
                       <div class="col-6 col-lg-2">
                           <select class="form-select">
                               <option selected>English</option>
                               <option selected>Bengali</option>
                               <option>Hindi</option>
                           </select>
                       </div>
                       <div class="col-lg-12 mt-3">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                       </div>
                   </div>
               </div>

               <div class="product-play-share mt-5">
                   <div class="social-links">
                       <ul>
                            <li>
                                <form method="POST" action="{{ route('product.like', $product_play->id) }}" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="hearts">
                                            @if($product_play->likes->contains('user_id', auth()->id()))
                                              <img src="{{ asset('images/heart.png') }}" alt="">
                                            @else
                                                <img src="{{ asset('images/heart.png') }}" alt="">
                                            @endif
                                            {{ $product_play->likes->count() }}
                                        </button>
                                    </form>
                            </li>
                            <li style="display: flex; gap:3px;">
                                <a href="{{ route('product.comment.page', $product_play->id) }}" class="comment" style="text-decoration: none;">
                                    <button class="comment">
                                        <img src="{{ asset('images/chat.png') }}" alt="">
                                    </button>
                                </a>
                                <span >{{ $product_play->comments->count() }}</span> 
                            </li>
                           <li><a href=""><img src="{{asset('images/facebook.png')}}" class="img-fluid"></a></li>
                           <li><a href=""><img src="{{asset('images/instra.png')}}" class="img-fluid"></a></li>
                           <li><a href=""><img src="{{asset('images/pin.png')}}" class="img-fluid"></a></li>
                           <li><a href=""><img src="{{asset('images/you.png')}}" class="img-fluid"></a></li>
                           <li><a href=""><img src="{{asset('images/in.png')}}" class="img-fluid"></a></li>
                           <li><a href=""><img src="{{asset('images/twi.png')}}" class="img-fluid"></a></li>
                       </ul>
                   </div>
               </div>
               <div class="about-product mt-5">
                   <h3 class="mb-3">About The Paintings</h3>
                   <p>{!! $product_play->summary !!}</p>
               </div>

               <div class="related-product mt-5">
                    <h3 class="mb-3">Related Product</h3>
                    <div class="featured-slider owl-carousel">
                        @php
                            use App\Models\Product;
                            $product_listss = Product::with(['likes', 'comments'])->where('status', 'active')->orderBy('id', 'DESC')->limit(6)->get();
                        @endphp                  
                        @foreach($product_listss as $product)
                            <div class="featured-item">
                                <a href="{{ route('product-play', $product->slug) }}">
                                    <div class="featured-img">
                                        @php
                                            $photos = json_decode($product->photo);
                                        @endphp
                                        @if(!empty($photos) && isset($photos[0]))
                                            <img src="{{ asset($photos[0]) }}" alt="Featured Image" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="featured-content">
                                        <h4 class="title">{{ $product->title }}</h4>
                                        <p class="price with-discount">${{ number_format($product->discount, 2) }}</p>
                                    </div>
                                </a>
                                <div class="featured-attribute mt-3">
                                    <form method="POST" action="{{ route('product.like', $product->id) }}" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="hearts">
                                            @if($product->likes->contains('user_id', auth()->id()))
                                                <i class="fas fa-heart"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                            {{ $product->likes->count() }}
                                        </button>
                                    </form>

                                    <!-- Comment Count Button -->
                                    <button class="comment">
                                        <a href="{{ route('product.comment.page', $product->id) }}" class="comment" style="text-decoration: none;">
                                            <i class="far fa-comment"></i> {{ $product->comments->count() }}
                                        </a>
                                    </button>
                                </div>
                            </div>
                        @endforeach    
               </div>
           </div>
       </div>
   </section>
   <!-- product play sec end -->
  @endsection
  
<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     const iframeElement = document.getElementById('sc-player');
    //     const widget = SC.Widget(iframeElement);

    //     document.getElementById('playBtn').addEventListener('click', function () {
    //         widget.play();
    //     });

    //     document.getElementById('pauseBtn').addEventListener('click', function () {
    //         widget.pause();
    //     });

    //     document.getElementById('stopBtn').addEventListener('click', function () {
    //         widget.seekTo(0); 
    //         widget.pause();   
    //     });
    //     playBtn.addEventListener('click', function () {
    //         widget.play();
    //         pauseIcon.src = "{{ asset('images/Vector.png') }}"; 
    //     });

    //     pauseBtn.addEventListener('click', function () {
    //         widget.pause();
    //         pauseIcon.src = "{{ asset('images/Prplay.png') }}"; 
    //     });
    // });
    //   document.addEventListener("DOMContentLoaded", function () {
    //     const iframeElement = document.getElementById('sc-player');
    //     const widget = SC.Widget(iframeElement);

    //     const playBtn = document.getElementById('playBtn');
    //     const pauseBtn = document.getElementById('pauseBtn');
    //     const playIcon = document.getElementById('playIcon');
    //     const pauseIcon = document.getElementById('pauseIcon');

    //     playBtn.addEventListener('click', function () {
    //         widget.play();
    //         playIcon.src = "{{ asset('images/Vector.png') }}"; // Change play button to pause icon
    //     });

    //     pauseBtn.addEventListener('click', function () {
    //         widget.pause();
    //         playIcon.src = "{{ asset('images/Prplay.png') }}"; // Change play button back to play icon
    //     });
    // });
    document.addEventListener("DOMContentLoaded", function () {
        const iframeElement = document.getElementById('sc-player');
        const widget = SC.Widget(iframeElement);

        const playBtn = document.getElementById('playBtn');
        const pauseBtn = document.getElementById('pauseBtn');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');

        playBtn.addEventListener('click', function () {
            widget.play();
            playIcon.src = "{{ asset('images/Vector.png') }}"; 
        });

        pauseBtn.addEventListener('click', function () {
            widget.pause();
            playIcon.src = "{{ asset('images/Prplay.png') }}"; 
            window.onload = function () {
                setTimeout(function () {
                    widget.play();
                    playIcon.src = "{{ asset('images/Vector.png') }}";
                }, 10000); 
            };
        });
    });

    </script>   