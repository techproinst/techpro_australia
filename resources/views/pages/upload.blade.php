<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
    <style>
      .submit-btn {
        background-color: #fc3468;
        color: white;
        border: none;
        font-size: small;
        padding: 7px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease; /* Smooth transition */
    }

    .submit-btn:hover {
        background-color: #d12f58; /* Slightly darker shade for hover */
        color: #fff; /* Ensure the text remains white */
        transform: scale(1.05); /* Slight zoom effect */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow effect */
    }
        </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row mt-4">
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
            <div
              style="background-color: #fc3468"
              class="card-header text-white"
            >
              Payment :: Details
            </div>
            <div class="card-body">
              <h6 class="">Please pay to the below account details</h6>
              <p><strong>Account Number:</strong> 0123410346</p>
              <p><strong>Account Name:</strong> Tech Pro Consulting</p>
              <p><strong>Bank Name:</strong> Comm Bank</p>
              <h6 class=""><strong>Full Name:</strong> {{ $student->firstname }} {{ $student->lastname }}</h6>
              <h6 class=""><strong>Email:</strong> {{ $student->email }}</h6>
              <h6 class=""><strong>Course:</strong> {{ $student->course->name }}</h6>
              <form action="{{ route('payment.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Evidence of Payment</label>
                  <input class="form-control" type="file" name="payment_receipt">
                  <input value="{{ $student->id }}" type="text" name="id" id="" hidden>
                  <input value="{{ $continent }}" name="continent" type="text" hidden>
                  @error('payment_receipt')
                  <span class="text-danger">
                    {{ $message }}

                  </span>
                    
                  @enderror
                </div>

                <button type="submit" class="submit-btn">Submit</button>

              </form>
             

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>