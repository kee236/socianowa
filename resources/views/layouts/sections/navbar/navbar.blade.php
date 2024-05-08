@php
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

<!-- Navbar -->
@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')
<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme" id="layout-navbar">
@else
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="{{$containerNav}}">
@endif

    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
    @if(isset($navbarFull))
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
            <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
        </a>
    </div>
    @endif

    <!-- ! Not required for layout-without-menu -->
    @if(!isset($navbarHideToggle))
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }}">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>
    @endif

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" id="searchInput" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search...">
            </div>
        </div>
        <!-- /Search -->

        <!-- Dark Mode Toggle -->
        <div class="form-check form-switch ms-3">
            <input class="form-check-input" type="checkbox" id="darkModeToggle">
            <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
        </div>

        <!-- Fullscreen Toggle -->
        <button class="btn btn-primary ms-3" id="fullscreenToggle">Fullscreen</button>

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="">Star</a>
            </li>

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-medium d-block">John Doe</span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class='bx bx-cog me-2'></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 bx bx-credit-card me-2 pe-1"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                  </span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <i class='bx bx-power-off me-2'></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      @if(!isset($navbarDetached))
    </div>
    @endif
  </nav>
  <!-- / Navbar -->
<!-- Script for Dark Mode and Fullscreen Toggle -->
<script>
    // Dark Mode Toggle
    const darkModeToggle = document.getElementById('darkModeToggle');
    darkModeToggle.addEventListener('change', function() {
        document.body.classList.toggle('dark-mode');
        // Saving the user preference to local storage
        localStorage.setItem('darkModeEnabled', darkModeToggle.checked);
    });

    // Checking if dark mode preference is saved in local storage
    if (localStorage.getItem('darkModeEnabled') === 'true') {
        darkModeToggle.checked = true;
        document.body.classList.add('dark-mode');
    }

    // Fullscreen Toggle
    const fullscreenToggle = document.getElementById('fullscreenToggle');
    fullscreenToggle.addEventListener('click', function() {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        } else {
            document.documentElement.requestFullscreen();
        }
    });

    // Search Functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const searchText = searchInput.value.trim().toLowerCase();
        // Here you can implement your search functionality based on the searchText
        // For demonstration, I'm logging the search text and fetching mock search results
        console.log('Search Text:', searchText);

        // Simulated async fetch of search results (replace with your actual search logic)
        setTimeout(function() {
            const searchResults = [
                { id: 1, title: 'Search Result 1' },
                { id: 2, title: 'Search Result 2' },
                { id: 3, title: 'Search Result 3' }
            ];

            // Clear previous search results
            document.getElementById('searchResults').innerHTML = '';

            // Display search results
            searchResults.forEach(result => {
                const resultItem = document.createElement('li');
                resultItem.innerHTML = `<a href="#" class="dropdown-item">${result.title}</a>`;
                resultItem.addEventListener('click', function(event) {
                    event.preventDefault();
                    console.log('Clicked on:', result.title);
                    // Handle click event, such as navigating to the clicked item
                });
                document.getElementById('searchResults').appendChild(resultItem);
            });
        }, 500); // Simulating delay for async fetch
    });
</script>

<!-- CSS Styles for Dark Mode -->
<!-- CSS Styles for Dark Mode -->
<style>
    :root {
        --background-color: #fff;
        --text-color: #333;
        --navbar-color: #f8f9fa;
        --sidebar-color: #f8f9fa;
        /* Add more variables for other elements as needed */
    }

    .dark-mode {
        --background-color: #212529;
        --text-color: #fff;
        --navbar-color: #343a40;
        --sidebar-color: #343a40;
        /* Update other elements' colors for dark mode */
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
    }

    .layout-navbar {
        background-color: var(--navbar-color);
    }

    .layout-sidebar {
        background-color: var(--sidebar-color);
    }

    /* Add more styles for other elements as needed */
</style>
