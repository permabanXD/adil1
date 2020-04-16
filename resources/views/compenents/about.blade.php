<section id="about-section">
    <div class="wrap-pad">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
                <div class="text-center">
                    <h1><i class="fa fa-wrench small-icons bk-color-brown"></i>Meet Team</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                     Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue. 
                   
                    </p>
                </div>

            </div>
            <!-- ./ Heading div-->
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 margin-top-100  ">
                @foreach ($team as $item)


                    
                <div class="col-md-3 col-sm-6" data-scrollreveal="enter left and move 100px, wait 0.6s">
                    <div class="text-center">
                        <p>
                           
                            @if ($item->role->special)
                            <i class="fa fa-star fa-3x text-warning"></i>
                            @endif
                            <img class="img-responsive img-thumbnail img-circle"  src="{{asset('storage/'. $item->image)}}" alt="">
                        </p>
                        <h3>{{$item->nom}}</h3>
                        <p>
                           {{$item->text}}
                        </p>
                    </div>
                </div>
                
                @endforeach
            </div>
            <!-- ./ Content div-->
        </div>
    </div>
</section>