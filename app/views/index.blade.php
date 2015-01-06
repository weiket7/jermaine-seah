@section('content')
                  
<!-- Slider -->  
<div class="slider-container">
  <div class="container">
    <div class="row">          
      <div class="col-md-12">

        <!-- Master Slider -->
        <div class="master-slider ms-skin-metro" id="masterslider">
          @foreach($sliders as $key => $s)           
            <div class="ms-slide">
              {{HTML::image('img/slider/'.$s->image, '', ['data-src'=>URL::to('/')."/img/slider/".$s->image])}}
            
              <div class="ms-layer ms-caption">
              @if($s->caption != '')
                {{$s->caption}}
              @endif
              </div> 
              <div class="ms-layer ms-caption subtitle">
              @if($s->subcaption != '')
                {{$s->subcaption}}
              @endif
              </div>

            </div>
          @endforeach     
       
        </div>
        <!-- Master Slider End -->

      </div> 
    </div>  
  </div>  
</div>
<!-- Slider End -->              
   
<!-- Content -->  
  <div class="container">
    <div class="row">
    
      <div class="col-md-4" style='background-color: #eff0f1; padding-top:15px'>

        <!-- Blog Posts -->        
        <h3>What's New</h3>
        
        @foreach($posts as $key => $p)   
          @if($p->column == 'N')
            <div class='grid-img'>
              <a href="{{URL::to('post/'.$p->id)}}">{{HTML::image('img/blog/'.$p->image, '', ['class'=>'img-max-width']) }}</a>
            </div>     
            <div class='grid-text'>
              {{$p->tags}}<br>
              {{link_to('post/'.$p->id, $p->title, ['class'=>'title'])}}<br>
              {{$p->subcontent}}
            </div>
          @endif
        @endforeach

        <div class="space30"></div> 
      
      </div>
      


      <div class="col-md-8" style='background-color: #e6e7e8; padding-top:15px'>

        <!-- Blog Posts -->        
        <h3>What's Hot</h3>
        
        @foreach($posts as $key => $p)   
          @if($p->column == 'H')
            <div class='grid-img'>
              <a href="{{URL::to('post/'.$p->id)}}">{{HTML::image('img/blog/'.$p->image, '', ['class'=>'img-max-width']) }}</a>
            </div>     
            <div class='grid-text'>
              {{$p->tags}}<br>
              {{link_to('post/'.$p->id, $p->title, ['class'=>'title'])}}<br>
              {{$p->subcontent}}
            </div>
          @endif
        @endforeach        
      
        <div class="space30"></div> 
      
      </div>
      
      
    </div> 
  </div>
  <!-- Content End --> 

@stop