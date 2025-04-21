<?php

$admin_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OHANA Development</title>
</head>

<body>
<table cellpadding="0" cellspacing="0" width="650" align="center">
    <tr>
        <td>
            <table cellpadding="0" style ="background: #FFFFFF;" cellspacing="0" width="100%" align="center" >
                    <tr>
                        <td height="40">&nbsp;</td>
                    </tr>
                    <tr>
						<td align="center" style="text-align:center;" bgcolor="#00206B" width="100%" height="120">
							<img align="middle" src="https://ohana.demoz.agency/assets/svg/logo.png"  alt=""/>
						</td>
					</tr>
            </table>
			
			<table cellpadding="0" cellspacing="0" width="100%" align="center">
				<tr>
                    <td height="10">&nbsp;</td>
                </tr>
			</table>

            <table cellpadding="0" cellspacing="0" width="100%" align="center" style="border:1px solid #e8e6e6">
                <tr style="background: #00206B;">
                    <td width="10">&nbsp;</td>
                    <td height="30" style="color:white ; font-size:12px; font-family:Arial, Helvetica, sans-serif">A new register your interest request has been received with following details.</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td height="10" style="line-height:9px">&nbsp;</td>
                </tr>
            </table>
            <table width="100%" cellspacing="8" cellpadding="12" align="center" style="border:1px solid #e8e6e6">
                <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Your Name:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['yourname'].'</td>
                </tr>
                <tr>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Email:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['email'].'</td>
                </tr>
                 <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Country:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['country'].'</td>
                </tr>
                <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Phone Number:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['phone'].'</td>
                </tr>
                 <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">You Message:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['message'].'</td>
                </tr>
                <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Accept Terms & Conditions:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['check'].'</td>
                </tr>
                 <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">Receive Exclusive Updates:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['check1'].'</td>
                </tr>
                <tr>
                    <td style="background-color:#f4f3f3;  color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">URL:</td>
                    <td style="background-color:#f4f3f3; color:#666666; font-family:Arial, Helvetica, sans-serif; font-size:13px; font-weight:bold;">'.$_POST['hiddenUrl'].'</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td height="10" style="line-height:9px">&nbsp;</td>
                </tr>
            </table>
            <table cellpadding="0" align="center"  cellspacing="0" height="30" width="100%" style="border:1px solid #e8e6e6">
                <tr >
                    <td align="center" headers="20" style="background: #00206B; color:white; font-size:12px; line-height:9px; font-family:Arial, Helvetica, sans-serif;" >Copyright © 2025 - All Rights Reserved.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';