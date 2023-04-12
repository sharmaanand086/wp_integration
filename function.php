add_action('wpcf7_mail_sent', function ($cf7) {
  $submission = WPCF7_Submission::get_instance();
  if ($submission) {
    $cf7_data = $submission->get_posted_data();
	
	  $name = $cf7_data['text-71'];
	  $email = $cf7_data['email-381'];
	  $subject = $cf7_data['text-72'];
	  $msg = $cf7_data['textarea-124'];
	  $phone = $cf7_data['number-265'];
	  if($phone!='' && $email!=''){
		  $curl = curl_init();
			curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://domaindo.com/External_API_Json.aspx?RequestFor=DATAUPLOAD',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_SSL_VERIFYHOST=> 0,
			 CURLOPT_SSL_VERIFYPEER=> 0,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'GET',
			  CURLOPT_POSTFIELDS =>'{
			"AuthKey":"434242423424+GEzjsswXSRnaggXYw=",
			"data":
			[{
			"PhoneNo":"'.$phone.'",
			"company_name":"",
			"whatsapp_number":"",
			"uid":"",
			"contact_name":"'.$name.'",
			"email":"'.$email.'",
			"lead_source":"",
			"city":"",
			"state1":"",
			"field3":"'.$subject.'",
			"field4":"'.$msg.'",
			"field5":"Contact Us",		
			"address":"",
			"pincode":""
			}],
			"process": "62",
			"campaign":"163"
			}',
			  CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			  ),
			));
			$response = curl_exec($curl);
			curl_close($curl);
	  }
	  $name_home =  $cf7_data['text-22'];
	  $email_home =  $cf7_data['email-612'];
	  $phone_home =  $cf7_data['text-216'];
	  
	   if($phone_home!='' && $email_home!=''){
		  $curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://domaindo.com/External_API_Json.aspx?RequestFor=DATAUPLOAD',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_SSL_VERIFYHOST=> 0,
			 CURLOPT_SSL_VERIFYPEER=> 0,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'GET',
			  CURLOPT_POSTFIELDS =>'{
			"AuthKey":"434242423424+GEzjsswXSRnaggXYw=",
			"data":
			[{
			"PhoneNo":"'.$phone_home.'",
			"company_name":"",
			"whatsapp_number":"",
			"uid":"",
			"contact_name":"'.$name_home.'",
			"email":"'.$email_home.'",
			"lead_source":"",
			"city":"",
			"state1":"",
			"field3":"GET A FREE CONSULTATION",			 
			"address":"",
			"pincode":""
			}],
			"process": "62",
			"campaign":"163"
			}',
			  CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			  ),
			));
			$response = curl_exec($curl);
			curl_close($curl);
	  }

 
  }
});
  
