(function(window){var svgSprite="<svg>"+""+'<symbol id="icon-address" viewBox="0 0 1024 1024">'+""+'<path d="M513.404488 13.127995c-207.754694 0-376.184755 166.490895-376.184755 371.836727 0 205.343785 376.184755 619.766422 376.184755 619.766422s376.184755-414.422637 376.184755-619.766422C889.590266 179.61889 721.161229 13.127995 513.404488 13.127995zM513.404488 632.863718c-138.497331 0-250.794953-110.971417-250.794953-247.898996 0-136.897903 112.297622-247.90002 250.794953-247.90002 138.499377 0 250.794953 111.00314 250.794953 247.90002C764.199441 521.892301 651.903865 632.863718 513.404488 632.863718zM513.404488 261.029038c-69.25634 0-125.389802 55.487755-125.389802 123.935684 0 68.448952 56.133462 123.965359 125.389802 123.965359s125.389802-55.515385 125.389802-123.965359C638.795313 316.516794 582.660828 261.029038 513.404488 261.029038z"  ></path>'+""+"</symbol>"+""+'<symbol id="icon-gouxuan" viewBox="0 0 1024 1024">'+""+'<path d="M512 2.56C230.4 2.56 2.56 230.4 2.56 512 2.56 793.6 230.4 1021.44 512 1021.44S1024 793.6 1024 512C1024 230.4 793.6 2.56 512 2.56L512 2.56zM512 957.44c-245.76 0-442.88-199.68-442.88-445.44 0-245.76 199.68-445.44 442.88-445.44 245.76 0 442.88 199.68 442.88 445.44C957.44 757.76 757.76 957.44 512 957.44L512 957.44z"  ></path>'+""+'<path d="M744.96 314.88 460.8 629.76l-158.72-138.24c-15.36-15.36-43.52-12.8-58.88 2.56-15.36 15.36-12.8 43.52 2.56 58.88L435.2 716.8c15.36 15.36 43.52 12.8 58.88-2.56l309.76-345.6c15.36-15.36 12.8-43.52-2.56-58.88C785.92 296.96 760.32 296.96 744.96 314.88L744.96 314.88z"  ></path>'+""+"</symbol>"+""+"</svg>";var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)