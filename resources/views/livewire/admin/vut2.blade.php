<div class="panel-body">
    <form class="form-horizontal">
        <div>
            <div class="form-group">
                <label class="col-md-4 control-label">Category id</label>
                <div class="col-md-6">
                    <select class="form-control" wire:model="category">
                        <option value="">Select Category id</option>
                        @foreach ($categories as $cat)
                        <option value=" {{$cat->id}}">{{$cat->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if($this->subcategories->count() > 0)
            <div class="form-group">
                <label class="col-md-4 control-label">Sub Category id</label>
                <div class="col-md-6">
                    <select class="form-control" wire:model="subcategory">
                        <option value="">Select Sub Category id </option>
                        @foreach ($scat as $subcategories)
                        <option wire:key="{{ $loop->index }}" value="{{$subcategories->id}}">{{$subcategories->id}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
