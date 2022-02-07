   
 @extends('layouts.master_home')
 
 @section('main_content')
@include('layouts.body.slider')

 <div class="wedo">
        <div class="wedo_white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center ">
                            <h2>What We Do. </h2>
                            <p>that it has a more-or-less normal distribution of letters, as </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="ma_top">
                        <div class="row">
                            @foreach ($services as $service)
                                
                            
                            <div class="col-md-4">
                                <div class="web_box left0 text_align_center">
                                    <i><img src="{{asset($service->service_image)}}" alt="#"/></i>
                                    <h3>{{$service->service_name}}</h3>
                                    <p>{{$service->service_text}}</p>
                                </div>
                            </div>
                            @endforeach
                           
                            <div class="col-md-12">
                                <a class="read_more" href="wedo.index">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wedo -->
    <!-- work -->
    <div class="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Work</h2>
                        <p>that it has a more-or-less normal distribution of letters, as </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="margi_bottom30">
                        <div class="row d_flex grid">
                            <div class=" col-md-6 marg_left">
                                <div id="ho_img" class="work_img">
                                   
                                        
                                   
                                    <figure><img src="{{asset($first_works->work_image)}}" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work_box">
                                   
                                    <h3>{{$first_works->work_name}}</h3>
                                    <p>{{$first_works->work_text}}</p>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="margi_bottom30">
                        <div class="row d_flex">
                            <div class="col-md-6">
                                <div class="work_box">
                                    <h3>{{$second_works->work_name}}</h3>
                                    <p>{{$second_works->work_text}}</p>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                </div>
                            </div>
                            <div class=" col-md-6 marg_right order">
                                <div id="ho_img" class="work_img">
                                    <figure><img src="{{asset($second_works->work_image)}}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="margi_bottom30">
                        <div class="row d_flex">
                            <div class=" col-md-6 marg_left">
                                <div id="ho_img" class="work_img">
                                    <figure><img src="{{asset($third_works->work_image)}}" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="work_box">
                                    <h3>{{$third_works->work_name}}</h3>
                                    <p>{{$third_works->work_text}}</p>
                                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end work -->
    <!-- schedule -->
    {{-- <div class="schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Schedule A Free Consultation</h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <form id="colof" class="form_subscri">
                        <input class="newsl" placeholder="Your email Request" type="text" name="Email">
                        <button class="subsci_btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end schedule -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2> Creative Team</h2>
                        <p>now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="team_img">
                        <figure><img src="{{asset('frontend/images/team.jpg')}}" alt="#" />
                        </figure>
                        {{-- <div class="play_icon">
                            <a class="play-btn" href="javascript:void(0)"><img src="{{asset('frontend/images/play_icon.png')}}"></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="read_more" href="javascript:void(0)">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end team -->
    <!-- customers -->
    <div class="customers">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage text_align_center">
                        <h2>What Is Says Our Clients</h2>
                        <p>now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                    </div>
                </div>
            </div>
            <!-- start slider section -->
            <div class="row">
                <div class="col-md-12">
                    <!--  Demos -->
                    <div class="owl-carousel owl-theme">
                        @foreach ($clients as $client)
                            
                        
                        <div class="item">
                            <div class="our_fishs_box text_align_center">
                                <p>{{$client->client_text}}
                                </p>
                                <div class="ser_img">
                                    <i><img src="{{asset($client->client_image)}}" alt="#"/></i>
                                    <h3>{{$client->client_name}}</h3>
                                </div>
                            </div>
                        </div>
                       @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end customers -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                
                        <form action="{{route('store.message')}}" id="request" method="POST" class="main_form">
                            @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form_control" placeholder="Your name" type="text" name="name">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>        
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Your email" type="email" name="email">
                                 @error('email')
                                <span class="text-danger">{{$message}}</span>        
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Subject" type="text" name="subject">
                                 @error('subject')
                                <span class="text-danger">{{$message}}</span>        
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" name="message"> </textarea>
                                  @error('message')
                                <span class="text-danger">{{$message}}</span>        
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" type="submit">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection