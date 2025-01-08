{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Webinar Confirmation</title>
    <link rel="stylesheet" href="styles/nav.css">
    
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
    <style>
       
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
          
        }
        h1 {
            text-align: center;
            color: #ff007f;
            font-size: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 10px;
            font-size: 14px;
        }
        input:focus, select:focus {
            border-color: #ff007f;
            outline: none;
        }
        .submit-btn {
            padding: 5px 5px;
            background-color: #ff007f;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #e60073;
        }
        form label{
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section class="header">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-2 d-flex align-items-center text-white">
              <i class="bi bi-whatsapp"></i>
              <i class="bi bi-envelope-arrow-down envelope"></i>
            </div>
            <div class="col-10 text-end text-white align-items-center">
              <h6 class="mb-0">
                <i class="bi bi-telephone"></i> Support : +61405380435 | +
                2348137206269
              </h6>
            </div>
          </div>
        </div>
      </section>
    <nav class="navbar navbar-expand-lg bg-body-white nav-margin">  
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><span class="techpr">TechPr</span><i class="bi bi-gear"></i
          ></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mt-2">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle active"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Courses
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="business-analysis-course.html">Business Analysis</a></li>
                  <li><a class="dropdown-item" href="scrum-master.html">Scrum master</a></li>
                  <li>
                    <a class="dropdown-item" href="product-management.html">Product Management</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mentorship</a>
              </li>
            </ul>
    
            <a class="links" href="register-form.html">Register</a>
            <a class="links" href="">/Login</a>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row mt-2 mb-5">
            <div class="col mx-auto col-lg-6">
                <div class="form-container">
                    <h1>Tech Webinar Confirmation</h1>
                    <form>
                        <label for="first-name">First name <span style="color: red;">*</span></label>
                        <input type="text" id="first-name" name="first-name" placeholder="Input your first name" required>
            
                        <label for="last-name">Last name <span style="color: red;">*</span></label>
                        <input type="text" id="last-name" name="last-name" placeholder="Input your last name" required>
            
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Input your Email" required>
            
                        <label for="phone">Phone number <span style="color: red;">*</span></label>
                        <input type="tel" id="phone" name="phone" placeholder="Input your phone number" required>
            
                        <label for="country">Country of residence <span style="color: red;">*</span></label>
                        <select id="country" name="country" required>
                            <option value="">Australia</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="United States">United States</option>
                            <option value="India">India</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <!-- Add more countries as needed -->
                        </select>
            
                        <label for="hear-about">Where did you hear about us from ? <span style="color: red;">*</span></label>
                        <select id="hear-about" name="hear-about" required>
                            <option value="">LinkedIn</option>
                            <option value="LinkedIn">LinkedIn</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Friend">Friend</option>
                            <!-- Add more options if necessary -->
                        </select>
                        <div style="text-align: center;">
                            <button type="submit" class="submit-btn">Submit</button>

                        </div>
            
                       
                    </form>
                </div>

            </div>
        </div>
      </div>
    
    <footer class="bg-dark">
        <div class="container">
          <div class="row">
            <div class="col">
              <ul>
                <li><a href=""><span class="techpr">TechPr</span><i style="margin-left: 5px;" class="bi bi-gear gear-icon"></i></a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="">Quick Links</a></li>
                <li><a href="">FAQS</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Project</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="">Policies</a></li>
                <li><a href="">Terms & Condition</a></li>
                <li><a href="">Refund Policy</a></li>
                <li><a href="">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col">
              <ul>
                <li><a href="">Social</a></li>
                <li><a href=""><i class="bi bi-facebook"></i></a></li>
                <li><a href=""><i class="bi bi-twitter-x"></i></a></li>
                <li><a href=""><i class="bi bi-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
</body>
</html> --}}

<x-pages-layout>

  <x-slot:styles>
    <link rel="stylesheet" href="{{ asset('assets/styles/webinar.css') }}">
  </x-slot:styles>
   
    <x-slot:title>
      Webinar :: Form
    </x-slot:title>

    <div class="container">
      <div class="row mt-2 mb-5">
          <div class="col mx-auto col-lg-6">
              <div class="form-container">
                  <h1>Tech Webinar Confirmation</h1>
                  <form>
                      <label for="first-name">First name <span style="color: red;">*</span></label>
                      <input type="text" id="first-name" name="first-name" placeholder="Input your first name" required>
          
                      <label for="last-name">Last name <span style="color: red;">*</span></label>
                      <input type="text" id="last-name" name="last-name" placeholder="Input your last name" required>
          
                      <label for="email">Email <span style="color: red;">*</span></label>
                      <input type="email" id="email" name="email" placeholder="Input your Email" required>
          
                      <label for="phone">Phone number <span style="color: red;">*</span></label>
                      <input type="tel" id="phone" name="phone" placeholder="Input your phone number" required>
          
                      <label for="country">Country of residence <span style="color: red;">*</span></label>
                      <select id="country" name="country" required>
                          <option value="">Australia</option>
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="United States">United States</option>
                          <option value="India">India</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <!-- Add more countries as needed -->
                      </select>
          
                      <label for="hear-about">Where did you hear about us from ? <span style="color: red;">*</span></label>
                      <select id="hear-about" name="hear-about" required>
                          <option value="">LinkedIn</option>
                          <option value="LinkedIn">LinkedIn</option>
                          <option value="Twitter">Twitter</option>
                          <option value="Facebook">Facebook</option>
                          <option value="Instagram">Instagram</option>
                          <option value="Friend">Friend</option>
                          <!-- Add more options if necessary -->
                      </select>
                      <div style="text-align: center;">
                          <button type="submit" class="submit-btn">Submit</button>

                      </div>
          
                     
                  </form>
              </div>

          </div>
      </div>
    </div>

</x-pages-layout>
