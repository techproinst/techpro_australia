<section class="header">
  <div class="container h-100">
      <div class="row h-100 align-items-center">
          <div class="col-2 d-flex align-items-center text-white">
              <i class="bi bi-whatsapp"></i>
              <i class="bi bi-envelope-arrow-down envelope"></i>
          </div>
          <div class="col-10 text-end text-white align-items-center">
              <h6 class="mb-0">
                  <i class="bi bi-telephone"></i> Support :
                  +61405380435 | + 2348137206269
              </h6>
          </div>
      </div>
  </div>
</section>
<nav class="navbar navbar-expand-lg bg-body-white nav-margin">
  <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}"
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
      <div
          class="collapse navbar-collapse"
          id="navbarSupportedContent"
      >
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mt-2">
              <li class="nav-item">
                  <a
                      class="nav-link active"
                      aria-current="page"
                      href="{{route('index')}}"
                      >Home</a
                  >
              </li>
              <li class="nav-item dropdown">
                  <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                  >
                      Courses
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <a
                              class="dropdown-item"
                              href="{{ route('businessAnalysis.show') }}"
                              >Business Analysis</a
                          >
                      </li>
                      <li>
                          <a
                              class="dropdown-item"
                              href="{{ route('scrum.show') }}"
                              >Scrum master</a
                          >
                      </li>
                      <li>
                          <a
                              class="dropdown-item"
                              href="{{ route('product-management.show') }}"
                              >Product Management</a
                          >
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
          <a class="links" href="{{ route('page.details') }}">/View Details</a>
      </div>
  </div>
</nav>