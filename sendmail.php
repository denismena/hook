<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Hook</title>    
    <meta name="keywords" content="Hook, containere, port, incaracari" />
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

</head>
<body id="page2">
<div id="main-tail-ver">
  <div id="main-bg-top">
    <div id="main">
      <!-- header -->
      <div id="header"> <a href="#"><img src="images/logo.jpg" id="logo" alt="" /></a>
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
          <li><a href="quotation.php"><img src="images/england_flag.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/ro.jpg" alt="" /></a></li>
        </ul>
        <ul id="menu">
          <li><a href="indexRo.html">Acasa</a></li>
          <li><a href="servicii.html">Servicii</a></li>
          <li><a href="TransportContainerizat.html">Transport containerizat</a></li>
          <li><a href="TransportConventional.html">Transport conventional</a></li>
		  <li><a href="incoterm.html">Incoterms</a></li>
          <li><a href="#">Cotatie</a></li>
          <li><a href="cont.html">Contact</a></li>                    
        </ul>         
        </div>
      <!-- content -->
      <div id="content">
          <div class="wrapper">
            <div class="col-1"> 
                <h2>
              Cere cotatie</h2>              				
				<p>Daca doriti o cotatie de la S.c. Hook s.r.l., completati formularul de mai jos si apasati butonul <x style="font-weight:bold">Trimite</x> iar noi va vom raspunde in cel mai scurt timp posibil</p>
              <br /><br />
              <dl class="list-2">
				<?php
					$catre = 'tfever_1@yahoo.co.uk';
					$data_trimitere = date('d-m-Y H:i:s');
					$subiect = $_POST['subiect'];
					$mesaj = '
					<html>
					<head>
					<title>Cotatie site</title>
					</head>
					<body>
					<p><tt>Data trimitere: '.$data_trimitere.' </tt></p>
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
					<td><tt> Informatie cotatie: <br><br> '.$_POST['message'].' </tt></td>
					</tr>
					</table>
					</body>
					</html>';

					$headere  = "MIME-Version: 1.0\r\n";
					$headere .= "Content-type: text/html; charset=iso-8859-1\r\n";
					$headere .= "From: ".$_POST['contact_name']." ".$_POST['company']."<".$_POST['email'].">\r\n";

					mail($catre, $subiect, $mesaj, $headere);

					echo 'Mesajul a fost trimis';
				
				?>                
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
                    <p>© Copyright, S.C. Hook S.R.L., All Rights Reserved. </p>
                </div>
    </div>
  </div>
</div>
</body>
</html>