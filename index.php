
$result="";
<?php
if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='onlyforgetting@gmail.com';
$mail->Password='onlyforgetting123';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('mohammadraway@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='Form Submission: '.$_POST['subject'];
$mail->Body='<h1 align=center>Parent Name :'.$_POST['fname'].'<br>Email: '.$_POST['email'].'<br>Phone: '.$_POST[adr].'</h1>'
'<h2 align=center>Student Name :'.$_POST['sname'].'<br>Gender: '.$_POST['select'].'<br>DOB: '.$_POST[dob].'<br>Grade: '.$_POST['grade'].'</h2>';

if(!$mail->send()){
$result="Something went wrong. Please try again. ";

}
else{
$result="" Thanks ".$_POST['fname']." for contacting us. We'll get back to you soon!"
}
}
?>









<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->




<head>

    





<!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
 


   <!-- Site Meta -->
    <title>A' SOUD GLOBAL SCHOOL DUQM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
 




   <!-- Site Icons -->
   


 <link rel="shortcut icon" href="images/UU.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
   


 <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>




<bod
y>
 

 <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->


 
   
      

<header class="header">
 



           

<div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i>

<!PHONE NO>

</strong> +968 7211 1132&nbsp;&nbsp;
                                

<strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">registrar@agsduqm.edu.om</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
 

 <p class="mobile-cs" style="float:left;padding-top: 10px;color: #fff; margin-bottom: 5px;"><a href="#regform">ADMISSION ENQUIRY</a></P>
  
                          

 <div class="social">
 


<a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                           <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
   
<a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>

<a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            
<a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>

</div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            




<div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        



<div class="logo-normal">
                            
<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                   

 <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            


<li><a href="#abt">ABOUT</a></li>
  

<li><a href="#">mENU</a></li>
 

<li><a href="#regform">register</a></li>
   
<li><a href="#">contact</a></li>
  





       </header>

 



</div>
 
       <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>WELCOME TO</p><p> A'SOUD GLOBAL SCHOOL DUQM</p>
                    <small>A LEADING CAMBRIDGE CURRICULUM IN THE HEART OF OMAN</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="#abt" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;<a href="#regform" class="btn btn-default wow slideInRight">REGISTER NOW</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            


<div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        


<a name="regform"></a>
<section class="section gb">

<style>

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.btnn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}


</style>
 <div class="container">
                <div class="section-title text-center">
                    



<h2>Registration Form</h2>
<p>Limited Seats Available</p>
</div>

<div class="row">
  <div class="col-75">
<h5 class="text-center text-success"><?= $result; ?></h5>
    <div class="container">
      <form id="form-control" action="form.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Parent Details</h3>

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Mohammad Salim">


            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="salim@example.com">

            <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
            <input type="text" id="adr" name="phone" placeholder="+968-99999999">

            
          </div>


   <div class="col-50">
            <h3>Student Details</h3>
            
	<label for="sname"><i class="fa fa-user"></i> Student Name</label>
            <input type="text"  id="sname" name="sname" placeholder="Hamed Al Rawahi">

          <label for="gender"><i class="fa fa-user"></i> Gender </label>
<br>
<select class="form-control" required="" name="select" background:#fff;">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>

<br><br>
    
	<label for="dob"><i class="fa fa-user"></i> Date of Birth</label>
<div class="input-append date">



                        <input data-format="dd/mm/yyyy" type="text" value="" id="datepicker" class="form-control datepicker has Datepicker" name="dob" 						placeholder="dd-mm-yyyy">

 
                        <span class="add-on">
                             <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                             </i>
                         </span>
                    </div>



<label for="grade" class="fa fa-user"> Grade <span class="required">*</span> </label>
                      <div class="input-group">
                        <select class="form-control" required="" name="grade"  background:#fff;">
                          <option value="" selected="" data-default="">Grade</option>
                          <option value="KG1">KG1</option>
                          <option value="KG2">KG2</option>
                          <option value="Grade 1">Grade 1</option>
                          <option value="Grade 2">Grade 2</option>
                          <option value="Grade 3">Grade 3</option>
                          <option value="Grade 4">Grade 4</option>
                          <option value="Grade 5">Grade 5</option>
                          <option value="Grade 6">Grade 6</option>
                          <option value="Grade 7">Grade 7</option>
                          <option value="Grade 8">Grade 8</option>
                          <option value="Grade 9">Grade 9</option>
			<option value="Grade 10">Grade 10</option>
			<option value="Grade 11">Grade 11</option>
			<option value="Grade 12">Grade 12</option>
                        </select>
                      </div>



            
             


</div>
                   
                      
<br>

           
	    
           
	      
          </div>
          
        </div>   </div>
          <input type="submit" name="submit" id="submit" class="btnn" value="Submit">
   

      </form>
    </div>
  </div>
  
</div>
</section>


<a name="abt"></a> 

<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
             


  <div class="custom-module">
                            
<img src="upload/img1.png" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
 

                   <div class="col-md-8">
                        <div class="custom-module p40l">
                            

<h2>Welcome TO <mark> A'SOUD GLOBAL SCHOOL, DUQM </mark></h2> <BR><BR> <p>A'Soud Global School (AGS), Duqm is a new innovative Cambridge international curriculum school located in the Duqm which opened in September 2019. We welcome both expatriate and local Omani children from KG1 to Grade 12, with children progressing through the school on a year by year basis, ultimately providing a International Education for children from 3 to 17 years of age.</p>

 


                           <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                       

 <li>15000 SQM spacious school campus area</li>
                                    <li>Cambridge International Curriculum</li>
                                        
<li>International Standards</li>
                                      
 
                                    </ul><!-- end check -->
                                </div><!--end col-lg-4 -->









                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
  

                                      <li>Experienced International teachers</li>

                       <li>Outdoor multi-games courts</li>
                                       
			 <li>Many more other facilities</li>
                                        
			                               </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
           


                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
      

                                  <li>Swimming and splash pools</li>

  <li>Spacious stimulating class rooms</li>
                                        
<li>100% Ministry of Education Inspection Rating</li>
                                              </ul><!-- end check -->
                                </div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            

                  


  </section>

       

  </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        



</section>

       







 <section class="section gb">
        

</div>


    <div class="container">
                <div class="section-title text-center">
                    



<h3>AGS AT A GLANCE</h3>
                    

<p>HUNDREDS OF Daily FUN ACTIVITIES LIKE</p>
                </div><!-- end title -->

                



<div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    


<div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                               

 <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     
<a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                           


 <div class="course-details">
                                

<h4>
                                    <small>CLASSROOMS</small>
                                    <a href="#" title="">MAX SPACE???</a>
                                </h4>
  
                           </div><!-- end details-->
                            



<div class="course-footer clearfix">
                                <div class="pull-left">
                                    

                                </div><!-- end left -->

                                <!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    



<div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
  
<img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     
<a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                

<h4>
                                    <small>Design</small>
                                    

<a href="#" title="">QUALIFIED IN ARABIC...</a>
                                </h4>
                                 </div><!-- end details -->
                            <div class="course-footer clearfix">
                                </d<div class="pull-left">
                                    </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    





<div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                

<img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     

<a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>TECHNOLOGY</small>
                                    <a href="#" title="">GERMAN TECHNOLOGY</a>
                                </h4>
                                
  </div><!-- end details -->
                            
<div class="course-footer clearfix">
                                </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    





<div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                
<img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     
<a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
  
     
                     <div class="course-details">
                                <h4>
                                    <small>GAMES</small>
                                    <a href="#" title="">OUTDOOR / INDOOR GAMES</h4>

                                                          </div><!-- end details -->
                            

<div class="course-footer clearfix">
                                </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    


<div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>SWIMMING</small>
                                    <a href="#" title="">SWIMMING POOL + SPLASH POOL</a>
                                </h4>
                                </div><!-- end details -->
                            <div class="course-footer clearfix">
                               



 </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                



<hr class="invis">

                <div class="section-button text-center">
                    <a href="#" class="btn btn-primary">View All ACTIVITIES</a>
                </div>
            </div><!-- end container -->
        </section>

       




               <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">800</h4>
                           
 <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> No of Students</h3>
                            <p>in mct branch </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    



<div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">300</h4>
                            <h3><i class="flaticon-online-course"></i> Teachers</h3>
                            <p>Faculty details</p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    


<div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            

<h4 class="stat-timer">15000</h4>
                            <h3><i class="flaticon-coffee-cup"></i> SQAURE METRES OF AREA</h3>
                            <p>SCHOOL DETAILS...</p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

     


      <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    
<h3>GALLERY</h3>
                                   </div><!-- end title -->

                


<div class="row">
                    

<div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_01.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            



                      </div><!-- end blog -->
                    </div><!-- end col -->

 



                   <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_01.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     
<a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                                                    </div><!-- end blog -->
                    </div><!-- end col -->

                    




<div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_01.jpeg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     
<a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                                                       </div><!-- end blog-desc -->

                                                   </div><!-- end blog -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        




<section class="section bgcolor1">
            <div class="container">
                              <div class="row callout">
                    <div class="col-md-4 text-center">
                        <h3>JOIN TODAY</h3>
                        <h4>Nurture your child from today onwards!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead"><u>Limited seats available!</u> Register now to enjoy all the services.</p>



                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->  
        </section>

        



      <section class="section db">
            <div class="container">
               
 


 <div class="section-title text-center">

<h3 class="widget-title">OUR LOCATION</h3>
                     
</div><!-- end title -->

                
                

   
                 <style>
      .img-container {
        text-align: center;
      }
    </style>
<div class="img-container"> 
      <img src="upload/location.png" alt="Location" height="360" width="480">
    </div>

                         </section>

     




<footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>SUBSCRIBE TO OUR NEWSLETTER FOR MORE UPDATES<br></p>
  


  </section>

       



                              <form class="form-inline" role="search">
                                    <div class="form-1">
                                      <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    




<div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>send us your CV today at our email address</p>
                            <a href="#" class="readmore">VACANCIES</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->







<div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">SCHOOL TIMINGS</h3>
             <h4 class="widget-title">Sunday - Thursday</h4>
<p>7:30 AM To 2:30 PM</p>
<p>4:30 PM For School Reception</p>                                             </div><!-- end widget -->
                    </div><!-- end col -->




<div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">NOTE</h3>
                            <div class="list-widget">   
                                

<UL>
                                   
<li>Friday and Saturday Closed</li>
   </ul>
 

                           </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->




       </footer><!-- end footer -->

        

<div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    

<div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    


<div class="pull-right">
                        <div class="footer-links">
                           
 <ul class="list-inline">
                                <li>&copy; AGS SCHOOL DUQM. All rights reserved.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
   

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>
