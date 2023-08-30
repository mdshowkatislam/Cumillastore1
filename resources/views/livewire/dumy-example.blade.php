<div class="panel-body">
    <form class="form-horizontal">
        <div>
            <div class="form-group">
                <label class="col-md-4 control-label">Category id</label>
                <div class="col-md-6">
                    <select id="allkat">
                        <option value="">Select Category id</option>
                        @foreach ($allkat as $item)
                        <option value=" {{$item->id}}">{{$item->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">SubCategory id</label>
                <div class="col-md-6">
                    <select name="allsubkat" id="allsubkat">


                    </select>
                </div>
            </div>


        </div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function(){
          $('#allkat').on('change',function(){
              var katId=$(this).val();
              if(katId){
                  $.ajax({
                      url:'/getsubkat/'+katId,
                      type:"GET",
                      data:{"_token":"{{ csrf_token() }}"},
                      dataType:"json",
                      success:function(data)
                      {
                          if(data){
                              $('#allsubkat').empty();
                              $('#allsubkat').append('<option hidden>Choose subcategory</option>');
                              $.each(data,function(key, allsubkat){
                                  $('select[name="allsubkat"]').append('<option value=" '+key +' ">'+allsubkat.name+'</option>');
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
</div>
