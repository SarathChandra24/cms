<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"><!--<![endif]--><head>
    <title>JBREC RESULTS SYSTEM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="assets/images/logo_ico.jpg"> 
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    </head>

<body style="overflow: visible;"><div id="preloader" style="display: none;">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>
   <div class="wrapper">
   <header class="header" style="margin-bottom:15px;">
     <div class="header-main container ">
                <h1 class="logo col-md-6 col-sm-12">
                    <a href="index.php"><img id="logo" width="100" height="50" src="assets/images/logo_ico.jpg" alt="Logo"><span><small>JBREC 
                        RESULTS SYSTEM</small></span></a>
                </h1><!--//logo-->
                  <div class="info col-md-6 col-sm-12">
                    <ul class="menu-top navbar-right hidden-xs">
                        <li class="divider" style="color: white;padding-top: 15px;font-size:15px"><i class="fa fa-phone" style="color: white;"></i> +91-9515995606</li>
                       
                    </ul><!--//menu-top-->
                   
                </div><!--//info-->
                </div>
    
               
                
  
    </header>
                            <div class="content container">
                    
            <div class="hgroup">
          <div class="container">
               <h2>Results</h2>
           </div>
     </div>
               <div class="col-md-offset-3 col-md-5">
  <div class="panel loginform">
    <div class="panel-heading">
      <h3>B.Tech</h3>
    </div>
    
    <div class="panel-body" style="padding:15px 0;">
<?php $sem_id=$_POST['season'];
 ?>
       <form action="getresults.php" method="post" name="result">
  <div class="form-group">
         <label for="collcode">Registration Number *</label>
          
     <input name="regno" id="regno" required="" class="form-control" autofocus="">
     <?php
     echo'<input type="hidden" id="season" name="season" value=';echo $sem_id;echo '>';?>
     
     </div><br>
     <div align="right">
     <input type="submit"  name="Submit1" id="submit" value="Get Marks" class="btn btn-lg btn-theme" ></div>
            </form>

  
        
       
        
    </div>
                   
      </div>
    </div>
     
  </div>
<table>
   
        <tbody id="student_list">   

</tbody></table> 
      </div>



                <!-- content-wrap ends here --> 

</section> 
     </div></div>

   <!-- ******FOOTER****** -->
    <footer class="footer">
       
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <p class="copyright col-md-12 col-sm-12 col-xs-12" style="text-align:center">Designed, Developed &amp; Maintained by T.Sri Harinadh, WALL-E | Copyright © 2019 - All Rights Reserved.</p>
                   
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
      <script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
         <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
     <script type="text/javascript" src="assets/js/main.js"></script>
                        <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68500340-1', 'auto');
  ga('send', 'pageview');
     </script>

<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div><div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 1; cursor: pointer;"><i class="fa fa-angle-up"></i></div></body></html>