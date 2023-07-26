console.log($(".driver-id").val());

// get driver credentials
const driverCredentials = async () => {
    const id = $(".driver-id").val();
    var html = "";
    $.ajax({
        url: `/accounts/view/${id}`,
        method: "GET",
        dataType: "json",
        success: function (res) {
            console.log(res);
            registrationVehicle(res);
        },
        error: function (err) {
            console.log(err);
        },
    });
};
driverCredentials();
setInterval(() => {
    driverCredentials();
}, 3000);

// get the driver registration form
const registrationVehicle = async (data) => {
    // When the link with id="openModalLink" is clicked, open the modal with id="myModal"
    $("#vehicle-status").on("click", function () {
        // Set the backdrop option to 'static' to prevent closing when clicking outside
        $("#vehicleModal").modal({
            backdrop: "static",
            keyboard: false, // Optional: Disable closing the modal with the keyboard
        });
        $("#vehicleModal").modal("show");
        var html = "";
        const baseUrl = `${window.location.protocol}//${window.location.hostname}:${window.location.port}`;
        // if(response.status == 'success'){
        // $('#viewModal').modal('show');
        // console.log(response)
        profile = `{{ asset(storage/profile/tmp/$data[0].path))  }}`;
        html = `    
                    <div class="col-md-8 row">
                        <div class="col-md-4">
                            <div class="mb-3 form-floating"> 
                                <label for="firstName" class='text-secondary'><b>First Name</b></label>     
                                <input type="text" name="firstName" class="form-control border-info text-info" id="firstName"
                                    placeholder="First Name" value="${data[0].user.firstname}" required>
                                <input type="text" name="id" class="form-control border-info text-info"
                                    placeholder="ID" value="${data[0].user.id}" hidden>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="lastName" class='text-secondary'><b>Last Name</b></label>
                                <input type="text" name="lastName" class="form-control border-info text-info" id="lastName"
                                    placeholder="Last Name" value="${data[0].user.lastname}" required>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Middle Name</b></label>
                                <input type="text" name="middleName" class="form-control border-info text-info" id="middleName"
                                    placeholder="Middle Name" value="${data[0].user.middlename}">
                            </div>
                        </div>

                    
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="lastName" class='text-secondary'><b>Gender</b></label>
                                <input type="text" name="gender" class="form-control border-info text-info" id="gender"
                                    placeholder="Gender" value="${data[0].user.gender}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-3">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Age</b></label>
                                <input type="number" name="age" class="form-control border-info text-info" id="age"
                                    placeholder="Age" value="${data[0].user.age}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-3">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Birthdate</b></label>
                                <input type="text" name="birthplace" class="form-control border-info text-info" id="birthplace"
                                    placeholder="Birthplace" value="${data[0].user.birthdate}" required>
                            </div>
                        </div>

                        
                        <div class="col-md-3">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Nationality</b></label>
                                <input type="text" name="nationality" class="form-control border-info text-info" id="nationality"
                                    placeholder="Nationality" value="${data[0].user.nationality}" required>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Contact</b></label>
                                <input type="tel" name="contact" class="form-control border-info text-info" id="contact"
                                    placeholder="Contact: +63" required pattern="[0-9]{10}"
                                    title="Please enter a valid 10-digit mobile number" value="${data[0].user.contact}">
                                <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                            </div>
                        </div>

                    
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Email</b></label>
                                <input type="email" name="email" class="form-control border-info text-info" id="email"
                                    placeholder="Email" value="${data[0].user.email}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Birthdate</b></label>
                                <input type="date" name="birthdate" class="form-control border-info text-info" id="birthdate"
                                    placeholder="Birthdate" value="${data[0].user.birthdate}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Municipality</b></label>
                                <input type="text" name="municipality" class="form-control border-info text-info" id="municipality"
                                    placeholder="Municipality" value="${data[0].user.municipality}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Zip Code</b></label>
                                <input type="number" name="zipcode" class="form-control border-info text-info" id="zipcode"
                                    placeholder="Zip Code" value="${data[0].user.zipcode}" required>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Barangay</b></label>
                                <input type="text" name="barangay" class="form-control border-info text-info" id="barangay"
                                    placeholder="Barangay" value="${data[0].user.barangay}" required>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Street</b></label>
                                <input type="text" name="street" class="form-control border-info text-info" id="street"
                                    placeholder="Street" value="${data[0].user.street}" required>
                            </div> 
                        </div>

                    
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Id No.</b></label>
                                <input type="number" name="idNumber" class="form-control border-info text-info" id="idNumber"
                                    placeholder="ID NO." value="${data[0].user.idno}" required>
                            </div>
                        </div>

                    
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>ORCR</b></label>
                                <input type="number" name="orcr" class="form-control border-info text-info" id="orcr"
                                    placeholder="ORCR" value="${data[0].user.orcr}" required>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="mb-3">
                            <label for="lastName" class='text-secondary'><b>Plate Number</b></label>
                                <input type="text" name="plateNumber" class="form-control border-info text-info" id="plateNumber"
                                    placeholder="Vehicle Plate Number" value="${data[0].user.platenumber}" required>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-4">
                        <div class="mx-auto row" id="documents">
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="mb-3">     
                                <input type="number" name="role" class="form-control border" id="role"
                                    value="${data[0].user.role}" hidden required>
                            </div>
                    </div>
                </div>
                
                    `;

        $("#view-vehicle-status").html(html);

        var docs = "";
        data.forEach((document, index) => {
            if (index < 1) {
                docs = `
                        <div class="col-sm-12">
                            <div class="card border-info">
                            <div class="card-body">
                                <h5 class="card-title text-info">Profile</h5>
                                <img  src="${baseUrl}/storage/profile/tmp/${document.path}" class="rounded mx-auto img-fluid mt-2 img-hover" alt="Image">
                            </div>
                            </div>
                        </div>
                            `;
            } else {
                docs += `
                        <div class="col-sm-12">
                            <div class="card border-info">
                            <div class="card-body">
                                <h5 class="card-title text-info">Documents</h5>
                                <img src="${baseUrl}/storage/vehicle/${document.path}" class="rounded mx-auto img-fluid mt-2 img-hover" alt="Image">
                            </div>
                            </div>
                        </div>
                        `;
            }

            if (document.user.is_activated == 0) {
                $("#stats")
                    .html("<b>Your Application is Pending for approval.</b>")
                    .addClass("bg-danger p-2 border rounded");
            } else {
                $("#stats")
                    .html("<b>Your Application is Approved by Van Rental.</b>")
                    .addClass("bg-success p-2 border rounded");
            }
        });
        $("#documents").html(docs);

        $(".img-hover").click(function (event) {
            // Prevent the click event from propagating to parent elements
            event.stopPropagation();
            $(this).toggleClass("scale");
        });
        // Use jQuery to handle the click event on the document
        $(document).click(function () {
            // Remove the "scale" class from all elements with the "img-hover" class
            $(".img-hover").removeClass("scale");
        });

        
    });
};

const updateRegistration = async() => {
    $("#update").on("click",function(){
        $.ajax({
            url: `/register-edit`,
            method: "POST",
            dataType: "json",
            data: $('#edit-form').serialize(),
            success: function (res) {
                var msg = ''
                console.log(res);
                $('#msg').html(res.message).addClass('bg-success p-2 border rounded')
            },
            error: function (err) {
                console.log(err);
            },
        });
    })
}

updateRegistration()
