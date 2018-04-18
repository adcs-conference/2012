
<?php
$page = dirname($_SERVER['SCRIPT_NAME']);
$result ='';
$result_arg = $_GET['result'];
$file = $_SERVER['DOCUMENT_ROOT']."/conferences/adcs-altw-2012/adcsregres.xml";
if (file_exists( $file )) {
	$adcsregres_xml = simplexml_load_file( $file );
} else {
	exit('Failed to open adcsregres.xml.');
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en><HEAD><META content="IE=7.0000" http-equiv="X-UA-Compatible">
<head>
<TITLE>ADCS 2012 Registration</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=content-type>
<LINK rel=stylesheet type=text/css href="/conferences/adcs-altw-2012/altaworkshop.css">
<link rel="shortcut icon" href="favicon.ico" >
</HEAD>
<BODY>

<?php include("menu-adcs.php"); ?>

<!-- Start of main content -->

    <td width="100%" colSpan=5 valign="top" class=sitename><br/>
        The Seventeenth Australasian Document Computing Symposium 2012   
        <br/>
        <br/>

    <hr size="1" noshade>

      <P>
        <h1>ADCS2012 - Registration of Interest - Feedback</h1>

          <?php
            if ( empty( $result_arg ) ) { 
              echo '<p>Thanks for your submission - unfortunately we have had a problem processing it - please try again.<br/><br/>'; 
              echo 'Please go back to the <a href="http://www.cs.otago.ac.nz/research/conferences/adcs-altw-2012/adcsregfrm.php"> registration page</a></p>';
            } else {
		foreach ( $adcsregres_xml->xpath('//adcsregres/feedback') as $feedback) {
		  if ( $feedback->result == $result_arg ) {
		    echo '<p>', $feedback->blurb, '</p>';
                  }
                }
              }
          ?>

<!-- End of body content --></TD>

  <TD width="2%"></TD>
  </td>
  </tr>
</table>

<!-- Start of footer -->
<HR>
&copy; ADCS 2012
</BODY></HTML>

