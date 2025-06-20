<style>
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 9999;
      background: white;
      transition: background-color 0.4s ease, box-shadow 0.3s ease;
  }
  
  .header .navbar-nav .nav-link {
      color: black; /* Default color for non-scrolled state */
      transition: color 0.3s ease; /* Smooth color transition */
  }
  
  .header.scrolled {
      background: white;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .header.scrolled .navbar-nav .nav-link {
      color: black; /* Change to black when scrolled */
  }
  
  </style>
  
  <header class="header">
      <div class="main-navigation">
          <nav class="navbar navbar-expand-lg">
              <div class="container position-relative">
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo/FARIS-LOGO.png') }}"  alt="logo">
                  </a>
                  <div class="mobile-menu-right">
                    
                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                          aria-label="Toggle navigation">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>
                  </div>
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                      aria-labelledby="offcanvasNavbarLabel">
                      <div class="offcanvas-header">
                          <a href="{{ url('/') }}" class="offcanvas-brand" id="offcanvasNavbarLabel">
                              <img src="{{ asset('assets/img/logo/FARISLogo-header.png.webp') }}" alt="Logo">
                          </a>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1" style="color: white;">
                              <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>                                
                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown" style="width: 300px;">
                                    
                                    <li><a class="dropdown-item" href="{{ url('/knowledge') }}">knowledge and Capacity Building</li>
                                        <li><a class="dropdown-item" href="{{ url('/buisness') }}">Business Process Outsourcing</li>
                                        <li><a class="dropdown-item" href="{{ url('/software') }}">Digital Transformation Services</li>
                                        <li><a class="dropdown-item" href="{{ url('/research') }}">Research and Re-Engineering</a></li>
                                    
                                </ul>
                            </li>
                              {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li> --}}
                              <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">News</a></li>
                              <li class="nav-item "><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                              {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/vacancy') }}">Vacancy</a></li> --}}
                          </ul>
  
                      </div>
                  </div>
              </div>
          </nav>
      </div>
  </header>
  <script>
      document.addEventListener("scroll", function () {
          const header = document.querySelector(".header");
          if (window.scrollY > 50) {
              header.classList.add("scrolled");
          } else {
              header.classList.remove("scrolled");
          }
      });
  </script>
  