function var_initTimelines() { 
	// v4.0
    // var_initTimelines() Copyright 1997 Macromedia, Inc. All rights reserved.
	
    var ns = navigator.appName == "Netscape";
    var ns4 = (ns && parseInt(navigator.appVersion) == 4);
    var ns5 = (ns && parseInt(navigator.appVersion) > 4);
    document.var_Time = new Array(1);
    document.var_Time[0] = new Array(7);
    document.var_Time["layer_close"] = document.var_Time[0];
    document.var_Time[0].var_Name = "layer_close";
    document.var_Time[0].fps = 15;
    document.var_Time[0][0] = new String("behavior");
    document.var_Time[0][0].frame = 20;
    document.var_Time[0][0].value = "var_timelinePlay('layer_close')";
    document.var_Time[0][1] = new String("behavior");
    document.var_Time[0][1].frame = 30;
    document.var_Time[0][1].value = "var_showHideLayers('newslayer','','hide','prodlayer','','hide','aboutlayer','','hide','contactlayer','','hide')";
    document.var_Time[0][2] = new String("behavior");
    document.var_Time[0][2].frame = 10;
    document.var_Time[0][2].value = "var_timelineStop('layer_close')";
    document.var_Time[0][3] = new String("sprite");
    document.var_Time[0][3].slot = 1;
    if (ns4)
        document.var_Time[0][3].obj = document["newslayer"];
    else if (ns5)
        document.var_Time[0][3].obj = document.getElementById("newslayer");
    else
        document.var_Time[0][3].obj = document.all ? document.all["newslayer"] : null;
    document.var_Time[0][3].keyFrames = new Array(1, 30);
    document.var_Time[0][3].values = new Array(0);
    document.var_Time[0][4] = new String("sprite");
    document.var_Time[0][4].slot = 2;
    if (ns4)
        document.var_Time[0][4].obj = document["prodlayer"];
    else if (ns5)
        document.var_Time[0][4].obj = document.getElementById("prodlayer");
    else
        document.var_Time[0][4].obj = document.all ? document.all["prodlayer"] : null;
    document.var_Time[0][4].keyFrames = new Array(1, 30);
    document.var_Time[0][4].values = new Array(0);
    document.var_Time[0][5] = new String("sprite");
    document.var_Time[0][5].slot = 3;
    if (ns4)
        document.var_Time[0][5].obj = document["aboutlayer"];
    else if (ns5)
        document.var_Time[0][5].obj = document.getElementById("aboutlayer");
    else
        document.var_Time[0][5].obj = document.all ? document.all["aboutlayer"] : null;
    document.var_Time[0][5].keyFrames = new Array(1, 30);
    document.var_Time[0][5].values = new Array(0);
    document.var_Time[0][6] = new String("sprite");
    document.var_Time[0][6].slot = 4;
    if (ns4)
        document.var_Time[0][6].obj = document["contactlayer"];
    else if (ns5)
        document.var_Time[0][6].obj = document.getElementById("contactlayer");
    else
        document.var_Time[0][6].obj = document.all ? document.all["contactlayer"] : null;
    document.var_Time[0][6].keyFrames = new Array(1, 30);
    document.var_Time[0][6].values = new Array(0);
    document.var_Time[0].lastFrame = 30;
    for (i=0; i<document.var_Time.length; i++) {
        document.var_Time[i].ID = null;
        document.var_Time[i].curFrame = 0;
        document.var_Time[i].delay = 1000/document.var_Time[i].fps;
    }
}


function var_timelineGoto(tmLnName, fNew, numGotos) { //v2.0
  
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,lastKeyFr,propNum,theObj;
  if (document.var_Time == null) var_initTimelines(); //if *very* 1st time
  tmLn = document.var_Time[tmLnName];
  if (numGotos != null)
    if (tmLn.gotoCount == null) tmLn.gotoCount = 1;
    else if (tmLn.gotoCount++ >= numGotos) {tmLn.gotoCount=0; return}
  jmpFwd = (fNew > tmLn.curFrame);
  for (i = 0; i < tmLn.length; i++) {
    sprite = (jmpFwd)? tmLn[i] : tmLn[(tmLn.length-1)-i]; //count bkwds if jumping back
    if (sprite.charAt(0) == "s") {
      numKeyFr = sprite.keyFrames.length;
      firstKeyFr = sprite.keyFrames[0];
      lastKeyFr = sprite.keyFrames[numKeyFr - 1];
      if ((jmpFwd && fNew<firstKeyFr) || (!jmpFwd && lastKeyFr<fNew)) continue; //skip if untouchd
      for (keyFrm=1; keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]; keyFrm++);
      for (j=0; j<sprite.values.length; j++) {
        props = sprite.values[j];
        if (numKeyFr == props.length) propNum = keyFrm-1 //keyframes only
        else propNum = Math.min(Math.max(0,fNew-firstKeyFr),props.length-1); //or keep in legal range
        if (sprite.obj != null) {
          if (props.prop2 == null) sprite.obj[props.prop] = props[propNum];
          else        sprite.obj[props.prop2][props.prop] = props[propNum];
      } }
    } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
  }
  tmLn.curFrame = fNew;
  if (tmLn.ID == 0) eval('var_timelinePlay(tmLnName)');
}

function var_timelinePlay(tmLnName, myID) { //v1.2
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  var i,j,tmLn,props,keyFrm,sprite,numKeyFr,firstKeyFr,propNum,theObj,firstTime=false;
  if (document.var_Time == null) var_initTimelines(); //if *very* 1st time
  tmLn = document.var_Time[tmLnName];
  if (myID == null) { myID = ++tmLn.ID; firstTime=true;}//if new call, incr ID
  if (myID == tmLn.ID) { //if Im newest
    setTimeout('var_timelinePlay("'+tmLnName+'",'+myID+')',tmLn.delay);
    fNew = ++tmLn.curFrame;
    for (i=0; i<tmLn.length; i++) {
      sprite = tmLn[i];
      if (sprite.charAt(0) == 's') {
        if (sprite.obj) {
          numKeyFr = sprite.keyFrames.length; firstKeyFr = sprite.keyFrames[0];
          if (fNew >= firstKeyFr && fNew <= sprite.keyFrames[numKeyFr-1]) {//in range
            keyFrm=1;
            for (j=0; j<sprite.values.length; j++) {
              props = sprite.values[j]; 
              if (numKeyFr != props.length) {
                if (props.prop2 == null) sprite.obj[props.prop] = props[fNew-firstKeyFr];
                else        sprite.obj[props.prop2][props.prop] = props[fNew-firstKeyFr];
              } else {
                while (keyFrm<numKeyFr && fNew>=sprite.keyFrames[keyFrm]) keyFrm++;
                if (firstTime || fNew==sprite.keyFrames[keyFrm-1]) {
                  if (props.prop2 == null) sprite.obj[props.prop] = props[keyFrm-1];
                  else        sprite.obj[props.prop2][props.prop] = props[keyFrm-1];
        } } } } }
      } else if (sprite.charAt(0)=='b' && fNew == sprite.frame) eval(sprite.value);
      if (fNew > tmLn.lastFrame) tmLn.ID = 0;
  } }
}

function var_timelineStop(tmLnName) { //v1.2
  //Copyright 1997 Macromedia, Inc. All rights reserved.
  if (document.var_Time == null) var_initTimelines(); //if *very* 1st time
  if (tmLnName == null)  //stop all
    for (var i=0; i<document.var_Time.length; i++) document.var_Time[i].ID = null;
  else document.var_Time[tmLnName].ID = null; //stop one
}

function var_showHideLayers() { //v3.0A Modified by Al Sparber and Massimo Foti for NN6 Compatibility
  var i,p,v,obj,args=var_showHideLayers.arguments;if(document.getElementById){
   for (i=0; i<(args.length-2); i+=3){ obj=tmt_findObj(args[i]);v=args[i+2];
   v=(v=='show')?'visible':(v='hide')?'hidden':v;
   if(obj)obj.style.visibility=v;}} else{
  for (i=0; i<(args.length-2); i+=3) if ((obj=var_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }}
}



//netscape bug fix for reload//

function var_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.var_pgW=innerWidth; document.var_pgH=innerHeight; onresize=var_reloadPage; }}
  else if (innerWidth!=document.var_pgW || innerHeight!=document.var_pgH) location.reload();
}
var_reloadPage(true);

//browser version and platform sniffer and serves the appropiate stylesheet

if ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) < 4 )) {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_ie3.css\" TYPE=\"text/css\">"); }
else if ((navigator.appVersion.indexOf("Mac") != -1)) {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_mac.css\" TYPE=\"text/css\">"); }
else {
   document.write("<LINK REL=stylesheet HREF=\"http://www.qdesign.com/css/QDesign_css.css\" TYPE=\"text/css\">"); }


