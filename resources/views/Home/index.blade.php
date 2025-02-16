

{{-- <p>{{date('Y');}} </p>

<p>{{
    strtoupper($name . ' ' . $surename)

}} </p>

<p>{{
   Str::after($name ,'M')

}} </p>


{!! $job !!} --}}


{{-- @{{name}} --}}

{{-- <script>
Const hobbies = {{

Js::from($hobbies)

}}

</script> --}}




{{-- 
@foreach ($hobbies as $hobby )
{{dd($loop)}}
        @if($hobby =='work')
        @continue
        @endif
    <p>{{$hobby}}</p>
@endforeach --}}
{{-- <div @class(['my-css-class','Iraq-css-class' => $contry ==='iraq'])
    
    @style(['color :red', 'background-color : blue' =>$contry ==='iraq'])
    >
    hey what is up my nigga
</div> --}}
{{-- @php
    $cars = [1,2,3,4];
@endphp

@includeIf('shared.button',['color'=> 'red' ,'text' =>'submit' ])


@foreach ($cars as $car )
@include('car.view',['car'=>$car])
    
@endforeach


@each('car.view', $cars, 'car','car.empty') --}}
{{-- 
@includeIf('shared.button',['color'=> $color 
,'text' =>$text ,
 'colorr' => $colorr ,
 'message' =>$message]) --}}


<x-app-layout title='Home Page'>

  <section class="hero-slider">
    <!-- Carousel wrapper -->
    <div class="hero-slides">
      <!-- Item 1 -->
      <div class="hero-slide">
        <div class="container">
          <div class="slide-content">
            <h1 class="hero-slider-title">
              Buy <strong>The Best Cars</strong> <br />
              in your region
            </h1>
            <div class="hero-slider-content">
              <p>
                Use powerful search tool to find your desired cars based on
                multiple search criteria: Maker, Model, Year, Price Range, Car
                Type, etc...
              </p>

              <button class="btn btn-hero-slider">Find the car</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="hero-slide">
        <div class="flex container">
          <div class="slide-content">
            <h2 class="hero-slider-title">
              Do you want to <br />
              <strong>sell your car?</strong>
            </h2>
            <div class="hero-slider-content">
              <p>
                Submit your car in our user friendly interface, describe it,
                upload photos and the perfect buyer will find it...
              </p>

              <button class="btn btn-hero-slider">Add Your Car</button>
            </div>
          </div>
          <div class="slide-image">
            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
      <button type="button" class="hero-slide-prev">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M5 1 1 5l4 4"
          />
        </svg>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hero-slide-next">
        <svg
          style="width: 18px"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 6 10"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m1 9 4-4-4-4"
          />
        </svg>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </section>
  <main>

    <x-search-form />

    <!-- New Cars -->
    <section>
      <div class="container">
        <h2>Latest Added Cars</h2>
        <div class="car-items-listing">
          
          @for($i = 0 ; $i<15;$i++)

          <x-carCard />
          @endfor



        </div>
      </div>
    </section>
    <!--/ New Cars -->
  </main>



</x-app-layout>