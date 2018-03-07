<?php
    include'registration_process.php';
?>

    <! DOCTYPE html>
    <html>

    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <body>

        <h1 style="padding-top:20px" align="center">REGISTRATION</h1>

        <form id="test-form" enctype="multipart/form-data" method="post">
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="container">


                        <div class="form-group">
                            <label for="inputFname" class="col-form-label">Name</label>
                            <input type="Name" class="form-control" id="inputCname" name="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="inputLname" class="col-form-label">College Name</label>
                            <input type="Name" class="form-control" id="inputLname" name="collegeName" placeholder="College Name">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" maxlength="10" placeholder="Enter your contact number">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">WhatsApp Number</label>
                            <input type="text" class="form-control" id="contact" name="wcontact" aria-describedby="emailHelp" maxlength="10" placeholder="Enter your WhatsApp Number">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email-id">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>


                    </div>
                    <div class="container">
                        <h3>Profession</h3>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="profession" value="student" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Student:<br></label>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Year Of Graduation</label>
                                <select class="form-control" name="year" id="year_of_grad">
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>      
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
                            </div>

                        </div>
                        <div class="custom-control custom-radio">
                            <input onclick="document.getElementById('year_of_grad').disabled = true; document.getElementById('year_of_grad').disabled = false; " type="radio" id="customRadio2" name="profession" value="working Professional" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Working</label>
                        </div>
                    </div>

                    <div class="container">
                        <legend class="col-form-group">Events Participating</legend>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="workshop1" value="Blockchain Basics" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 1 ( Technical Track : Blockchain Basics)
          </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Digital Marketing" name="workshop1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 1 ( Business Track  : Digital Marketing )
        </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Machine Learning and AI" name="workshop2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 2 ( Technical Track : Hacking Problems with Machine Learning and AI )
          </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Business Model" name="workshop2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 2 ( Business Track  : Business Model )
          </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Drones and Mobility" name="workshop3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 3 ( Technical Track : Drones and Mobility )
          </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Funding 101" name="workshop3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 3 ( Business Track  : Funding 101 )
          </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="jugaad" value="Jugaad" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Jugaad
          </label>
                        </div>

                    </div>

                    <div class="container">
                        <legend class="col-form-group">Are you Intrested in Startup Internship And Placements Programe ?

                        </legend>

                        <div class="radio">
                            <label><input type="radio" name="sipp" value="yes">Yes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="sipp" value="no">No</label>
                        </div>
                    </div>
                    <div class="container">
                        <div class="form-group">
                            <label for="exampleInputEmail2">Txn Id</label>
                            <input type="text" class="form-control" id="contact" name="txnid" aria-describedby="emailHelp" required placeholder="Enter your WhatsApp Number">
                        </div>
                    </div>
                    <div class="container" align="center">

                        <button id="submit-form" type="submit" name="submit" class="btn btn-primary" style="margin-bottom: 20px;">Proceed To Pay</button>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="container">
                        <legend class="col-form-group">Payment Options

                        </legend>

                        <div class="radio">
                            <label><input type="radio" name="po" value="Paytm">Paytm</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="po" value="upi">UPI</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="po" value="cash">Cash</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </body>

    </html>
