@extends('admin.layouts.master')
@section('title', 'Create Product')
@section('content')
<div class="card">

<div class="card-body">

         <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="selectform">
     <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

<div class="form-group">
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    </div>
 <div class="form-group row">
      <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
</div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 control-label">Categorie</label>
      <div class="col-sm-4">
    {!! Form::select('id', $categories, old('categories'), [
    'required' => '','name'=>'category_id','class' =>'form-control']) !!}
</div>

<label class="control-label">Brand</label>
<div class="col-md-5">
<input type="text" name="brand" value="{{ old('brand') }}" class="form-control">
</div>


                </div>

 <div class="form-group row">
      <label class="col-sm-2 control-label">Slug</label>
          <div class="col-sm-5">
        <input type="text" name="slug" value="{{ old('slug') }}" class="form-control">
      </div>
    </div>



        <div class="form-group row">
          <label class="col-md-2 control-label">Price</label>
          <div class="col-md-5">
            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
          </div>
        </div>


    <div class="form-group row">
      <label class="col-md-2 control-label">Quantity</label>
        <div class="col-md-2">
        <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control">
      </div>
        <label class="col-md-2 control-label">Weight</label>
        <div class="col-md-2">
        <input type="text" name="weight" value="{{ old('weight') }}" class="form-control">
      </div>
    </div>


    <div class="form-group row ">
                                   <div class="col-sm-10 form-check">
                                       <label class=" form-check-label">
                                           <input class="form-check-input"
                                                  type="checkbox"
                                                  id="status"
                                                  name="status"
                                               />Status
                                       </label>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input class="form-check-input"
                                                  type="checkbox"
                                                  id="featured"
                                                  name="featured"
                                               />Featured
                                       </label>
                                   </div>
                               </div>


    <div class="form-group row">
      <label class="col-sm-2 control-label">Description</label>
           <textarea name="description"   id='output'  value="{{ old('description') }}" rows="5" class="form-control"
                cols="28" >
           </textarea>
            </div>

               <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label">Your Picture</label>

                          <div class="col-md-12">
                    <input type="file" class="form-control-file" name="image" id="image" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>

              </div>


        <button type="submit" class="btn btn-primary" >
        Save
        </button>

           <button class="reset btn btn-danger">
        CLEAR ENTRY
    </button>

    </form>
  </div>
</div>

<script>
// Get all the reset buttons from the dom
var resetButtons = document.getElementsByClassName('reset');

// Loop through each reset buttons to bind the click event
for(var i=0; i<resetButtons.length; i++){
    resetButtons[i].addEventListener('click', resetForm);
}

/**
 * Function to hard reset the inputs of a form.
 *
 * @param object event The event object.
 * @return void
 */
function resetForm(event){

    event.preventDefault();
  
  var form = event.currentTarget.form;
  var inputs = form.querySelectorAll('input');
var textarea = document.querySelector('#output');

  inputs.forEach(function(inputs, index){
        inputs.value = null;
          textarea.value = '';
        
    });


}
</script>
@stop
