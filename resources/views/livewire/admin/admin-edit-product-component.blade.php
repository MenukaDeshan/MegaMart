<div>
    <div class="container" style="padding: 30px 0;">
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <div class="row">
                         <div class="col-md-6">
                             Update Product
                         </div>
                         <div class="col-md-6">
                             <a href="{{route ('admin.products')}}" class="btn btn-success pull-right">All Products</a>
                         </div>
                     </div>
                 </div>
                 <div class="panel-body">
                     @if(Session::has('message'))
                     <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                     @endif
                     <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Product Name</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                 @error('name')
                                 <p class="text-danger">{{$message}}</p>
                             @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Product Slug</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
                                 @error('slug')
                                 <p class="text-danger">{{$message}}</p>
                             @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Short Description</label>
                             <div class="col-md-4" wire:ignore>
                                 <textarea type="text" id="short_description" placeholder="Short Description" class="form-control" wire:model="short_description"></textarea>
                                 @error('short_description')
                                 <p class="text-danger">{{$message}}</p>
                             @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Description</label>
                             <div class="col-md-4" wire:ignore>
                                 <textarea type="text" id="description" placeholder="Description" class="form-control" wire:model="description"></textarea>
                                 @error('description')
                                 <p class="text-danger">{{$message}}</p>
                             @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Regular Price</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price"/>
                                 @error('regular_price')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Sale Price</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price"/>
                                 @error('sale_price')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">SKU</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                 @error('SKU')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Stock</label>
                             <div class="col-md-4">
                                 <select name="" id="" class="form-control" wire:model="stock_status">
                                     <option value="instock">InStock</option>
                                     <option value="outofstock">Out of Stock</option>
                                 </select>
                                 @error('stock_status')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Featured</label>
                             <div class="col-md-4">
                                 <select name="" id="" class="form-control" wire:model="featured">
                                     <option value="0">No</option>
                                     <option value="1">Yes</option>
                                 </select>
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Quantity</label>
                             <div class="col-md-4">
                                 <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                 @error('quantity')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>
 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Product Image</label>
                             <div class="col-md-4">
                                 <input type="file"  class="input-fle" wire:model="newimage"/>
                                 @if($newimage)
                                 <img src="{{$newimage->temporaryUrl()}}" width="120" >
                                 @else
                                    <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" >
                                 @endif
                                @error('newimage')
                                 <p class="text-danger">{{$message}}</p>
                                @enderror
                             </div>
                         </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label" for="">Product Gallery</label>
                            <div class="col-md-4">
                                <input type="file"  class="input-fle" wire:model="newimages" multiple/>
                                @if($newimages)
                                @foreach ($newimages as $newimage)
                                    @if($newimage)
                                    <img src="{{$newimage->temporaryUrl()}}" width="120" >
                                    @endif
                                @endforeach
                                @else
                                    @foreach ($images as $image)
                                        @if($image)
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" >
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>


 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for="">Category</label>
                             <div class="col-md-4">
                                 <select name="" id="" class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                     <option value="">Select Category</option>
                                     @foreach ($categories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endforeach
                                 </select>
                                 @error('category_id')
                                 <p class="text-danger">{{$message}}</p>
                             @enderror
                             </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label" for="">Sub Category</label>
                            <div class="col-md-4">
                                <select name="" id="" class="form-control" wire:model="scategory_id">
                                    <option value="0">Select Category</option>
                                    @foreach ($scategories as $scategory)
                                        <option value="{{ $scategory->id }}">{{ $scategory->name }}</option>
                                    @endforeach
                                </select>
                                @error('scategory_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="">Product Attributes</label>
                            <div class="col-md-3">
                                <select name="" id="" class="form-control" wire:model="attr">
                                    <option value="">Select attribute</option>
                                    @foreach ($pattributes as $pattribute)
                                        <option value="{{ $pattribute->id }}">{{ $pattribute->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-info"
                                    wire:click.prevent="add">Add</button>
                            </div>
                        </div>

                        @foreach ($inputs as $key => $value)
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="">{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}</label>
                            <div class="col-md-3">
                                <input type="text" placeholder="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" class="form-control input-md"
                                    wire:model="attribute_values.{{$value}}" />
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-danger btn-sm" type="button" wire:click.prevent="remove({{$key}})">Remove</button>
                            </div>
                        </div>
                        @endforeach







 
                         <div class="form-group">
                             <label class="col-md-4 control-label" for=""></label>
                             <div class="col-md-4">
                                 <button class="btn btn-primary">Update</button>
                             </div>
                         </div>
 
 
 
 
 
                     </form>
                 </div>
             </div>
         </div>
     </div>
    </div>
 </div>
