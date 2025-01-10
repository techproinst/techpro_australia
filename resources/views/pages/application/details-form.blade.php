<x-pages-layout>

  <x-slot:title>
    Details-Form :: Page
  </x-slot:title>
  <style>

    
  </style>


  <div  class="container mt-5">
    
    <div class="row">
      <div class="form-wrapper ">
        <div class="col-lg-6">
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
      <div class="col-lg-6">
        <div class="">
          <form action="{{ route('details.post') }}" method="POST">
            @csrf
            <label for="app_no" class="form-label mt-2 label-name">View Application Details / Verify Payments</label>
            <input style="width: 100%" type="text" class="form-control" value="{{ old('app_no') }}" name="app_no"
              placeholder="APP/2024/123456" required>
            <span class="text-danger">
              @error('app_no')
              {{ $message }}
  
              @enderror
            </span>
            <button style="margin-bottom: 410px"  type="submit" class="register-btn mt-3">Submit</button>
          </form>
        </div>

      </div>
    </div>

  </div>
  
    
  


</x-pages-layout>