console.log("connected");

function FetchNotification() {
    var notif = "";
    var driverTable = "";
    var reqCount = 0;
        // report = 0,
        // client = 0,
        // driver = 0;
    $.ajax({
        url: "/accounts/approval",
        method: "GET",
        dataType: "json",
        success: function (accounts) {
            // This function will be executed when the request is successful
            console.log(accounts); // Do something with the retrieved data
            //   $('.notification-list')
            accounts.forEach((account) => {
                reqCount++;
                notif += `
                     <li class="notification-message">
                        <a href="activities.html">
                            <div class="media">
                                <span class="avatar">${account.firstname
                                    .charAt(0)
                                    .toUpperCase()}</span>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">
                                    ${
                                        account.firstname
                                    } ${account.lastname}</span> waiting for your approval.</p>
                                    <p class="noti-time"><span class="notification-time">${getTimeAgo(
                                        account.created_at
                                    )}</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    `;
                // for profile if they have
                // <h2><a href="profile.html" class="avatar text-white"><img
                //                         src="{{ asset('assets/img/profile/img-1.jpg') }}"
                //                         alt=""></a><a
                //                     href="profile.html">Parker <span></span></a></h2>
                driverTable += `
                        <tr>
                            <td>
                               <h2 class="text-white">
                                    <span class="avatar">${account.firstname
                                        .charAt(0)
                                        .toUpperCase()}</span>
                                    <span class="text-success">${account.firstname} ${account.lastname}</span>
                               </h2>
                                
                            </td>
                            <td>${account.email}</td>
                            <td>${account.nationality}</td>
                            <td>${account.contact}</td>
                            <td>${account.barangay}, ${account.street} st.</td>
                            
                            <td>${
                                account.approved === 0
                                    ? '<span class="badge badge-danger p-2">Pending</span>'
                                    : '<span class="badge badge-danger p-2">OTP</span>'
                            }</td>
                            
                            <td class="text-right">
                                <button type="button" 
                                    class="btn btn-primary btn-sm mb-1 btn-view" data-id="${account.id}">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button type="button" data-toggle="modal"
                                    data-target="#delete_user"
                                    class="btn btn-danger btn-sm mb-1">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                                <button type="button" class="btn btn-success btn-sm mb-1 btn-approved" data-id="${account.id}">
                                    <i class="fas fa-check"></i>
                                </button>
                            </td>
                    </tr>
                `;

                if (getTime(account.created_at) < 1) {
                    // toastr
                    Command: toastr["info"](
                        `You have a new notification from ${account.firstname}`
                    );

                    toastr.options = {
                        closeButton: false,
                        debug: false,
                        newestOnTop: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        preventDuplicates: true,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        timeOut: "5000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                    };
                }
            });
            $(".notification-list").html(notif);
            $("#driver-table").html(driverTable);
            $("#request-content").html(reqCount);
            $("#notif-counts").html(reqCount);
        },
        error: function () {
            // This function will be executed if the request fails
            console.log("Error occurred while making the request.");
        },
    });
    // Call the function again after 3 seconds
    setTimeout(FetchNotification, 3000);
}

// Initial call to FetchNotification()
FetchNotification();

//   convert createdtime into seconds
function getTimeAgo(timestamp) {
    var specifiedTime = new Date(timestamp);
    var currentTime = new Date();
    var timeDifference = Math.floor((currentTime - specifiedTime) / 1000); // Time difference in seconds

    var minutes = Math.floor(timeDifference / 60) % 60; // Calculate the number of minutes
    var hours = Math.floor(timeDifference / 3600); // Calculate the number of hours
    if (hours > 0) {
        return hours + " hour and " + minutes + " mins ago";
    } else {
        return minutes + " mins ago";
    }
}
//   min only
function getTime(timestamp) {
    var specifiedTime = new Date(timestamp);
    var currentTime = new Date();
    var timeDifference = Math.floor((currentTime - specifiedTime) / 1000); // Time difference in seconds

    var minutes = Math.floor(timeDifference / 60); // Calculate the number of minutes

    return minutes;
}

$(document).ready(function() {
    $(document).on('click', '.btn-approved', function(e) {
        console.log('clicked');
        e.preventDefault();
        var id = $(this).data("id");
        approve(id);
    });

    // view
    $(document).on('click', '.btn-view', function(e) {
        console.log('clicked');
        e.preventDefault();
        var id = $(this).data("id");
        $.ajax({
            url: `/accounts/view/${id}`,
            method: "GET",
            dataType: "json",
            success: function(response) {
               var html = ''
                // if(response.status == 'success'){
                    $('#viewModal').modal('show');
                    console.log(response)
                    html += `
                    <div class="col-md-12">
                    <div class="mb-3">
                       
                        <input type="number" name="role" class="form-control" id="role"
                            value="${response[0].user.role}" hidden required>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        
                        <input type="text" name="firstName" class="form-control" id="firstName"
                            placeholder="First Name" value="${response[0].user.firstname}" required>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="mb-3">
                        {{-- <label for="lastName" class="form-label">Last Name</label> --}}
                        <input type="text" name="lastName" class="form-control" id="lastName"
                            placeholder="Last Name" value="${response[0].user.lastname}" required>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="mb-3">
                        {{-- <label for="lastName" class="form-label">Last Name</label> --}}
                        <input type="text" name="middleName" class="form-control" id="middleName"
                            placeholder="Middle Name" value="${response[0].user.middlename}">
                    </div>
                </div>

               
                <div class="col-md-3">
                    <div class="mb-3">
                        <input type="text" name="gender" class="form-control" id="gender"
                            placeholder="Gender" value="${response[0].user.gender}" required>
                    </div>
                </div>

               
                <div class="col-md-3">
                    <div class="mb-3">
                        <input type="number" name="age" class="form-control" id="age"
                            placeholder="Age" value="${response[0].user.age}" required>
                    </div>
                </div>

               
                <div class="col-md-3">
                    <div class="mb-3">
                        <input type="text" name="birthplace" class="form-control" id="birthplace"
                            placeholder="Birthplace" value="${response[0].user.birthdate}" required>
                    </div>
                </div>

                
                <div class="col-md-3">
                    <div class="mb-3">
                        <input type="text" name="nationality" class="form-control" id="nationality"
                            placeholder="Nationality" value="${response[0].user.nationality}" required>
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="tel" name="contact" class="form-control" id="contact"
                            placeholder="Contact: +63" required pattern="[0-9]{10}"
                            title="Please enter a valid 10-digit mobile number" value="${response[0].user.contact}">
                        <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                    </div>
                </div>

               
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Email" value="${response[0].user.email}" required>
                    </div>
                </div>

               
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="date" name="birthdate" class="form-control" id="birthdate"
                            placeholder="Birthdate" value="${response[0].user.birthdate}" required>
                    </div>
                </div>

               
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="municipality" class="form-control" id="municipality"
                            placeholder="Municipality" value="${response[0].user.municipality}" required>
                    </div>
                </div>

               
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="number" name="zipcode" class="form-control" id="zipcode"
                            placeholder="Zip Code" value="${response[0].user.zipcode}" required>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="text" name="barangay" class="form-control" id="barangay"
                            placeholder="Barangay" value="${response[0].user.barangay}" required>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="text" name="street" class="form-control" id="street"
                            placeholder="Street" value="${response[0].user.street}" required>
                    </div> 
                </div>

              
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="number" name="idNumber" class="form-control" id="idNumber"
                            placeholder="ID NO." value="${response[0].user.idno}" required>
                    </div>
                </div>

              
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="number" name="orcr" class="form-control" id="orcr"
                            placeholder="ORCR" value="${response[0].user.orcr}" required>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="text" name="plateNumber" class="form-control" id="plateNumber"
                            placeholder="Vehicle Plate Number" value="${response[0].user.platenumber}" required>
                    </div>
                </div>

            </div>
            
            <div class="col-md-4">
                <div class="col-md-12 mx-auto">
                    <div class="mb-3">
                        <label for="image" class="form-label text-success text-center h6">Upload your
                            Profile and Driver's Licensed</label>
                       
                          <img src="/storage/${response[0].path}" alt="" srcset="">
                          
                    </div>
                </div>
            </div>
                    `
                // }
                $('#view-con').html(html);
            }
            
        })
        
    });

    function approve(id) {
        $.ajax({
            url: `/accounts/approval/${id}`,
            method: "GET",
            dataType: "json",
            success: function(response) {
                console.log(response.message);
                if(response.status == 'success'){
                    // toastr
                    Command: toastr["success"](
                        `Newly driver registered successfully`
                    );

                    toastr.options = {
                        closeButton: false,
                        debug: false,
                        newestOnTop: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        preventDuplicates: true,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        timeOut: "3000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                    };
                    FetchNotification()
                }
                // Perform any additional actions or update the UI
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
});
