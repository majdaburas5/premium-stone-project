<?php  require_once "navv.php" ?>
<html>
<style>
table, th, td {
  border:1px black;
}
</style>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/48c0966d39.js" crossorigin="anonymous"></script>
<center>
<br>
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="index.php">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Our Office</h4>
                                <p class="m-0 text-white">123 Street, Nazareth, israel</p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4 mb-4">
                            <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Email Us</h4>
                                <p class="m-0 text-white">Priemum@stone.com</p>
                            </div>
                        </div>
                        <div class="d-inline-flex border border-secondary p-4">
                            <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h4>Call Us</h4>
                                <p class="m-0 text-white">+972542415860</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="mailto:aburasm54@gmail.com" method="post" enctype="text/plain">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
<table style="width:100%">
<br><br>
<tr>
<th><img src="images/E780578D-C704-423F-9832-888FD93A07EC.JPG" style="width:350px;height:350px;border-radius:200px;margin-left:200px"/></th>
<th><img src="images/F5575B6B-7524-4950-AC4B-7B296135305A.JPG" style="width:350px;height:350px;border-radius:200px;margin-left:180px"/></th>
</tr>
<hr>
<br><br><br><br>
<tr>
<td style="text-align:center;font-size:30px;margin-top:100px"><i class="fa-solid fa-user">&nbsp;&nbsp; MAJD ABURAS</i></td>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-user">&nbsp;&nbsp;RAWAD BISHARA</i></td>
</tr>
<tr>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-phone" >&nbsp;&nbsp;054-2415860</i>
</td>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-phone" >&nbsp;&nbsp;055-8875580</li></td>
</tr>
<tr>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-envelope">&nbsp;&nbsp;ABURASM54@GMAIL.COM</i></td>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-envelope">&nbsp;&nbsp;RAWADBISHARA@GMAIL.COM</i></td>
</tr>
<tr>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-location-arrow">&nbsp;&nbsp;ILUT</i></td>
<td style="text-align:center;font-size:30px"><i class="fa-solid fa-location-arrow">&nbsp;&nbsp;NAZARETH</i></td>
</tr>
</table>
<?php  require_once "newfooter.php" ?>
</body>
</html>
