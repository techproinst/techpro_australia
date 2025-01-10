<x-pages-layout>

  <x-slot:title>
    Details :: Page
  </x-slot:title>
  <style>
    @media screen and (max-width:576px) {
      h5 {
        font-size: 1em
      }
    
    }
  </style>

    
  @if(isset($student))
  <div class="container mt-5">
    <div class="card">
      <div class="card-header" style="background-color: #fc3468;">
        <h6 class="card-title text-white ">Student :: Details</h6>
      </div>
      <div class="card-body">
        <div class="row">
           
          <div class="col-md-8">
            <h5>Firstname: <span class="text-muted">{{ ucfirst(Str::lower($student->firstname)) }}</span></h5>
            <h5>Lastname: <span class="text-muted">{{ ucfirst(Str::lower($student->lastname)) }}</span></h5>
            <h5>Email Address: <span class="text-muted">{{ucfirst(Str::lower($student->email)) }}</span></h5>
            <h5>App No: <span class="text-muted">{{ $student->app_no }}</span></h5>
            <h5>Course: <span class="text-muted">{{ $student->course->name }}</span></h5>
        </div>
        

        </div>
      </div>
    </div>
  </div>

  @endif

  @if(isset($payments))
  <div class="container mt-5 mb-5">
    <div class="card">
      <div class="card-header" style="background-color: #fc3468">
        <h6 class="card-title text-white">Payment :: Details</h6>
      </div>
      <div class="card-body">
        <!-- Responsive Table Wrapper -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Transaction Ref</th>
                <th scope="col">Description</th>
                <th scope="col">Payment Reference</th>
                <th scope="col">Receipt</th>
                <th scope="col">Amount Paid</th>
              </tr>
            </thead>
            <tbody>
              @php
               $totalAmount = 0 ;
               $currencySymbol = $currency === 'usd' ? '$' : '&#8358;';
              
              @endphp
              @foreach ($payments as $index => $payment) 
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ date('d/m/y', strtotime($payment->created_at)) }}</td>
                  <td>{{ $payment->transaction_reference }}</td>
                  <td>{{ $payment->description }}</td>
                  <td>{{ $payment->payment_reference }}</td>
                  <td>
                    <a href="{{ asset('upload/' . $payment->payment_receipt) }}" target="_blank">
                      <img class="img-fluid" style="height: 100px;" src="{{ asset('upload/' . $payment->payment_receipt) }}" alt="">
                    </a>
                  </td>
                  <td>{!!$currencySymbol!!}{{number_format($payment->amount) }}</td>
                </tr>
                @php $totalAmount += $payment->amount; @endphp
              @endforeach
              <tr>
                <td colspan="6" class="text-right"><strong>Total Amount Paid</strong></td>
                <td><strong>{!!$currencySymbol!!}{{number_format($totalAmount) }}</strong></td>
              </tr>
              @if( isset($balance) && $balance > 0)
                <tr>
                  <td colspan="6" class="text-right"><strong>Balance Remaining</strong></td>
                  <td><strong>{!!$currencySymbol!!}{{number_format($balance) }}</strong></td>
                </tr>
                <tr>
                  <td colspan="9"><strong><a href="{{ route('outstanding.payment', ['id' => $student->id]) }}">proceed to pay balance</a></strong></td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif



</x-pages-layout>