<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<HTML>
<HEAD>
<TITLE>ReallyRareWares - FhG/Opticom MP3 Producer</TITLE>

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
    <tr><td height=750><img width=1 height=100 src="dot.gif"></td></tr>
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
          <br><div align="justify"><b> FhG/Opticon MP3 Producer </b></div><p></font>
        <font face="Tahoma" size=2 color="black"><blockquote>
        <a href="screens/mp3prod11.png" target=outside><img src="screens/mp3prod11.png" 
        alt="FhG MPEG Layer-3 Producer 1.1" align=right height=200></a>
        In the very early days Fraunhofer was still trying to figure out what 
        to do with this MPEG Audio Layer 3 thing they had come up with. Back in
        1994-1997 they were expecting its usage to become limited to the 
        broadcasting industry. They already had that <a href=l3enc.php>l3enc</a>
        gig going on, but probably felt the technology did not yet reach its 
        full potential.<br><br>
        
        <b><i>A GRAPHICAL INTERFACE!</i></b> &nbsp; - Now that sounded like a 
        good way to improve the technology's usability (and, consequently, its 
        popularity).<br><br>
        
        So they set about creating their Windows GUI encoder. In an extremely 
        fateful decision, they uncoupled the user-accessible interface - which 
        they would call FhG MPEG Layer-3 Producer - from the encoding routines. 
        These would be distributed with the GUI encoder, but as an <a 
        href=fhgcodecs.php>ACM codec</a> that the GUI accessed directly. Not 
        only that, but all Windows applications that wrote WAV files could, in
        theory, also access the MP3 encoding routines. The graphical interface 
        in Layer-3 Producer is nothing more than yet another ACM codec frontend.
        <br><br>
        
        MPEG Layer-3 Producer itself offered a crappy experience - mainly because
        it did not feature batch encoding. The end user had to encode each file
        separately. Besides, it was crazy expensive. The "Advanced" version - 8
        to 56kbps - retailed for 198DM ≈ 125USD in 1997, and the "Professional" 
        version - 8 to 128kbps - retailed for a whopping 779DM ≈ 500USD (remember 
        that back then FhG thought only broadcasters would be interested in the 
        technology, so they had to recoup the development costs somehow).<br><br>
        
        But none of that was a problem! Software pirates quickly realized that 
        they could take the ACM codec, repack it with their applications and 
        distribute it with no pesky nuisances like cracks or registration keys -
        just register it within the ACM framework at the target machine and 
        you're good to start encoding! That created a whole cottage industry of 
        ACM frontends (which I talk more about at the <a href=fhgcodecs.php>FhG
        codecs</a> page), which by its turn certainly helped propel the MP3 
        popularity explosion in the late nineties - at the cost of some lost 
        revenue for FhG related to MPEG Layer-3 Producer sales, but certainly 
        more than compensated with all the royalties they were collecting 
        licensing the MP3 encoder patents.<br><br>
        
        Lessons learned, one year later they came up with version 2, now named
        .mp3 Producer. The interface is identical and still sucks (still no batch 
        encoding) but the program is now much cheaper (49USD for the "Advanced 
        Plus" version - 8 to 64kbps + 128kbps - and 199USD for the Professional 
        version, with bitrates from 8 to 256kbps) because Fraunhofer realized
        MP3 was a runaway success and they would not depend on the broadcasting
        industry for MP3 licensing. At least registered users of Producer v1
        were entitled to free upgrades to v2.<br><br>
        
        <a href="screens/mp3prod2.png" target=outside><img src="screens/mp3prod2.png" 
        alt=".mp3 Producer 2" align=right height=200></a>
        Crucially, .mp3 Producer no longer separated interface from encoder - the 
        encoding routines were built into the main program. That becomes clear 
        when you check the "About MPEG Layer-3 Audio Codec" dialog in both apps:
        MPEG Layer-3 Producer is using <a href="screens/mp3prod11-about.png"
        target=outside>the MP3 codec installed in the system</a> (in my case, a 
        codec much more recent than the one that comes with Producer) while .mp3 
        Producer only uses <a target=outside href="screens/mp3prod2-about.png">its 
        own codec</a>. Also, the installation now requires a serial number 
        (included in the zip file below) to thwart pirates, but by the time .mp3
        Producer was released the cat was already way out of the bag.<br><br>
        
        The period from early 1997 to late 1998 saw the release of countless MP3 
        encoders - a plethora of <a href=lame.php>encoders</a> <a href=blade.php
        >derived</a> <a href=soloh.php>from</a> <a href=8hz-mp3.php>the</a> <a 
        href=cannamp3.php>dist10</a> <a href=n2mp3.php>sources</a>, piracy 
        projects <a href=mp3comp.php>redistributing the FhG ACM codec</a>, and
        even some seemingly <a href=xing.php>developed from scratch</a>. In the 
        same time frame we saw the <a href=dosamp.php>introduction</a> <a 
        href=xaudio.php>of</a> <a href=scmpx.php>an</a> <a href=soundapp.php
        >absurd</a> <a href=digideck.php>amount</a> <a href=musearc.php>of</a> 
        <a href=apollo.php>MP3</a> <a href=nad.php>software</a> <a href=amp.php
        >players</a> for nearly every computer platform and architecture. In 
        early 1998 the first portable MP3 players started appearing on the 
        market (MPMan F10 and F20). Napster was released a little later, in 
        mid-1999. Specialized sites like MP3.com sprung up and had a hard time 
        keeping up with all the news, announcements, and releases (and lawsuits,
        of course). MP3 was unstoppable, to the chagrin of the RIAA.<br><br>
        
        I suppose Fraunhofer never expected, even in their wildest dreams, that 
        MP3 would become so popular - indeed, synonymous with compressed 
        audio. Soon after the release of .mp3 Producer they stopped developing 
        end-user applications and focused instead on licensing their patents as 
        well as their encoders and decoders in <a href=fastencc.php>library 
        form</a> to software developers.<br><br>
        
        You can still visit Internet Archive mirrors of the <a target=outside
        href="https://web.archive.org/web/19970428061443fw_/http://www.opticom.de/producer.htm"
        >MPEG Layer-3 Producer</a> and <a target=outside
        href="https://web.archive.org/web/19990117070203fw_/http://www.opticom.de/producer.htm"
        >.mp3 Producer</a> webpages (notice how the ACM paragraph disappeared 
        from the latter page).<br>

        <br>
        <br>
        Date: 1998-04-07<br>
        Version: 2.1<br>
        Interface: Graphical<br>
        Platform: Win32<br>
        Download: <a href="files/fhg/PRODPS.zip">PRODPS.zip</a> - 1.096kB<br>
        <br>
        Date: 1997-04-08<br>
        Version: 1.1b1<br>
        Interface: Graphical<br>
        Platform: Win32<br>
        Download: <a href="files/fhg/L3PROD_P.EXE">L3PROD_P.EXE</a> - 1.061kB<br>

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
