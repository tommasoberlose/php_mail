
<html>
<head>
<link rel="stylesheet" href="http://nego.altervista.org/generale.css">
<title>< NegoArt > Mail</title>
</head>

<body style="background-color: #466B98;"  leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<br><br><br>

<table class="skin_tbl" align="center" cellpadding="0" cellspacing="0"><tr><td class="mleft"></td><td><table class="mainbg" style="text-align:center; width:100%" cellpadding="0" cellspacing="0">
<tr>
<td class="back">
<center>

<form name="form" action="mail_exe.php" method="post" >

    
           <table  STYLE="width:auto; font-size:10px; color:#666;">
  
		<tr><td><label for="nome">Nome:</label>
	</td></tr><tr><td>   	<input type="text" id="textinput" name="nome" class="textinput" maxlength="25" /><br /></td></tr>
   		
		<tr><td colspan="2"><label for="mail">E-Mail:</label></td></tr><tr><td> 	<input type="text" id="textinput" name="mail" class="textinput"  /></td></tr>
   
   		<tr><td colspan="2"><label for="messaggio">Messaggio:</label></td></tr><tr><td> 

<?
echo "<textarea wrap=\"virtual\" style=\"margin-bottom:0px;\" id=\"textareainput\" name=\"messaggio\" class=\"textarea\" onChange=\"var reg = /\\n/gi; this.value=this.value.replace(reg, '<BR>')\"></textarea>"; ?>
</td></tr><tr><td style="text-align:center;"> <br><input type="submit" name="invia" class="bottone" style="width:100px; text-align:center;" value="Invia"> <input type="reset" class="buttonSubmit" style="width:100px; text-align:center;" name="reset" value="Annulla"></td></tr>
  </table></form>
</center>


</td>
</tr>

</table></td><td class="mright"></td></tr><tr><td class="mleft_bottom"></td><td><table class="msub" width="100%" cellpadding="0" cellspacing="0"><tr><td class="msub_left"></td><td class="msub_center"></td><td class="msub_right"></td></tr></table></td><td class="mright_bottom"></td></tr></table>

</td></tr></table>
</center>
<br><br>
</body>
</html>
