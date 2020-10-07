@extends('layouts.main')

@section('title','Guest')

@section('content')
    
    <div class="content">

      <section class="top-content">

      </section>
      <section class="">

      </section>
      <section class="products">
          <div class="product">
              <div class="product-img">
              <img src="{{asset('img/p1.jpg') }}" alt="No IMG RESOURCE" width="100%" height="100%">
              </div>
              <div class="product-body">
                

<!--STAR 
    <i class="fa fa-star" aria-hidden="true"></i>

    <i class="fa fa-star-o" aria-hidden="true"></i>
    
    <i class="fa fa-star-half-o" aria-hidden="true"></i>

-->

                <div class="text">
                    <h2>TITLE</h2>
                    <div class="star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
                
              </div>
              <div class="buttons">
                  
                <div class="button">
                  <a href="#" class="btn btn-warning">Buy</a>  
              </div> 
                </div>
          </div>

          <!---PRoduct-->
          <div class="product">
            <a class="productId" href="#">
              <div class="product-img">
                <img src="{{asset('img/p1.jpg') }}" alt="No IMG RESOURCE" width="100%" height="100%">
                </div>
                <div class="product-body">
                  
                  <div class="text">
                      <h2>Tas dadasdsa sdasklfasas sa asdasds</h2>
                      
                  </div>
                </a>
                  <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  
                </div>
              </a>
                <div class="buttons">
                    
                  <div class="button">
                    <a href="/boom  " class="btn btn-warning">Buy</a>  
                </div> 
                  </div>
            
        </div>
        <div class="product">
          <div class="product-img">
          <img src="{{asset('img/p1.jpg') }}" alt="No IMG RESOURCE" width="100%" height="100%">
          </div>
          <div class="product-body">

            <div class="text">
                <h2>TITLE</h2>

                <div class="star">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>             
            </div>
            
          </div>
          <div class="buttons">
              
            <div class="button">
              <a href="#" class="btn btn-warning">Buy</a>  
          </div> 
            </div>
      </div>
      
      </section>



        
        <div class="main">Main</div>
    </div>

    <div class="content">
        <div class="container">
            <a href="mailto:hermantoang722@gmail.com">Email</a>
        </div>

    </div>



@endsection