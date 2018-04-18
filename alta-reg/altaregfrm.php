
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en><HEAD><META content="IE=7.0000" http-equiv="X-UA-Compatible">
<head>
<TITLE>ALTA Workshop 4-6 December 2012 - Registration</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=content-type>
<LINK rel=stylesheet type=text/css href="altaworkshop.css">
<link rel="shortcut icon" href="favicon.ico" >
</HEAD>
<BODY>

<script src="/site/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/site/jquery/jquery.validate.pack.js" type="text/javascript"></script>
<script src="/site/jquery/additional-methods2.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
  // validate signup form on keyup and submit
  var validator = $("#contactform").validate({

    rules: {
      contactname: {
	required: true,
	propername: true,
	minlength: 4
	},
      institution: {
	required: true,
	instname: true,
	minlength: 2
	},
     address1: {
	required: true,
	addy: true,
	minlength: 8
	},
      city: {
        required: true,
        propername: true,
        minlength: 2
        },
      country: {
        required: true,
        provcount: true,
        minlength: 2
        },
      telephone: {
        required: true,
        phonenum: true,
        minlength: 7
        },
      email: {
	required: true,
	email: true
	},
      zanum: {
	integer: true
	},
      fcnum: {
	integer: true
	},
      },
    messages: {
      contactname: {
	required: "Please enter your name",
	propername: "Please enter standard alphabetic characters",
	minlength: jQuery.format("Enter at least {0} characters")
	},
      institution: {
	required: "Please enter the name of your organisation.",
	instname: "Please enter standard alphabetic characters",
	minlength: jQuery.format("Enter at least {0} characters")
	},
      address1: {
	required: "Please enter your address.",
	addy: "Please enter only letters, numbers, '(',')','-'",
	minlength: jQuery.format("Enter at least {0} characters")
	},
      city: {
        required: "Please enter the name of the city for this address.",
        propername: "Please enter only letters, numbers, '(',')','-'",
        minlength: jQuery.format("Enter at least {0} characters")
        },
      country: {
        required: "Please enter the name of the country for this address.",
        provcount: "Please enter only letters and optionally ',' and/or '-'",
        minlength: jQuery.format("Enter at least {0} characters")
        },
      telephone: {
        required: "Please enter a contact phone-number.",
        phonenum: "Please enter only digits and optionally '-' and/or '(' ')'",
        minlength: jQuery.format("Enter at least {0} characters")
        },
     email: {
	required: "Please enter a valid email address",
	minlength: "Please enter a valid email address"
	},
     zanum: {
	integer: "Please enter numbers only"
	},
     fcnum: {
	integer: "Please enter numbers only"
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
<?php include("macquarie-header"); ?>

<!-- Start of main content -->

<br/>
<br/>
<hr size="1" noshade>
<h1>ALTA Workshop 2012 - Registration form</h1>

<div class="wrapper">
  <div id="contactWrapper" role="form">

      <p role="heading">Please fill in this form if you intend to come to the workshop (in Dunedin, 4th - 6th December 2012) <br/>
Please do not put links in response to any of the questions or your registration will fail</p>
<p>The form will validate your input, and use an html meta-refresh to process it, and if your registration is successful, you will receive an e-mail message (See: Submission of Details section at bottom of form). <br/>
(If your browser preferences are set to prevent reload/refresh/redirect the registration process will fail) <br/> <br/>
If you do not receive an e-mail confirming that your regsitration has been received, please e-mail the <a href="mailto:altaregtst@cs.otago.ac.nz"> local organisers </a> directly.  Thank you. <br/>
</p>
	<?php if(isset($hasError)) { //If errors are found ?>
	    <p class="error"><em>Please check that all the fields have valid information. Thanks.</em></p>
	<?php } ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">

<fieldset id="personalinfo">
<legend>Personal Information</legend>

	  <div>
	    <label for="contactname"><font size="2">Contact Name </font><span class="required" title="Required field.">*</span></label>
	    <input type="text" name="contactname" id="contactname" value="" class="required" role="input" />
	  </div>

          <div>
            <label for="prefname">Preferred Name for ID : </label>
            <input type="text" name="prefname" id="prefname" value="" />
          </div>

	  <div>
	    <label for="institution">Organisation <span class="required" title="Required field.">*</span></label>
	    <input type="text" name="institution" id="Organisation" value="" class="required" role="input" aria-required="true" />
	  </div>

	  <div>
	   <label for="address1">Address Line 1 <span class="required" title="Required field.">*</span></label>
	  <input type="text" name="address1" id="address1" value="" /> 
	  </div>

	  <div>
	    <label for="address2">Address Line 2 : </label>
	    <input type="text" name="address2" id="address2" value="" />  
	  </div>

	  <div>
	    <label for="city">City <span class="required" title="Required field.">*</span></label>
	    <input type="text" name="city" id="city" value="" />	    
	  </div>

	  <div>
	    <label for="postcode">Postcode : </label>
	    <input type="text" name="postcode" id="postcode" value="" />  
	  </div>

	  <div>
	    <label for="state">State/Province : </label>
	    <input type="text" name="state" id="state" value="" />  
	  </div>

	  <div>
	    <label for="country">Country <span class="required" title="Required field.">*</span></label>
	    <input type="text" name="country" id="country" value="" />  
	  </div>

	  <div>
	    <label for="telephone">Contact Phone <span class="required" title="Required field.">*</span></label>
	    <input type="text" name="telephone" id="telephone" value="" />  
	  </div>

	  <div>
	    <label for="email"><font size="2">Email </font><span class="required" title="Required field.">*</span></label>
	    <input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
	  </div>

	  <div class="stage clear">
	    <label for="special_requirements">Please inform us of any dietary and/or access requirements you may have <br/><br/><br/></label>
	    <textarea name="special_requirements" id="special_requirements"></textarea>
	  </div>

</fieldset>

<fieldset id="confinfo">
<legend>Workshop and Tutorial Registration</legend>

<div class="stage clear">
<br/>
  Your registration fee covers morning and afternoon tea, but not lunch. <br/>
  A Workshop Registration includes the cost of one tutorial (attendance at which is optional). <br/>
  Costs shown are in NZ dollars <br/>
  There is a conference dinner, but that must be paid for by each attendee at the dinner venue. <br/>
  There is an option to go on an evening cruise on Dunedin Harbour - see next section <br/>
<br/>
Please note - students may ask to be considered for a 
<a href="http://alta.asn.au/events/alta2012/alta-2012-studenttravel.html">
travel subsidy </a>
<br/>
<p>
You may register on this page to attend a tutorial, even if you do not intend to come to the Workshop.<br/>
<p>
<div class="stage clear">
<label for="workshop">Please <strong>uncheck</strong> this box if you do <strong> NOT</strong> wish to register for the ALTA Workshop</strong> : </label>
<input type="checkbox" name="workshop" id="workshop" value="YES" CHECKED>
</p>


<strong>Workshop Registration</strong><br/>
Cost of registrations for student presenters: NZ$0.00 (free)  <br/>
Cost of registrations for student non-presenters: NZ$150.00 <br/>
Cost of early registrations (until 5th November): NZ$250.00  <br/>
Cost of registrations (after 5th November): NZ$300.00  <br>
<br/>
<strong>Tutorial Registration</strong><br/>
Cost of a tutorial for student presenters: NZ$0.00 <br/>
Cost of a tutorial for people registered for the Workshop: NZ$0.00 <br/>
Cost of a tutorial for people who are not attending the Workshop: NZ$50.00 <br/>
<strong>Available Tutorials</strong><br/>
Please indicate your preference by selecting the relevant option :- <br/>
<select name="tutorial" size=1>
<option>None</option>
<option>Biomedical Natural Language Processing</option>
<option>Introduction to Statistical Natural Language Processing</option>
</select>
</p> <p>
<div class="stage clear">
<label for="student"><strong>Check this box if you are a student</strong> at an accredited <br/> institute of higher education : </label>
<input type="checkbox" name="student" id="student" value="NO">
</p>
</div>

</fieldset>

<fieldset id="otherinfo">
	<legend><span>Accepted papers</span></legend>
          <div class="stage clear">

	<p>Each accepted paper requires one of the authors to register for the
	conference. One full registration can cover two papers. One student
	registration can cover only one paper. For example, if you are the only
	attending author of four accepted papers, then at least two full
	registrations will be required (or two papers will need to be
	withdrawn).</p>
<p> If you have had one of more papers accepted, please specify how many :-
</p>
	<label for="accepted">Number of papers accepted for presentation</label>
	<input type="number" name="paccepted" id="paccepted" value="0" />
<br/> <p>
</p>
<p>
<br/>
	<label for="ptitle1">Paper 1 Title</label>
	<input type="text" name="ptitle1" id="paper_title_1" value="" />
	<label for="pnumber1">Paper 1 Number</label>
	<input type="text" name="pnumber1" id="paper_number_1" value="" />
<br/>  </p><p>
	<label for="ptitle2">Paper 2 Title</label>
	<input type="text" name="ptitle2" id="paper_title_2" value="" />
	<label for="pnumber2">Paper 2 Number</label>
	<input type="text" name="pnumber2" id="paper_number_2" value="" />
<br/></p>
</div>
</fieldset>

<fieldset> <legend>Social Events</legend>

<p>You may be accompanied by extra people to either/both of the social events
if you wish, but you must indicate to the organisers how many people will be
attending, so that the venue can be informed of numbers.
</p>

          <p>There will be a joint ALTA Workshop / ADCS Conference Dinner at 7:30pm on December 5th,
at <a href="http://www.filadelfios.co.nz/">Filadelfio's</a> gourmet pizza restaurant 
<a href="http://maps.google.co.nz/maps?q=3+North+Road,+Dunedin,+Otago&hl=en&sll=-41.244772,172.617188&sspn=51.10191,113.818359&oq=3+North+Road+Dunedin&hnear=3+N+Rd,+North+East+Valley,+Dunedin+9010,+Otago&t=m&z=16&iwloc=A">Dunedin North</a>.
<br/>This will be paid for by the attendee at the dinner. <br/>
          Please indicate whether you would like to attend <br/><br/>
                <label for="pizzayes">Yes</label>
              <input type="radio" name="RadioGroup1" id="pizzayes" value="pizzayes" class="required" role="input" aria-required="true" /> <br/>
                <label for="pizzano">No</label>
              <input type="radio" name="RadioGroup1" id="pizzano" value="pizzano"  class="required" role="input" aria-required="true" /> <br/>
<br/>

If you would like to bring extra people to the dinner, please indicate the <br/>
<label for=zanum>number of <strong>extra people</strong> here:</label>
		<input type="number" name="zanum" id="zanum" value="0" />  

	  <p><br/>There is an option to go on a 'Fish & Chip Cruise' on 6 December
(departing at 7.30pm, NZ$48 per person) on the
<i><a href="http://www.wildlife.co.nz/">MV Monarch</a></i>. Places are limited.  <br/>
	  Please indicate whether you are interested in this. (You will be paying on the day.)  <br/> <br/>
		<label for="cruiseyes">Yes</label> 
	      <input type="radio" name="RadioGroup2" id="cruiseyes" value="cruiseyes" class="required" role="input" aria-required="true" />  <br/>
		<label for="cruiseno">No</label>
	      <input type="radio" name="RadioGroup2" id="cruiseno" value="cruiseno" class="required" role="input" aria-required="true" /> <br/>
<br/>
If you would like extra tickets for the cruise, please indicate how many extra you would like :-
		<label for="fcnum">Number of <strong>extra</strong> tickets you would like for the cruise</label>
		<input type="number" name="fcnum" id="fcnum" value="0" />  

</fieldset>

<fieldset>
<legend>Accommodation Options</legend>

<div class="stage clear">
The Workshop is being held in the Department of Computer Science, Owheo Building, 133 Union Street East, Dunedin. <br/>
You could book a room at <a href="http://www.otago.ac.nz/cumberland/conferences/otago019087.html"> Cumberland House <a/> (a University managed student residence) - cost is $50 per diem including breakfast -  or you could visit the university's <a href="http://www.otago.ac.nz/about/accommodation/otago000807.html"> accommodation page </a> if you wish to see  other options for accommodation near the venue.
</div>
</fieldset>


<fieldset>
<legend>Privacy Act</legend>

<p>The information on this form will be used solely for the purposes of organising and planning the conference. If you do not wish
to have your name published as part of this conference or made available to other delegates please advise us.</p>

<div class="stage clear">
	<label class="tixboxlab" for="privacy"><strong>I do not wish to have my name made public </strong></label>
	<input class="tixboxchk" name="privacy" id="privacy" type="checkbox" value="YES" CHECKED />
</div>
</fieldset>

<fieldset>
<legend>Cancellation and refund policy</legend>
<p>Cancellation of registration up until 18 November will result in a full refund except for an administration fee of $60.<br/>
After 18 November, no refund will be applied.<br/>
Refunds will only be directed back to those accounts from which the initial payment was made.</p>
</fieldset>

<fieldset>
<legend>Disclaimer</legend>

<p>In the event of unforeseen circumstances (industrial or otherwise) that
disrupt the conference, the conference organisers accept no responsibility.</p>

<p>The information on the conference website and in the printed material is
correct at the time of publication. However, the conference organisers reserve
the right to change information if required and to adjust the conference
programme accordingly.</p></fieldset>

<fieldset><legend>Submission of Details</legend>
<p>Please check that you have entered your details correctly, and then use the
"Send Message" button to send them to the organisers. You will receive an e-mail
at the address you have supplied stating how much the organisers have calculated
your fees to be, and containing a link to a page which you should print out and
fill in with your payment details, and then send to the organisers according to
the instructions given on the page.
<input type="submit" value="Send Message" name="submit" id="submitButton" title="Register" />
</p>

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

        if(trim($_POST['prefname']) == '')
                { $prefname = ""; }
        else
                { $prefname = trim($_POST['prefname']);
                }

	//Check to make sure that the Organisation field is not empty
	if(trim($_POST['institution']) == '')
		{ $hasError = true; }
	else
	 	{ $institution = trim($_POST['institution']);
		}

	//Check to make sure that Address line 1 is not empty
	if(trim($_POST['address1']) == '')
		{ $hasError = true; }
	else
	 	{ $address1 = trim($_POST['address1']);
		}

        if(trim($_POST['address2']) == '')
                { $address2= ""; }
        else
                { $address2= trim($_POST['address2']);
                }

	//Check to make sure that the city field is not empty
	if(trim($_POST['city']) == '')
		{ $hasError = true; }
	else
	 	{ $city = trim($_POST['city']);
		}

        if(trim($_POST['postcode']) == '')
                { $postcode = ""; }
        else
                { $postcode = trim($_POST['postcode']);
                }

        if(trim($_POST['state']) == '')
                { $state = ""; }
        else
                { $state = trim($_POST['state']);
                }

	//Check to make sure that the Country field is not empty
	if(trim($_POST['country']) == '')
		{ $hasError = true; }
	else
	 	{ $country = trim($_POST['country']);
		}

	//Check to make sure that a Contact Phone number has been supplied
	if(trim($_POST['telephone']) == '')
		{ $hasError = true; }
	else
	 	{ $telephone = trim($_POST['telephone']);
		}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')
		{ $hasError = true; }
	else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email'])))
		{ $hasError = true; }
	    else
		{ $email = trim($_POST['email']);
		}

        if(eregi("http:", trim($_POST['special_requirements'])))
             { $hasError = true; }
             else if(!trim($_POST['special_requirements']) == '')
                { $special_requirements= trim($_POST['special_requirements']);
                }

	$workshop = trim($_POST['workshop']);

	$tutorial = trim($_POST['tutorial']);

        if(trim($_POST['student']) == '')
                { $student = "0"; }
        else
                { $student = "1";
                }

        if(trim($_POST['RadioGroup1']) == '')
                { $hasError = true; }
        else if(trim($_POST['RadioGroup1']) == 'pizzayes')
                    { $pizzaopt = 'do'; }
                else if (trim($_POST['RadioGroup1']) == 'pizzano')
                        { $pizzaopt = 'do not'; }

	if(trim($_POST['zanum'])== '')
	 	{ $zanum = "0";}
	else
		{ $zanum = trim($_POST['zanum']);}

	if(trim($_POST['RadioGroup2']) == '')
                { $hasError = true; }
        else if(trim($_POST['RadioGroup2']) == 'cruiseyes')
                    { $cruiseopt = 'do'; }
                else if (trim($_POST['RadioGroup2']) == 'cruiseno')
                        { $cruiseopt = 'do not'; }

	if(trim($_POST['fcnum'])== '')
		{ $fcnum = "0";}
	else
		{ $fcnum = trim($_POST['fcnum']);}

        if(trim($_POST['paccepted']) == '')
                { $paccepted = "0";
		  $ptitle1 = "";
		  $pnumber1 = "";
		  $ptitle2 = "";
		  $pnumber2 = "";
		}
        else
                { $paccepted = trim($_POST['paccepted']);
		  $ptitle1 = trim($_POST['ptitle1']);
		  $pnumber1 = trim($_POST['pnumber1']);
		  $ptitle2 = trim($_POST['ptitle2']);
		  $pnumber2 = trim($_POST['pnumber2']);
                }

	$privacy = trim($_POST['privacy']);


$fields = array(
    'contactname'=>$contactname,
    'prefname'=>$prefname,
    'institution'=>$institution,
    'address1'=>$address1,
    'address2'=>$address2,
    'city'=>$city,
    'postcode'=>$postcode,
    'state'=>$state,
    'country'=>$country,
    'telephone'=>$telephone,
    'email'=>$email,
    'special_requirements'=>$special_requirements,
    'workshop'=>$workshop,
    'tutorial'=>$tutorial,
    'student'=>$student,
    'pizzaopt'=>$pizzaopt,
    'zanum'=>$zanum,
    'cruiseopt'=>$cruiseopt,
    'fcnum'=>$fcnum,
    'paccepted'=>$paccepted,
    'ptitle1'=>$ptitle1,
    'pnumber1'=>$pnumber1,
    'ptitle2'=>$ptitle2,
    'pnumber2'=>$pnumber2,
    'privacy'=>$privacy,
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
  echo '<head><meta http-equiv=REFRESH content=0;URL=http://www.cs.otago.ac.nz/cs-bin/altareg?';
  echo $postvars;
  echo '></head>';
  }

}
 
?>

      </div>
    </div>


<!-- End of main table --><!-- Start of footer -->

<?php include("macquarie-footer"); ?>
<br /> <br />
</BODY></HTML>

