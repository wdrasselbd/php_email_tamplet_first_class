<?php
	
	 
	
	$a = $_GET['fnm2'];
	$b = $_GET['fnm3'];
	$c = $_GET['fnm4'];
	$d = $_GET['fnm5'];
	$e = $_GET['fnm6'];
	$f = $_GET['fnm7'];
	
	




?>









<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Email Signature</TITLE>
<META content="text/html; charset=unicode" http-equiv=Content-Type>
<BODY>
<P style="FONT-SIZE: 10pt; FONT-FAMILY: Arial">
<TABLE style="WIDTH: 525px" cellSpacing=0 cellPadding=0 border=0>
  <TBODY>
  <TR>
    <TD style="FONT-SIZE: 10pt; FONT-FAMILY: Arial; WIDTH: 125px" vAlign=middle><IMG border=0 src=" WordPress website design and develpoment.jpg" width="100%"  ></TD>
    <TD style="FONT-SIZE: 10pt; FONT-FAMILY: Arial; WIDTH: 400px; PADDING-LEFT: 20px; BORDER-LEFT: #fb6303 1px solid" vAlign=top>
	<STRONG style="FONT-SIZE: 11pt">Name:
	<SPAN style="FONT-SIZE: 11pt; COLOR: #fb6303">  <?php echo $a ?> <?php echo $b ?>  </SPAN>  </STRONG><BR><BR><SPAN style="COLOR: #000000">
	<SPAN style="COLOR: #fb6303">
	<SPAN style="COLOR: #fb6303"><STRONG>Mobile:</STRONG></SPAN></SPAN>  <?php echo $c ?>  <BR>
	<SPAN style="COLOR: #fb6303"><STRONG>Address:</STRONG></SPAN> 
	<A style="COLOR: #000000"> <?php echo $d ?></A> <br> 
	<SPAN  style="COLOR: #fb6303"><STRONG>Email:</STRONG></SPAN> <A style="TEXT-DECORATION: none; COLOR: #000000" href="http://{website}"> <?php echo $e ?></A> <BR>
	<SPAN style="COLOR: #fb6303"><STRONG>Website:</STRONG></SPAN>    | 
	<SPAN style="COLOR: #fb6303"><STRONG></STRONG></SPAN> <?php echo $f ?>  </SPAN><BR><BR>
	  <A href="{facebookURL}"><IMG border=0 src="fb.png"></A>&nbsp; 
      <A href="{linkedinURL}"><IMG border=0 src="ln.png"></A>&nbsp; 
      <A href="{twitterURL}"><IMG border=0 src="tt.png"></A>&nbsp; 
      <A href="{youtubeURL}"><IMG border=0 src="yt.png"></A>&nbsp; 
      <A href="{instagramURL}"><IMG border=0 src="it.png"></A>&nbsp; 
	  <A href="{pinterestURL}"><IMG border=0 src="pt.png"></A>
	  </TD></TR></TBODY></TABLE></P>
</BODY></HTML>
