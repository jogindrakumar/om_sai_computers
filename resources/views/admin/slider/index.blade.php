@extends('admin.admin_master')
@section('main_content')

    <div class="py-12">
        @if(session('success'))
        <div class="alert alert-success text-center" role="alert">
  {{session('success')}}
</div>
@endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            {{-- all brand show list here --}}
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">slider Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @php($i=1)
      @foreach ($sliders as $slider)
          
     
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$slider->slider_name}}</td>
      <td>{{$slider->slider_text}}</td>
      <td><img src="{{asset($slider->slider_image)}}" alt="" style="width: 100px; height:100px"></td>
      <td>{{$slider->created_at->diffForHumans()}}</td>
      <td><a href="{{url('/admin/slider/edit/'.$slider->id)}}" class="btn btn-warning">Edit</a></td>
      <td><a href="{{url('/admin/slider/delete/'.$slider->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
                        </div>
                        <div class="col-sm-12">
                            <h2 class="text-center">Add Slider</h2>

                            {{-- Add brand from here --}}
<form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">slider Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="slider_name" aria-describedby="emailHelp">
    @error('slider_name')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="slider_text" aria-describedby="emailHelp">
    @error('slider_text')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Slider image</label>
    <input type="file" class="form-control" name="slider_image" id="exampleInputPassword1">
    @error('slider_image')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection