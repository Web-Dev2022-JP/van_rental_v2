@section('links')
    <style>
        @media (max-width: 575.98px) {

            /* Custom styles for extra small screens (xs) */
            .offcanvas-header{
                padding-left: 100px; 
            }
            .offcanvas-body {
                /* Add your custom styles here */
                padding-left: 100px; 
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {

            /* Custom styles for small screens (sm) */
            .offcanvas-body {
                /* Add your custom styles here */
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {

            /* Custom styles for medium screens (md) */
            .offcanvas-body {
                /* Add your custom styles here */
            }
        }

        @media (min-width: 992px) {

            /* Custom styles for large screens (lg) */
            .offcanvas-body {
                /* Add your custom styles here */
            }
        }
    </style>
@endsection
@section('booked.info')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                <div class="offcanvas offcanvas-end p-2" tabindex="-1" id="bookedInfo" aria-labelledby="offcanvasRightLabel">
                    <!-- Offcanvas content remains the same -->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Booked Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="col-sm-12">
                            <div class="mb-2">
                                <input type="text" id="booking-id" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-2">
                                <input type="text" id="firstname-booked" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input type="text" id="middlename-booked" class="form-control" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input type="text" id="lastname-booked" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="contact-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="email-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input type="text" id="destination-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input type="text" id="pickup-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input type="text" id="landmark-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="dateoftrip-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="pax-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="daysandhours-booked" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" id="time" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" id="success-container">
                                    <div class="mb-3">
                                        <a href="#" type="button" id="accept" class="btn btn-success form-control" >Accept</a>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="chat-container">
                                    <div class="mb-3">
                                        <a href="#" type="button" id="chat-driver-side" class="btn btn-success form-control">Chat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
