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
                        <div class="col-sm-6">

                            {{-- all client show list here --}}
                           
                        </div>
                        <div class="col-sm-6">

                            {{-- Add client from here --}}
<form action="{{url('admin/client/update/'.$clients->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">client Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="client_name" value="{{$clients->client_name}}" aria-describedby="emailHelp">
    @error('client_name')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="client_text" value="{{$clients->client_text}}" aria-describedby="emailHelp">
    @error('client_text')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
  <div class="mb-3">
      <input type="hidden" class="form-control" name="old_image" value="{{$clients->client_image}}" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
      <img src="{{asset($clients->client_image)}}" alt="" style="width: 200px;height:200px;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">client image </label>
    <input type="file" class="form-control" name="client_image" value="{{$clients->client_image}}" id="exampleInputPassword1">
    @error('client_image')
<span class="text-danger">{{$message}}</span>        
    @enderror
  </div>
 
  <button type="submit" class="btn btn-warning">Update</button>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection