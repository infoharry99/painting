@extends('frontend.layouts.master')
@section('title','E-Paninting || HOME PAGE')
@section('main-content')
    <!-- subbanner sec start -->
    {{-- <section class="subbanner-sec sectionpadding">
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
                        <h3 class="mt-3">About The Paintings</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @php
        $setting_data = DB::table('settings')->orderBy('id','DESC')->first();

    @endphp
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
                        <h3 class="mt-3">About The Paintings</h3>
                        <p>{!!$setting_data->about_paintings!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subbanner sec end -->

    <!-- gallery listing sec start -->
    <section class="gallery-sec sectionpadding">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="featured-item">
                    <a href="{{route('product-play','test')}}">
                        <div class="featured-img"><img src="images/frame 1.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>
                <div class="featured-item">
                    <a href="product-play.html">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>  
                <div class="featured-item">
                    <a href="product-play.html">
                        <div class="featured-img"><img src="images/frame 1.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>                  
                </div>
                <div class="col-lg-3">
                <div class="featured-item">
                    <a href="product-details.html">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div> 
                <div class="featured-item">
                    <a href="product-details.html">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div> 
                <div class="featured-item">
                    <a href="product-details.html">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>
                <div class="featured-item">
                    <a href="product-details.html">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>                     
                </div>
                <div class="col-lg-3">
                <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/frame 1.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>
                <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div> 
                 <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/frame 1.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>                   
                </div>
                <div class="col-lg-3">
                <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>
                 <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/frame 1.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>
                <div class="featured-item">
                    <a href="#">
                        <div class="featured-img"><img src="images/image 12.png" class="img-fluid"></div>
                        <div class="featured-content">
                            <h5>Title Title Title Title</h5>
                            <span><strong>Code: HF4328754</strong></span>
                            <p>Size: 36 X 36 in </p>
                            <p>Medium: Water Colour</p>
                        </div>
                    </a>
                      <div class="featured-attribute mt-3">
                        <button class="hearts"><i class="far fa-heart"></i>120</button>
                        <button class="comment"><i class="far fa-comment"></i>89</button>
                      </div>
                </div>                    
                </div>
                <div class="col-lg-12">
                    <ul class="pagination mt-3">
                        <li><a href=""><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="" class="active">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">7</a></li>
                        <li><a href="">8</a></li>
                        <li><a href="">9</a></li>
                        <li><a href="">10</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> --}}

{{-- @php
    $featured = DB::table('products')
        ->where('is_featured', 1)
        ->where('status', 'active')
        ->orderBy('id', 'DESC')
        ->limit(20)
        ->get();
@endphp

        <style>
            .product-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
                max-width: 1400px;
                margin: auto;
                padding: 40px 40px 40px 60px;/* 40px top, 40px right, 40px bottom, 60px left */
            }

            .product-card {
                background: #fff;
                border-radius: 8px;
                overflow: hidden;
            }

            .product-img {
                width: 100%;
                object-fit: cover;
                display: block;
                border-radius: 8px;  /* Border-radius applied to all corners */
            }

            .tall { height: 400px; }
            .short { height: 280px; }

            .product-info {
                padding: 12px 10px;
            }

            .title {
                font-weight: bold;
                font-size: 14px;
                margin-bottom: 4px;
            }

            .meta {
                font-size: 13px;
                color: #444;
                margin-bottom: 2px;
            }

            .reaction {
                display: flex;
                gap: 12px;
                padding: 8px 10px 12px;
                font-size: 13px;
                color: #666;
            }

            @media screen and (max-width: 1200px) {
                .product-grid {
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            @media screen and (max-width: 900px) {
                .product-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media screen and (max-width: 600px) {
                .product-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <div class="product-grid">
            @foreach ($featured as $index => $product)
                @php
                    $photos = json_decode($product->photo);
                    $image  = $photos[0] ?? '/placeholder.jpg';
                    $isTall = $index % 2 === 0; // even index = tall
                @endphp
                <a  href="{{ route('product-play', $product->slug) }}">
                    <div class="product-card">
                        
                            <img src="{{ asset($image) }}" class="product-img {{ $isTall ? 'tall' : 'short' }}" alt="{{ $product->title }}">
                    
                        <div class="product-info">
                            <div class="title">{{ Str::limit($product->title, 40) }}</div>
                            <div class="meta">Code: <strong>{{ $product->code ?? 'HF' . $product->id }}</strong></div>
                            <div class="meta">Size: {{ $product->size ?? '36 x 36 in' }}</div>
                            <div class="meta">Medium: {{ $product->medium ?? 'Water Colour' }}</div>
                        </div>
                        <div class="reaction">
                            <span><i class="far fa-heart"></i> 120</span>
                            <span><i class="far fa-comment"></i> 89</span>
                        </div>
                        
                    </div>
                </a>
            @endforeach
        </div> --}}
{{-- 

@php
   
    $featured = DB::table('products')
        ->where('is_featured', 1)
        ->where('status', 'active')
        ->orderBy('id', 'DESC')
        ->paginate(8);
@endphp --}}

@php
use App\Models\Product;
$featured = Product::with(['likes', 'comments'])->where('status', 'active')->orderBy('id', 'DESC')->paginate(8);
                    @endphp

<style>
    .sectionpadding {
    padding: 35px 0 !important;
}
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 1400px;
        margin: auto;
        padding: 40px 40px 40px 60px;
    }

    .product-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
    }

    .product-img {
        width: 100%;
        object-fit: cover;
        display: block;
        border-radius: 8px;
    }

    .tall { height: 400px; }
    .short { height: 280px; }

    .product-info {
        padding: 12px 10px;
    }

    .title {
        font-weight: bold;
        font-size: 14px;
        margin-bottom: 4px;
    }

    .meta {
        font-size: 13px;
        color: #444;
        margin-bottom: 2px;
    }

    .reaction {
        display: flex;
        gap: 12px;
        padding: 8px 10px 12px;
        font-size: 13px;
        color: #666;
    }

    @media screen and (max-width: 1200px) {
        .product-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media screen and (max-width: 900px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (max-width: 600px) {
        .product-grid {
            grid-template-columns: 1fr;
        }
    }

    .custom-pagination {
        padding: 30px 0;
        text-align: center;
    }

    .custom-pagination ul {
        display: inline-flex;
        gap: 10px;
        padding: 0;
        list-style: none;
        justify-content: center;
    }

    .custom-pagination li {
        display: inline-block;
    }

    .custom-pagination a {
        display: block;
        padding: 6px 12px;
        border-radius: 50%;
        text-decoration: none;
        color: #333;
        font-weight: 500;
        border: 1px solid transparent;
    }

    .custom-pagination .active a {
        border: 1px solid #ccc;
        background: #f5f5f5;
        font-weight: bold;
    }

    .custom-pagination .disabled a {
        pointer-events: none;
        color: #aaa;
    }
</style>

<div class="product-grid">
    @foreach ($featured as $index => $product)
        @php
            $photos = json_decode($product->photo);
            $image  = $photos[0] ?? '/placeholder.jpg';
            $isTall = $index % 2 === 0;
        @endphp
        
            <div class="product-card">
                <a href="{{ route('product-play', $product->slug) }}">
                <img src="{{ asset($image) }}" class="product-img {{ $isTall ? 'tall' : 'short' }}" alt="{{ $product->title }}">
                <div class="product-info">
                    <div class="title">{{ Str::limit($product->title, 40) }}</div>
                    <div class="meta">Code: <strong>{{ $product->code ?? 'HF' . $product->id }}</strong></div>
                    <div class="meta">Size: {{ $product->size ?? '36 x 36 in' }}</div>
                    <div class="meta">Medium: {{ $product->medium ?? 'Water Colour' }}</div>
                </div>
                 </a>
                {{-- <div class="reaction">
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
                </div> --}}
               <div class="reaction">
    <!-- Like Button -->
    <form method="POST" action="{{ route('product.like', $product->id) }}" style="display:inline;">
        @csrf
        <button type="submit" class="hearts" style="background-color: white; border:none;">
            <i class="{{ $product->likes->contains('user_id', auth()->id()) ? 'fas fa-heart' : 'far fa-heart' }}"></i>
            <span>{{ $product->likes->count() }}</span>
        </button>
    </form>

    <!-- Comment Count Button -->
    <button class="comment"  style="background-color: white; border:none;">
        <a href="{{ route('product.comment.page', $product->id) }}" class="comment" style="text-decoration: none;">
            <i class="far fa-comment"></i> <span>{{ $product->comments->count() }}</span>
        </a>
    </button>
</div>

            </div>
       
    @endforeach
</div>

{{-- Pagination --}}
@if ($featured->hasPages())
    <div class="custom-pagination">
        <ul>
            {{-- Previous --}}
            <li class="{{ $featured->onFirstPage() ? 'disabled' : '' }}">
                <a href="{{ $featured->previousPageUrl() }}" rel="prev">&lsaquo;</a>
            </li>

            {{-- Page Numbers --}}
            @foreach ($featured->getUrlRange(1, $featured->lastPage()) as $page => $url)
                <li class="{{ $featured->currentPage() == $page ? 'active' : '' }}">
                    <a href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            {{-- Next --}}
            <li class="{{ !$featured->hasMorePages() ? 'disabled' : '' }}">
                <a href="{{ $featured->nextPageUrl() }}" rel="next">&rsaquo;</a>
            </li>
        </ul>
    </div>
@endif




    </section>
    <!-- gallery listing sec end -->



   <!-- footer sec start -->

    <footer>

   <!-- instagram sec start -->
   <section class="instagram-sec sectionpadding">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="section-heading">
                       <h3 class="text-center mb-5"><i class="fab fa-instagram"></i> Instagram</h3>
                   </div>

                   <div class="instrgram-slider owl-carousel">
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                       <div class="ins-item position-relative">
                           <img src="images/image 11.png" class="img-fluid">
                           <div class="ins-overley"><i class="fab fa-instagram"></i></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- instagram sec end -->

   <!-- follow sec start -->
   <section class="follow-sec sectionpadding">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="section-heading">
                       <h3 class="text-center mb-5">Follow Us</h3>
                   </div>
                   <div class="social-links">
                       <ul>
                           <li><a href=""><img src="images/facebook.png" class="img-fluid"></a></li>
                           <li><a href=""><img src="images/instra.png" class="img-fluid"></a></li>
                           <li><a href=""><img src="images/pin.png" class="img-fluid"></a></li>
                           <li><a href=""><img src="images/you.png" class="img-fluid"></a></li>
                           <li><a href=""><img src="images/in.png" class="img-fluid"></a></li>
                           <li><a href=""><img src="images/twi.png" class="img-fluid"></a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- follow sec end -->

   <!-- footer links sec start  -->
   <section class="footerlinks-sec sectionhalf">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-12">
                   <div class="section-heading">
                       <h3 class="text-center mb-5">
                           <ul class="footer-links">
                               <li><a href="" class="active">Home</a></li>
                               <li><a href="">Gallery</a></li>
                               <li><a href="">About</a></li>
                               <li><a href="">Event</a></li>
                               <li><a href="">Blog</a></li>
                               <li><a href="">Contact</a></li>
                           </ul>
                       </h3>
                   </div>
               </div>
               <div class="col-lg-5">
                   <div class="newsletter text-center">
                       <h5>Newsletter</h5>
                       <p>Receive our newsletter for art lovers and collectors</p>
                       <form>
                        <input type="text" placeholder="Your E-mail ID" name="" class="form-control">
                        <button class="sign-up">Sign Up</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- footer links sec end  -->

   <!-- copyright sec start -->
   <section class="copyright-sec sectionhalf">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <ul class="copyright-list">
                       <li><a href="#">Terms Of Use</a></li>
                       <li><a href="">Privacy Policy</a></li>
                       <li>© 2024 Melody Brush. All rights reserved.</li>
                       <li>Powered by <a href="" class="creat-a">www.digibrandx.com</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </section>
   <!-- copyright sec end -->
   
   </footer>
   <!-- footer sec start -->

   <div class="mobile-cart-sec">
       <ul class="e-com-list">
           <li><a href="javascript:void(0)" class="search-btn"><img src="images/search.png" class="img-fluid"></a></li>
           <li><a href="cart.html"><img src="images/cart.png" class="img-fluid"></a></li>
           <li><a href="dashbord.html"><img src="images/profile.png" class="img-fluid"></a></li>
        </ul>
   </div>


   <div class="main-search-area">
       <button class="srh-close"><img src="images/x.png" class="img-fluid"></button>
       <div class="container">
           <div class="row justify-content-center text-center">
               <div class="col-lg-7">
                <div class="searh-cotnent">
                   <h3>What You Search Today</h3>
                   <form class="srh-form">
                       <input type="text" placeholder="Search" name="">
                       <button class="searh-btn"><img src="images/srh-img.png" class="img-fluid"></button>
                   </form>
               </div>
               </div>
           </div>
       </div>
   </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery.ripples.js"></script>
    <script src="js/custom.js"></script>  
    <script>
        // Fancybox Config
Fancybox.bind('[data-fancybox]', {
  //
}); 
    </script>
    <script>
        AOS.init();
      </script>

@endsection