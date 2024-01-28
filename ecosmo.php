<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<HTML>
<HEAD>
<TITLE>ReallyRareWares - Electronic Cosmo MP3 encoder</TITLE>

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
<br><br><br><br><br><br><br>
      <table border="0" cellpadding="0" cellspacing="0" width="120">
    <tr><td height=450><img width=1 height=100 src="dot.gif"></td></tr>
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
          <br><div align="justify"><b> Electronic Cosmo MP3 encoder </b></div><p></font>
        <font face="Tahoma" size=2 color="black"><blockquote>
        <a href="screens/ecosmo.png" target=outside><img src="screens/ecosmo.png" 
        alt="Electronic Cosmo Encoder" align=right height=270></a>
        Electronic Cosmo was a freeware MPEG layers 1/2/3 encoder created by two
        Norwegian programmers.<br><br>
        
        The encoder is distributed as part of a larger program called MPEG 
        Suite. It is quite featureful, offering batch encoding, transcoding and
        decoding. Besides their own encoder, you can choose to encode using <a 
        href=blade.php>Blade</a> (version 0.76) and <a href=plugger.php>Plugger
        </a> (version 0.4) which are distributed in the same installation. The 
        decoding routines are based on <a href=xaudio.php>XAudio</a>.<br><br>
        
        Now, their encoder... in the documentation the authors claim it is super
        fast, and that raises all kinds of red flags for me. So I started paying
        attention to the encoding process, it is indeed super fast, but if you 
        set the encoder to run on idle priority and increase the CPU load in
        Windows, there is enough time to notice a process called codec.exe  
        running on task manager. That executable appears on Electronic Cosmo's 
        installation folder as soon as you start encoding, and disappears as 
        soon as encoding is finished.<br><br>
        
        I copied the program (75kB) to another folder before it got deleted, 
        and got to investigating. For starters, it is packed with ASpack - 
        another red flag, but not a problem, I just unpacked it with AspackDie 
        and generated a 360kB executable. Then I loaded it in an Hex editor and 
        started looking for strings. The data starting at offset 204C8 is 
        identical to the data starting at offset 1F0C8 in <a href=xing.php>Xing
        tompg</a>, except for the strings precisely expliciting that we're
        dealing with a Xing encoder.<br><br>
        
        Can it be a coincidence? Yes it can. But obviously isn't. Electronic 
        Cosmo is <a href=rjpa.php>another</a> <a href=x-codec.php>encoder</a>
        stealing from Xing and the developers are not even decent enough to 
        give credit where it is due (at least rJPa acknowledges Xing in their 
        program).<br><br>
        
        The web site is surprisingly still availabe, <a target=outside 
        href="http://ec2000.net/index.php">here</a>.<br><br>
        
        <i>Thanks to Stefan for introducing me to this encoder.</i><br>        

        <br>
        <br>
        Date: 2005-08-31<br>
        Version: 1.5.5<br>
        Interface: Graphical<br>
        Platform: Win32<br>
        Download: <a href="files/mpeg/MPEGSuite.exe">MPEGSuite.exe</a> - 683kB<br>

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
