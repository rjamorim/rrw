

function var_swapImage() { //v3.0
  var i,j=0,x,a=var_swapImage.arguments; document.var_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=var_findObj(a[i]))!=null){document.var_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function var_swapImgRestore() { //v3.0
  var i,x,a=document.var_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}


function tmt_findObj(n){
	var x,t; if((n.indexOf("?"))>0&&parent.frames.length){t=n.split("?");
	x=eval("parent.frames['"+t[1]+"'].document.getElementById('"+t[0]+"')");
	}else{x=document.getElementById(n)}return x;
}

function var_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=var_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function var_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.var_p) d.var_p=new Array();
    var i,j=d.var_p.length,a=var_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.var_p[j]=new Image; d.var_p[j++].src=a[i];}}
}

function var_nbGroup(event, grpName) { //v3.0
  var i,img,nbArr,args=var_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = var_findObj(args[2])) != null && !img.var_init) {
      img.var_init = true; img.var_up = args[3]; img.var_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = var_findObj(args[i])) != null) {
        if (!img.var_up) img.var_up = img.src;
        img.src = img.var_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.var_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = var_findObj(args[i])) != null) {
      if (!img.var_up) img.var_up = img.src;
      img.src = (img.var_dn && args[i+2]) ? args[i+2] : args[i+1];
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.var_nbOver.length; i++) {
      img = document.var_nbOver[i]; img.src = (img.var_dn) ? img.var_dn : img.var_up; }
  } else if (event == "down") {
    if ((nbArr = document[grpName]) != null)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.var_up; img.var_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = var_findObj(args[i])) != null) {
      if (!img.var_up) img.var_up = img.src;
      img.src = img.var_dn = args[i+1];
      nbArr[nbArr.length] = img;
  } }
}


// Status Bar Message
function var_displayStatusMsg(msgStr) { //v1.0
  status=msgStr;
  document.var_returnValue = true;
}


function statusBar(msg) {
	window.status = msg;
	return true;
}

//jump menu code

function var_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

// pop up window

function launchwin(winurl,winname,winfeatures) { 

		//This launches a new window and then 
		//focuses it if window.focus() is supported. 
			newwin = window.open(winurl,winname,winfeatures);

		//delay a bit here because IE4 encounters errors 
		//when trying to focus a recently opened window 

			setTimeout('newwin.focus();',250); 
			}
