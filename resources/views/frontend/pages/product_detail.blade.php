

@extends('frontend.layouts.master')
@section('title','E-Paninting || HOME PAGE')
@section('main-content')
<style>
    .owl-carousel{
        display: flex;
        
    }

     .dropdown {
            border-radius: 10px;
            position: relative;
            display: inline-block;
            width: 200px;
            cursor: pointer;
            padding: 10px;
           
            border: 1px solid #ccc;
            background-color: #fff;
        }

        .dropdown-content {
            margin-top: 20px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 200px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content div {
            padding: 10px;

            cursor: pointer;
        }

        .dropdown-content div:hover {
            background-color: #ddd;
        }

        /* Show dropdown when the dropdown is in focus */
        .dropdown:focus-within .dropdown-content {
            display: block;
        }

        /* Optional: Add a transition for smooth opening and closing */
        .dropdown-content {
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
        }

        .dropdown:focus-within .dropdown-content {
            opacity: 1;
        }

        .dropdown span {
            font-size: 16px;
        }
	</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select elements
        const currencyDropdown = document.getElementById('currencyDropdown');
        const priceText = document.getElementById('priceText');
        const dropdownContent = currencyDropdown.querySelector('.dropdown-content');
        const dropdownSpan = currencyDropdown.querySelector('span');
        
        const originalPrice = 100; // Manually set custom price

        const conversionRates = {
            USD: 1,
            INR: 83,
            EUR: 0.93,
            GBP: 0.8,
            AUD: 1.5,
            CAD: 1.35,
            JPY: 155,
            CNY: 7.2,
            AED: 3.67,
            CHF: 0.91
        };

        const currencySymbols = {
            USD: '$',
            INR: '₹',
            EUR: '€',
            GBP: '£',
            AUD: 'A$',
            CAD: 'C$',
            JPY: '¥',
            CNY: '¥',
            AED: 'د.إ',
            CHF: 'CHF'
        };

        // Update price based on selected currency
        function updatePrice(selectedCurrency) {
            const rate = conversionRates[selectedCurrency];
            const symbol = currencySymbols[selectedCurrency];
            const convertedPrice = (originalPrice * rate).toFixed(2);

            priceText.innerHTML = `${symbol}${convertedPrice}`;
        }

        // Handle currency selection
        dropdownContent.addEventListener('click', function (e) {
            if (e.target && e.target.matches('div[data-currency]')) {
                const selectedCurrency = e.target.getAttribute('data-currency');
                dropdownSpan.innerHTML = e.target.innerHTML; // Update selected value
                updatePrice(selectedCurrency);
                // Dropdown will automatically close due to CSS :focus-within rule
            }
        });

        // Initialize with default value
        updatePrice('USD');
    });
</script>




        <!-- subbanner sec start -->
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
   
   <!-- product-details sec start -->
   @php
        $photos = json_decode($product_detail->photo);
    @endphp
   <section class="product-details-sec sectionpadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="product-img">
                    <a href="{{asset($photos[0]) }}" class="position-relative" data-fancybox="1">
						<img src="{{asset($photos[0]) }}" class="img-fluid">
                        <button class="pd-play-zoom">
                            <i class="fas fa-search-plus"></i></button>
                        </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product-details">
                    <div class="deatils-top">
                        <div>
                            <ul class="pagination">
                                <li><a href=""><span><i class="fas fa-angle-left"></i></span> Previous</a></li>
                                <li><a href="">Next<span><i class="fas fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                        <div>
                           <div class="social-links">
                               <ul>
                                   <li>
                                    <form method="POST" action="{{ route('product.like', $product_detail->id) }}" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="hearts">
                                        @if($product_detail->likes->contains('user_id', auth()->id()))
                                            <i class="fas fa-heart"></i>
                                        @else
                                            <i class="far fa-heart"></i>
                                        @endif
                                        {{ $product_detail->likes->count() }}
                                    </button>
                                </form></li>
                                   <li><button class="comment">
                                    <a href="{{ route('product.comment.page', $product_detail->id) }}" class="comment" style="text-decoration: none;">
                                        <i class="far fa-comment"></i> {{ $product_detail->comments->count() }}
                                    </a>
                                </button></li>
                               </ul>
                           </div>

                        </div>
                    </div>
                    <div class="product-heading">
                        <h4>{{$product_detail->title}}</h4>
                        <p><strong>Medium:</strong> {{$product_detail->Medium}}</p>
                    </div>
                    <div class="form-part">
                        <form>
                            <div class="form-group">
                                <label>Print Medium</label>
                                <select class="form-select">
                                    <option> {{$product_detail->print_medium}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Canvas Type</label>
                                <select class="form-select">
                                    <option> {{$product_detail->canvas_type}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Print Size</label>
                                <select class="form-select">           
                                    @php 
                                        $sizes = explode(',', $product_detail->size);
                                    @endphp
                                    @foreach($sizes as $size)
                                        <option value="{{ $size }}">{{ $size }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <select class="form-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="currency-area">
                <!-- Currency dropdown -->
                <div id="currencyDropdown" class="dropdown" tabindex="0">
                    <span>Dollar ($)</span>
                    <div class="dropdown-content">
                        <div data-currency="USD">Dollar ($)</div>
                        <div data-currency="INR">Rupee (₹)</div>
                        <div data-currency="EUR">Euro (€)</div>
                        <div data-currency="GBP">British Pound (£)</div>
                        <div data-currency="AUD">Australian Dollar (A$)</div>
                        <div data-currency="CAD">Canadian Dollar (C$)</div>
                        <div data-currency="JPY">Japanese Yen (¥)</div>
                        <div data-currency="CNY">Chinese Yuan (¥)</div>
                        <div data-currency="AED">UAE Dirham (د.إ)</div>
                        <div data-currency="CHF">Swiss Franc (CHF)</div>
                    </div>
                </div>

                <!-- Price display -->
                <div class="cost-area" style="margin-top: 10px;">
                        <p><strong>Cost</strong> (Including Shipping):</p>
                        <h3 id="priceText"></h3>
                </div>



                {{-- <div>
                    <div class="cost-area" style="margin-top: 10px;">
                        <p><strong>Cost</strong> (Including Shipping):</p>
                        <h3 id="priceText"></h3> <!-- Price will update here -->
                    </div>
                </div> --}}
                                            </div>
                            <div class="postcode-area">
                                <!-- <div>
                                    <div class="country">
                                        <select class="form-select">
                                            <option>Currency</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="postcode-fild">
                                    <input type="text" placeholder="Postal Code" name="">
                                </div>
                                <div class="check-text">
                                    <a href="#">Delivery Availability Check</a>
                                </div>
                            </div>

                            <div class="cart-area">
                                <div class="cart-box mr-2">
                                    <a href="{{route('add-to-wishlist',$product_detail->slug)}}">Add To Wistlist</a>
                                </div>
                                <div class="cart-box">
                                    <a href="{{route('add-to-cart',$product_detail->slug)}}">
                                        <img src="{{asset('images/cart-img.png')}}" class="img-fluid">Add to Cart
                                    </a>
                                </div>
                            </div>
                            <div class="pd-lern-more">
                                <p>All profits from print sales will be used to fund art and music scholarships for talented budding artists.<a href="">Click here to learn more.</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- product-details sec end -->

    @php
        $setting_data = DB::table('settings')->orderBy('id','DESC')->first();
    @endphp


   <!-- product description sec start -->
   <section class="produt-description padding-bottom">
       <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pad-tab">
                  <button class="tablinks active" onclick="openCity(event, 'London')">Shipping</button>
                  <button class="tablinks" onclick="openCity(event, 'Paris')">Warrantee</button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Payment</button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo1')">Return</button>
                </div>
                <div id="London" class="tabcontent" style="display: block;">    
                      <p>{{$setting_data->shipping}}</p>
                </div>

                 <div id="Paris" class="tabcontent">
                        <p>{{$setting_data->warrenty}}</p>
                </div>

                <div id="Tokyo" class="tabcontent">
                        <p>{{$setting_data->payment}}</p>
                </div>
                <div id="Tokyo1" class="tabcontent">
                        <p>{{$setting_data->return}}</p>
                </div>
            </div>
        </div>
       </div>
   </section>
   <!-- product description sec end -->

   <!-- printing sec start -->
   <section class="printing-sec">
       <div class="container">
           <div class="row">
            <div class="col-lg-6 text-center fst-pt">
                <div class="print-area">
                    <h3 class="mb-4">Print on Paper</h3>
                    <p>{!! $setting_data->print_on_paper !!}</p>
                <!-- <a href="#" class="theme-btn1"><span><i class="fas fa-angle-right"></i></span> Read More</a> -->
                </div>
            </div>
            <div class="col-lg-6 text-center snd-pt">
                <div class="print-area">
                    <h3 class="mb-4">Print on Canvas</h3>
                <p>{!! $setting_data->print_on_canvas !!}</p>
                <!-- <a href="#" class="theme-btn1"><span><i class="fas fa-angle-right"></i></span> Read More</a> -->
                </div>
            </div>
           </div>
       </div>
   </section>
   <!-- printing sec end -->


   <!-- related sec start -->
   <section class="pd-related-sec sectionpadding">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                    <div class="related-product">
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
           </div>
       </div>
   </section>
   <!-- related sec end -->
   
  <!-- sequere sec start  -->
  <section class="sequere-sec">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <ul class="sequre-list">
                      <li class="text-center">
                          <div class="sq-icon"><img src="{{asset('images/MoneyWavy.png')}}" class="img-fluid"></div>
                          <div class="sq-content">
                              <h4>SECURE PAYMENT</h4>
                              <p>Above $ 600 value will be free. Artwork is shipped Worldwide using DHL, FedEx, DTDC and Bluedart.</p>
                          </div>
                      </li>
                      <li class="text-center">
                          <div class="sq-icon"><img src="{{asset('images/MoneyWavy.png')}}" class="img-fluid"></div>
                          <div class="sq-content">
                              <h4>SAFE PACKAGING</h4>
                              <p>Above $ 600 value will be free. Artwork is shipped Worldwide using DHL, FedEx, DTDC and Bluedart.</p>
                          </div>
                      </li>
                      <li class="text-center">
                          <div class="sq-icon"><img src="{{asset('images/MoneyWavy.png')}}" class="img-fluid"></div>
                          <div class="sq-content">
                              <h4>FREE SHIPPING</h4>
                              <p>Above $ 600 value will be free. Artwork is shipped Worldwide using DHL, FedEx, DTDC and Bluedart.</p>
                          </div>
                      </li>
                      <li class="text-center">
                          <div class="sq-icon"><img src="{{asset('images/MoneyWavy.png')}}" class="img-fluid"></div>
                          <div class="sq-content">
                              <h4>SECURE PAYMENT</h4>
                              <p>Above $ 600 value will be free. Artwork is shipped Worldwide using DHL, FedEx, DTDC and Bluedart.</p>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  <!-- sequere sec end  -->




@endsection


