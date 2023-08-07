<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.drivers.head.head')
    @yield('header')
    @yield('links')
    {{-- driver side chat --}}
    <style>
        #chat-customer {
            width: 35%;
            /* height: fit-content; */
        }

        .wrappers {
            margin: auto;
            background: #fff;
            max-width: inherit;
            width: 100%;
            border-radius: 16px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }

        /* Chat Area CSS Start */
        .chat-area header {
            display: flex;
            align-items: center;
            padding: 18px 30px;
        }

        .chat-area header .back-icon {
            color: #333;
            font-size: 18px;
        }

        .chat-area header img {
            height: 45px;
            width: 45px;
            margin: 0 15px;
        }

        .chat-area header .details span {
            font-size: 17px;
            font-weight: 500;
        }

        .chat-box {
            position: relative;
            min-height: 500px;
            max-height: 500px;
            overflow-y: auto;
            padding: 10px 30px 20px 30px;
            background: #f7f7f7;
            box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
        }

        .chat-box .text {
            position: absolute;
            top: 45%;
            left: 50%;
            width: calc(100% - 50px);
            text-align: center;
            transform: translate(-50%, -50%);
        }

        .chat-box .chat {
            margin: 15px 0;
        }

        .chat-box .chat p {
            word-wrap: break-word;
            padding: 8px 16px;
            box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                0rem 16px 16px -16px rgb(0 0 0 / 10%);
        }

        .chat-box .outgoing {
            display: flex;
        }

        .chat-box .outgoing .details {
            margin-left: auto;
            max-width: calc(100% - 130px);
        }

        .outgoing .details p {
            background: var(--primary-color);
            color: #fff;
            border-radius: 18px 18px 0 18px;
        }

        .chat-box .incoming {
            display: flex;
            align-items: flex-end;
        }

        .chat-box .incoming img {
            height: 35px;
            width: 35px;
        }

        .chat-box .incoming .details {
            margin-right: auto;
            margin-left: 10px;
            max-width: calc(100% - 130px);
        }

        .incoming .details p {
            background: #fff;
            color: var(--primary-color);
            border-radius: 18px 18px 18px 0;
        }

        .typing-area {
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
        }

        .typing-area input {
            height: 45px;
            width: calc(100% - 58px);
            font-size: 16px;
            padding: 0 13px;
            border: 1px solid #e6e6e6;
            outline: none;
            border-radius: 5px 0 0 5px;
        }

        .typing-area button {
            color: #fff;
            width: 55px;
            border: none;
            outline: none;
            background: var(--primary-color);
            font-size: 19px;
            cursor: pointer;
            opacity: 0.9;
            pointer-events: none;
            border-radius: 0 5px 5px 0;
            transition: all 0.3s ease;
        }

        .typing-area button.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Responive media query */
        @media screen and (max-width: 450px) {
            /* .form, .users{
          padding: 20px;
        }
        .form header{
          text-align: center;
        }
        .form form .name-details{
          flex-direction: column;
        }
        .form .name-details .field:first-child{
          margin-right: 0px;
        }
        .form .name-details .field:last-child{
          margin-left: 0px;
        }

        .users header img{
          height: 45px;
          width: 45px;
        }
        .users header .logout{
          padding: 6px 10px;
          font-size: 16px;
        }
        :is(.users, .users-list) .content .details{
          margin-left: 15px;
        }

        .users-list a{
          padding-right: 10px;
        } */

            .chat-area header {
                padding: 15px 20px;
            }

            .chat-box {
                min-height: 400px;
                padding: 10px 15px 15px 20px;
            }

            .chat-box .chat p {
                font-size: 15px;
            }

            .chat-box .outogoing .details {
                max-width: 230px;
            }

            .chat-box .incoming .details {
                max-width: 265px;
            }

            .incoming .details img {
                height: 30px;
                width: 30px;
            }

            .chat-area form {
                padding: 20px;
            }

            .chat-area form input {
                height: 40px;
                width: calc(100% - 48px);
            }

            .chat-area form button {
                width: 45px;
            }

            .wrappers {
                padding: 0px 0px 0px 0px;
                max-width: 100%;

                border: 1px solid green;
            }

            #chat-customer {
                /* background: red; */
                width: 100%;
            }
        }
    </style>
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
                        <a type="button" class="text-color-dark position-relative" data-bs-toggle="offcanvas"
                            data-bs-target="#guidelines" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class='bx bx-info-circle h4 text-secondary'>
                                <span
                                    class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    {{-- class="visually-hidden" --}}
                                    {{-- <span id="notif-counts">1</span> --}}
                                </span>
                            </span>

                        </a>
                        <a type="button" class="text-color-dark mx-3 position-relative" data-bs-toggle="offcanvas"
                            data-bs-target="#notification" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class='bx bx-bell h4 text-secondary'>
                                <span
                                    class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    {{-- class="visually-hidden" --}}
                                    {{-- <span id="notif-counts">1</span> --}}
                                </span>
                            </span>

                        </a>
                        <a type="button" class="text-color-dark me-2" data-bs-toggle="offcanvas"
                            data-bs-target="#messages" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class='bx bx-message-dots text-secondary h4'>
                                <span
                                    class="position-absolute top-2 start-200 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                            </span>
                        </a>
                        <button type="button" class="btn">
                            <img src="{{ asset('assets/img/user-06.jpg') }}" class="rounded-circle driver-profile"
                                width="30" alt="Admin">
                            <span class="text-color-dark">{{ auth()->user()->firstname }}</span>
                        </button>
                    </div>
                </div>
            </nav>
            <!-- for notification -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="notification"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="notificationLabel">Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="card border-0 mb-1 rounded notification-container" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-2 justify-contents">
                                <img class="img-fluid rounded-start"
                                    src="https://png.pngtree.com/png-vector/20190406/ourmid/pngtree-img-file-document-icon-png-image_913759.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-8" style="height: fit-content">
                                <div class="card-body">
                                    <span class="card-title"><b>John Doe</b></span>
                                    <span class="card-text">has a request.</span><br>
                                    <span class="card-text"><small class="text-body-secondary text-secondary">3 mins
                                            ago</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded notification-container" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-2 justify-contents">
                                <img class="img-fluid rounded"
                                    src="https://w7.pngwing.com/pngs/895/199/png-transparent-spider-man-heroes-download-with-transparent-background-free-thumbnail.png"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="card-title"><b>John Doe</b></span>
                                    <span class="card-text">has a request.</span><br>
                                    <span class="card-text"><small class="text-body-secondary text-secondary">3 mins
                                            ago</small></span>
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
                                <img class="img-fluid rounded-start"
                                    src="https://png.pngtree.com/png-vector/20190406/ourmid/pngtree-img-file-document-icon-png-image_913759.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="card-title"><b>John Doe</b></span>
                                    <span class="card-text">has a request.</span><br>
                                    <span class="card-text"><small class="text-body-secondary text-secondary">3 mins
                                            ago</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded notification-container mb-1" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-2 justify-contents">
                                <img class="img-fluid rounded-start"
                                    src="https://w7.pngwing.com/pngs/895/199/png-transparent-spider-man-heroes-download-with-transparent-background-free-thumbnail.png"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="card-title"><b>John Doe</b></span>
                                    <span class="card-text">has a request.</span><br>
                                    <span class="card-text"><small class="text-body-secondary text-secondary">3 mins
                                            ago</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- for guidelines -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="guidelines"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-danger" id="notificationLabel">How to enabled location in a
                        browser?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <h4 class="mb-4">Enhance Your Experience with Accurate Location</h4>
                    <p><span class="text-primary">advantage </span> to share your location with us and receive
                        personalized services and faster delivery options.</p>

                    <button type="button" class="btn btn-danger mt-3 mx-5" data-bs-dismiss="modal"
                        aria-label="Close">
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
                                <li>Toggle the switch to enable location access for all sites or click on the "Add"
                                    button to allow specific sites to access your location.</li>
                            </ul>
                        </li>
                    </ol>

                </div>
            </div>

            @yield('contents')
        </section>

        @include('components.drivers.location')
        @yield('location-modal')

        @include('components.drivers.chatroom')
        @yield('driver.chat.customer')

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


        // chat functionality
        incoming_id = 0,
        $(document).on('click', '#chat-driver-side', function(e) {
            // alert('yes')
            // client id
            var reciever_id = parseInt($(this).attr("value"), 10);
            $('#incoming_id').val(reciever_id);
            incoming_id = reciever_id
            // alert(reciever_id)
            $('#customerInfo').offcanvas('hide')
            $('#chat-customer').offcanvas('show')
            renderMessage()

        })


        const form = $(".typing-area"),
            inputField = form.find(".input-field"),
            sendBtn = form.find("button"),
            chatBox = $(".chat-box"); // Assuming you have a .chat-box element

        form.on("submit", function(e) {
            e.preventDefault();
        });

        inputField.focus();

        inputField.on("keyup", function() {
            if (inputField.val() !== "") {
                sendBtn.addClass("active");
            } else {
                sendBtn.removeClass("active");
            }
        });

        sendBtn.on("click", function() {
            let formData = new FormData(form[0]);

            $.ajax({
                type: "POST",
                url: "/send-client-message",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    inputField.val("");
                    renderMessage();
                    scrollToBottom();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        chatBox.on("mouseenter", function() {
            chatBox.addClass("active");
        });

        chatBox.on("mouseleave", function() {
            chatBox.removeClass("active");
        });

        const renderMessage = async () => {
            $.ajax({
                type: "POST",
                url: "/get-client-message",
                data: {
                    incoming_id: incoming_id
                },
                success: (data) => {
                    // chatBox.html(data);
                    var html = ''

                    data.forEach(msg => {
                      // reciever
                      if(msg.outgoing_msg_id === incoming_id){
                        $('#user_header_name').html(`${msg.firstname} ${msg.lastname}`)
                        html += `<div class="chat incoming">
                                <img src="https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png" alt="">
                                <div class="details">
                                    <p>${msg.msg}</p>
                                </div>
                                </div>`
                      }else{
                        html += `<div class="chat outgoing">
                                <div class="details">
                                    <p>'${msg.msg}'</p>
                                </div>
                                </div>`
                      }
                    });
                    
                    chatBox.empty();
                    chatBox.append(html);
                    if (!chatBox.hasClass("active")) {
                        scrollToBottom();
                    }
                },
                error: (xhr, status, error) => {
                    console.error(error);
                }
            });
        };


        function scrollToBottom() {
            chatBox.scrollTop(chatBox[0].scrollHeight);
        }

    </script>
    @yield('script')
</body>

</html>
