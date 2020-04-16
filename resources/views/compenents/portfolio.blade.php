<section id="portfolio-section">
    <div class="wrap-pad">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " data-scrollreveal="enter top and move 100px, wait 0.5s">
                <div class="text-center">
                    <h1><i class="fa fa-picture-o small-icons bk-color-light-blue"></i>Portfolio</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec enim sapien. Aliquam erat volutpat.
                     Quisque eu ante at tortor imperdiet gravida nec sed turpis. Phasellus augue augue.                        
                    </p>
                </div>
            </div>
            <!-- ./ Heading div-->
          
            <div class="col-md-10 col-md-offset-1 col-sm-12" data-scrollreveal="enter right and move 100px, wait 0.6s">
                <ul class="portfolio-items col-3">
                    @foreach ($galeries as $item)
                        
                    
                    <li class="portfolio-item ">
                        <div class="item-main">
                            <div class="portfolio-image">
                                <img src="{{asset('storage/'.$item->image)}}" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" title="Image Title Here" href="{{asset('storage/'.$item->image)}}"><i class=" fa fa-eye"></i></a>
                                </div>
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- ./ Content div-->
        </div>
    </div>

</section>