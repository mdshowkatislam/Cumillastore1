<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All
                                    products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif

                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Product Name" class="form-control input-md"
                                        wire:model="name" />
                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Quantity" class="form-control input-md"
                                        wire:model="quantity" />
                                    @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Price</label>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Price" class="form-control input-md"
                                        wire:model="price" />
                                    @error('price') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>






                            <div class="form-group">
                                <label class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-6" wire:ignore>
                                    <textarea class="form-control" id="short_description"
                                        placeholder="Short Description" wire:model="short_desc"></textarea>
                                    @error('short_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group" wire:ignore>
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="description" placeholder="Description"
                                        wire:model="des"></textarea>
                                    @error('des') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Aditional Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="Aditional Description"
                                        wire:model="aditional_desc"></textarea>
                                    @error('aditional_desc') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">gallery </label>
                                <div class="col-md-6">
                                    <textarea class="form-control"
                                        placeholder="just add path with the images with extention"
                                        wire:model="gallery"></textarea>
                                    @error('gallery') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">file_path </label>
                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="just add path only"
                                        wire:model="file_path"></textarea>
                                    @error('file_path') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">stock</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="How many in stock"
                                        wire:model="stock"></textarea>
                                    @error('stock') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock status</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                    @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="status">
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                    @error('status') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Featured</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Condition</label>
                                <div class="col-md-6">
                                    <select class="form-control" wire:model="condition">
                                        <option value="new">new</option>
                                        <option value="hot">hot</option>
                                        <option value="special">special</option>
                                        <option value="popular">popular</option>
                                        <option value="top-selling">top-selling</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Discount</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="Any discount"
                                        wire:model="discount"></textarea>
                                    @error('discount') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newimage" />
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @else
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                                    @endif
                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Images</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control input-md" wire:model="newimages" multiple />
                                    @if($newimages)
                                    @foreach($newimages as $newimage)
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @endif
                                    @endforeach
                                    @else
                                    @foreach($images as $image)
                                    @if($image)
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Category id</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="allkat" wire:model="categories_id">
                                        <option value="">Select Category id</option>
                                        @foreach ($categories as $categories)
                                        <option value="{{$categories->id}}">{{$categories->id}}</option>
                                        @endforeach
                                    </select>
                                    @error('categories') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sub Category id</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="allsubkat" id="allsubkat"
                                        wire:model="subcategories_id">
                                        <option value="" selected>Enter sub cat</option>
                                    </select>
                                    @error('scategories') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(function() {
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description', sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    });
                }
 });
        });
</script>

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
  $('#allkat').on('change',function(){
      var katId=$(this).val();
      if(katId){
          $.ajax({
              url:'getsubkat/'+katId,
              type:"GET",
              data:{"_token":"{{ csrf_token() }}"},
              dataType:"json",
              success:function(data)
              {
                  if(data){
                      $('#allsubkat').empty();
                      $('#allsubkat').append('<option hidden>Choose subcategory</option>');
                      $.each(data,function(key, allsubkat){
                          $('select[id="allsubkat"]').append('<option value=" '+allsubkat.id+' ">'+allsubkat.name+'</option>');
                      });
                  }else{
                      $('#allsubkat').empty();
                  }
              }
          })
      }
      else{
          $('#allsubkat').empty();
      }
  })

});


</script>
@endpush
