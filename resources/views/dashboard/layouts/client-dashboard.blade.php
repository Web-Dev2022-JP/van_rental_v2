{{-- @extends('../components.frequently')
@extends('../components.details') --}}
{{-- @extends('details') --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- header --}}
    @include('components.clients.header.head')
    @yield('header')
    {{-- style --}}
    @yield('links')
    <style>
        #chat-driver {
            width: 35%;
            /* background: red; */
            /* height: fit-content; */
        }

        .notification-container {
            max-width: 100%;
            /* Set the card's maximum width to the full width of the viewport */
        }

        .notification-container .row {
            /* width: 400px; */
            display: flex;
            flex-direction: row;
            align-items: center;
            padding-left: 20px;
            /* border: 1px solid red; */
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .notification-container .row .col-md-2 {
            /* border: 1px solid red; */
            max-width: 10%;
            height: 35px;
            /* border-radius: 50%; */
        }

        .notification-container .row .col-md-2 img {
            /* max-width: 10%; */
            height: 35px;
            border-radius: 50%;
        }

        .notification-container .row .col-md-8 {
            max-width: 90%;
            height: 70px;
            /* border: 1px solid red; */
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
        @media screen and (max-width: 500px) {
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

            #chat-driver {
                /* background: red; */
                width: 100%;
            }
        }
    </style>
</head>

<body>
    {{-- navigation --}}
    @include('components.clients.nav')
    @yield('client-nav')

    <main>
        {{-- van section --}}
        {{-- @include('components.clients.van')
        @yield('contents') --}}

        {{-- Include details section --}}
        {{-- @section('details-modal')
        @include('components.details')
        @endsection --}}

        {{-- Include frequently section --}}
        {{-- @section('frequently')
        @include('components.frequently')
        @endsection
        @section('frequently')
        @include('modals.about-driver')
        @endsection --}}

        {{-- Render the content sections --}}
        {{-- @yield('content')
        @yield('details-modal')
        @yield('frequently')
        @yield('about-driver-modal') --}}

        {{-- v1.1 --}}
        @yield('contents')

        @include('components.clients.chatroom')
        @yield('client.chat.driver')

        <!-- for notification -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="notification" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="notificationLabel">Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="notif-card">

                {{-- <div class="card border-0 rounded notification-container" style="max-width: 540px;">
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
            </div> --}}
            </div>
        </div>
        <!-- for messages -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="messages" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="notificationLabel">Messages History</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="messages-card">

                {{-- <div class="card border-0 rounded notification-container" style="max-width: 540px;">
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
            </div> --}}
            </div>
        </div>
        <!-- for guidelines -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="guidelines" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-danger" id="notificationLabel">How to enabled location in a
                    browser?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h4 class="mb-4">Enhance Your Experience with Accurate Location</h4>
                <p><span class="text-primary">advantage </span> to share your location with us and receive
                    personalized services and faster delivery options.</p>

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
                            <li>Toggle the switch to enable location access for all sites or click on the "Add"
                                button to allow specific sites to access your location.</li>
                        </ul>
                    </li>
                </ol>

            </div>
        </div>
    </main>


    @include('components.clients.footer.footer')
    @yield('footer')

    @yield('script')

    <script>
        const baseUrl = `${window.location.protocol}//${window.location.hostname}:${window.location.port}`;
        // chat functionality
        incoming_id = 0,
            $(document).on('click', '#chat-driver', function(e) {
                // alert('yes')
                // client id
                var reciever_id = parseInt($(this).attr("value"), 10);
                $('#incoming_id').val(reciever_id);
                incoming_id = reciever_id
                // alert(reciever_id)
                $('#details').modal('hide')
                $('#chat-driver-side').offcanvas('show')
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
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
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
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    // chatBox.html(data);
                    var html = ''

                    data.forEach(msg => {
                        // reciever
                        if (msg.outgoing_msg_id === incoming_id && msg.documents[0].path !=
                            null) {
                            console.log(msg.documents[0].path)
                            const regex = /(?:liscensed|vehicle|profile)(?=\d)/;
                            const matches = msg.documents[0].path.match(regex);
                            let extPath = "profile";
                            $('#user_header_name').html(`${msg.firstname} ${msg.lastname}`)
                            html += `<div class="chat incoming">
                                <img src="${baseUrl}/storage/${extPath}/${msg.documents[0].path}" alt="">
                                <div class="details">
                                    <p>${msg.msg}</p>
                                </div>
                                </div>`
                        } else {
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

        // get the unseen message to seen
        const getUnseenMessage = async () => {
            // var reciever_id = parseInt($('#view').attr("data-id"), 10);
            // console.log(reciever_id)
            $.ajax({
                type: "POST",
                url: "/get-unseen-message",
                data: {
                    // for now
                    incoming_id: 1
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    // chatBox.html(data);
                    var html = ''
                    var dots = ''
                    if (data.length === 0) {
                        html += `<div class="card border-0 mb-1 rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-8" style="height: fit-content">
                                            <div class="card-body">
                                                <span class="card-title text-secondary"><b>There is no notifications</b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                        dots = ''
                    } else {
                        // Organize messages by sender or recipient
                        const groupedMessages = {};
                        data.forEach(msg => {
                            const key = msg.outgoing_msg_id === incoming_id ? msg
                                .incoming_msg_id : msg.outgoing_msg_id;

                            if (!groupedMessages[key] || msg.created_at > groupedMessages[key]
                                .created_at) {
                                groupedMessages[key] = msg;
                            }
                        });

                        // Generate HTML for the latest messages
                        Object.values(groupedMessages).forEach(msg => {
                            const regex = /(?:liscensed|vehicle|profile)(?=\d)/;
                            const matches = msg.documents && msg.documents[0] && msg.documents[0].path && regex.test(msg.documents[0].path) ? msg.documents[0].path : 'profile.png';
                                let extPath =  msg.documents[0] ? "profile" : "default";
                        
                                dots = `<span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    </span>`
                                html += `<div class="card border-0 mb-1 rounded notification-container position-relative" style="max-width: 540px;" data-id="${msg.outgoing_msg_id}">
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                            
                                </span>
                                        <div class="row g-0">
                                        <div class="col-md-2 justify-contents">
                                            <img class="img-fluid rounded-start"
                                                src="${baseUrl}/storage/${extPath}/${matches}"
                                                alt="">
                                        </div>
                                        <div class="col-md-8" style="height: fit-content">
                                            <div class="card-body">
                                                <span class="card-title"><b>${msg.firstname} ${msg.lastname}</b></span>
                                                <span class="card-text">has a message.</span><br>
                                                <span class="card-text"><small class="text-body-secondary text-secondary">${msg.created_at}</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                            

                            //   }else{
                            //     html += `<div class="chat outgoing">
                        //             <div class="details">
                        //                 <p>'${msg.msg}'</p>
                        //             </div>
                        //             </div>`
                            //   }
                        });
                    }

                    $('#bell').html(dots)
                    $('#chat').html(dots)
                    $('#notif-card').html(html)

                },
                error: (xhr, status, error) => {
                    console.error(error);
                }
            });
        }
        // get the seen message for history
        const getSeenMessage = async () => {
            // var reciever_id = parseInt($('#view').attr("data-id"), 10);
            // console.log(reciever_id)
            $.ajax({
                type: "POST",
                url: "/get-seen-message",
                data: {
                    // for now
                    incoming_id: 1
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    // chatBox.html(data);
                    var html = ''
                    if (data.length === 0) {
                        html += `<div class="card border-0 mb-1 rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-8" style="height: fit-content">
                                            <div class="card-body">
                                                <span class="card-title text-secondary"><b>There is no message history</b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                    } else {
                        // Organize messages by sender or recipient
                        const groupedMessages = {};
                        data.forEach(msg => {
                            const key = msg.outgoing_msg_id === incoming_id ? msg
                                .incoming_msg_id : msg.outgoing_msg_id;

                            if (!groupedMessages[key] || msg.created_at > groupedMessages[key]
                                .created_at) {
                                groupedMessages[key] = msg;
                            }
                        });
                        // Generate HTML for the latest messages
                        Object.values(groupedMessages).forEach(msg => {
                            console.log(msg)
                                const regex = /(?:liscensed|vehicle|profile)(?=\d)/;
                                const matches = msg.documents && msg.documents[0] && msg.documents[0].path && regex.test(msg.documents[0].path) ? msg.documents[0].path : 'profile.png';
                                let extPath =  msg.documents[0] ? "profile" : "default";
                            // console.log(msg)
                            if (msg.read != 'seen') {
                                html += `<div class="card border-0 mb-1 rounded notification-container position-relative" style="max-width: 540px;" data-id="${msg.outgoing_msg_id}">
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        
                                    </span>
                                    <div class="row g-0">
                                        <div class="col-md-2 justify-contents">
                                            <img class="img-fluid rounded-start"
                                                src="${baseUrl}/storage/${extPath}/${matches}"
                                                alt="">
                                        </div>
                                        <div class="col-md-8" style="height: fit-content">
                                            <div class="card-body">
                                                <span class="card-title"><b>${msg.firstname} ${msg.lastname}</b></span>
                                                
                                                <span class="card-text"><small class="text-body-secondary text-secondary">${msg.created_at}</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                            } else {
                                html += `<div class="card border-0 mb-1 rounded notification-container position-relative bg-white" style="max-width: 540px;" data-id="${msg.outgoing_msg_id}">
                                   
                                    <div class="row g-0">
                                        <div class="col-md-2 justify-contents">
                                            <img class="img-fluid rounded-start"
                                                src="${baseUrl}/storage/${extPath}/${matches}"
                                                alt="">
                                        </div>
                                        <div class="col-md-8" style="height: fit-content">
                                            <div class="card-body">
                                                <span class="card-title"><b>${msg.firstname} ${msg.lastname}</b></span>
                                                
                                                <span class="card-text"><small class="text-body-secondary text-secondary">${msg.created_at}</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                            }


                            //   }else{
                            //     html += `<div class="chat outgoing">
                        //             <div class="details">
                        //                 <p>'${msg.msg}'</p>
                        //             </div>
                        //             </div>`
                            //   }
                        });
                    }

                    $('#messages-card').html(html)

                },
                error: (xhr, status, error) => {
                    console.error(error);
                }
            });
        }

        function scrollToBottom() {
            chatBox.scrollTop(chatBox[0].scrollHeight);
        }

        setInterval(() => {
            getUnseenMessage()
            getSeenMessage()
        }, 1000);

        // click the notification container
        $(document).on('click', '.notification-container', function() {
            var client_id = parseInt($(this).data("id"), 10);
            incoming_id = client_id
            $('#incoming_id').val(incoming_id);
            // alert(reciever_id)
            $('#notification').offcanvas('hide')
            $('#messages').offcanvas('hide')
            $('#chat-driver-side').offcanvas('show')
            renderMessage()
            updateUnseenMessage(incoming_id)
        })

        // update the unseen message to seen
        const updateUnseenMessage = async (customer_id) => {
            $.ajax({
                type: "POST",
                url: "/update-unseen-message",
                data: {
                    outgoing_id: customer_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (data) => {
                    console.log(data)

                },
                error: (xhr, status, error) => {
                    console.error(error);
                }
            });
        }

        // back
        $(document).on('click', '.back-icon', function() {
            $('#notification').offcanvas('show')
            $('#chat-driver-side').offcanvas('hide')
        })
    </script>
</body>

</html>
