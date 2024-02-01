<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/contact_template.dwt" codeOutsideHTMLIsLocked="false" -->


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contact</title>
<!-- InstanceEndEditable -->
<style type="text/css"></style>


<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}	
	
</script>
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<link href="_css/indexcontact.css" rel="stylesheet" type="text/css" />
</head>


<body onload="MM_preloadImages('_images/linksabout.png','_images/linksportfolio.png','_images/linkscontact.png','_images/linkshome.png','_images/pwrlogo_hover.png','_images/extlinksBe.png','_images/extlinksPin.png','_images/extlinksIn.png','_images/extlinksFs.png','_images/topnavon_blueabout.png','_images/topnavon_bluecontact.png','_images/topnavon_blueindex.png','_images/topnavon_grnabout.png','_images/topnavon_grnport.png','_images/topnavon_grnindex.png')">
<!-- InstanceBeginEditable name="body" -->



<!--CONTAINER-->
<div class="container">
<div class="topNav"><img src="_images/topnavon_grncontact.png" alt="Contact" width="300" height="22" border="0" usemap="#Map" id="Image3" />
  <map name="Map" id="Map">
    <area shape="rect" coords="-3,-1,49,25" href="about.html" alt="About" onmouseover="MM_swapImage('Image3','','_images/topnavon_grnabout.png',1)" onmouseout="MM_swapImgRestore()" />
    <area shape="rect" coords="58,-1,138,24" href="portfolio.html" alt="Portfolio" onmouseover="MM_swapImage('Image3','','_images/topnavon_grnport.png',1)" onmouseout="MM_swapImgRestore()" />
    <area shape="rect" coords="146,-1,219,25" href="contact.html" alt="Contact" />
    <area shape="rect" coords="225,-1,253,27" href="index.html" alt="Home" onmouseover="MM_swapImage('Image3','','_images/topnavon_grnindex.png',1)" onmouseout="MM_swapImgRestore()" />
  </map>
</div>



  <!--HEADER with Logo and Section Headline-->
  <div class="header"></div>
  <!--HEADER Closing Tag-->



  <!--CONTENT-->
  <div class="content">
  
      <div id="apDiv1"><!-----Contact Form----------->
      
      
        <?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "eugeniosilva3300@gmail.com";
    $email_subject = "Contact Form Info";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
		!isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    $first_name = $_POST['fname']; // required
    $last_name = $_POST['lname']; // required
    $email_from = $_POST['email']; // required
	$telephone = $_POST['telephone']; // not required
	$subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

?>



<h3>
  <center mm_ta_hilitecolor="bold">Thank you for your inquiry! &nbsp;I will be in touch very soon.
 </center> </h3>   <?php
}
?>

      
      
      
      
     <form action="" method="get">
       <table width="567" border="0" cellpadding="2" cellspacing="2">
         <tr>
           <td width="81">First Name:</td>
           <td colspan="2"><span id="sprytextfield1">
             <label>
               <input type="text" name="fname" id="fname" />
             </label>
            <span class="textfieldRequiredMsg">Please fill in first name</span></span></td>
         </tr>
         <tr>
           <td>Last Name:</td>
           <td colspan="2"><span id="sprytextfield2">
             <label>
               <input type="text" name="lname" id="lname" />
             </label>
            <span class="textfieldRequiredMsg">Please fill in last name</span></span></td>
         </tr>
         <tr>
           <td>Email:</td>
           <td colspan="2"><span id="sprytextfield3">
           <label>
             <input type="text" name="email" id="email" />
           </label>
           <span class="textfieldRequiredMsg">Please supply your email</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
         </tr>
         <tr>
           <td>Telephone:</td>
           <td colspan="2"><span id="sprytextfield4">
           <label>
             <input type="text" name="telephone" id="telephone" />
           </label>
<span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
         </tr>
         <tr>
           <td>Subject:</td>
           <td colspan="2"><span id="sprytextfield5">
             <label>
               <input name="subject" type="text" id="subject" />
              <span class="textfieldRequiredMsg">A subject is needed</span></label>
</span></td>
         </tr>
         <tr>
           <td>Meassage:</td>
           <td colspan="2"><span id="sprytextarea2">
             <label for="message"></label>
             <span id="sprytextarea3">
            <label for="message"></label>
            <span id="sprytextfield6">
            <label>
              <textarea name="message" cols="64" rows="9" id="message"></textarea>
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span>             </span></span></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td width="114"><input type="submit" name="submit" id="submit" value="Submit" /></td>
           <td width="352"><input type="reset" name="reset" id="reset" value="Reset" /></td>
          </tr>
       </table>
     </form> 
     <br />
     <div class="emailsml">Please feel free to click the link below to send a general email. Thank You.
       <br />
       <div class="white"><a href="mailto:gino@ginosilva.com">gino@ginosilva.com</a></div>
     </div>
    </div>
  
      <div class="headersection">
      <table width="610" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2"><img src="_images/title_contact.png" width="424" height="68" alt="Contact" align="right" /></td>
        </tr>
        <tr align="left" valign="top">
          <td width="258" height="180">&nbsp;</td>
          <td width="352"><ul>
            <li><a href="contact.html">EMAIL: gino@ginosilva.com</a></li>
            <li>PHONE: 201-988-5663</li>
          </ul></td>
        </tr>
      </table>
    </div>
  
     
   <!-- <div class="indexList"> <a href="../portadv.html">ADVERTISING & PRINT</a><br />
      <a href="../portpharm.html" class="green">PHARMACEUTICALS</a><br />
      <a href="../portpkg.html">PACKAGING DESIGN</a><br />
      <a href="../portpro.html">PROMOTIONS</a><br />
      <a href="../portlogo.html">LOGO DESIGN</a><br />
      <a href="../portedu">EDUCATION</a><br />
      <a href="../portedit.html">EDITORIAL DESIGN</a><br />
      <a href="../porttel.html">TELEVISION </a><br />
      <a href="../portweb.html">WEB DESIGN </a><br />
      <a href="../portillu.html">ILLUSTRATION </a> </div>-->
  </div>
  <!--CONTENT Closing Tag-->
  
  
  
  <!--FOOTER-->

  <div class="footer">
  
  <table width="623" border="0" cellspacing="2" class="footerTable">
      <tr>
        <td width="325" class="footerInfoTableLrg" scope="col"> <a href="mailto:gino@ginosilva.com">GINO@GINOSILVA.COM</a>&nbsp;|&nbsp;Tel. 201-988-5663<br />
© 2013 Forecast Studios, Inc.&nbsp;|&nbsp;Ridgefield, NJ<br /></td>
        <td width="280" scope="col"><img src="_images/links.png" alt="Footer Navigation" width="239" height="30" border="0" usemap="#Image1Map" id="Image1" onmouseover="MM_swapImage('Image1','','_images/linksportfolio.png',1)" onmouseout="MM_swapImgRestore()" /></td>
      </tr>
      <tr>
        <td height="35" colspan="2" class="footerInfoTable" id="shadow" scope="col">• ADVERTISING &amp; PRINT • PHARMACEUTICAL • PACKAGING DESIGN • PROMOTIONS • LOGO DESIGN • EDUCATION <br />
• PUBLICATION • TELEVISION • WEB DESIGN • ILLUSTRATION</td>
      </tr>
    </table>
  
  
    <div id="apDiv5"><img src="_images/extlinks.png" alt="Extrenal Links" width="258" height="120" border="0" usemap="#Image4Map" id="Image4" />
      <map name="Image4Map" id="Image4Map">
        <area shape="rect" coords="18,19,70,71" href="http://www.behance.net/ginosilvacreative" target="_blank" alt="Behance Link" onmouseover="MM_swapImage('Image4','','_images/extlinksBe.png',1)" onmouseout="MM_swapImgRestore()" />
        <area shape="rect" coords="76,18,127,70" href="http://www.pinterest.com/eugeniosilva/boards/" target="_blank" alt="Pinterest Link" onmouseover="MM_swapImage('Image4','','_images/extlinksPin.png',1)" onmouseout="MM_swapImgRestore()" />
        <area shape="rect" coords="134,19,186,69" href="http://www.linkedin.com/in/eugeniosilva" target="_blank" alt="Linked-in Link" onmouseover="MM_swapImage('Image4','','_images/extlinksIn.png',1)" onmouseout="MM_swapImgRestore()" />
        <area shape="rect" coords="191,18,243,69" href="http://www.forecaststudios.com" target="_blank" alt="Forecast Studios Link" onmouseover="MM_swapImage('Image4','','_images/extlinksFs.png',1)" onmouseout="MM_swapImgRestore()" />
      </map>
    </div>
  </div>

  <!--FOOTER closing Tag-->



</div>
<!--CONTAINER closing Tag-->



<map name="Image1Map" id="Image1Map">
  <area shape="rect" coords="1,1,59,28" href="about.html" alt="About Footer Nav" onmouseover="MM_swapImage('Image1','','_images/linksabout.png',1)" onmouseout="MM_swapImgRestore()" />
  <area shape="rect" coords="60,1,122,29" href="portfolio.html" alt="Portfolio Footer Nav" onmouseover="MM_swapImage('Image1','','_images/linksportfolio.png',1)" onmouseout="MM_swapImgRestore()" />
  <area shape="rect" coords="123,0,185,26" href="contact.html" alt="Contact Footer Nav" onmouseover="MM_swapImage('Image1','','_images/linkscontact.png',1)" onmouseout="MM_swapImgRestore()" />
  <area shape="rect" coords="186,1,237,31" href="index.html" alt="Home Footer Nav" onmouseover="MM_swapImage('Image1','','_images/linkshome.png',1)" onmouseout="MM_swapImgRestore()" />
</map>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", isRequired:false, validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
</script>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
