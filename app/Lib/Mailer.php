<?php

namespace App\Lib;

class Mailer
{
	/**
	 * 呼叫 寄信 API (Mango)
	 *
	 */
	public function sendMail($mail_addr=null, $subject=null, $message=null, $other=null)
	{
		//密碼
		$pwd_md5="7811e1801c35094f3c68b51f422dbfc8";

		//@TODO: 需完善此處 API 的設定檔
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://172.17.42.1/api/mango/mail.php");
		curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: tw.bysources.com'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
			    http_build_query( array( "mail_addr"=>$mail_addr, "subject"=>$subject, 
					    	     "message"=>$message, "other"=>$other, "password"=>$pwd_md5
		    			    ) )); 
		$ret = curl_exec($ch); 
		curl_close($ch);

		return $ret;
	}
}
