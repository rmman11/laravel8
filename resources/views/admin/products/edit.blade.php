@extends('admin.layouts.master')
@section('title', 'Editare Product')
@section('content')

<div class="container"  style="background: #fff;">

  <div class="pull-right">

    <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Back</a>

  </div>

  
  <div class="row" style="padding:20px">

    {!! Form::model($product, [
      'method' => 'PATCH',
      'files'=>true,
      'enctype'=>'multipart/form-data',
      'route' => ['admin.products.update', $product->id]
      ]) !!}

      {{ csrf_field() }}


      <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <input type="text"   name="name" value="{{ $product->name }}">
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Categorie</label>


        {!! Form::select('categorie_id', $cat, null, ) !!}


      </select>

    </div>


    <div class="form-group">
      <label class="col-md-4 control-label">Brand</label>
      <input type="text" name="brand"  value="{{ $product->brand }}" >
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">Slug</label>
      <input type="text" name="slug"   value="{{ $product->slug }}">
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label">Price</label>
      <input type="text" name="price"  value="{{ $product->price }}">
    </div>

      <div class="form-group row">
          <label class="col-md-2 control-label">Quantity</label>
            <div class="col-md-2">
            <input type="text" name="quantity" value="{{ $product->quantity  }}" class="form-control">
          </div>
            <label class="col-md-2 control-label">Weight</label>
            <div class="col-md-2">
            <input type="text" name="weight" value="{{ $product->weight }}" class="form-control">
          </div>
        </div>


<div class="form-group">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input"
                                                  type="checkbox"
                                                  id="status"
                                                  name="status"
                                                  {{ $product->status == 1 ? 'checked' : '' }}
                                               />Status
                                       </label>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input"
                                                  type="checkbox"
                                                  id="featured"
                                                  name="featured"
                                                  {{ $product->featured == 1 ? 'checked' : '' }}
                                               />Featured
                                       </label>
                                   </div>
                               </div>



    <div class="form-group">
      <label class="col-md-4 control-label">

        <strong>Detail:</strong>

      </label>
      <textarea name="description"  value="{{ $product->description }}">
        {{ $product->description }}
      </textarea>
    </div>

    <div class="form-group row">

      <label for="name" class="col-md-4 col-form-label text-md-right">Your Picture</label>
      <div class="col-md-6">
        <input type="file" class="form-control-file" name="image" id="image" aria-describedby="fileHelp">
        <img src="{{URL::asset('/public/uploads/'.$product->image)}}">
        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
      </div>

    </div>


    <button type="submit" class="btn btn-primary" >
      Save
    </button>

    {{ Form::close() }}
  </div>

</div>
<script>
function changeProfile() {
  $('#image').click();
}
$('#image').change(function () {
  var imgPath = $(this)[0].value;
  var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
  if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
  readURL(this);
  else
  alert("Please select image file (jpg, jpeg, png).")
});
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function (e) {
      $('#preview').attr('src', e.target.result);
      $('#remove').val(0);
    }
  }
}
function removeImage() {
  $('#preview').attr('src', '{{url('images/noimage.jpg')}}');
  $('#remove').val(1);
}
</script>
@stop