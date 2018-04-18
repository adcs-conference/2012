
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en><HEAD><META content="IE=7.0000" http-equiv="X-UA-Compatible">
<head>
<TITLE>ADCS 2012</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=content-type>
<LINK rel=stylesheet type=text/css href="altaworkshop.css">
<link rel="shortcut icon" href="favicon.ico" >
</HEAD>
<BODY>

<script src="/site/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/site/jquery/jquery.validate.pack.js" type="text/javascript"></script>
<script src="/site/jquery/additional-methods.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
  // validate signup form on keyup and submit
  var validator = $("#contactform").validate({

    rules: {
      contactname: {
	required: true,
	propername: true,
	minlength: 2
	},
      email: {
	required: true,
	email: true
	},
      institution: {
	required: true,
	instname: true,
	minlength: 2
	},
      },
    messages: {
      contactname: {
	required: "Please enter your name",
	propername: "Please enter standard alphabetic characters",
	minlength: jQuery.format("Enter at least {0} characters")
	},
     email: {
	required: "Please enter a valid email address",
	minlength: "Please enter a valid email address"
	},
      institution: {
	required: "Please enter the name of your institution.",
	instname: "Please enter standard alphabetic characters",
	minlength: jQuery.format("Enter at least {0} characters")
	},
      },
    // set this class to error-labels to indicate valid fields
      success: function(label) {
	label.addClass("checked");
	}
      });
    });

</script>

<!-- Add left side menu -->
<?php include("menu-adcs.php"); ?>

<!-- Start of main content -->
<td width="100%" colSpan=5 valign="top" class=sitename><br/>
The Seventeenth Australasian Document Computing Symposium 2012 

<br/>
<br/>
<hr size="1" noshade>
<h1>ADCS2012 - Registration form</h1>

<div class="wrapper">
  <div id="contactWrapper" role="form">

      <p role="heading">Please fill in this form if you intend to come to the symposium:</p>

	<?php if(isset($hasError)) { //If errors are found ?>
	    <p class="error"><em>Please check that all the fields have valid information. Thanks.</em></p>
	<?php } ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">

	  <div class="stage clear">
	    <label for="contactname"><font size="2">Contact Name: </font></label>
	    <input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
	  </div>

	  <div class="stage clear">
	    <label for="email"><font size="2">Email: </font></label>
	    <input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
	  </div>

	  <div class="stage clear">
	    <label for="institution"><font size="2">Institution: </font></label>
	    <input type="text" name="institution" id="institution" value="" class="required" role="input" aria-required="true" />
	  </div>

          <p>There will be a Conference Dinner at 7:30pm on December 5th - since ADCS does not have a registration fee this will be paid for by the attendee at the dinner. (Please see the program guide for more details.)
          <p>Please indicate whether you are interested in this. (Pay at the venue.) </p>
            <div class="stage clear">
              <input type="radio" name="RadioGroup1" id="pizzayes" value="pizzayes" class="required" role="input" aria-required="true" />
                <label for="pizzayes"><font size="2">Yes </font></label>
              <input type="radio" name="RadioGroup1" id="pizzano" value="pizzano"  class="required" role="input" aria-required="true" />
                <label for="pizzano"><font size="2">No</font></label>
            </div>

	  <p>There is an option to go on a 'Fish & Chip Cruise' on 6 December (departing at 7.30pm, NZ$48 per person) on the <i><a href="http://www.wildlife.co.nz/">MV Monarch</a></i>. Places are limited. </p>
	  <p>Please indicate whether you are interested in this. (You will be paying on the day.) </p>
	    <div class="stage clear">
	      <input type="radio" name="RadioGroup2" id="cruiseyes" value="cruiseyes" class="required" role="input" aria-required="true" /> 
		<label for="cruiseyes"><font size="2">Yes </font></label>	
	      <input type="radio" name="RadioGroup2" id="cruiseno" value="cruiseno"  class="required" role="input" aria-required="true" /> 
		<label for="cruiseno"><font size="2">No </font></label>
	    </div>

	    <input type="submit" value="Send Message" name="submit" id="submitButton" title="Register" />
	  </form>

<?php
//If the form is submitted
if(isset($_POST['submit'])) {
$namerr = '';

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '')
          { $hasError = true; }
	else if ( eregi("http:", trim($_POST['contactname'])))
                { $namerr = true; $hasError = true; }
	     else
		{ $contactname = trim($_POST['contactname']);
                }

	//Check to make sure that the subject field is not empty
	if(trim($_POST['institution']) == '')
		{ $hasError = true; }
	else
	 	{ $institution = trim($_POST['institution']);
		}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')
		{ $hasError = true; }
	else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email'])))
		{ $hasError = true; }
	    else
		{ $email = trim($_POST['email']);
		}

	if(trim($_POST['RadioGroup1']) == '')
                { $hasError = true; }
        else if(trim($_POST['RadioGroup1']) == 'pizzayes')
                    { $pizzaopt = 'do'; }
                else if (trim($_POST['RadioGroup1']) == 'pizzano')
                        { $pizzaopt = 'do not'; }

	if(trim($_POST['RadioGroup2']) == '')
                { $hasError = true; }
        else if(trim($_POST['RadioGroup2']) == 'cruiseyes')
                    { $cruiseopt = 'do'; }
                else if (trim($_POST['RadioGroup2']) == 'cruiseno')
                        { $cruiseopt = 'do not'; }

$fields = array(
    'contactname'=>$contactname,
    'email'=>$email,
    'institution'=>$institution,
    'pizzaopt'=>$pizzaopt,
    'cruiseopt'=>$cruiseopt,
    'sentfrom'=>$_SERVER['SERVER_NAME']
    );

$postvars='';
$sep='';

foreach($fields as $key=>$value)
{
   $postvars.=$sep.urlencode($key).'='.urlencode($value);
   $sep='&';
}
 echo $postvars;

if(!isset($hasError)) {
  echo '<head><meta http-equiv=REFRESH content=0;URL=http://www.cs.otago.ac.nz/cs-bin/adcsreg?';
  echo $postvars;
  echo '></head>';
  }

}
 
?>

      </div>
    </div>

  </tr>
</table>

<!-- End of main table --><!-- Start of footer -->

<HR>
&copy; ADCS 2012
</BODY></HTML>

