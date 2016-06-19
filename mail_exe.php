
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


<?php
$oggetto = "Contatto Utente";                //L'oggetto con cui vuoi che tiarrivi la mail
$indirizzo_dest ="mail@alice.it";   //L'indirizzo di posta a cui arriveranno i messaggi inviati dal form	

echo "<br><font style='font-family: Verdana, Arial; font-size:10px; color:#666;'>Questi sono i dati che hai inserito:<br></font>
		<table style='font-family: Verdana, Arial; font-size:10px; color:#666;'><tr><td>
		Il tuo nome:</td><td><b>$nome</b></td></tr>
		<tr><td>La tua E-mail:</td><td><b>$mail</b></td></tr>
		<tr><td>Messaggio:</td><td><b>$messaggio</b></td></tr></table>";


$header .="From: <$mail>";  //qsta riga serve per fare in modo che $mail sia visto cm mittente
$messaggio .="                                               

$nome ti ha inviato questa mail dal tuo sito, il suo indirizzo di posta è: $mail Per rispondergli è sufficiente fare clic sul pulsante 'Rispondi' del tuo browser di posta."; //seconda parte dell'header
	
	if(mail($indirizzo_dest, $oggetto, $messaggio, $header))
	{
		echo "<br><font style='font-family: Verdana, Arial; font-size:10px; color:#666;'>Il tuo messaggio è stato inviato con successo!</font>";
	    
	}
	else
	{
		echo "<font style='font-family: Verdana, Arial; font-size:10px; color:#666;'><br>Errore invio E-mail!<br>Torna indietro e riprova!</font>";
		
	}	  

?></center>



</td>
</tr>

</table></td><td class="mright"></td></tr><tr><td class="mleft_bottom"></td><td><table class="msub" width="100%" cellpadding="0" cellspacing="0"><tr><td class="msub_left"></td><td class="msub_center"></td><td class="msub_right"></td></tr></table></td><td class="mright_bottom"></td></tr></table>

</td></tr></table>
</center>
<br><br>
</body>
</html>
