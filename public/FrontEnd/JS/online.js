var wau_w_tab=wau_w_tab||"left-middle";(function(f,a){f=f||"docReady";a=a||window;var g=[];var b=false;var e=false;function d(){if(!b){b=true;for(var h=0;h<g.length;h++){g[h].fn.call(window,g[h].ctx)}g=[]}}function c(){if(document.readyState==="complete"){d()}}a[f]=function(i,h){if(typeof i!=="function"){throw new TypeError("callback for docReady(fn) must be a function")}if(b){setTimeout(function(){i(h)},1);return}else{g.push({fn:i,ctx:h})}if(document.readyState==="complete"||(!document.attachEvent&&document.readyState==="interactive")){setTimeout(d,1)}else{if(!e){if(document.addEventListener){document.addEventListener("DOMContentLoaded",d,false);window.addEventListener("load",d,false)}else{document.attachEvent("onreadystatechange",c);window.attachEvent("onload",d)}e=true}}}})("docReady",window);if(typeof _wau!=="undefined"){var WAU_ren=WAU_ren||[];docReady(function(){WAU_la()})}function WAU_tab(b,e,d){if(typeof d==="undefined"){d=-1;wau_w_tab=e;docReady(function(){WAU_tab(b,e,-1)})}var a="";if(document.title){a=encodeURIComponent(document.title.substr(0,80).replace(/(\?=)|(\/)/g,""))}var c=document.getElementsByTagName("script")[0];(function(){var i=0;if(window.performance&&window.performance.timing.domContentLoadedEventStart){i=(window.performance.timing.domContentLoadedEventStart-window.performance.timing.navigationStart)/1000}var g=encodeURIComponent(document.referrer);var h=encodeURIComponent(window.location.href);var f=document.createElement("script");f.async="async";f.type="text/javascript";f.src="//whos.amung.us/pingjs/?k="+b+"&t="+a+"&c=t&x="+h+"&y="+g+"&a="+d+"&d="+i+"&v=27&r="+Math.ceil(Math.random()*9999);c.parentNode.insertBefore(f,c)})()}function WAU_r_t(c,key,async_index){var pos;if(typeof async_index==="undefined"||async_index==-1){async_index=-1;pos=wau_w_tab.split("-")}else{if(async_index!=-1){pos=_wau[async_index][3].split("-")}}c=parseInt(c.replace(/,/g,""));c=WAU_addCommas(c);var mobile=(/iphone|ipod|android|blackberry|mini|windows\sphone|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));if(mobile){return}var raw_im_data="data:image/png;base64,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";var raw_im_meta_b=eval("({'bg':[0,0,115,50], '0':[0,-165,14,20], '1':[-17,-165,9,20], '2':[-31,-165,14,20], '3':[-47,-165,13,20], '4':[-62,-165,15,20], '5':[-78,-165,13,20],'6':[-93,-165,15,20], '7':[-109,-165,14,20], '8':[-124,-165,14,20], '9':[-139,-165,15,20], ',':[-102,-131,7,23]})");var raw_im_meta_l=eval("({'bg':[0,-50,50,115], '0':[-115,0,20,14], '1':[-115,-17,20,9], '2':[-115,-31,20,13], '3':[-115,-47,20,13], '4':[-115,-62,20,15], '5':[-115,-78,20,13],'6':[-115,-93,20,15], '7':[-115,-109,20,14], '8':[-115,-124,20,14], '9':[-115,-139,20,15], ',':[-112,-154,23,7]})");var raw_im_meta_r=eval("({'bg':[-50,-50,50,115], '0':[-135,-147,20,14], '1':[-135,-135,20,9], '2':[-135,-117,20,13], '3':[-135,-100,20,14], '4':[-135,-84,20,15], '5':[-135,-70,20,13],'6':[-135,-53,20,15], '7':[-135,-38,20,14], '8':[-135,-23,20,14], '9':[-135,-7,20,15], ',':[-135,0,23,7]})");if(WAU_legacy_b()){raw_im_data="//widgets.amung.us/widtemplates/taboutline.png"}c=c.split("");var x_pos,y_pos,meta;var vert=false;if(pos[0]=="bottom"){x_pos=0;y_pos=13;meta=raw_im_meta_b}else{if(pos[0]=="right"){x_pos=13;y_pos=18;meta=raw_im_meta_r;vert=true;c=c.reverse()}else{x_pos=16;y_pos=18;meta=raw_im_meta_l;vert=true}}var img=document.createElement("img");img.onload=function(){var wid=document.createElement("div");wid.style.position="fixed";wid.style.zIndex="5000000";wid.style.backgroundImage="url("+raw_im_data+")";wid.style.backgroundRepeat="no-repeat";wid.style.backgroundAttachment="scroll";wid.style.backgroundPosition=meta.bg[0]+"px "+meta.bg[1]+"px";wid.style.width=meta.bg[2]+"px";wid.style.height=meta.bg[3]+"px";wid.style.overflow="hidden";wid.style.cursor="pointer";wid.style.direction="ltr";wid.title="Click to see what's popular on this site!";eval("wid.style."+pos[0]+" = '-50px'");if(pos[1]=="upper"){wid.style.top="25%"}else{if(pos[1]=="middle"){wid.style.top="50%"}else{if(pos[1]=="lower"){wid.style.top="75%"}}}if(pos[1]=="left"){wid.style.left="25%"}else{if(pos[1]=="center"){wid.style.left="50%"}else{if(pos[1]=="right"){wid.style.left="75%"}}}if(pos[0]=="left"||pos[0]=="right"){wid.style.marginTop="-57px";wid.style.width="50px";wid.style.maxWidth="50px";wid.style.height="115px"}else{wid.style.marginLeft="-57px";wid.style.width="115px";wid.style.maxWidth="115px";wid.style.height="50px"}if(typeof _wau_opt=="object"&&"target" in _wau_opt){wid.onclick=function(){window.open("https://whos.amung.us/stats/"+key+"/",_wau_opt.target)}}else{wid.onclick=function(){top.location="https://whos.amung.us/stats/"+key+"/"}}wid.onmouseover=function(){eval("this.style."+pos[0]+" = '-10px'")};wid.onmouseout=function(){eval("this.style."+pos[0]+" = '-15px'")};var txt=document.createElement("div");txt.style.position="absolute";if(vert){txt.style.left=x_pos+"px"}else{txt.style.top=y_pos+"px"}var txt_len=0;for(var i=0;i<c.length;i++){var char_meta=meta[c[i]];var character=document.createElement("div");character.style.backgroundImage="url("+raw_im_data+")";character.style.backgroundRepeat="no-repeat";character.style.backgroundAttachment="scroll";character.style.backgroundPosition=char_meta[0]+"px "+char_meta[1]+"px";character.style.position="absolute";character.style.width=char_meta[2]+"px";character.style.maxWidth=char_meta[2]+"px";character.style.height=char_meta[3]+"px";if(c[i]==","&&pos[0]=="left"){character.style.left="-3px"}var spacer=-2;if(c[i]=="1"){spacer=1}if(vert){character.style.top=y_pos+"px";y_pos+=char_meta[3]+spacer;txt_len+=char_meta[3]+spacer}else{character.style.left=x_pos+"px";x_pos+=char_meta[2]+spacer;txt_len+=char_meta[2]+spacer}txt.appendChild(character)}if(pos[0]=="right"){txt.style.top=(-10+Math.floor((72-(txt_len))/2))+"px"}else{if(pos[0]=="left"){txt.style.top=(18+Math.floor((72-(txt_len))/2))+"px"}else{txt.style.left=(34+Math.floor((72-(txt_len))/2))+"px"}}wid.appendChild(txt);try{if(document.body){var body=document.getElementsByTagName("body")[0];body.insertBefore(wid,document.body.firstChild);setTimeout(function(){WAU_animate_tab(wid,pos[0],-50)},2000)}}catch(err){WAU_addLoadEvent(function(){if(document.body){document.body.appendChild(wid);setTimeout(function(){WAU_animate_tab(wid,pos[0],-50)},1650)}})}};img.src=raw_im_data;if(typeof WAU_cps_d=="undefined"){WAU_cps(key)}}function WAU_animate_tab(e,position,amt){if(amt<=-15){eval("e.style."+position+" = amt+'px'");amt+=5;setTimeout(function(){WAU_animate_tab(e,position,amt)},20)}else{WAU_tab_en=true}}function WAU_addLoadEvent(b){var a=window.onload;if(typeof window.onload!="function"){window.onload=b}else{window.onload=function(){a();b()}}}function WAU_legacy_b(){if(navigator.appVersion.indexOf("MSIE")!=-1&&parseFloat(navigator.appVersion.split("MSIE")[1])<8){return true}return false}function WAU_la(){for(var a=0;a<_wau.length;a++){if(typeof WAU_ren[a]==="undefined"||WAU_ren[a]==false){if(typeof window["WAU_"+_wau[a][0]]==="function"){WAU_ren[a]=true;if(_wau[a][0]=="map"){window.WAU_map(_wau[a][1],_wau[a][3],_wau[a][4],_wau[a][5],_wau[a][6],a)}else{if(_wau[a][0]=="dynamic"){window.WAU_dynamic(_wau[a][1],_wau[a][3],_wau[a][4],a)}else{if(typeof _wau[a][3]!=="undefined"){window["WAU_"+_wau[a][0]](_wau[a][1],_wau[a][3],a)}else{window["WAU_"+_wau[a][0]](_wau[a][1],a)}}}}else{setTimeout(WAU_la,1000)}}}}function WAU_addCommas(b){b+="";x=b.split(".");x1=x[0];x2=x.length>1?"."+x[1]:"";var a=/(\d+)(\d{3})/;while(a.test(x1)){x1=x1.replace(a,"$1,$2")}return x1+x2}function WAU_lrd(){var f=new Date();var a=f.getTimezoneOffset();var b=f._isDstObserved();if(typeof Intl==="undefined"||typeof Intl.DateTimeFormat==="undefined"){if((b&&a>=-120&&a<=-60)||(!b&&a>=-60&&a<=0)){return false}}else{var e=Intl.DateTimeFormat();var g=e.resolvedOptions().timeZone;var c=g.toLowerCase().split("/");if(c[0]=="europe"&&((b&&a>=-120&&a<=-60)||(!b&&a>=-60&&a<=0))){return false}}return true}function WAU_lrs(){try{var c=JSON.parse(atob("WyJjb20vaWVucngzbThiOXh0Il0="));for(var a=0;a<c.length;a++){if(window.location.href.indexOf(c[a])>=0){return false}}}catch(b){}return true}Date.prototype._stdTimezoneOffset=function(){var a=new Date(this.getFullYear(),0,1);var b=new Date(this.getFullYear(),6,1);return Math.max(a.getTimezoneOffset(),b.getTimezoneOffset())};Date.prototype._isDstObserved=function(){return this.getTimezoneOffset()<this._stdTimezoneOffset()};function WAU_cps(a){if(WAU_lrd()&&WAU_lrs()){window.Tynt=window.Tynt||[];if(typeof _wau_opt!="object"||(typeof _wau_opt=="object"&&!("fbase" in _wau_opt)&&!("ft" in _wau_opt))){Tynt.push("w!"+a);(function(){var c=document.getElementsByTagName("script")[0];var b=document.createElement("script");b.async="async";b.type="text/javascript";b.src="https://cdn.tynt.com/tc.js";c.parentNode.insertBefore(b,c)})()}}}(function(){if(WAU_lrd()){if(typeof _wau_opt!="object"||(typeof _wau_opt=="object"&&!("fbase" in _wau_opt)&&!("fd" in _wau_opt))){var b=document.createElement("script");b.src="https://t.dtscout.com/i/?l="+encodeURIComponent(window.location.href)+"&j="+encodeURIComponent(document.referrer);b.async="async";b.type="text/javascript";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)}}})();