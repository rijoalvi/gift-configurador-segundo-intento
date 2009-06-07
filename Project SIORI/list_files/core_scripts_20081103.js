/* Copyright 2009 Google Inc. All Rights Reserved. */ (function(){
var global=this;String.prototype.startsWith=function(prefix$15){return this.indexOf(prefix$15)==0};String.prototype.endsWith=function(suffix$16){var l$17=this.length-suffix$16.length;return l$17>=0&&this.lastIndexOf(suffix$16,l$17)==l$17};String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")};String.prototype.subs=function(){var ret$19=this,i$20=0;for(;i$20<arguments.length;i$20++)ret$19=ret$19.replace(/\%s/,String(arguments[i$20]));return ret$19};
if(!Function.prototype.apply)Function.prototype.apply=function(oScope$21,opt_args$22){var sarg$23=[],rtrn$24,call$25;oScope$21||(oScope$21=global);var args$26=opt_args$22||[],i$27=0;for(;i$27<args$26.length;i$27++)sarg$23[i$27]="args["+i$27+"]";call$25="oScope.__applyTemp__.peek()("+sarg$23.join(",")+");";if(!oScope$21.__applyTemp__)oScope$21.__applyTemp__=[];oScope$21.__applyTemp__.push(this);rtrn$24=eval(call$25);oScope$21.__applyTemp__.pop();return rtrn$24};
if(!Array.prototype.push)Array.prototype.push=function(){var i$29=0;for(;i$29<arguments.length;i$29++)this[this.length]=arguments[i$29];return this.length};if(!Array.prototype.pop)Array.prototype.pop=function(){if(!!this.length){var val$30=this[this.length-1];this.length--;return val$30}};Array.prototype.peek=function(){return this[this.length-1]};
if(!Array.prototype.shift)Array.prototype.shift=function(){if(!(this.length==0)){var val$31=this[0],i$32=0;for(;i$32<this.length-1;i$32++)this[i$32]=this[i$32+1];this.length--;return val$31}};if(!Array.prototype.unshift)Array.prototype.unshift=function(){var numArgs$34=arguments.length,i$35=this.length-1;for(;i$35>=0;i$35--)this[i$35+numArgs$34]=this[i$35];var j$36=0;for(;j$36<numArgs$34;j$36++)this[j$36]=arguments[j$36];return this.length};
if(!Array.prototype.forEach)Array.prototype.forEach=function(callback$37,opt_scope$38){var i$39=0;for(;i$39<this.length;i$39++)callback$37.call(opt_scope$38,this[i$39],i$39,this)};
function bind(fn$40,self$41){var boundargs$43=fn$40.boundArgs_||[];boundargs$43=boundargs$43.concat(Array.prototype.slice.call(arguments,2));if(typeof fn$40.boundSelf_!="undefined")self$41=fn$40.boundSelf_;if(typeof fn$40.boundFn_!="undefined")fn$40=fn$40.boundFn_;var newfn$44=function(){var args$45=boundargs$43.concat(Array.prototype.slice.call(arguments));return fn$40.apply(self$41,args$45)};newfn$44.boundArgs_=boundargs$43;newfn$44.boundSelf_=self$41;newfn$44.boundFn_=fn$40;return newfn$44}
Function.prototype.bind=function(self$46){return bind.apply(null,[this,self$46].concat(Array.prototype.slice.call(arguments,1)))};Function.prototype.partial=function(){return bind.apply(null,[this,null].concat(Array.prototype.slice.call(arguments)))};Function.prototype.inherits=function(parentCtor$53){var tempCtor$54=function(){};this.superClass_=tempCtor$54.prototype=parentCtor$53.prototype;this.prototype=new tempCtor$54};
Function.prototype.mixin=function(props$55){for(var x$56 in props$55)this.prototype[x$56]=props$55[x$56];if(typeof props$55.toString=="function"&&props$55.toString!=this.prototype.toString)this.prototype.toString=props$55.toString};var DB_mode=false;function DumpError(str$58){try{throw str$58;}catch(e$59){DumpException(e$59)}}
function DumpException(e$60,opt_msg$61){var title$62="Javascript exception: "+(opt_msg$61?opt_msg$61:"")+" "+e$60;if(BR_IsIE())title$62+=" "+e$60.name+": "+e$60.message+" ("+e$60.number+")";var error$63="";if(typeof e$60=="string")error$63=e$60+"\n";else for(var i$64 in e$60)try{error$63+=i$64+": "+e$60[i$64]+"\n"}catch(ex$65){}error$63+=DB_GetStackTrace(DumpException.caller);DB_WriteDebugMsg(title$62+"\n"+error$63,1)}var function_name_re_=/function (\w+)/;
function DB_GetFunctionName(fn$68){var m$69=function_name_re_.exec(String(fn$68));if(m$69)return m$69[1];return""}
function DB_GetStackTrace(fn$70){try{if(!BR_IsIE()&&!(BR_AgentContains_("safari")||BR_AgentContains_("konqueror"))&&BR_AgentContains_("mozilla"))return Error().stack;if(!fn$70)return"";var x$71="- "+DB_GetFunctionName(fn$70)+"(",i$72=0;for(;i$72<fn$70.arguments.length;i$72++){if(i$72>0)x$71+=", ";var arg$73=String(fn$70.arguments[i$72]);if(arg$73.length>40)arg$73=arg$73.substr(0,40)+"...";x$71+=arg$73}x$71+=")\n";x$71+=DB_GetStackTrace(fn$70.caller);return x$71}catch(ex$74){return"[Cannot get stack trace]: "+
ex$74+"\n"}}var DB_starttime,DB_win=null,DB_winopening=false;
function DB_OpenDebugWindow(){if((DB_win==null||DB_win.closed)&&!DB_winopening)try{DB_winopening=true;DB_win=window.open("","debug","width=700,height=500,toolbar=no,resizable=yes,scrollbars=yes,left=16,top=16,screenx=16,screeny=16");DB_win.blur();DB_win.document.open();DB_winopening=false;var html$104="<font color=#ff0000><b>To turn off this debugging window,hit 'D' inside the main caribou window, then close this window.</b></font><br>";DB_WriteDebugHtml(html$104)}catch(ex$105){}}
function DB_WriteDebugMsg(str$106,level$107){if(DB_mode){try{var t$108=(new Date).getTime()-DB_starttime,html$109="["+t$108+"] "+HtmlEscape(str$106).replace(/\n/g,"<br>")+"<br>";if(level$107==1){html$109="<font color=#ff0000><b>Error: "+html$109+"</b></font>";DB_win.focus()}}catch(ex$110){}DB_WriteDebugHtml(html$109)}else typeof log!="undefined"&&log(HtmlEscape(str$106))}
function DB_WriteDebugHtml(html$111){if(!!DB_mode)try{DB_OpenDebugWindow();DB_win.document.write(html$111);DB_win.scrollTo(0,1000000)}catch(ex$112){}};function BR_AgentContains_(str$115){if(str$115 in BR_AgentContains_cache_)return BR_AgentContains_cache_[str$115];return BR_AgentContains_cache_[str$115]=navigator.userAgent.toLowerCase().indexOf(str$115)!=-1}var BR_AgentContains_cache_={};function BR_IsIE(){return BR_AgentContains_("msie")&&!window.opera}var amp_re_=/&/g,lt_re_=/</g,gt_re_=/>/g;
function HtmlEscape(str$332){if(!str$332)return"";return str$332.replace(amp_re_,"&amp;").replace(lt_re_,"&lt;").replace(gt_re_,"&gt;").replace(quote_re_,"&quot;")}var quote_re_=/\"/g;function forid_1(id$465){return document.getElementById(id$465)}function forid_2(id$466){return document.all[id$466]}var forid=document.getElementById?forid_1:forid_2;
function log(msg$470){try{if(window.parent!=window&&window.parent.log){window.parent.log(window.name+"::"+msg$470);return}}catch(e$473){}var logPane$471=forid("log");if(logPane$471){var logText$472="<p class=logentry><span class=logdate>"+new Date+"</span><span class=logmsg>"+msg$470+"</span></p>";logPane$471.innerHTML=logText$472+logPane$471.innerHTML}else window.status=msg$470};function AS_Assert(){}AS_Assert.raise=function(msg$474){if(typeof Error!="undefined")throw new Error(msg$474||"Assertion Failed");else throw msg$474;};AS_Assert.fail=function(opt_msg$475){opt_msg$475=opt_msg$475||"Assertion failed";typeof DumpError=="undefined"||DumpError(opt_msg$475+"\n");AS_Assert.raise(opt_msg$475)};AS_Assert.isTrue=function(expression$476,opt_msg$477){if(!expression$476){if(opt_msg$477===undefined)opt_msg$477="Assertion failed";AS_Assert.fail(opt_msg$477)}};
AS_Assert.equals=function(val1$478,val2$479,opt_msg$480){if(val1$478!=val2$479){if(opt_msg$480===undefined)opt_msg$480="AS_Assert.equals failed: <"+val1$478+"> != <"+val2$479+">";AS_Assert.fail(opt_msg$480)}};
AS_Assert.typeOf=function(value$481,type$482,opt_msg$483){if(!(typeof value$481==type$482)){if(value$481||value$481=="")try{if(type$482==AS_Assert.TYPE_MAP[typeof value$481]||value$481 instanceof type$482)return}catch(e$485){}if(opt_msg$483===undefined){if(typeof type$482=="function"){var match$484=type$482.toString().match(/^\s*function\s+([^\s\{]+)/);if(match$484)type$482=match$484[1]}opt_msg$483="AS_Assert.typeOf failed: <"+value$481+"> not typeof "+type$482}AS_Assert.fail(opt_msg$483)}};
AS_Assert.TYPE_MAP={string:String,number:Number,"boolean":Boolean};AS_Assert.numArgs=function(num$486,opt_msg$487){var caller$488=AS_Assert.numArgs.caller;if(caller$488&&caller$488.arguments.length!=num$486){if(opt_msg$487===undefined)opt_msg$487=caller$488.name+" expected "+num$486+" arguments  but received "+caller$488.arguments.length;AS_Assert.fail(opt_msg$487)}};Function.prototype.bind=function(thisObj$489){if(typeof this!="function")throw new Error("Bind must be called as a method of a function object.");var self$491=this,staticArgs$492=Array.prototype.splice.call(arguments,1,arguments.length);return function(){var args$493=staticArgs$492.concat(),i$494=0;for(;i$494<arguments.length;i$494++)args$493.push(arguments[i$494]);return self$491.apply(thisObj$489,args$493)}};var listen,unlisten,unlistenByKey;
(function(){var listeners$495={},nextId$496=0;function getHashCode_$497(obj$500){if(obj$500.listen_hc_==null)obj$500.listen_hc_=++nextId$496;return obj$500.listen_hc_}function createKey_$498(node$501,event$502,listener$503,opt_useCapture$504){var nodeHc$505=getHashCode_$497(node$501),listenerHc$506=getHashCode_$497(listener$503);opt_useCapture$504=!!opt_useCapture$504;var key$507=nodeHc$505+"_"+event$502+"_"+listenerHc$506+"_"+opt_useCapture$504;return key$507}listen=function(node$508,event$509,listener$510,
opt_useCapture$511){var key$512=createKey_$498(node$508,event$509,listener$510,opt_useCapture$511);if(key$512 in listeners$495)return key$512;var proxy$513=handleEvent$499.bind(null,key$512);listeners$495[key$512]={listener:listener$510,proxy:proxy$513,event:event$509,node:node$508,useCapture:opt_useCapture$511};if(node$508.addEventListener)node$508.addEventListener(event$509,proxy$513,opt_useCapture$511);else if(node$508.attachEvent)node$508.attachEvent("on"+event$509,proxy$513);else throw new Error("Node {"+
node$508+"} does not support event listeners.");return key$512};unlisten=function(node$514,event$515,listener$516,opt_useCapture$517){var key$518=createKey_$498(node$514,event$515,listener$516,opt_useCapture$517);return unlistenByKey(key$518)};unlistenByKey=function(key$519){if(!(key$519 in listeners$495))return false;var listener$520=listeners$495[key$519],proxy$521=listener$520.proxy,event$522=listener$520.event,node$523=listener$520.node,useCapture$524=listener$520.useCapture;if(node$523.removeEventListener)node$523.removeEventListener(event$522,
proxy$521,useCapture$524);else node$523.detachEvent&&node$523.detachEvent("on"+event$522,proxy$521);delete listeners$495[key$519];return true};function handleEvent$499(key$525){var args$526=Array.prototype.splice.call(arguments,1,arguments.length);return listeners$495[key$525].listener.apply(null,args$526)}})();function Point(x$534,y$535,opt_coordinateFrame$536){this.x=x$534;this.y=y$535;this.coordinateFrame=opt_coordinateFrame$536||null}Point.prototype.toString=function(){return"[P "+this.x+","+this.y+"]"};Point.prototype.clone=function(){return new Point(this.x,this.y,this.coordinateFrame)};function Delta(dx$537,dy$538){this.dx=dx$537;this.dy=dy$538}Delta.prototype.toString=function(){return"[D "+this.dx+","+this.dy+"]"};
function Rect(x$539,y$540,w$541,h$542,opt_coordinateFrame$543){this.x=x$539;this.y=y$540;this.w=w$541;this.h=h$542;this.coordinateFrame=opt_coordinateFrame$543||null}Rect.prototype.contains=function(p$544){return this.x<=p$544.x&&p$544.x<this.x+this.w&&this.y<=p$544.y&&p$544.y<this.y+this.h};
Rect.prototype.intersects=function(r$545){var p$546=function(x$547,y$548){return new Point(x$547,y$548,null)};return this.contains(p$546(r$545.x,r$545.y))||this.contains(p$546(r$545.x+r$545.w,r$545.y))||this.contains(p$546(r$545.x+r$545.w,r$545.y+r$545.h))||this.contains(p$546(r$545.x,r$545.y+r$545.h))||r$545.contains(p$546(this.x,this.y))||r$545.contains(p$546(this.x+this.w,this.y))||r$545.contains(p$546(this.x+this.w,this.y+this.h))||r$545.contains(p$546(this.x,this.y+this.h))};
Rect.prototype.toString=function(){return"[R "+this.w+"x"+this.h+"+"+this.x+"+"+this.y+"]"};Rect.prototype.clone=function(){return new Rect(this.x,this.y,this.w,this.h,this.coordinateFrame)};var XH_ieProgId_;
function XH_XmlHttpInit_(){var XH_ACTIVE_X_IDENTS$581=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"];if(typeof XMLHttpRequest=="undefined"&&typeof ActiveXObject!="undefined"){var i$582=0;for(;i$582<XH_ACTIVE_X_IDENTS$581.length;i$582++){var candidate$583=XH_ACTIVE_X_IDENTS$581[i$582];try{new ActiveXObject(candidate$583);XH_ieProgId_=candidate$583;break}catch(e$584){}}if(!XH_ieProgId_)throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed.");}}
XH_XmlHttpInit_();function XH_XmlHttpPOST(xmlHttp$588,url$589,data$590,handler$591){xmlHttp$588.open("POST",url$589,true);xmlHttp$588.onreadystatechange=handler$591;xmlHttp$588.setRequestHeader("Content-Type","application/x-www-form-urlencoded");xmlHttp$588.setRequestHeader("Content-Length",data$590.length);XH_XmlHttpSend(xmlHttp$588,data$590)}
function XH_XmlHttpSend(xmlHttp$599,data$600){try{xmlHttp$599.send(data$600)}catch(e$601){log("XMLHttpSend failed "+e$601.toString()+"<br>"+e$601.stack);throw e$601;}};if("undefined"==typeof log)log=function(){};function Dom(opt_doc$651){this.doc=opt_doc$651||document;this.getElementById_=this.doc.getElementById?function(id$652){return this.doc.getElementById(id$652)}:function(id$653){return this.doc.all[id$653]}}Dom.prototype.$=function(id$654){return this.getElementById_(id$654)};Dom.prototype.create=function(nodeName$655){return this.doc.createElement(nodeName$655)};Dom.prototype.createText=function(text$656){return this.doc.createTextNode(text$656)};
Dom.remove=function(node$657){AS_Assert.isTrue(node$657.parentNode);node$657.parentNode.removeChild(node$657)};Dom.insertAfter=function(newNode$658,refNode$659){AS_Assert.isTrue(refNode$659.parentNode);refNode$659.parentNode.insertBefore(newNode$658,refNode$659.nextSibling)};Dom.insertBefore=function(newNode$660,refNode$661){AS_Assert.isTrue(refNode$661.parentNode);refNode$661.parentNode.insertBefore(newNode$660,refNode$661)};
Dom.replace=function(newNode$662,oldNode$663){AS_Assert.isTrue(oldNode$663.parentNode);oldNode$663.parentNode.replaceChild(newNode$662,oldNode$663)};Dom.getInnerText=function(node$664){var innerText$665=[];Dom.getInnerTextHelp_(node$664,innerText$665);return innerText$665.join("")};
Dom.getInnerTextHelp_=function(node$666,stringBuffer$667){if(node$666.innerText)stringBuffer$667.push(node$666.innerText);else if(node$666.data)stringBuffer$667.push(node$666.data);else if(node$666.hasChildNodes()){var child$668=node$666.firstChild;for(;child$668;){arguments.callee(child$668,stringBuffer$667);child$668=child$668.nextSibling}}};new Dom;if(window.jstiming){window.jstiming.beaconImageReferences_={};window.jstiming.nextImageId_=1;function getTick(timer$672,label$673,opt_start$674){var start$676,tick$675=timer$672.t[label$673];if(!tick$675)return undefined;var start$676=opt_start$674!=undefined?opt_start$674:timer$672.t.start;return tick$675-start$676}window.jstiming.report=function(timer$684,opt_extraParams$685,opt_reportUri$686){var extra$687="";if(window.jstiming.pt){extra$687+="&srt="+window.jstiming.pt;delete window.jstiming.pt}try{if(window.external.tran)extra$687+=
"&tran="+window.external.tran}catch(e$701){}var ticks$692=timer$684.t,start$693=ticks$692.start,rt$694=[];for(var label$696 in ticks$692)label$696=="start"||start$693&&rt$694.push(label$696+"."+getTick(timer$684,label$696));delete ticks$692.start;if(opt_extraParams$685)for(var arg$698 in opt_extraParams$685)extra$687+="&"+arg$698+"="+opt_extraParams$685[arg$698];var img$699=new Image,id$700=window.jstiming.nextImageId_++;window.jstiming.beaconImageReferences_[id$700]=img$699;img$699.onload=img$699.onerror=
function(){delete window.jstiming.beaconImageReferences_[id$700]};img$699.src=[opt_reportUri$686?opt_reportUri$686:"http://csi.gstatic.com/csi","?v=3","&s="+(window.jstiming.sn?window.jstiming.sn:"codesite")+"&action=",timer$684.name,extra$687,"&rt=",rt$694.join(",")].join("");img$699=null}};var CS_star={};
function CS_toggleStar(el$703,args$704,star_msg_id$705,star_on_msg$706,star_off_msg$707){var starred$708=el$703.src.indexOf("star_off.gif")!=-1?1:0;el$703.src=starred$708?"http://www.gstatic.com/codesite/ph/images/star_on.gif":"http://www.gstatic.com/codesite/ph/images/star_off.gif";var star_msg_el$709=document.getElementById(star_msg_id$705);if(star_msg_el$709)star_msg_el$709.innerHTML=starred$708?star_on_msg$706:star_off_msg$707;CS_star={on_msg:star_on_msg$706,off_msg:star_off_msg$707,img_el:el$703,
msg_el:star_msg_el$709};args$704.starred=starred$708;CS_setStar(args$704)}var CS_starXmlHttp=undefined;function CS_setStar(args$710){CS_starXmlHttp=XH_ieProgId_?new ActiveXObject(XH_ieProgId_):new XMLHttpRequest;var setStarURL$711="/hosting/stars.do",data$712="";for(var i$713 in args$710)data$712+=i$713+"="+encodeURIComponent(args$710[i$713])+"&";XH_XmlHttpPOST(CS_starXmlHttp,setStarURL$711,data$712,CS_setStarCallback)}
function CS_setStarCallback(){CS_starXmlHttp.readyState==4&&CS_starXmlHttp.status==200&&CS_gotSetStar(CS_starXmlHttp.responseText)}
function CS_gotSetStar(responseText$714){try{var args$716=eval("_d="+responseText$714),starred$717=args$716.starred;CS_star.img_el.src=starred$717?"http://www.gstatic.com/codesite/ph/images/star_on.gif":"http://www.gstatic.com/codesite/ph/images/star_off.gif";if(CS_star.msg_el)CS_star.msg_el.innerHTML=starred$717?CS_star.on_msg:CS_star.off_msg}catch(e$720){return null}};_CS_toggleStar=CS_toggleStar;(function(){function getPageType$730(url$734){var URL_FILTER$735=/http:\/\/[^\/]*\/(u|hosting|p)\/([^\?\/]*)\/?([^\?\/]*)\/?([^\?\/]*)?/,urlArray$736=URL_FILTER$735.exec(url$734);if(urlArray$736[1]=="hosting"){if(urlArray$736[2])return"hosting_"+urlArray$736[2];return"hosting_home"}if(urlArray$736[1]=="u"){if(urlArray$736[3]=="updates"){if(urlArray$736[4])return"user_updates_"+urlArray$736[4];return"user_updates_user"}return"user_profile"}if(urlArray$736[1]=="p"){if(!urlArray$736[3]&&!urlArray$736[4])return"summary";
if(urlArray$736[3]=="wiki")return urlArray$736[3];if(urlArray$736[3]&&!urlArray$736[4])return urlArray$736[3];if(urlArray$736[3]&&urlArray$736[4]){var page$737=urlArray$736[3]=="w"?"wiki":urlArray$736[3];return page$737+"_"+urlArray$736[4]}}return"other"}function getActionNames$731(){var names$738=["codesite","ph"],pageType$739="project_"+getPageType$730(window.location.href);names$738.push(pageType$739);return names$738.join(",")}function onLoadCsi$732(){var loadTimer$740=window.jstiming.load;loadTimer$740.tick("plt");
loadTimer$740.name=getActionNames$731();window.setTimeout(function(){window.jstiming.report(loadTimer$740)},500)}function reportToCsi$733(){if(window.attachEvent)window.attachEvent("onload",onLoadCsi$732);else window.addEventListener&&window.addEventListener("load",onLoadCsi$732,false)}window._CS_reportToCsi=reportToCsi$733})();(function(){function loadAnalytics$741(){window.setTimeout(function(){var gaJsHost$742="https:"==document.location.protocol?"https://ssl.":"http://www.",url$743=gaJsHost$742+"google-analytics.com/ga.js",script$744=document.createElement("script");script$744.src=url$743;script$744.type="text/javascript";document.getElementsByTagName("head")[0].appendChild(script$744);_CS_reportAnalytics()},0)}if(window.attachEvent)window.attachEvent("onload",loadAnalytics$741);else window.addEventListener&&window.addEventListener("load",
loadAnalytics$741,false)})();(function(){var export_name$745="Menu";window[export_name$745]=function(target$746,opt_trigger$747,opt_triggerType$748){this.iid=window[export_name$745].instance.length;window[export_name$745].instance[this.iid]=this;this.target=typeof target$746=="string"?document.getElementById(target$746):target$746;this.trigger=(opt_trigger$747=typeof opt_trigger$747=="string"?document.getElementById(opt_trigger$747):opt_trigger$747)||target$746;this.items=[];this.onOpenEvents=[];this.triggerType=opt_triggerType$748||
"click";this.menu=this.createElement("div","menuDiv instance"+this.iid);this.icon=this.createIcon();this.hide();this.addCategory("default");this.addEvent(this.trigger,this.triggerType,this.wrap(this.toggle));this.addEvent(window,"resize",this.wrap(this.adjustSizeAndLocation));this.addEvent(document,"click",this.wrap(this.hide));this.addEvent(this.menu,"click",this.stopPropagation());this.addEvent(this.trigger,"click",this.stopPropagation());this.addEvent(this.icon,"click",this.stopPropagation())};
window[export_name$745].prototype={target:null,trigger:null,triggerType:null,menu:null,icon:null,categories:null,thread:-1,iid:-1,items:null,scrolls:false,onOpenEvents:null,createElement:function(element$749,opt_className$750,opt_content$751){var div$752=document.createElement(element$749);div$752.className=opt_className$750;opt_content$751&&this.append(opt_content$751,div$752);return div$752},createIcon:function(){var icon$753=this.createElement("img","menuIcon off instance"+this.iid);icon$753.setAttribute("src",
"http://www.gstatic.com/codesite/ph/images/cleardot.gif");icon$753.setAttribute("height","14");icon$753.setAttribute("width","14");icon$753.style.verticalAlignment="middle";this.target.parentNode.insertBefore(icon$753,this.target.nextSibling);this.addEvent(this.trigger,"mouseover",this.wrap(this.iconOver,icon$753));this.addEvent(this.trigger,"mouseout",this.wrap(this.iconOut,icon$753));this.addEvent(icon$753,"mouseover",this.wrap(this.iconOver,icon$753));this.addEvent(icon$753,"mouseout",this.wrap(this.iconOut,
icon$753));this.addEvent(icon$753,"mousedown",this.wrap(this.toggle));return icon$753},iconOver:function(){if(this.className)this.className=this.className.replace(/ off/g," on")},iconOut:function(opt_down$754){if(this.className){var regex$755=opt_down$754?/ (on|down)/g:/ on/g;this.className=this.className.replace(regex$755," off")}},iconDown:function(){if(this.className)this.className=this.className.replace(/ (off|on)/g," down")},addEvent:function(element$756,eventType$757,callback$758){if(element$756.addEventListener)element$756.addEventListener(eventType$757,
callback$758,false);else try{element$756.attachEvent("on"+eventType$757,callback$758)}catch(e$759){element$756["on"+eventType$757]=callback$758}},addOnOpen:function(eventCallback$760){var eventIndex$761=this.onOpenEvents.length;this.onOpenEvents.push(eventCallback$760);return eventIndex$761},wrap:function(callback$762,opt_thisObj$763){var closured_callback$764=callback$762,this_object$765=opt_thisObj$763||this;return function(){closured_callback$764.apply(this_object$765)}},addCategory:function(category$766,
opt_title$767){this.categories=this.categories||[];var categoryDiv$768=this.createElement("div","menuCategory "+category$766);categoryDiv$768._categoryName=category$766;if(opt_title$767){var categoryTitle$769=this.createElement("b","categoryTitle "+category$766,opt_title$767);categoryTitle$769.style.display="block";this.append(categoryTitle$769)}this.append(categoryDiv$768);return this.categories[this.categories.length]=this.categories[category$766]=categoryDiv$768},emptyCategory:function(category$770){if(!!this.categories[category$770]){var div$771=
this.categories[category$770],i$772=div$771.childNodes.length-1;for(;i$772>=0;i$772--)div$771.removeChild(div$771.childNodes[i$772])}},clear:function(){var i$773=0;for(;i$773<this.categories.length;i$773++)this.categories[this.categories[i$773]._categoryName]=null;this.items.splice(0,this.items.length);this.categories.splice(0,this.categories.length);this.categories=[];this.items=[];this.menu.innerHTML=""},removeItem:function(item$774){var result$775=null,i$776=0;for(;i$776<this.items.length;i$776++){if(this.items[i$776]==
item$774){result$775=this.items[i$776];this.items.splice(i$776,1)}this.items[i$776].item._index=i$776}return result$775},removeCategory:function(category$777){var div$778=this.categories[category$777];if(!(!div$778||!div$778.parentNode)){div$778.parentNode.removeChild(div$778);var i$779=0;for(;i$779<this.categories.length;i$779++)if(this.categories[i$779]===div$778){this.categories[this.categories[i$779]._categoryName]=null;this.categories.splice(i$779,1);return}var i$779=0;for(;i$779<div$778.childNodes.length;i$779++)div$778.childNodes[i$779]._index?
this.items.splice(div$778.childNodes[i$779]._index,1):this.removeItem(div$778.childNodes[i$779])}},addItem:function(html_or_element$780,opt_href$781,opt_category$782,opt_title$783){var category$784=opt_category$782?this.categories[opt_category$782]||this.addCategory(opt_category$782,opt_title$783):this.categories["default"],menuItem$785=this.createElement("a","menuItem",html_or_element$780),menuHref$786=opt_href$781||"#",itemText$787=typeof html_or_element$780=="string"?html_or_element$780:html_or_element$780.innerText||
"ERROR";menuItem$785.style.display="block";menuItem$785.setAttribute("href",menuHref$786);menuItem$785._index=this.items.length;this.append(menuItem$785,category$784);this.items[this.items.length]={item:menuItem$785,text:itemText$787};return menuItem$785},addSeparator:function(opt_category$788,opt_title$789){var category$790=opt_category$788?this.categories[opt_category$788]||this.addCategory(opt_category$788,opt_title$789):this.categories["default"],hr$791=this.createElement("hr","menuSeparator");
this.append(hr$791,category$790)},adjustSizeAndLocation:function(){var style$792=this.menu.style;style$792.position="absolute";var firstCategory$793=null,i$794=0;for(;i$794<this.categories.length;i$794++){this.categories[i$794].className=this.categories[i$794].className.replace(/ first/,"");if(this.categories[i$794].childNodes.length==0)this.categories[i$794].style.display="none";else{this.categories[i$794].style.display="";if(!firstCategory$793){firstCategory$793=this.categories[i$794];firstCategory$793.className+=
" first"}}}var alreadyVisible$795=style$792.display!="none"&&style$792.visibility!="hidden",docElemWidth$796=document.documentElement.clientWidth,docElemHeight$797=document.documentElement.clientHeight,pageSize$798={w:(window.innerWidth||docElemWidth$796&&docElemWidth$796>0?docElemWidth$796:document.body.clientWidth)||1,h:(window.innerHeight||docElemHeight$797&&docElemHeight$797>0?docElemHeight$797:document.body.clientHeight)||1},iconPos$799=this.find(this.icon),iconSize$800={w:this.icon.offsetWidth,
h:this.icon.offsetHeight},targetPos$801=this.find(this.target),targetSize$802={w:this.target.offsetWidth,h:this.target.offsetHeight},menuSize$803={w:this.menu.offsetWidth,h:this.menu.offsetHeight};if(!alreadyVisible$795){var oldVisibility$804=style$792.visibility,oldDisplay$805=style$792.display;style$792.visibility="hidden";style$792.display="";style$792.height="";style$792.width="";menuSize$803={w:this.menu.offsetWidth,h:this.menu.offsetHeight};style$792.display=oldDisplay$805;style$792.visibility=
oldVisibility$804}var addScroll$806=this.menu.offsetHeight/pageSize$798.h>0.8;if(addScroll$806){menuSize$803.h=parseInt(pageSize$798.h*0.8,10);style$792.height=menuSize$803.h+"px";style$792.overflowX="hidden";style$792.overflowY="auto"}else style$792.height=style$792.overflowY=style$792.overflowX="";style$792.top=targetPos$801.y+targetSize$802.h+"px";style$792.left=targetPos$801.x+"px";if(menuSize$803.w<175)style$792.width="175px";if(addScroll$806)style$792.width=parseInt(style$792.width,10)+13+"px";
if(targetPos$801.x+menuSize$803.w>pageSize$798.w)style$792.left=iconPos$799.x-(menuSize$803.w-iconSize$800.w)+"px"},html:function(opt_html$807){var result$808=this.menu.innerHTML;if(opt_html$807)this.menu.innerHTML=opt_html$807;return result$808},append:function(html_or_element$809,opt_target$810){var element$811=opt_target$810||this.menu;if(typeof opt_target$810=="string"&&this.categories[opt_target$810])element$811=this.categories[opt_target$810];if(typeof html_or_element$809=="string")element$811.innerHTML+=
html_or_element$809;else element$811.appendChild(html_or_element$809)},over:function(){this.menu.style.display!="none"&&this.show();if(this.thread!=-1){clearTimeout(this.thread);this.thread=-1}},out:function(){if(this.thread!=-1){clearTimeout(this.thread);this.thread=-1}this.thread=setTimeout(this.wrap(this.hide),400)},stopPropagation:function(){return function(e$812){if(!e$812)var e$812=window.event;e$812.cancelBubble=true;e$812.stopPropagation&&e$812.stopPropagation()}},toggle:function(){this.menu.style.display==
"none"?this.show():this.hide()},show:function(){if(this.menu.style.display!=""){var i$813=0;for(;i$813<this.onOpenEvents.length;i$813++)this.onOpenEvents[i$813].call(null,this);this.menu.style.visibility="hidden";this.menu.style.display="";this.adjustSizeAndLocation();this.iconDown.apply(this.icon);this.trigger.nodeName&&this.trigger.nodeName=="A"&&this.trigger.blur();this.menu.style.visibility="visible"}},hide:function(){this.iconOut.apply(this.icon,[true]);this.menu.style.display="none"},find:function(element$814){var curleft$815=
0,curtop$816=0;if(element$814.offsetParent){do{curleft$815+=element$814.offsetLeft;curtop$816+=element$814.offsetTop}while((element$814=element$814.offsetParent)&&element$814.style&&element$814.style.position!="relative"&&element$814.style.position!="absolute")}return{x:curleft$815,y:curtop$816}}};window[export_name$745].instance=[]})();(function(){var target$817=document.getElementById("projects-dropdown");if(target$817){window.myprojects=new Menu(target$817);window._addProjects=function(jsonData$820){myprojects.clear();var starred$821=[],projects$822=[];for(var category$823 in jsonData$820)switch(category$823){case "memberof":case "ownerof":var i$824=0;for(;i$824<jsonData$820[category$823].length;i$824++)projects$822.push(jsonData$820[category$823][i$824]);break;case "starred":var i$824=0;for(;i$824<jsonData$820[category$823].length;i$824++)starred$821.push(jsonData$820[category$823][i$824]);
break;default:break}projects$822.sort();var i$824=0;for(;i$824<projects$822.length;i$824++)myprojects.addItem(projects$822[i$824],"/p/"+projects$822[i$824]+"/","projects","Projects");starred$821.sort();var i$824=0;for(;i$824<starred$821.length;i$824++)myprojects.addItem(starred$821[i$824],"/p/"+starred$821[i$824]+"/","starred","Starred");myprojects.addSeparator("controls","");myprojects.addItem("Find or start a project...","/hosting/","controls");var scriptTag$825=document.getElementById("_myprojects_script");
scriptTag$825.parentNode.removeChild(scriptTag$825)};var loadItems$819=function(){var script$827=document.getElementById("_myprojects_script");if(!script$827){var elem$828=document.createElement("script");elem$828.src="/hosting/projects?jsonp=_addProjects";elem$828.setAttribute("id","_myprojects_script");document.getElementsByTagName("head")[0].appendChild(elem$828)}};myprojects.addEvent(window,"load",loadItems$819);myprojects.addOnOpen(loadItems$819);if(window.addEventListener)window.addEventListener("load",
function(){document.body.appendChild(myprojects.menu)},false);else window.attachEvent&&window.attachEvent("onload",function(){document.body.appendChild(myprojects.menu)})}})();
})()