//browser version and platform sniffer and serves the appropiate stylesheet

if ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) < 4 )) {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_ie3.css\" TYPE=\"text/css\">"); }
else if ((navigator.appVersion.indexOf("Mac") != -1)) {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_mac.css\" TYPE=\"text/css\">"); }
else {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_css.css\" TYPE=\"text/css\">"); }