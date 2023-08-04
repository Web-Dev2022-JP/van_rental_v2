@extends('dashboard.layouts.client-dashboard')
@section('contents')
    {{-- banner --}}
    <div class="container-fluid border banner p-4" style="width: 98%;border-radius:10px;margin-top:4.8em">
        <h4 class="text-center mb-3">UNLOCK ADVENTURE ON FOUR WHEELS WITH OUR VAN RENTAL SERVICE</h4>
        <h1 class="text-center mb-3">BATAAN VAN SERVICE</h1>
    </div>
    <div class="container-fluid border bg-light p-2 mt-1 row mx-auto" style="width: 98%;border-radius:10px">
        <div class="col-sm-3 text-success h5">
            <i class='bx bxs-check-circle'></i>
            <span>Best Available Rates</span>
        </div>
        <div class="col-sm-3 d-flex justify-content-center text-success h5" style="align-items: center">
            <i class='bx bxs-check-circle'></i>
            <span>Best Available Rates</span>
        </div>
        <div class="col-sm-3 d-flex justify-content-center text-success h5" style="align-items: center">
            <i class='bx bxs-check-circle'></i>
            <span>Best Available Rates</span>
        </div>
        <div class="col-sm-3 d-flex justify-content-end text-success h5" style="align-items: center">
            <i class='bx bxs-check-circle'></i>
            <span>Best Available Rates</span>
        </div>
    </div>
    {{-- section van  --}}
    <div class="container-fluid van-container p-0 mt-5" style="width: 98%;border-radius:10px">
        <div class="row van-row">
            <div class="col-sm-3 van-col">
                <div class="card van-card">
                    <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                    <div class="card-body text-center">
                        <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                        <div class="row d-flex justify-content-center gap-1">
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> Bags</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> People</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3" style="margin: auto">
                        <input class="btn btn-secondary form-control details" type="button" value="View Details"
                            data-id="2">
                    </div>
                </div>
            </div>

            <div class="col-sm-3 van-col">
                <div class="card van-card">
                    <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                    <div class="card-body text-center">
                        <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                        <div class="row d-flex justify-content-center gap-1">
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> Bags</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> People</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3" style="margin: auto">
                        <input class="btn btn-secondary form-control details" type="button" value="View Details"
                            data-id="6">
                    </div>
                </div>
            </div>

            <div class="col-sm-3 van-col">
                <div class="card van-card">
                    <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                    <div class="card-body text-center">
                        <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                        <div class="row d-flex justify-content-center gap-1">
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> Bags</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 card"
                                style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                    <div class="pt-2 me-2">
                                        <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-secondary h5 mb-0"> People</div>
                                        <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 mb-3" style="margin: auto">
                        <input class="btn btn-secondary form-control details" type="button" value="View Details"
                            data-id="5">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.clients.modal.details')
    @yield('details-modal')

    @include('components.clients.inquire')
    @yield('inquire.form')
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const baseUrl = `${window.location.protocol}//${window.location.hostname}:${window.location.port}`;
            // Add a click event handler to all elements with the class "details"
            $('.details').on('click', function() {
                // Get the data-id attribute of the clicked element
                var dataId = $(this).data('id');

                // Log the data-id to the console
                console.log(dataId);
                $("#details").modal({
                    backdrop: "static",
                    keyboard: false, // Optional: Disable closing the modal with the keyboard
                });
                // Show the element with ID "details"
                $('#details').modal('show');

                // Set the data-id attribute of the modal with the clicked element's data-id value
                $('#details').attr('data-id', dataId);
                getDriverCredentials(dataId)
                getCalendarDays(dataId)
                back()
            });

            const getDriverCredentials = async (id) => {
                try {
                    $.ajax({
                        url: `/get-Driver-Credentials/${id}`, // Replace with the actual URL
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            localStorage.setItem('driver-location', JSON.stringify(data.user
                                .locations[0]))
                            console.log(data)
                            var profileContents = ''

                            $('.profile').attr('src',
                                `${baseUrl}/storage/profile/${data.user.documents[0].path}`)
                            profileContents = `
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>MACS VAN RENTALS</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Company name</b></span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>${data.user.firstname} ${data.user.lastname} ${data.user.middlename}</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Driver's name</b></span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>${data.user.street}, ${data.user.municipality}</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Address</b></span>
                                </div>
                        `
                            $('.profile-contents').html(profileContents)
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching driver coordinates:', error);
                            // Remove 'driver-location' data from localStorage
                            localStorage.removeItem('driver-location');
                            $('.profile').attr('src', `${baseUrl}/storage/default/profile.png`)
                            profileContents = `
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>Not Available</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Company name</b></span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>Not Available</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Driver's name</b></span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <h5 class="border-bottom"><b>Not Available</b></h5>
                                    <span class="d-flex flex-column justify-content-center align-items-center"
                                        style="margin-top: -10px;color: rgb(2, 47, 61);"><b>Address</b></span>
                                </div>
                        `
                            $('.profile-contents').html(profileContents)
                        }
                    });
                } catch (error) {
                    console.log(error)
                }
            }

            const getCalendarDays = async (id) => {
                const curDate = $('.current-date').text()
                // console.log(curDate)
                $('li.d').each(function(index, element) {
                    const dayText = $(element).text();

                     // Check if the element has the 'inactive' class
                    if ($(element).hasClass('inactive')) {
                        // If the element has the 'inactive' class, ignore it and do not add the click event
                        console.log('Ignoring inactive day:', dayText);
                        return; // Skip this iteration and proceed to the next li element
                    }

                    $(element).on('click',()=>{
                        $("#inquiry").modal({
                            backdrop: "static",
                            keyboard: false, // Optional: Disable closing the modal with the keyboard
                        });
                        // Show the element with ID "details"
                         // Show the element with ID "details"
                        $('#details').modal('hide');
                        $('#inquiry').modal('show');

                        const date_object = new Date($(element).text()+curDate);
                        // const options = { day: "numeric", month: "long", year: "numeric" };
                        // const formatted_date = date_object.toLocaleDateString("en-US", options);
                        // console.log(formatted_date);  // Output: August 4, 2023

                        const month = (date_object.getMonth() + 1).toString().padStart(2, "0");
                        const day = date_object.getDate().toString().padStart(2, "0");
                        const year = date_object.getFullYear();

                        const formatted_date = `${month}/${day}/${year}`;
                        console.log(formatted_date)

                        $(document).ready(function() {
                            // initialize form
                            $("#dateoftrip").val(formatted_date);
                            $('#driver-id').val(id)
                        });
                        
                    })
                });
            }

            const back = async () => {
                $('#back').on('click',()=>{
                    // Show the element with ID "details"
                    $('#inquiry').modal('hide');
                     // Show the element with ID "details"
                    $('#details').modal('show');
                })
            }

            const submitBooked = async () => {
                $('#submit-form').on('click',(event)=>{
                    event.preventDefault();
                    
                    $.ajax({
                        url: `/post-Client-Booked`, // Replace with the actual URL
                        method: 'POST',
                        dataType: 'json',
                        data: $('#form-inquiry').serialize(),
                        success: function(data) {
                            console.log(data)
                        },
                        error: function(err){
                            console.log(err)
                        }
                    })
                })
            }
            submitBooked()

        });
    </script>
@endsection
