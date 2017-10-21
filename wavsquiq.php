<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<HEAD>
<TITLE>ReallyRareWares - Arminio Grgic's WavSquiq</TITLE>

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <table border="0" cellpadding="0" cellspacing="0" width="120">
    <tr><td height=350><img width=1 height=100 src="dot.gif"></td></tr>
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
          <br><div align="justify"> <b>Arminio Grgic's WavSquiq</b></div> <p>
        </font>
        <font face="Tahoma" size=2 color="black"><blockquote>
        I really have no clue what is going on here. The readme claims:<br>
        
        <i>WAVSQUIQ can compress any WAV file into smaller one which can be reproduced WITHOUT use of any 
        decoder/decompresser - just play it like you played original WAV!</i><br><br>
        
        Well, I compressed a WAV running "wavsquiq.exe test.wav test1.wav". The file size went from 4879Kb
        to 4878Kb (?). Then I tried playing the generated file in Winamp ("just play it like you played 
        original WAV!"), and there was nothing there but noise.<br><br>
        
        Maybe I am doing something wrong? If you know how to get this program to work as it is supposed to,
        please e-mail me (address available at the About page).<br>
        
        <br>
        <br>
        Date: 1997<br>
        Version: 0.90 beta<br>
        Interface: Command line<br>
        Platform: Win32<br>
        Download: <a href="files/wavsq090.zip">wavsq090.zip</a> - 9Kb<br>
        <i>Lots of thanks to <a href="http://mark0.net/">Marco Pontello</a> for submitting this 
        codec.</i>

        <br><br>
        <ul>
        <li><p>Feedback from schnofler (ABC/HR Java developer):</p></li>
        </ul>

        <p><i>Seems like it only works with 8-bit wavs. Apparently it always outputs files with an 
        8-bit mono header, regardless of the input. If the input is stereo, you can correct this, 
        for example by loading it as raw PCM data in CoolEdit and specifying the format yourself. But 
        if the input is 16-bit it seems to mess up something else (I didn't manage to get such a file 
        working).</p>
        
        <p>The compression method strikes me as a bit odd, though. With the few files I tried, it 
        never managed to "compress" them by more than a few kb. Looking at the waves in CoolEdit it 
        seems to just cut out small parts of the file, leaving the rest unharmed. This actually makes 
        the compressed files shorter, and thus smaller. Pretty imaginative, eh? </p>
        
        <p>Thinking about it, that might be the reason, why 16-bit files don't work... it probably 
        just cuts out random bytes, so if it cuts a 2-byte sample "in half", this will destroy the 
        data.</i></p>

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
