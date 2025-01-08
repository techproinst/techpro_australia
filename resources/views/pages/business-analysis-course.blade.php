<x-pages-layout>

  <x-slot:title>
    Business Analysis :: Course
  </x-slot:title>

  <x-slot:styles>
    <link rel="stylesheet" href="{{ asset('assets/styles/course.css') }}">
  </x-slot:styles>

  <div class="container">
    <div class="row mt-0 mt-sm-5">
      <div class="col text-center">
        <h3 class="home-span">Home <span class="techpr">/ Business analysis</span></h3>
        <h1 class="techpr select-text">Select Your subscription type</h1>
      </div>
    </div>
   

    <div class="row mt-4 mb-5">



      @foreach ($businessAnalysisCourses  as $course )

      <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">

        <div class="card" style="width: 18rem; border-radius: 12px;">
          <div class="background-img-wrapper text-center text-white">
            <h6 style="font-size: 1.2em;" class="pt-3">{{ $course->name }}</h6>
            <h6 style="font-size: 1.2em;" class="">{{ $course->certification  ? 'Certification' : '' }}</h6>
            <h6 style="font-size: 1.2em;" class="">Duration - {{ $course->duration }}</h6>
            
            @php
              $price = $coursePrices[$course->id] ?? null;
              $currencySymbol = $continent === 'other' ? '$' : '&#8358;';  
            @endphp
 
            @if($price !== null)

            <h3>{!!$currencySymbol!!}{{number_format($price) }}</h3>

            @endif
           
          </div>
          <div class="card-body">
            <ul>

              @foreach (json_decode($course->syllabus) as $item )

              <li>
                <span class="checkmark">✓</span>{{ $item }}
              </li>
                
              @endforeach
            </ul>
            <div class="enrol-btn-wrapper text-center">
              <a class="enrol-btn" href="{{ route('application.form', ['course_id' => $course->id]) }}">Enrol now</a>
            </div>
          </div>
        </div>
      </div>
        
      @endforeach
      
    </div>


  </div>

</x-pages-layout>