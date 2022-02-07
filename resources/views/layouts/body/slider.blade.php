
<div class="full_bg">
<div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#banner1" data-slide-to="0" class="active"></li>
                    <li data-target="#banner1" data-slide-to="1"></li>
                    <li data-target="#banner1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    {{-- @foreach ($sliders as $key =>$slider )
                    <!-- first slide -->
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d_flex">
                                    <div class="col-md-6">
                                        <div class="agency">
                                            <figure><img src="{{asset($slider->slider_image)}}" alt="#" /></figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="creative">
                                            <h1>{{$slider->slider_name}}</h1>

                                            <p>{{$slider->slider_text}}</p>
                                            <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                  
                </div>
                <!-- controls -->
                <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>