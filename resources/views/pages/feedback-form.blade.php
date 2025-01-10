<x-pages-layout>

  <x-slot:title>
    Feedback :: Page
  </x-slot:title>

  <style>
    .star {
  border: none;
  background-color: unset;
  color: #ffce29;
  font-size: 1.5rem;
}
  </style>

  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            @if (session('flash_message'))
            <div class="alert alert-{{ session('flash_type', 'info') }} alert-dismissible fade show" role="alert">
                {{ session('flash_message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    </div>
    
    <div class="row">
      <div class="mx-auto col-md-8 col-lg-6 mt-3 mb-5">

        <div class="card mt-2 shadow-lg">
          <div class="card-header text-white reg-wrapper">Feedback :: Form</div>
          <div class="card-body">
       <form action="{{ route('submit.feedback') }}" method="POST" enctype="multipart/form-data">
            @csrf  
                <div class="form-group mt-2">
                  <label for="firstname">Application Number</label>
                  <input required name='app_no' value="{{ old('app_no') }}" type="text" class="form-control mt-2">
                  @error('app_no')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
                    
                  @enderror
                </div>
                <div class="form-group mt-2">
                  <label for="firstname">Country</label>
                  <input  name='country' value="{{ old('country') }}" type="text" class="form-control mt-2">
                  @error('country')
                  <span class="text-danger">
                    {{ $message }}
                  </span>
                    
                  @enderror
                </div>
                <div class="text-center pt-1">
                  <h4 style="text-align: center;" class="fw-light pt-1">How would you rate your experience with Techpro?
                  </h4>
                  <button class="star" type="button">&#9734;</button>
                    <button class="star" type="button">&#9734;</button>
                    <button class="star" type="button">&#9734;</button>
                    <button class="star" type="button">&#9734;</button>
                    <button class="star" type="button">&#9734;</button>
                    <p class="current-rating d-none">0 of 5</p>
                    <input type="hidden" id="rating" name="ratings" value="0">

                </div>
              
                <div class="mb-3 mt-3">
                  <label for="formFile" class="form-label">Upload Image</label>
                  <input class="form-control" name="image" type="file" id="formFile">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                  <textarea class="form-control" name="comments" rows="3"></textarea>
                </div>

              
                <button type="submit" class="btn btn-sm register-btn mt-3"> Submit </button>

       </form>
          </div>
        </div>

      </div>
    </div>

  </div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.star');
  const currentRating = document.querySelector('.current-rating');
  const ratingInput = document.getElementById('rating');

  stars.forEach((star, index) => {
    star.addEventListener('click', () => {
      let currentStar = index + 1;
      currentRating.innerText = `${currentStar} of 5`;
      ratingInput.value = currentStar;

      stars.forEach((star, i) => {
        if (currentStar >= i + 1) {
          star.innerHTML = '&#9733;'; 
        } else {
          star.innerHTML = '&#9734;'; 
        }
      });
    });
  });
});

</script>


</x-pages-layout>