<?php

		
		
	    $forms['name']			= $_POST['name'];
	    $forms['email']			= $_POST['email'];
		$forms['phone']			= $_POST['phone'];
	    $forms['comment']			= $_POST['comment'];
		
		$textcontent='';
		$ch_ph='';
		$ch_eml='';
		
	//echo $forms['chk_email'];
		//echo $forms['chk_phone'];
		
		  
		
	    if($forms['name']=="Vorname, Name") $forms['name']="";
	    if($forms['email']=="E-Mail") $forms['email']="";
		if($forms['email']=="TELEFON") $forms['phone']="";
		if($forms['comment']=="IHRE NACHRICHT*") $forms['comment']="";
		
		if(isset($_POST['ch_email']))
		  {
		   $forms['ch_email'] = $_POST['ch_email'];		
		   if($forms['ch_email']=="yes")
			   { $forms['ch_email']="Email";
			    $ch_eml ="Email";
			   }
		  }
		  
		  if(isset($_POST['ch_phone']))
		  {
		   $forms['ch_phone'] = $_POST['ch_phone'];		
		   if($forms['ch_phone']=="yes")
		   {		   
		    $forms['ch_phone']="Phone";
			$ch_ph="Phone";
		   }	
		  }
		
		//if($forms['ch_phone']=="yes") $forms['ch_phone']="Phone";
		
		//echo $forms['chk_email'];
		// echo $forms['chk_phone'];

	    if (empty($forms['name'])) { $forms['error'] = "VORNAME, NAME*"; $forms['nameerror']="red"; }
	    elseif (empty($forms['email'])) { $forms['error'] = "E-MAIL"; $forms['emailerror']="red"; }
		elseif (empty($forms['phone'])) { $forms['error'] = "TELEFON"; $forms['phoneerror']="red"; }
		
		
	    elseif  (!preg_match("/^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/",
		 $forms['email'])) { $forms['error'] = "Enter valid e-mail Address"; $forms['emailerror']="red"; }
		elseif (empty($forms['comment'])) { $forms['error'] = "IHRE NACHRICHT*"; $forms['commenterror']="red"; }
		
	    else
	    {
		
			
			$emailid="info@helvetix.com";
			//$textcontent;
	    	
			foreach ( $forms as $id=>$val ) {
				$textcontent .= "$id: $val \n\n";
			}
	    	
			$htmlcontent = '<table width="90%" bgcolor="#FF9933" border="0" align="center" cellpadding="8" cellspacing="0" >
			  <tr>
			    <td colspan="3" align="center"><b>Contact Us</b></td>
			  </tr>
			  
			  <tr bgcolor="#FBBB7B">
			    <td>Vorname, Name</td>
			    <td width="10" valign="top">:</td>
			    <td>&nbsp;'.$forms['name'].'</td>
			  </tr>
			  <tr bgcolor="#FDD6AF">
			    <td>E-mail</td>
			    <td width="10" valign="top">:</td>
			    <td>&nbsp;'.$forms['email'].'</td>
			  </tr>
			  <tr bgcolor="#FBBB7B">
			    <td>TELEFON</td>
			    <td width="10" valign="top">:</td>
			    <td>&nbsp;'.$forms['phone'].'</td>
			  </tr>
			  <tr bgcolor="#FDD6AF">
			    <td>ihre Nachricht</td>
			    <td width="10" valign="top">:</td>
			    <td>&nbsp;'.$forms['comment'].'</td>
			  </tr>
			  <tr bgcolor="#FDD6AF">
			    <td> Kontaktieren Sie mich </td>
			    <td width="10" valign="top">:</td>
			    <td>&nbsp;'.$ch_eml.'&nbsp;'.$ch_ph.'</td>
			  </tr>
			  
			  
			  </table>';
			  
			  
			  
			  $headers  = 'MIME-Version: 1.0' . "\r\n";
			//$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From:'.$forms['email']."\r\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();
			$headers .= 'Reply-To: '.$forms['email']."\r\n";
			$message = $htmlcontent;
			
			//$message = "hi";
	    	mail($emailid, "Kontakt", $message, $headers);
			//mail("franciepetere@gmail.com","My subject","hi");
			
	    	
	    header ( "Location: index.php?success=1" );
		
		
  
	die();
	    	
	    }
		
		

?>