<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Hook - Transport Romania</title>
        <meta name="description" content="Sc Hook srl acts on behalf of importers, exporters or other companies or persons, organizing the safe, efficient and cost-effective transportation of goods.We offer the best transportation solutions for all your logistic needs at highly competitive prices. " />	
    <meta name="keywords" content = "transport,container,supervising,romania,cargo,agent,forwarding,bulk,maritim,agent,constanta,port,firm,profurnizor" />
    <meta name="distribution" content="global" />	
    <meta name="robots" content="index,follow" />	
    <meta name="language" content="ro,en" />	
    <meta name="rating" content="general" />	
    <meta name="publisher" content="hook-transport.ro" />	
    <meta name="copyright" content="Copyright (c) Hook-transport.ro" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="layout.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/cycle.js"></script>
    <script type="text/javascript">
        $(function () {            
            $('.uncover').cycle({
                fx: 'all',
                before: function (curr, next, opts) {
                    opts.animOut.opacity = 0;
                }
            });
        });
    </script>
<script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-21913922-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>
<body id="page2">
<div id="main-tail-ver">
  <div id="main-bg-top">
    <div id="main">
      <!-- header -->
      <div id="header" style="padding-top:180px;"> <a href="#"><img src="images/logo.jpg" id="logo" alt="" /></a>
	  <div class="imgUp" style="right:530px">
                        <div class="uncover">
                            <img src="images/p1.jpg" />
                            <img src="images/p2.jpg" />
                            <img src="images/p7.jpg" />
                            <img src="images/p8.jpg" />
                            <img src="images/p9.jpg" />
                            <img src="images/p16.jpg" />
                            <img src="images/p17.jpg" />
                            <img src="images/p21.jpg" />                            
                        </div>
                    </div>
                    <div class="imgUp" style="right:340px">
                        <div class="uncover">
                            <img src="images/p3.jpg" />
                            <img src="images/p4.jpg" />
                            <img src="images/p10.jpg" />
                            <img src="images/p11.jpg" />
                            <img src="images/p12.jpg" />
                            <img src="images/p18.jpg" />
                            <img src="images/p19.jpg" />
                            <img src="images/p23.jpg" />
                        </div>
                    </div>
                    <div class="imgUp" style="right:150px">
                        <div class="uncover">
                            <img src="images/p5.jpg" />
                            <img src="images/p6.jpg" />
                            <img src="images/p13.jpg" />
                            <img src="images/p14.jpg" />
                            <img src="images/p15.jpg" />
                            <img src="images/p20.jpg" />
                            <img src="images/p22.jpg" />
                            <img src="images/p24.jpg" />
                        </div>
                    </div>
        <ul id="icons">
          <li><a href="#"><img src="images/england_flag.gif" alt="" /></a></li>
          <li><a href="cotatie.php"><img src="images/ro.jpg" alt="" /></a></li>
        </ul>
        <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="containerized.html" class="row-middle">Containerized transport</a></li>
            <li><a href="conventional.html" class="row-middle">Conventional transport</a></li>
            <li><a href="Certification.html" class="row-middle">Certifications</a></li>
            <li><a href="Affiliation.html">Affiliations</a></li>
            <li><a href="incoterms.html">Incoterms</a></li>
            <li><a href="quotation.php">Quotation</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        </div>
      <!-- content -->
      <div id="content">
          <div class="wrapper">
            <div class="col-1"> 
                <h2>
              Quotation Request</h2>              
				<p>If you would like a quotation from S.c. Hook s.r.l, simply complete the form below and click submit and we will reply to you as soon as possible. </p>
              <br /><br />
              <dl class="list-2">   
              				<?php
									
				if(isset($_POST['send'])){
		include('Mail.php');
        include('Mail/mime.php');

		
		$sender = $_POST['email'];
		$data_trimitere = date('d-m-Y H:i:s');                                       // Your email address
        $recipient = "office@hook-transport.ro";                               // The Recipients name and email address
        $subject = $_POST['subiect'];                                                // Subject for the email
        $text = 'Data trimitere:'.$data_trimitere.'. Nume: '.$_POST['contact_name'].'. Companie: '.$_POST['company'].' Telefon: '.$_POST['phone'].'. E-Mail: <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'.  Detalii cotatie: <br><br> '.$_POST['message']; 
                                             // Text version of the email
        $html = '<html><body>
        <tt>Data trimitere: '.$data_trimitere.' </tt>
					<table>
					<tr>
					<td><tt> Nume: '.$_POST['contact_name'].' </tt></td>
					</tr>
					<tr>
					<td><tt> Companie: '.$_POST['company'].' </tt></td>
					</tr>
					<tr>
					<td><tt> Telefon: '.$_POST['phone'].' </tt></td>
					</tr>					
					<tr>
					<td><tt> E-Mail: <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a> </tt></td>
					</tr>
					<tr>
					<td><tt> Detalii cotatie: <br><br> '.$_POST['message'].' </tt></td>
					</tr>
					</table></body></html>';      // HTML version of the email
        $crlf = "\n";
        $headers = array(
                        'From'          => $sender,
                        'Return-Path'   => $sender,
                        'Subject'       => $subject 
                        );
 
        // Creating the Mime message
        $mime = new Mail_mime($crlf);
 
        // Setting the body of the email
        $mime->setTXTBody($text);
        $mime->setHTMLBody($html);        
 
        // Set body and headers ready for base mail class 
        $body = $mime->get();
        $headers = $mime->headers($headers);
 
        // SMTP authentication params
        $smtp_params["host"]     = "mail.intersat-telecom.ro";
        //$smtp_params["port"]     = "25";
        $smtp_params["auth"]     = true;
        $smtp_params["username"] = "web@hook-transport.ro";
        $smtp_params["password"] = "hook2010";
 
        // Sending the email using smtp
        $mail =& Mail::factory("smtp", $smtp_params); 
        $result = $mail->send($recipient, $headers, $body);
        if($result == 1)
        {
          echo("<h4>The quotation was send!</h4>");
        }
        else
        {
          echo("<h4>A error has occurred! The quotation was not send!</h4>");
        }

	  }
				?>           				
                <form method="post">
                <table>
				  <tr>
				  <td class="formtext" >Name</td>
				  <td><input name="contact_name" id="contact_name"  type="text" style="background:#ffffff;"   size="37" class="text"></td>
				  </tr>
				  <tr>
				  <td class="formtext">Company</td>
				  <td><input name="company" id="company" type="text" class="text"  style="background:#ffffff;" size="37"></td>
				<tr>
				<td class="formtext">Telephone</td>
				<td><input name="phone" id="phone"  type="text" class="text"  style="background:#ffffff;" size="37"></td>
				</tr>
				<tr>
				<td class="formtext">Email</td>
				<td><input name="email" id="email"  type="text" class="text" style="background:#ffffff;"  size="37"></td>
				</tr>
				<tr>
				<td class="formtext" valign="top">Quotation Information</td>
				<td><textarea name="message" class="text" cols="38" rows="6" style="background:#ffffff;scrollbar-face-color: #ffffff;scrollbar-arrow-color:#00B4CB;" id="message"></textarea>
                    </td>
				</tr>				 
				<tr>
				<td colspan="2" style="padding-bottom:10px;padding-left:140px;">
				<input name="send" id="send" type="submit"  value="Send" 
					class="submitbutton" onclick="return checkForm();">
				<input type="reset" name="Reset" class="submitbutton"  value="Reset">
				</td>
				</tr>				  
				 </table>
                </form>
              </dl>
              <div class="clear"></div>              
            </div>
          </div>
      </div>
      
      <div id="footer">
                    <div class="big-box">
                        <ul class="logos-credits">
                            <li>
                                <img src="images/credits/BureauVeritas.jpg" alt="BureauVeritas" />
                            </li>
                            <li>
                                <img src="images/credits/isoAnab.jpg" alt="isoAnab" />
                            </li>
                            <li>
                                <img src="images/credits/fiata.png" alt="fiata" />
                            </li>
                            <li>
                                <img src="images/credits/user.png" alt="user" />
                            </li>
                        </ul>
                    </div>
                    <p>? Copyright, S.C. Hook S.R.L., All Rights Reserved. </p>
                </div>
    </div>
  </div>
</div>
</body>
</html>