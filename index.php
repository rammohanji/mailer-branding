<!DOCTYPE html>
<html>
<head>
	<title>Mailer Branding Tool</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<style>
		.m10{margin: 10px 0;}
		.m20{margin: 20px 0;}
		.m30{margin: 30px 0;}
		.message{ text-align: right;}
		.alert-success{width:auto; }
		h3{font-size: 20px; margin-top:10px; margin-bottom: 5px; font-family: Arial, Helvetica, sans-serif;}
		#success{position: absolute;right: 36px;top: 70px;z-index: 999;padding: 10px 20px;border: solid 1px
#9cdb81;}
	</style>
</head>
<body style="background: #ececec; border:10px solid #000">
	<script>
	function selectElementText(el){
		var range = document.createRange() // create new range object
		range.selectNodeContents(el) // set range to encompass desired element text
		var selection = window.getSelection() // get Selection object from currently user selected text
		selection.removeAllRanges() // unselect any user selected text (if any)
		selection.addRange(range) // add range to Selection object to select it
	}

	function copySelectionText(){
		var copysuccess // var to check whether execCommand successfully executed
		try{
			copysuccess = document.execCommand("copy") // run command to copy selected text to clipboard
		} catch(e){
			copysuccess = false
		}
	return copysuccess
	}
	</script>
	<div class="container-fluid" style="padding: 20px 20px">
		<div class="col-lg-5" style="border:1px solid #fff">
			<form method="POST">
				<?php
				$values = $form_name =	$logo_url =	$company_name = '';
				$background_light_color =	'#ffffff';
				$background_dark_color = '#000000';
				if(isset($_POST['submit']))
				{
					$values = $_POST['fields'];
					$form_name		=	$_POST['form-name'];
					$logo_url		=	$_POST['logo-url'];
					$company_name		=	$_POST['company-name'];
					$background_light_color		=	$_POST['background-light-color'];
					$background_dark_color		=	$_POST['background-dark-color'];
				}
				?>
				<div class="text-center"><img src="https://www.nirvanacanada.com/wp-content/themes/nirvana/img/logo.png" width="150" class="m20" ></div>
				<h3>Mail Branding Tool</h3>
				<div class="row"><div class="col-lg-12 m10"><input class="form-control" type="text" value="<?php echo $form_name ?>" name="form-name" placeholder="Enter Mailer Heading"></div></div>
				<div class="row"><div class="col-lg-12 m10"><input class="form-control" type="text" value="<?php echo $logo_url ?>" name="logo-url" placeholder="Enter Complete Logo URL"></div></div>
				<div class="row"><div class="col-lg-12 m10"><input class="form-control" type="text" value="<?php echo $company_name ?>" name="company-name" placeholder="Enter Company Name"></div></div>
				<div class="row"><div class="col-lg-12 m10"><input class="form-control" type="color" name="background-light-color" value="<?php echo $background_light_color ?>" placeholder="Choose Light Color"></div></div>
				<div class="row"><div class="col-lg-12 m10"><input class="form-control" type="color" value="<?php echo $background_dark_color ?>" name="background-dark-color" placeholder="Choose Dark Color"></div></div>
				<div class="row"><div class="col-lg-12 m10"><input type="text" class="form-control" value="<?php echo $values ?>" name="fields" placeholder="Input all the values here."></div></div>
				<div class="row"><div class="col-lg-12 m10"><input type="submit" name="submit" class="btn btn-lg btn-success"></div></div>
			</form>
			<div class="row">
			<?php
			if(isset($_POST['submit']))
			{
				$values = $_POST['fields'];
				$form_name		=	$_POST['form-name'];
				$logo_url		=	$_POST['logo-url'];
				$company_name		=	$_POST['company-name'];
				$background_light_color		=	$_POST['background-light-color'];
				$background_dark_color		=	$_POST['background-dark-color'];
				$year = date('Y');
				$header = '<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;border-collapse:collapse">
		  <tbody>
		    <tr>
		      <td style="font-family:Arial, Helvetica, sans-serif;background:#ebebeb;padding:7.5pt 7.5pt 7.5pt 7.5pt"><div align="center">
		          <table width="630" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:472.5pt;border-collapse:collapse">
		            <tbody>
		              <tr>
		                <td width="616" style="font-family:Arial, Helvetica, sans-serif;width:462.0pt;padding:5.25pt 5.25pt 5.25pt 5.25pt; border:1px solid '.$background_dark_color.'"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;border-collapse:collapse">
		                    <tbody>
		                      <tr>
		                        <td style="font-family:Arial, Helvetica, sans-serif;background:green;padding:0in 0in 0in 0in"><div align="center">
		                            <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;border-collapse:collapse">
		                              <tbody>
		                                <tr>
		                                  <td width="294" valign="top" style="font-family:Arial, Helvetica, sans-serif;width:220.5pt;background:red;padding:0in 0in 0in 0in"><div align="center">
		                                      <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;background:'.$background_dark_color.';border-collapse:collapse">
		                                        <tbody>
		                                          <tr>
		                                            <td style="font-family:Arial, Helvetica, sans-serif;padding:0in 0in 0in 7.5pt"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;border-collapse:collapse">
		                                                <tbody>
		                                                  <tr>
		                                                    <td align="center" style="font-family:Arial, Helvetica, sans-serif; padding:7.5pt 7.5pt 7.5pt .75pt"><img src="'.$logo_url.'" alt="" /></td>
		                                                  </tr>
		                                                </tbody>
		                                              </table></td>
		                                          </tr>
		                                        </tbody>
		                                      </table>
		                                    </div></td>
		                                </tr>
		                              </tbody>
		                            </table>
		                          </div></td>
		                      </tr>';
		         $body =  '<tr>
		            <td style="font-family:Arial, Helvetica, sans-serif;background:white;padding:0in 0in 0in 0in"><div align="center">
		                <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:Arial, Helvetica, sans-serif;width:100.0%;border-collapse:collapse">
		                  <tbody>
		                    <tr>
		                      <td valign="top" style="font-family:Arial, Helvetica, sans-serif;border:none;border-top:solid '.$background_light_color.' 5px;background:#f5f9fb;padding:0">
		                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                          <tr>
		                            <td style="font-family:Arial, Helvetica, sans-serif;padding:10px 7.5pt 10px;font-size:20px; line-height:33px; color:'.$background_dark_color.'; border-bottom:2px solid '.$background_light_color.'">'.$form_name.'</td>
		                          </tr>
		                          <tr>
		                            <td style="font-family:Arial, Helvetica, sans-serif;padding:10px 10px; background-color:#ffffff">
		                              <table width="100%" border="0" cellspacing="0" cellpadding="0">';

		         $footer = '</table></td>
		                                </tr>
		                              </table>
		                            </td>
		                          </tr><tr><td align="center" style="font-family:Arial, Helvetica, sans-serif;padding:10px; background-color:#101217; font-size:14px; line-height:16px; color:#ffffff;">Copyright &copy; '.$year.' '.$company_name.'</td></tr>
		                        </tbody>
		                      </table>
		                    </div></td>
		                   </tr>
		                 </tbody>
		               </table></td>
		           </tr>
		         </tbody>
		       </table>
		     </div></td>
		    </tr>
		  </tbody>
		</table>';
	
		$values = str_replace('][', '],[', $values);
		$fields = explode(',', $values);
		$i = 0;
		$html = '';
		foreach ( $fields as $field ) {
			$field_name = ucwords(rtrim(ltrim( $field, '[' ), ']'));
			$style = 'style="padding:5px 0;font-size:15px; line-height:25px;border-bottom:1px solid #cccccc;font-family:Arial, Helvetica, sans-serif;width:50%; padding-left:10px; ';
         if($i%2==0) $style .= 'background: #f0f0ee;';
         $style .= '" ';

      	$html .= '<tr><td '.$style;
         $html .=' width="100%">'.$field_name.'</td><td '.$style.'> <strong>'.$field.'</strong></td>
           </tr>';
			$i++;
		}
		$mailer = $header.$body.$html.$footer;
	}
	?>
		
			</div>
		</div>
		<div class="col-lg-7" style="height: 100%;">
			<?php if(isset($mailer)) echo $mailer; ?>
		</div>

		<div class="col-lg-12 m30" style="border:1px solid #fff; position: relative">
			
			<h3 class="text-center col-md-12">
				Click HTML box to copy.
			</h3>
			<span class="message"><div id="success" class="alert-success" style="display: none"> <span class="glyphicon glyphicon-ok"></span> Text Copied</div></span>

			<pre class="col-md-12"><code id="motivatebox" class="motivate"><?php if(isset($mailer)) echo htmlentities($mailer); ?></code></pre>
		</div>

	</div>

<script>
		var motivatebox = document.getElementById('motivatebox')
		motivatebox.addEventListener('mouseup', function(e){
			var e = e || event // equalize event object between modern and older IE browsers
			var target = e.target || e.srcElement // get target element mouse is over
			if (target.className == 'motivate'){
				selectElementText(target) // select the element's text we wish to read
				var copysuccess = copySelectionText()
				if (copysuccess){
					document.getElementById('success').style.display = "block";
					setInterval(function(){ document.getElementById('success').style.display = "none"; }, 3000);
					//showtooltip(e)
				}
			}
		}, false);
	

	</script>

</body>
</html>
