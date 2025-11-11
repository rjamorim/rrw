<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<HTML>
<HEAD>
<TITLE>ReallyRareWares - Xing/Helix MP3 encoder</TITLE>

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
    <tr><td height=1150><img width=1 height=100 src="dot.gif"></td></tr>
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
          <br><div align="justify"> <b>Xing/Helix MP3 encoder</b></div> <p>
        </font>
        <font face="Tahoma" size=2 color="black"><blockquote>
        <a href="screens/xing-enc.png" target=_blank><img src="screens/xing-enc.png" 
        alt="Xing Encoder" align=right height=290></a>
        The Xing MP3 encoder was created around 1995, seemingly from scratch, by 
        the Xing Technology Corporation with a primary goal in mind: developing 
        a very fast encoder.<br><br>
        
        And it delivers! It is much faster than other encoders in <a href=
        "http://web.archive.org/web/20071222223437/http://nyaochi.sakura.ne.jp/encoder-benchmark/result-20061103.html"
        target=_blank>benchmark tests</a>, even compared to famously fast encoders
        such as <a href=mpegplus.php>Musepack</a>, <a href=wingogo.php>Gogo</a> 
        and Ogg Vorbis Lancer. These speed gains are obtained mostly with heavy 
        usage of x86 assembly code (which, in this case, is unfortunately limited
        to the Windows platform).<br><br>
        
        Besides creating a super fast encoder (an order of magnitude faster than 
        the competitor at the time, <a href=l3enc.php>FhG l3enc</a>), Xing were 
        innovators in other areas. Theirs was the first MP3 encoder with a 
        variable bitrate - VBR - mode (released in late 1998. <a href=lame.php
        >LAME</a> introduced it in June 1999, <a href=n2mp3.php>MPegger</a> in 
        late 1999, and <a href=fastencc.php>FhG</a> only in 2000). Also, their 
        MPEG encoder was the first and probably the only one that allowed MP3 
        audio streams in MPEG files - most (all?) other encoders limit them to 
        MP2 streams. They also created <a href=xingsound.php>audio players</a>, 
        and a <a href=audiocat.php>CD Ripper</a> based on their encoder, not to 
        mention video encoding, playing and streaming tools which are outside 
        the scope of RRW.<br><br>
        
        What about quality? Surprisingly, the quality is quite good! Of course 
        not on par with LAME, but if you are in a hurry Xing can be a good choice
        as it is several times faster.<br><br>
        
        Xing Technology was acquired by <a href=realjuke.php>Real Networks</a> 
        in the early 2000s (but you can still check their web site at the <a 
        href="https://web.archive.org/web/20000303161440/http://www.xingtech.com/mp3/encoder"
        target=_blank>Internet Archive</a>) and the MP3 encoder was renamed to 
        Helix MP3 Encoder. Then, in 2005, they released the sources under an open
        source license. It seems Real closed the sources again, but here you can 
        find compiles of their encoder made while they were still open, as well 
        as the source code.<br>

        <br>
        <br>
        Date: 2005-07-23<br>
        Version: 5.0 (MSVC compile)<br>
        Interface: Command line<br>
        Platform: Win32<br>
        Download: <a href="files/xing/helix_mp3enc_r11_vc7.zip">helix_mp3enc_r11_vc7.zip</a> - 113kB<br>
        <br>
        Date: 2005-07-23<br>
        Version: 5.0 (ICL compile)<br>
        Interface: Command line<br>
        Platform: Win32<br>
        Download: <a href="files/xing/helix_mp3enc_r11_icl9.zip">helix_mp3enc_r11_icl9.zip</a> - 157kB<br>
        <br>
        Date: 2005-07-23<br>
        Version: 5.0 (64 bits)<br>
        Interface: Command line<br>
        Platform: Win64<br>
        Download: <a href="files/xing/helix_mp3enc_r11_x64.zip">helix_mp3enc_r11_x64.zip</a> - 156kB<br>
        <br>
        Date: 2005-07-23<br>
        Version: 5.0<br>
        Interface: Command line<br>
        Platform: sources<br>
        Download: <a href="files/xing/helix_mp3enc_5.0r11.tar.gz">helix_mp3enc_5.0r11.tar.gz</a> - 230kB<br>
        <br>
        Date: 1999-01-03<br>
        Version: 1.5b9<br>
        Interface: Graphical<br>
        Platform: Win32<br>
        Download: <a href="files/xing/MP3EN15.EXE">MP3EN15.EXE</a> - 1.841kB<br>
        <br>
        Date: 1997-11-03<br>
        Version: 3.0<br>
        Interface: Command line<br>
        Platform: Win32<br>
        Download: <a href="files/xing/tompg.zip">tompg.zip</a> - 83kB<br>
        <br>
        
        <hr>
        Plain MP3 files with VBR encoding have a problem: as they have no header,
        an MP3 player can not seek into the file or know its duration, unless it 
        decodes the whole file beforehand. CBR files have no such problem because 
        all frames are about the same size, hence it is easy to calculate position
        and duration.<br><br>
        
        So Xing came up with a solution: adding a no-audio frame at the beginning
        of the file which contains a seek table and the track duration. Since it 
        is a valid frame, older MP3 decoders will just skip it and decoders aware
        of the Xing header can obtain crucial playback information there.<br><br>
        
        Below you will find Xing's original VBR header SDK. It is worth pointing 
        out that it is forwards-compatible with the <a target=_blank
        href="http://gabriel.mp3-tech.org/mp3infotag.html">LAME header</a> 
        extension.<br>

        <br>
        Date: 1998-12-30<br>
        Interface: C SDK<br>
        Download: <a href="files/xing/vbrheadersdk.zip">vbrheadersdk.zip</a> - 216kB<br>
        <br>
        
        FhG later came up with their own VBR header format and, being the usual 
        asshats, made it incompatible with the Xing header:<br>

        <br>
        Date: 2000-11-07<br>
        Interface: C++ SDK<br>
        Download: <a href="files/fhg/mp3_vbr_sdk.zip">mp3_vbr_sdk.zip</a> - 3kB<br>
        

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
