<x-pages-layout>

  <x-slot:styles>
    <link rel="stylesheet" href="{{ asset('assets/styles/course.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/scrum.css') }}">
  </x-slot:styles>

  <x-slot:title>
    Product Management :: Course
  </x-slot:title>


  <div class="container">
    <div class="row mt-0 mt-sm-5">
      <div class="col text-center">
        <h3 class="home-span">Home <span class="techpr">/ Product manager</span></h3>
        <h1 class="techpr select-text">Select Your subscription type</h1>
      </div>

    </div>
    <div class="row mt-4 mb-5">
      @foreach ($productManagementCourses as $index => $course )

      <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
        <div class="card" style="width: 18rem; border-radius: 12px;">
          <div class="background-img-wrapper text-center text-white">
            <h6 class="pt-3 background-img-text">{{ $course->name }}</h6>
            @if ($course->certification !== 1)
            <h6 class="background-img-text">Entry Level</h6>
            <h6 class="background-img-text">Free</h6>   
            @endif 
            <h6 class="background-img-text">Duration - {{ $course->duration }}</h6>
            @if($index == 2)
            <h6 class="background-img-text">Certification</h6>  
            @endif

            @php
            $price = $coursePrices[$course->id] ?? null;
            $currencySymbol =  $continent === 'other' ? '$' : '&#8358;';
            @endphp
            @if ($course->certification === 1 && isset($price))
            <h3>{!!$currencySymbol!!}{{number_format($price)}}</h3>        
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
            <div class="enrol-btn-wrapper text-center @if ($index === 1) mt-5
              
            @endif">
              <a class="enrol-btn" href="{{ route('application.form', ['course_id' => $course->id]) }}">Enrol now</a>
            </div>
          </div>
        </div>
      </div>
        
      @endforeach
    
    </div>
  </div>



</x-pages-layout>