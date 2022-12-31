<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ENROLL - ELIMU SCHOOL</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/enroll.css">
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <section class="enroll-section w-100">
        <div class="fixed-section w-25">
            <a href="/">
                <img src="images/ES_white.png" alt="">
            </a>
        </div>


        <div class="enroll-form-container w-75">

            <div class="enrollment-header w-100">
                <h1>Enroll with us today.</h1>
                <p>Online enrollment ends on 20th January 2022, fill in the form below to register for enrollment.</p>
            </div>



            <div class="enrolment-div w-100">
                <form action="" method="POST" class="form w-100">
                    <div class="enroll-form">
                        <div class="student-data w-50">
                            <div class="data-head">
                                <h3>Student details</h3>
                            </div>
                            <div class="split-input w-100 p-0">
                                <div class="s-input w-100">
                                    <label for="f_name">First Name :</label>
                                    <input type="text" class="f_name form-control w-100" name="f_name" id="f_name">
                                </div>
                                <div class="s-input w-100">
                                    <label for="l_name">Last Name :</label>
                                    <input type="text" class="l_name form-control w-100" name="l_name" id="l_name">
                                </div>
                            </div>
                            <div class="split-input w-100 p-0">
                                <div class="split-input">
                                    <div class="s-input w-100">
                                        <label for="age">Age :</label>
                                        <input type="number" min="0" class="age form-control w-100" name="age" id="age">
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="gender">Gender :</label>
                                        <select name="gender" id="gender" class="w-100 form-control">
                                            <option value="Female" selected>Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="s-input w-100">
                                    <label for="dob">Date Of Birth :</label>
                                    <input type="date" class="dob form-control w-100" name="dob" id="dob">
                                </div>
                            </div>
                            <div class="s-input w-100">
                                <label for="email">Email address :</label>
                                <input type="email" class="email form-control w-100" name="email" id="email">
                            </div>
                            <div class="s-input w-100">
                                <label for="phone_num">Phone number :</label>
                                <input type="text" class="phone_num form-control w-100" name="phone_num" id="phone_num">
                            </div>
                            <div class="s-input w-100">
                                <label for="address">Address :</label>
                                <input type="text" class="address form-control w-100" name="address" id="address">
                            </div>

                            <div class="s-input w-100">
                                <label>Submit a copy of the following documents: </label>
                            </div>
                            <div class="split-input w-100 p-0">
                                <div class="s-input w-100">
                                    <label for="b_cert">Birth certificate :</label>
                                    <input type="file" class="b_cert form-control w-100" name="b_cert" id="b_cert">
                                </div>
                                <div class="s-input w-100">
                                    <label for="passport">Passport Photo :</label>
                                    <input type="file" class="passport form-control w-100" name="passport" id="passport">
                                </div>
                            </div>


                        </div>

                        <div class="secondary-data w-50">
                            <div class="guardian-data w-100">

                                <div class="data-head">
                                    <h3>Guardian details</h3>
                                </div>
                                <div class="split-input w-100 p-0">
                                    <div class="s-input w-100">
                                        <label for="gf_name">First Name :</label>
                                        <input type="text" class="f_name form-control w-100" name="gf_name" id="gf_name">
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="gl_name">Last Name :</label>
                                        <input type="text" class="l_name form-control w-100" name="gl_name" id="gl_name">
                                    </div>
                                </div>
                                <div class="split-input w-100 p-0">
                                    <div class="s-input w-100">
                                        <label for="g_occupation">Occupation :</label>
                                        <input type="text" class="f_name form-control w-100" name="g_occupation" id="g_occupation">
                                        <!-- <small class="form-text text-muted">Optional</small> -->
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="g_address">Address :</label>
                                        <input type="text" class="address form-control w-100" name="g_address" id="g_address">
                                    </div>
                                </div>
                                <div class="s-input w-100">
                                    <label for="g_email">Email address :</label>
                                    <input type="email" class="email form-control w-100" name="g_email" id="g_email">
                                </div>
                                <div class="s-input w-100">
                                    <label for="g_phone">Phone number :</label>
                                    <input type="text" class="phone_num form-control w-100" name="g_phone" id="g_phone">
                                </div>


                            </div>

                            <div class="prev-sch-data w-100">
                                <div class="data-head">
                                    <h3>Previous school details</h3>
                                </div>
                                <div class="s-input w-100">
                                    <label for="sch_name">Name:</label>
                                    <input type="text" class="passport form-control w-100" name="previousschool_name" id="previousschool_name">
                                </div>
                                <div class="s-input w-100">
                                    <label for="transcript">Transcript :</label>
                                    <input type="file" class="transcript form-control w-100" name="transcript" id="transcript">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 submit  py-2">
                        <button onclick=return false; class="btn btn-secondary w-50" type="button" id="submit_enroll_form" >SUBMIT</button>

                    </div>

                </form>
            </div>
        </div>
    </section>
    <footer class="footer-section w-100">
        <div class="upper-foot w-100">
            <a href="">CALENDERS</a>
            <a href="">CONTACT</a>
            <a href="">PRIVACY POLICIES</a>
        </div>
        <div class="lower-foot w-100">
            <div class="logo-display">
                <span class="line"></span>
                <img src="images/ES_white.png" alt="">
                <span class="line"></span>
            </div>
            <h3>SUGOI, BONDO WEST DISTRICT, MAZRAWI/P.O. BOX 5100-0011</h3>
            <div class="socials-container">
                <div class="round">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function validatRegistrationData() {
            var formIsValid = true;
            var firstname, lastname, age, gender, dob, email, phone, address, birth_certificate, passport_photo, guardian_firstname, guardian_lastname, guardian_occupation, guardian_address, guardian_email, guardian_phone, previousschool_name, transcript;

            firstname = $('#f_name');
            lastname = $('#l_name');
            age = $('#age');
            gender = $('#gender');
            dob = $('#dob');
            email = $('#email');
            phone = $('#phone_num');
            address = $('#address');
            birth_certificate = $('#b_cert');
            passport_photo = $('#passport');
            guardian_firstname = $('#gf_name');
            guardian_lastname = $('#gl_name');
            guardian_occupation = $('#g_occupation');
            guardian_address = $('#g_address');
            guardian_email = $('#g_email');
            guardian_phone = $('#g_phone');
            previousschool_name = $('#previousschool_name');
            transcript = $('#transcript');

            var name_regex = /^[a-zA-Z]+([ a-zA-Z\-'\.,]+)+$/;
            var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            var phone_regex = /^\+2547(?:[0-9] ?){8}$/;
            var age_regex = /^\d+$/;

            if (!name_regex.test(firstname.val())) {
                alert('Invalid firstname')
                formIsValid = false;
            } else {
                // 
            }

            if (!name_regex.test(lastname.val())) {
                alert('Invalid lastname')
                formIsValid = false;
            } else {
                // 
            }

            if (!age_regex.test(age.val())) {
                alert('Invalid age value')
                formIsValid = false;
            } else {
                // 
            }

            if (!name_regex.test(gender.val())) {
                alert('Invalid gender')
                formIsValid = false;
            } else {
                // 
            }


            if (!phone_regex.test(phone.val())) {
                alert('Invalid phone number')
                formIsValid = false;
            } else {
                // 
            }
            
            if (!name_regex.test(address.val())) {
                alert('Invalid address name')
                formIsValid = false;
            } else {
                // 
            }

            // if (!name_regex.test(birth_certificate.val())) {
            //     alert('Invalid birth certificate')
            //     formIsValid = false;
            // } else {
            //     // 
            // }

            // if (!name_regex.test(passport_photo.val())) {
            //     alert('Invalid passport')
            //     formIsValid = false;
            // } else {
            //     // 
            // } 

            if (!name_regex.test(guardian_firstname.val())) {
                alert('Invalid phone number')
                formIsValid = false;
            } else {
                // 
            }
            
            if (!name_regex.test(guardian_lastname.val())) {
                alert('Invalid guardian last name')
                formIsValid = false;
            } else {
                // 
            }

            if (!name_regex.test(guardian_occupation.val())) {
                alert('Invalid guardian occupation')
                formIsValid = false;
            } else {
                // 
            }

            if (!name_regex.test(guardian_address.val())) {
                alert('Invalid guardian address')
                formIsValid = false;
            } else {
                // 
            }
            
            if (!phone_regex.test(guardian_phone.val())) {
                alert('Invalid guardian phone')
                formIsValid = false;
            } else {
                // 
            }

            if (!name_regex.test(previousschool_name.val())) {
                alert('Invalid previous school name')
                formIsValid = false;
            } else {
                // 
            }

            // if (!name_regex.test(transcript.val())) {
            //     alert('Invalid transcript')
            //     formIsValid = false;
            // } else {
            //     // 
            // } 

            if (!email_regex.test(email.val())) {
                alert('Invalid student email')
                formIsValid = false;
            } else {
                //
            }           

            if (!email_regex.test(guardian_email.val())) {
                alert('Invalid guardian email');
                formIsValid = false;
            } else {
                //
            }
            
            return formIsValid;
        }
        $(document).ready(function() {
            $("#submit_enroll_form").on("click", function() {
                if (validatRegistrationData()) {
                    var csrf_token = $("meta[name='csrf-token']").attr("content");
                    var url = $("meta[name='hospital_registration-post-url']").attr("content");
                    data = {
                        "_token": csrf_token,
                        "hospital_name": $('#hospital_name').val(),
                        "location": $('#location').val(),
                        "zip_code": $('#zip_code').val(),
                        "email": $('#email').val(),
                        "password": $('#password').val()
                    }

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: data,
                        success: function(response) {
                            if (response.success_status == 1) {

                            } else {
                                console.log(response);
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>