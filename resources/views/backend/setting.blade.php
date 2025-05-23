@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Post</h5>
    <div class="card-body">
    <form method="post" action="{{route('settings.update')}}">
        @csrf 
        {{-- @method('PATCH') --}}
        {{-- {{dd($data)}} --}}
        <div class="form-group">
          <label for="short_des" class="col-form-label">Short Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="quote" name="short_des">{{$data->short_des}}</textarea>
          @error('short_des')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="description" class="col-form-label">Description <span class="text-danger">*</span></label>
          <textarea class="form-control" id="description" name="description">{{$data->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="shipping" class="col-form-label">Shipping <span class="text-danger">*</span></label>
          <textarea class="form-control" id="shipping" name="shipping">{{$data->shipping}}</textarea>
          @error('shipping')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="warrenty" class="col-form-label">Warrenty <span class="text-danger">*</span></label>
          <textarea class="form-control" id="warrenty" name="warrenty">{{$data->warrenty}}</textarea>
          @error('warrenty')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="payment" class="col-form-label">Payment <span class="text-danger">*</span></label>
          <textarea class="form-control" id="payment" name="payment">{{$data->payment}}</textarea>
          @error('payment')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="return" class="col-form-label">Return <span class="text-danger">*</span></label>
          <textarea class="form-control" id="return" name="return">{{$data->return}}</textarea>
          @error('return')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="about_paintings" class="col-form-label">About Paintings <span class="text-danger">*</span></label>
          <textarea class="form-control" id="about_paintings" name="about_paintings">{{$data->about_paintings}}</textarea>
          @error('about_paintings')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="print_on_paper" class="col-form-label"> Print On Paper <span class="text-danger">*</span></label>
          <textarea class="form-control" id="print_on_paper" name="print_on_paper">{{$data->print_on_paper}}</textarea>
          @error('print_on_paper')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="print_on_canvas" class="col-form-label">Print On Canvas <span class="text-danger">*</span></label>
          <textarea class="form-control" id="print_on_canvas" name="print_on_canvas">{{$data->print_on_canvas}}</textarea>
          @error('print_on_canvas')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail1" class="form-control" type="text" name="logo" value="{{$data->logo}}">
        </div>
        <div id="holder1" style="margin-top:15px;max-height:100px;"></div>

          @error('logo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$data->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="address" class="col-form-label">Address <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="address" required value="{{$data->address}}">
          @error('address')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" required value="{{$data->email}}">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="phone" class="col-form-label">Phone Number <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="phone" required value="{{$data->phone}}">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });

    $(document).ready(function() {
      $('#quote').summernote({
        placeholder: "Write short Quote.....",
          tabsize: 2,
          height: 100
      });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#shipping').summernote({
        placeholder: "Write detail shipping.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#warrenty').summernote({
        placeholder: "Write detail warrenty.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#payment').summernote({
        placeholder: "Write detail payment.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#return').summernote({
        placeholder: "Write detail return.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#print_on_canvas').summernote({
        placeholder: "Write detail print_on_canvas.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#print_on_paper').summernote({
        placeholder: "Write detail print_on_paper.....",
          tabsize: 2,
          height: 150
      });
    });
    $(document).ready(function() {
      $('#about_paintings').summernote({
        placeholder: "Write detail about_paintings.....",
          tabsize: 2,
          height: 150
      });
    });
</script>
@endpush