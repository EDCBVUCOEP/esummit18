<! DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resgistration.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <!--Header -->
    <section id="showcase">
        <div id="nav">
            <div id="nav_wrapper">
                <div class="pt-3 mt-3 pull-left ">
                    <img class="img-fluid md-2 " src="img/edc-white.png" alt="logo" height="50" width="130">
                </div>
                <div class="pt-3 mt-3 pull-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#portfolio">Events</a></li>
                        <li><a href="#call-to-action">Schedule</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <h1 style="padding-top:20px;" align="center" >REGISTRATION</h1>

    <div class="container mb-4">
        <div class="row mt-4">
            <div class="col-md-8 border border-primary rounded ml-1">
                <form id="test-form" enctype="multipart/form-data" method="post" action="registration_process.php">
                    <div class="container">


                        <div class="form-group">
                            <label for="inputFname" class="col-form-label">Full Name</label>
                            <input type="Name" class="form-control" id="inputCname" name="name" placeholder="Full Name"  required>
                        </div>

                        <div class="form-group">
                            <label for="inputLname" class="col-form-label">College/Organisation Name</label>
                            <input type="Name" class="form-control" id="inputLname" name="collegeName" placeholder="College/Organisation Name" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" maxlength="10" placeholder="Enter your contact number" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">WhatsApp Number</label>
                            <input type="text" class="form-control" id="contact" name="wcontact" aria-describedby="emailHelp" maxlength="10" placeholder="Enter your WhatsApp Number">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email-id" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>


                    </div>
                    <div class="container">
                        <h3>Profession</h3>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="profession" value="student" class="custom-control-input" required>
                            <label class="custom-control-label" for="customRadio1">Student:<br></label>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Year Of Graduation</label>
                                <select class="form-control" name="year" id="year_of_grad">
      <option value="2018" style="color:black;">2018</option>
      <option value="2019" style="color:black;">2019</option>
      <option value="2020" style="color:black;">2020</option>      
      <option value="2021" style="color:black;">2021</option>
      <option value="2022" style="color:black;">2022</option>
      <option value="2023" style="color:black;">2023</option>
      <option value="2024" style="color:black;">2024</option>
      <option value="2025" style="color:black;">2025</option>
    </select>
                            </div>

                        </div>
                        <div class="custom-control custom-radio">
                            <input onclick="document.getElementById('year_of_grad').disabled = true; document.getElementById('year_of_grad').disabled = false; " type="radio" id="customRadio2" name="profession" value="working Professional" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Working</label>
                        </div>
                    </div>

                    <div class="container">
                        <legend class="col-form-group mt-3">Events Participating</legend>

                        <div class="form-check mt-2 mt-2">
                            <input class="form-check-input" type="radio" name="workshop1" value="Blockchain Basics" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 1 ( Technical Track : Blockchain Basics)
          </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Digital Marketing" name="workshop1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 1 ( Business Track  : Digital Marketing )
        </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Machine Learning and AI" name="workshop2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 2 ( Technical Track : Hacking Problems with Machine Learning and AI )
          </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Business Model" name="workshop2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 2 ( Business Track  : Business Model )
          </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Drones and Mobility" name="workshop3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 3 ( Technical Track : Drones and Mobility )
          </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" value="Funding 101" name="workshop3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Workshop 3 ( Business Track  : Funding 101 )
          </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="jugaad" value="Jugaad" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                Jugaad
          </label>
                        </div>

                    </div>

                    <div class="container mt-4">
                        <legend class="col-form-group">Are you Intrested in Startup Internship And Placements Programe ?

                        </legend>

                        <div class="radio">
                            <label><input type="radio" name="sipp" value="yes">Yes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="sipp" value="no">No</label>
                        </div>
                    </div>
                    <!--<div class="container">
          <div class="form-group">
                <label for="exampleInputEmail2">Txn Id</label>
                <input type="text" class="form-control" id="contact" name="txnid" aria-describedby="emailHelp" required placeholder="Enter your Transaction Number">
            </div>
        </div>-->
                   
                </form>
            </div>
            <!-- coloumn division -->
            <div class="container col-md-3  border border-primary rounded">
                <u><h4 class="text-center">Payment Options</h4></u>
                <div class="text-center mt-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mr-4" data-toggle="modal" data-target="#exampleModalCenter">
  Paytm
</button>
                    <button type="button" class="btn btn-primary mr-4" data-toggle="modal" data-target="#exampleModalCenter1">
  UPI
</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
  Cash
</button>
                                  <div class="form-group mt-4">
                                    <label for="exampleInputEmail2">Transaction Number</label>
                                    <input type="text" class="form-control mt-3" id="contact" name="txnid" aria-describedby="emailHelp" required placeholder="Enter your Transaction Number">
                                </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Paytm QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                            </div>
                            <div class="modal-body">
                                <img src="img/paytm.png" width="90%" height="90%" alt="Paytm QR">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2-->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">UPI QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                            </div>
                            <div class="modal-body">
                                <img src="img/upi.jpeg" height="65%" width="100%" alt="UPI QR">
                                <h6 align="center" style="color:black;">OR</h6>
                                <h3 class="text-center" style="color:black;">8087424160@upi</h3>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3-->
                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">CASH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                            </div>
                            <div class="modal-body">
                              <h6 class="text-center" style="color:black;">Please Enter Your Receipt Number in Place Of Transaction Number</h6>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container mt-4" align="center">

                        <button id="submit-form" type="submit" name="submit" class="btn btn-primary" style="margin-bottom: 20px;">Register</button>

                    </div>
    <footer id="footer">
        <div class="footer-top mt-2">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright" style="color:white";>
               
                <br>
                <strong style="color:white";>Entreprenurship Development Cell</strong>
                <br>
                <br>Bharati Vidyapeeth College of Engineering , Pune.
                <br> All Rights Reserved
                <br>Made With<i class="fa fa-heart fa-heart-red text-center"></i>By Team EDC.
                <a href="#" class="back-to-top pull-right ">
          <i class="fa fa-chevron-up  " style="font-size:48px;color:rgb(0, 109, 193)"></i>
        </a>
            </div>

        </div>

    </footer>
    <!-- #footer -->

</body>

</html>
