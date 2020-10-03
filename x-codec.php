<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<HTML>
<HEAD>
<TITLE>ReallyRareWares - X-Codec MP3 encoder</TITLE>

</HEAD>
<BODY bgcolor="#FFFFFF">

<table border="0" cellpadding="2" cellspacing="0" width="100%">
  <!-- Titulo -->
  <tr>
  <td>
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr><td align="center"><img src="img/title.gif"></td>
    </tr>
  </table>
  </td>
  </tr>

  <tr>
  <td bgcolor="#6699CC"><img height=15 width=1 src="dot.gif" alt="null"></td>
  </tr>

  <tr>
  <td>
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr valign="top">
    <!-- Menu -->
    <td width=120 nowrap>
    <table border="0" cellpadding="0" cellspacing="0">
      <tr valign="top">
      <td bgcolor="#999999" width=119 align="center" nowrap>
      <font size="1" face="Tahoma">
      <table border="0" cellpadding="0" cellspacing="0" width="120">
    
    </td>
      </table>
      <table border="0" cellpadding="0" cellspacing="0" width="120">
    <tr><td bgcolor="#669999"><font face="Tahoma" size="2">
      <body link="#999999" vlink="#999999" alink="#999999">
        <center><img src="img/menu.gif"></center>
    </font></td></tr>
      </table>
<br>
    <?php include("menu.htm") ?>


      <table border="0" cellpadding="0" cellspacing="0" width="120">
    <tr><td></td></tr>
    <tr></tr>
    <tr><td></td></tr>
    
    
      </table>
<br><br><br><br><br><br><br><br>
      <table border="0" cellpadding="0" cellspacing="0" width="120">
    <tr><td height=400><img width=1 height=100 src="dot.gif"></td></tr>
      </table>
      </font>
      </td>
     
      </tr>
    </table></td>
    <!-- Corpo principal -->
    <td width="100%">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr><td>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
      <td width="100%" align="right">
      </td>
      </tr>
    </table></td></tr>
      <tr><td>
        <table border="0" cellpadding="10" cellspacing="0" width="100%">
      <tr><td width="450"></td>
        <td width="20%"></td></tr>
      <tr><td>
        <font face="Geneva,Verdana,Helvetica,Arial">

        <!-- Corpo agora -->
        
        <table border="0" cellpadding="2" cellspacing="0" width="20">
          <tr bgcolor="669999"><td width="20"><img width=20 height=1 src="dot.gif"></td>
          <td><font face="Tahoma" size="4" color="black"><img src="img/programs2.gif"></font></td>
          <td width="20"><img width=20 height=1 src="dot.gif"></td></tr>
        </table>
        </a>
        <body link="#000000" vlink="#000000" alink="#000000">
        <font face="Verdana" size=2 color="6699CC">
          <br><div align="justify"> <b>X-Codec MP3 encoder</b></div> <p></font>
        <font face="Tahoma" size=2 color="black"><blockquote>
        <a href="screens/x-codec.png" target=outside><img src="screens/x-codec.png" 
        alt="X-Codec" align=right height=266></a>
        Very little is known about this encoder. The author claims he developed 
        the encoding engine alone (hmmm...), the decoding routines are based on 
        Bugsy Wabbit's decoder library (very popular among Delphi programmers a 
        long time ago), and it only supports bitrates of 112, 128 and 256kbps 
        (the author says the engine can only support that).<br><br>
        
        <i>Update:</i> Upon further investigation, and after Benjamin's feedback 
        below, it turns out that X-Codec is indeed illegally using the <a 
        href="xing.php">Xing</a> tompg encoder. Whenever a file is encoded, the 
        encoder is extracted to the file NETSUB32.EXE in the \Windows folder and 
        executed. As soon as encoding finishes, it is deleted. NETSUB32.EXE is 
        exactly the tompg.exe program, but with the incriminating strings linking 
        it to Xing Tech removed.<br>
        
        <br>
        <br>
        Date: 1998<br>
        Version: 1.2<br>
        Interface: Graphical<br>
        Platform: Win32<br>
        Download: <a href="files/xing/x-codec.zip">x-codec.zip</a> - 542kB<br>
        <br>
        <ul>
        <li><p>Feedback from Benjamin Derge:</p></li>
        </ul>
        <p><i>It's my opinion that "X-Codec" uses the same engine as Xing's 
        "TOMPG" encoder, as the programs produce identical bitstreams. I checked
        in EncSpot (same bit resevoir graph, no short blocks for either), and 
        compared the decoded WAVs using EAC, and by all accounts, they are spot 
        on.</p> 
        
        <p>Also, the name X-Codec is at BEST a weakly veiled allusion to 'Xing'.
        </i></p>

        </blockquote></font>

        <br><br>

        </font>
      </td></tr>
    </table>
      </td></tr>
    </table>
    </td>
    </tr>
  </table></td>
  </tr>
</table> 
 
<?php include("footer.htm") ?>

</body>
</html>
