@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-sm-2 mx-3 row profile">
            <div>
                <div class="col-sm-12">
                    <img src="https://www.vettedpetcare.com/vetted-blog/wp-content/uploads/2017/09/How-To-Travel-With-a-Super-Anxious-Cat-square.jpeg">
                </div>
                <div class="col-sm-12 text">
    
                    <h1>Controls</h1>
                    <div class="controls">
                        <ul>
                            <li><a href="#profile"><span><i class="far fa-user fa-fw"></i></span> Administrator</a></li>
                            <li><a href="#messages"><span><i class="far fa-envelope fa-fw"></i></span> 1 new message(s)</a></li>
                            <li><a href="#alerts"><span><i class="far fa-bell fa-fw"></i></span> 5 new alert(s)</a></li>
                            <li><a href="#balance"><span><i class="far fa-credit-card fa-fw"></i></span> 890 credits</a></li>
                        </ul>
                        
                        
                    </div>
                   
                </div>
            </div>
           
           
        </div>

        <div class="col-sm-offset-0 col-sm-9">
            <div class="container">
                <div class="row cat-profile">

                    <div class="col-sm-4 right">
                        <div class="img-content glitch-img">
                            <div id="picture" style="background:rgba(2,11,28,0.5); width: 250px; height: 250px; padding: 50px; ">
                            
                            </div>
                          </div>
                    </div>

                    <div class="col-sm-4">
                        
                        <div class="scrollable-content">
                            <h2 id="name">Lorem name</h2>
                            <p id="description" class="cat-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero debitis, mollitia officiis error quae accusantium dolorum sunt, blanditiis deleniti tempora iste exercitationem facilis fuga repudiandae. Modi suscipit aperiam consequatur. Et!</p>
                            <h5 id="temperament"></h5>
                            <h5 id="origin"></h5>
                            <h5 id="lifespan"></h5>
                        </div>
                    </div>
                    <div class="col-sm-4 skills">
                        
                        <h5>Adaptability</h5>
                        <div class="progress">
                            <div id="adaptability" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5>Affection level</h5>
                        <div class="progress">
                            <div id="affection-level" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5>Child friendly</h5>
                        <div class="progress">
                            <div id="child-friendly" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5>Grooming</h5>
                        <div class="progress">
                            <div id="grooming" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h5>Intelligence</h5>
                        <div class="progress">
                            <div id="intellignece" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        
                        <h5>Health issues</h5>
                        <div class="progress">
                            <div id="health-issues" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        
                        <h5>Social needs</h5>
                        <div class="progress">
                            <div id="social-needs" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        
                        <h5>Stranger friendly</h5>
                        <div class="progress">
                            <div id="stranger-friendly" class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
              
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection