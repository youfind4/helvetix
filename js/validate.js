// JavaScript Document

function ChecktestimonialsForm(form)
{
	var errMsg  = "Please correct the following item(s):\n\n";
	var errNum  = 0;
	var fldName = "";

	if( ( form.name.value == "your name" || form.name.value == "") )
	{ 
		if( !errNum ) fldName = "name"; 
		errMsg += ++errNum + ". Enter your name.\n";
	}
	
	// CHECK THAT THE EMAIL ADDRESS IS VALID
	if( (form.email.value != "your email address" && form.email.value != "") && !isValidEmail(form.email.value) )
	{
		if( !errNum ) fldName = "email"; 
		errMsg += ++errNum + ". Your Email Address appears to be invalid.\n";
	}
	
	if( form.email.value == "" || form.email.value == "your email address")
	{ 
		if( !errNum ) fldName = "email"; 
		errMsg += ++errNum + ". Your Email Address cannot be blank.\n";
	}
	
	if( ( form.comment.value == "Review" || form.comment.value == "") )
	{ 
		if( !errNum ) fldName = "your comment"; 
		errMsg += ++errNum + ". Enter your comment.\n";
	}
	
	if( ( form.phone.value == "code" || form.phone.value == "") )
	{ 
		if( !errNum ) fldName = "code"; 
		errMsg += ++errNum + ". Enter verification code.\n";
	}

	// RETURN THE ERRORS OR ALLOW THE FORM TO SUBMIT
	if( errNum )
	{
		alert(errMsg);
		if (form[fldName].select) form[fldName].select();
		form[fldName].focus();
		return false;
	}	
}

function CheckcomntactForm(form)
{
	
	
	var errMsg  = "Bitte füllen Sie alle Pflichtfelder aus.:\n\n";
	var errNum  = 0;
	var fldName = "";
	
	if( ( form.name.value == "VORNAME, NAME*" || form.name.value == "") )
	{ 

		if( !errNum ) fldName = "name"; 
		errMsg += ++errNum + ". VORNAME, NAME.\n";
	}
	
	// CHECK THAT THE EMAIL ADDRESS IS VALID
	if( (form.email.value != "E-MAIL*" && form.email.value != "") && !isValidEmail(form.email.value) )
	{
		if( !errNum ) fldName = "email"; 
		errMsg += ++errNum + ". E-MAIL.\n";
	}
	if( form.email.value == "" || form.email.value == "E-MAIL*")
	{ 
		if( !errNum ) fldName = "email"; 
		errMsg += ++errNum + ". E-MAIL.\n";
	}
	
	if( ( form.phone.value == "TELEFON*" || form.phone.value == "") )
	{ 
		if( !errNum ) fldName = "phone"; 
		errMsg += ++errNum + ". TELEFON.\n";
	}
	
	if( ( form.comment.value == "IHRE NACHRICHT*" || form.comment.value == "") )
	{ 
		if( !errNum ) fldName = "comment"; 
		errMsg += ++errNum + ". IHRE NACHRICHT.\n";
	}
	
	

	// RETURN THE ERRORS OR ALLOW THE FORM TO SUBMIT
	if( errNum )
	{
		alert(errMsg);
		if (form[fldName].select) form[fldName].select();
		form[fldName].focus();
		return false;
	}	
}

//  check for valid numeric strings	
function IsNumeric(strString)
{
	var strValidChars = "0123456789.-() ";
	var strChar;
	var blnResult = true;
	
	if (strString.length == 0) return false;
	
	//  test strString consists of valid characters listed above
	for (i = 0; i < strString.length && blnResult == true; i++)
	{
		strChar = strString.charAt(i);
		if (strValidChars.indexOf(strChar) == -1)
		{
			blnResult = false;
		}
	}
	
	return blnResult;
}

//  checks that the email address has one (@), atleast one (.). It also makes sure that there are no spaces, extra '@'s or a (.) just before or after the @. It also makes sure that there is atleast one (.) after the @.
function isValidEmail(str) 
{
	var at="@";
	var dot=".";
	var lat=str.indexOf(at);
	var lstr=str.length;
	var ldot=str.indexOf(dot);
	
	if (str.indexOf(at)==-1) return false;
	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr) return false;
	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr) return false;
	if (str.indexOf(at,(lat+1))!=-1) return false;
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot) return false;
	if (str.indexOf(dot,(lat+2))==-1) return false;
	if (str.indexOf(" ")!=-1) return false;
	
	return true;					
}