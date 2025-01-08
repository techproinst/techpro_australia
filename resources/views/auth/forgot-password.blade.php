
<x-pages-layout>

    <x-slot:title>
      Forgot Password :: Page
    </x-slot:title>
    <style>
        /* Ensuring consistent border and visibility */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0;
        }
        .form-control:focus {
            border-color: #fc3468;
            box-shadow: none;
        }   
    </style>
    

    <div style="margin-bottom:80px " class="container d-flex justify-content-center mt-5">
        <div class="card" style="max-width: 500px; width: 100%;">
            <div style="background-color: #fc3468;;" class="card-header text-white text-center">Forgot :: Password</div>
            <div class="card-body p-4 p-lg-5 text-black">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center mb-3">
                    <span class="techpr">TechPr</span><i class="bi bi-gear"></i>
                      
                    </div>
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="form-outline mb-4 text-center">
                            <label class="form-label" for="email">Email Address</label>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                class="form-control form-control-lg w-75 mx-auto" style="border-radius: 0; box-shadow: none;" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
    
                        <button style="background-color: #fc3468;" type="submit" class="btn w-100 mt-3 text-white"> {{ __('Email Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
  
  
  
  </x-pages-layout>
