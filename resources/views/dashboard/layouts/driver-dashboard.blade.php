<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.drivers.head.head')
    @yield('header')
    @yield('links')
</head>

<body>
    @include('components.navigation.nav')
    <div class="main-wrapper">
        @yield('navigation')
        {{-- <div class="page-wrapper"> --}}
            
            {{-- @include('components.drivers.home') --}}
            @include('components.drivers.vehicle-registration')
            {{-- @include('components.drivers.all-booked') --}}
           

            {{-- @yield('driver-home') --}}
            @yield('vehicle-registration')

            <section class="home">
                <nav class="navbar bg-body-tertiary" id="head-nav" style="width: 100%;">
                    <div class="container-fluid">
                      <a class="navbar-brand mx-5 text-color-dark" href="#">Bataan Van Rental Services</a>
                      <input class="form-control driver-id" type="hidden" name="driver-id"
                      value="{{ auth()->user()->id }}">
                      <div class="d-flex">
                            <a type="button" class="text-color-dark position-relative"
                                data-bs-toggle="offcanvas" data-bs-target="#guidelines"
                                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class='bx bx-info-circle h4 text-secondary'>
                                    <span class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        {{-- class="visually-hidden" --}}
                                        {{-- <span id="notif-counts">1</span> --}}
                                    </span>
                                </span>
                                
                            </a>
                            <a type="button" class="text-color-dark mx-3 position-relative"
                                data-bs-toggle="offcanvas" data-bs-target="#notification"
                                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class='bx bx-bell h4 text-secondary'>
                                    <span class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        {{-- class="visually-hidden" --}}
                                        {{-- <span id="notif-counts">1</span> --}}
                                    </span>
                                </span>
                                
                            </a>
                            <a type="button" class="text-color-dark me-2"
                                data-bs-toggle="offcanvas" data-bs-target="#messages"
                                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <span class='bx bx-message-dots text-secondary h4' >
                                    <span class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                                </span>
                            </a>
                            <button type="button" class="btn">
                                <img src="{{ asset('assets/img/user-06.jpg') }}" class="rounded-circle driver-profile" width="30" alt="Admin">
                                <span class="text-color-dark">{{ auth()->user()->firstname }}</span>
                            </button>
                      </div>
                    </div>
                </nav>
                <!-- for notification -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="notification" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="notificationLabel">Notifications</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="card border-0 mb-1 rounded notification-container" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-2 justify-contents">
                                    <img class="img-fluid rounded-start" src="https://png.pngtree.com/png-vector/20190406/ourmid/pngtree-img-file-document-icon-png-image_913759.jpg" alt="">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <span class="card-title"><b>John Doe</b></span>
                                  <span class="card-text">has a request.</span><br>
                                  <span class="card-text"><small class="text-body-secondary text-secondary">3 mins ago</small></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="card border-0 rounded notification-container" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-2 justify-contents">
                                    <img class="img-fluid rounded" src="https://w7.pngwing.com/pngs/895/199/png-transparent-spider-man-heroes-download-with-transparent-background-free-thumbnail.png" alt="">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <span class="card-title"><b>John Doe</b></span>
                                  <span class="card-text">has a request.</span><br>
                                  <span class="card-text"><small class="text-body-secondary text-secondary">3 mins ago</small></span>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- for message -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="messages" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="notificationLabel">Messages</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="card border-0 rounded notification-container mb-1" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-2 justify-contents">
                                    <img class="img-fluid rounded-start" src="https://png.pngtree.com/png-vector/20190406/ourmid/pngtree-img-file-document-icon-png-image_913759.jpg" alt="">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <span class="card-title"><b>John Doe</b></span>
                                  <span class="card-text">has a request.</span><br>
                                  <span class="card-text"><small class="text-body-secondary text-secondary">3 mins ago</small></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="card border-0 rounded notification-container mb-1" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-2 justify-contents">
                                    <img class="img-fluid rounded-start" src="https://w7.pngwing.com/pngs/895/199/png-transparent-spider-man-heroes-download-with-transparent-background-free-thumbnail.png" alt="">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <span class="card-title"><b>John Doe</b></span>
                                  <span class="card-text">has a request.</span><br>
                                  <span class="card-text"><small class="text-body-secondary text-secondary">3 mins ago</small></span>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- for guidelines -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="guidelines" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title text-danger" id="notificationLabel">How to enabled location in a browser?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <h4 class="mb-4">Enhance Your Experience with Accurate Location</h4>
                      <p><span class="text-primary">advantage </span> to share your location with us and receive personalized services and faster delivery options.</p>
                      
                      <button type="button" class="btn btn-danger mt-3 mx-5" data-bs-dismiss="modal" aria-label="Close">
                          <i class='bx bxs-x-circle'></i>
                          You Declined Permission
                      </button>
  
                      {{-- <p id="message" class="mt-2">Click "Allow" to share your location for a better user experience.</p> --}}
                      <ol id="ol" class="mt-3">
                        <li>
                          <strong class="text-primary">Google Chrome:</strong>
                      <ul>
                      <li>Open Google Chrome on your computer or mobile device.</li>
                      <li>In the top-right corner, click on the three-dot menu (hamburger menu).</li>
                      <li>From the dropdown menu, select "Settings."</li>
                      <li>Scroll down and click on "Privacy and security" in the left-hand side menu.</li>
                      <li>Under "Privacy and security," click on "Site settings."</li>
                      <li>Look for "Location" in the permissions list and click on it.</li>
                      <li>Toggle the switch to enable location access for all sites or click on the "Add" button to allow specific sites to access your location.</li>
                      </ul>
                  </li>
                      </ol>
                      
                    </div>
                </div>

                @yield('contents')
            </section>

            @include('components.drivers.location')
            @yield('location-modal')
           
        {{-- </div> --}}
    </div>
    @include('components.drivers.footer.footer')
    @yield('footer')

    <script>
      // Register the plugin
      FilePond.registerPlugin(FilePondPluginImagePreview);
      // Get a reference to the file input element
      const vehicleLicensed = document.querySelector('#vehicle-licensed');
      const vehicleImage = document.querySelector('#vehicle-image');

      // Create a FilePond instance for Licensed
      const pond1 = FilePond.create(vehicleLicensed, {
          server: {
              process: '/tmp-UploadLicensed',
              revert: '/tmp-deleteLicensed',
              headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
              }
          }
      });

      // Create a FilePond instance for Vehicle image
      const pond2 = FilePond.create(vehicleImage, {
          server: {
              process: '/tmp-UploadVehicleProfile',
              revert: '/tmp-deleteVehicleProfile',
              headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
              }
          }
      });
  </script>
  @yield('script')
</body>

</html>
