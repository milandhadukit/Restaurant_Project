@extends('layouts.Admin_master')
  
<body class="body-Login-back">
    @include('Admin.header')
  
  
      <div class="container">
  
        
              <div class="col-md-5 col-md-offset-5">
                  <div class="row">
                    
                      <h2  style="margin-top:60px;">Update items Food </h2>
                   
                      @if (session()->has('message'))
                      <div class="alert alert-info"  style="margin-left:65px;margin-top:100px;" >
                          {{ session()->get('message') }}
                      </div>
                  @endif
                
                                   
                  <div class="panel-body">
                      <form action="{{ route('store-items',$foodItem->slug) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                      
                          <div class="form-group">
                              <label>Select Food item category :</label>
                  
                              <select name="category_id">
                                  @foreach ($optionCategory as $data)
  
                                  <option value="{{$data->id}}">{{$data->name}}</option>
                                  @endforeach
                                 
                                </select>
                               
                              @error('category_id') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
                          <div class="form-group">
                              <label>Enter Food item Name :</label>
                              <input type="text" class="form-control" placeholder="Name" name="name"  value="{{$foodItem->name}}" autofocus>
                              @error('name') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
                          <div class="form-group">
                            <label>Enter Food item Descreption :</label>
                              {{-- <input type="text" class="form-control" placeholder="Descreption" name="descreption"> --}}
                              <textarea  name="descreption" rows="2"  placeholder="Descreption" class="form-control" >{{$foodItem->descreption}}</textarea>
                              @error('descreption') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
                          <div class="form-group">
                              <label>Enter Food item price :</label>
                              <input type="text" class="form-control" placeholder="price" name="price" value="{{$foodItem->price}}">
                              @error('price') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
                          <div class="form-group">
                              <label>Enter Food item quantity :</label>
                              <input type="text" class="form-control" placeholder="quantity" name="quantity" value="{{$foodItem->quantity}}">
                              @error('quantity') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
  
  
                          <div class="form-group">
                              <label>Enter Food item discount price :</label>
                              <input type="text" class="form-control" placeholder="discount price" name="discount_price" value="{{$foodItem->discount_price}}">
                              @error('discount_price') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
                          <div class="form-group">
                              <label>Enter Food item image :</label>
                              <input type="file" class="form-control" placeholder="image" name="image" accept="image/png, image/gif, image/jpeg">
                              <img src="{{ asset('ItemFoodImage/'.$foodItem->image) }}" height="80px" width="80px" alt="Item image" class="form-control">
                              @error('image') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
  
                          <div class="form-group">
                              <label>Enter Food item slug :</label>
                              <input type="text" class="form-control" placeholder="slug" name="slug" value="{{$foodItem->slug}}">
                              @error('slug') <span class="error" style="color: red">{{ $message }}</span> @enderror
                          </div>
                        
  
  
                          <button type="submit" class="btn btn-lg btn-primary btn-block">Submit
  
                          </button>
                        
                      </form>
                  </div>
              </div>
  
          </div>
      </div>
</body>