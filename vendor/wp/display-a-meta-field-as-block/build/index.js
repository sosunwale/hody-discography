!function(){var e,t={331:function(e,t,n){"use strict";var r,o,a=window.wp.blocks,i=window.wp.element,l=n(856),c=n.n(l),s=n(184),u=n.n(s),f=window.wp.i18n,m=window.wp.blockEditor,d=window.wp.data,p=window.wp.editor,h=window.wp.coreData,g=window.wp.components,v=window.wp.apiFetch,y=n.n(v),b=window.React;function _(){return _=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},_.apply(this,arguments)}var E=JSON.parse('{"TN":"Meta Field Block"}');(0,a.registerBlockType)("mfb/meta-field-block",{title:E.TN,icon:function(e){return b.createElement("svg",_({xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 256 256"},e),r||(r=b.createElement("path",{d:"M31.672 74.043c-7.225 0-12.406 1.04-15.54 3.118-3.517 2.336-5.275 6.569-5.275 12.698v23.64c0 7.443-3.134 11.62-9.403 12.531v3.94c6.27.95 9.403 5.162 9.403 12.641v23.42c0 5.4 1.32 9.304 3.957 11.712 3.058 2.809 8.677 4.214 16.858 4.214h1.491v-3.777h-.689c-5.429 0-9.25-.784-11.467-2.353-2.522-1.751-3.784-5.089-3.784-10.014v-23.31c0-6.969-3.613-11.82-10.837-14.557 7.224-2.59 10.837-7.405 10.837-14.446V90.187c0-4.342.936-7.406 2.808-9.195 2.18-2.079 6.327-3.118 12.443-3.118h.69v-3.83zm191.166 0v3.831h.689c6.115 0 10.263 1.04 12.442 3.118 1.872 1.789 2.808 4.853 2.808 9.195v23.312c0 7.04 3.613 11.856 10.837 14.446-7.224 2.736-10.837 7.59-10.837 14.556v23.312c0 4.925-1.262 8.263-3.784 10.014-2.216 1.569-6.038 2.354-11.467 2.354h-.688v3.776h1.49c8.18 0 13.801-1.405 16.857-4.214 2.639-2.408 3.958-6.312 3.958-11.712v-23.42c0-7.479 3.134-11.692 9.403-12.641v-3.94c-6.27-.912-9.403-5.088-9.403-12.53V89.858c0-6.13-1.758-10.362-5.276-12.698-3.133-2.078-8.314-3.118-15.539-3.118z"})),o||(o=b.createElement("path",{d:"M99.742 169.265H83.248v-55.26l-11.917 35.861H59.89l-11.916-35.86v55.26h-15.63v-82.53h19.256l14.465 41.402 14.42-41.402h19.258zm62.478-66.567h-29.577v15.354h27.418v15.962h-27.418v35.251H116.15v-82.53h46.07zm66.449 41.292q0 5.987-1.9 10.698-1.856 4.711-5.138 7.814-3.8 3.659-8.376 5.21-4.533 1.553-11.529 1.553h-28.065v-82.53h24.957q7.772 0 11.356.666 3.627.666 7.167 2.938 3.67 2.383 5.44 6.43 1.814 3.99 1.814 9.144 0 5.986-2.461 10.587-2.461 4.545-6.952 7.095v.443q6.304 1.607 9.974 6.65 3.713 5.044 3.713 13.302zm-21.244-33.92q0-2.05-.82-4.1-.776-2.052-2.805-3.049-1.815-.888-4.533-.943-2.678-.11-7.557-.11h-1.556v17.458h2.593q3.928 0 6.691-.166 2.764-.166 4.36-1.108 2.246-1.275 2.937-3.27.69-2.051.69-4.711zm4.06 33.589q0-3.937-1.21-6.042-1.165-2.161-4.014-3.215-1.944-.72-5.355-.776-3.41-.055-7.123-.055h-3.629v20.563h1.21q6.995 0 10.018-.056 3.022-.055 5.569-1.44 2.59-1.387 3.54-3.66.993-2.326.993-5.32z","aria-label":"MFB"})))},edit:function(e){var t;let{attributes:{fieldType:n="meta",fieldName:r,tagName:o="div",textAlign:a,prefix:l,suffix:s,displayLayout:v="",showOutline:b=!1},setAttributes:_,isSelected:E,context:{postId:T,postType:w}}=e;const{currentPostId:N,currentPostType:k}=(0,d.useSelect)((e=>({currentPostId:e(p.store).getCurrentPostId(),currentPostType:e(p.store).getCurrentPostType()})),[]);w||(w=k),T||(T=N);const[x,A]=(0,i.useState)({}),[S,C]=(0,i.useState)(""),{postTypeEntity:O}=(0,d.useSelect)((e=>({postTypeEntity:e(h.store).getEntity("postType",w)})),[]),[D,M]=(0,i.useState)(!1);(0,i.useEffect)((()=>{w&&T&&O&&("acf"!==n&&"rest_field"!==n||M(!0),y()({path:`${O.baseURL}/${T}?_fields=acf`}).then((e=>{e?.acf&&A(e.acf)}),(e=>{console.error(e)})).finally((()=>"acf"===n&&M(!1))),y()({path:`${O.baseURL}/${T}?_fields=${r}`}).then((e=>{var t;null!==(t=e[r])&&void 0!==t&&t&&C(e[r])}),(e=>{console.error(e)})).finally((()=>"rest_field"===n&&M(!1))))}),[w,T]);const[L]=w&&T?(0,h.useEntityProp)("postType",w,"meta",T):[[]],R=[{label:(0,f.__)("Default 'meta'","mfb"),value:"meta"},{label:(0,f.__)("ACF - Advanced Custom Fields","mfb"),value:"acf"},{label:(0,f.__)("Custom field","mfb"),value:"rest_field"}];let F;var I;if(r)if("meta"===n)F=null!==(I=L[r])&&void 0!==I?I:"";else if("acf"===n){var H;F=null!==(H=x[r])&&void 0!==H?H:""}else F=S;else F=(0,f.__)('This is the Meta Field Block. Please input "Field Name"',"mfb");T||F||(F=sprintf((0,f.__)("This is the Meta Field Block. It will display the value of the custom field: <code>%s</code> in any single post, page or custom content types.","mfb"),r));const z="div"===o?"div":"span",P=l?(0,i.createElement)(z,{className:"prefix",dangerouslySetInnerHTML:{__html:c().sanitize(l)}}):(0,i.createElement)(i.Fragment,null),U=s?(0,i.createElement)(z,{className:"suffix",dangerouslySetInnerHTML:{__html:c().sanitize(s)}}):(0,i.createElement)(i.Fragment,null),j={meta:(0,i.createElement)(i.Fragment,null,(0,f.__)("Fields are registered with ","mfb"),(0,i.createElement)(g.ExternalLink,{href:"https://developer.wordpress.org/reference/functions/register_meta/"},"register_meta"),(0,f.__)(" and 'show_in_rest' setting is enable.","mfb")),acf:(0,i.createElement)(i.Fragment,null,(0,f.__)("Fields are registered with ","mfb"),(0,i.createElement)(g.ExternalLink,{href:"https://wordpress.org/plugins/advanced-custom-fields/"},"Advanced Custom Fields"),(0,f.__)(" and 'Show in REST API' setting is ON.","mfb")),rest_field:(0,i.createElement)(i.Fragment,null,(0,f.__)("Fields are registered with ","mfb"),(0,i.createElement)(g.ExternalLink,{href:"https://developer.wordpress.org/reference/functions/register_rest_field/"},"register_rest_field."),(0,f.__)("The 'rest field' and the 'custom field' should be the same name. Or adding a filter for the hook `apply_filters( 'meta_field_block_get_block_content', $content, $attributes, $block )` to get value for front end.","mfb"))};let B=(0,f.__)("Input the meta field name.","mfb");if("meta"===n){if(L&&"object"==typeof L){const e=Object.keys(L);e.length&&(B=`${B} ${(0,f.__)("Suggest values: ","mfb")} ${e.join(", ")}`)}}else if("acf"===n&&x&&"object"==typeof x){const e=Object.keys(x);e.length&&(B=`${B} ${(0,f.__)("Suggest values: ","mfb")} ${e.join(", ")}`)}return(0,i.createElement)(i.Fragment,null,E&&(0,i.createElement)(i.Fragment,null,(0,i.createElement)(m.BlockControls,{group:"block"},(0,i.createElement)(m.AlignmentControl,{value:a,onChange:e=>{_({textAlign:e})}})),(0,i.createElement)(m.InspectorControls,null,(0,i.createElement)(g.PanelBody,{title:(0,f.__)("Meta field settings","mfb")},(0,i.createElement)(g.SelectControl,{label:(0,f.__)("Field type","mfb"),options:R,value:n,onChange:e=>_({fieldType:e}),help:null!==(t=j[n])&&void 0!==t?t:(0,f.__)("Choose a meta type","mfb")}),(0,i.createElement)(g.TextControl,{autoComplete:"off",label:(0,f.__)("Field name","mfb"),value:r,onChange:e=>_({fieldName:e}),help:B}),(0,i.createElement)(g.TextControl,{label:(0,f.__)("Prefix","mfb"),value:l,onChange:e=>_({prefix:e}),help:(0,f.__)("Display before the field value.","mfb")}),(0,i.createElement)(g.TextControl,{label:(0,f.__)("Suffix","mfb"),value:s,onChange:e=>_({suffix:e}),help:(0,f.__)("Display after the field value.","mfb")}),(0,i.createElement)(g.SelectControl,{label:(0,f.__)("Display layout","mfb"),options:[{value:"inline-block",label:(0,f.__)("Inline block")},{value:"block",label:(0,f.__)("Block")},{value:"",label:(0,f.__)("Auto")}],value:v,onChange:e=>_({displayLayout:e}),help:(0,f.__)("Choose basic layout for prefix, value and suffix. This block does not provide any CSS style for the meta field.","mfb")}),(0,i.createElement)(g.ToggleControl,{label:(0,f.__)("Show block outline"),checked:b,onChange:e=>_({showOutline:e}),help:(0,f.__)("Highlight the block on the Editor only.")}))),(0,i.createElement)(m.InspectorControls,{__experimentalGroup:"advanced"},(0,i.createElement)(g.SelectControl,{label:(0,f.__)("HTML element","mfb"),options:[{label:(0,f.__)("Default (<div>)"),value:"div"},{label:"<span>",value:"span"},{label:"<p>",value:"p"},{label:"<h1>",value:"h1"},{label:"<h2>",value:"h2"},{label:"<h3>",value:"h3"},{label:"<h4>",value:"h4"},{label:"<h5>",value:"h5"},{label:"<h6>",value:"h6"},{label:"<header>",value:"header"},{label:"<footer>",value:"footer"}],value:o,onChange:e=>_({tagName:e})}))),(0,i.createElement)(o,(0,m.useBlockProps)({className:u()({[`has-text-align-${a}`]:a,[`is-${n}-field`]:n,[`is-display-${v}`]:v}),style:b?{outline:"1px dashed"}:null}),P,D?(0,i.createElement)(g.Spinner,null):(0,i.createElement)(z,{className:"value",dangerouslySetInnerHTML:{__html:c().sanitize(F)}}),U))}})},184:function(e,t){var n;!function(){"use strict";var r={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var a=typeof n;if("string"===a||"number"===a)e.push(n);else if(Array.isArray(n)){if(n.length){var i=o.apply(null,n);i&&e.push(i)}}else if("object"===a)if(n.toString===Object.prototype.toString)for(var l in n)r.call(n,l)&&n[l]&&e.push(l);else e.push(n.toString())}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(n=function(){return o}.apply(t,[]))||(e.exports=n)}()},856:function(e){e.exports=function(){"use strict";var e=Object.hasOwnProperty,t=Object.setPrototypeOf,n=Object.isFrozen,r=Object.getPrototypeOf,o=Object.getOwnPropertyDescriptor,a=Object.freeze,i=Object.seal,l=Object.create,c="undefined"!=typeof Reflect&&Reflect,s=c.apply,u=c.construct;s||(s=function(e,t,n){return e.apply(t,n)}),a||(a=function(e){return e}),i||(i=function(e){return e}),u||(u=function(e,t){return new(Function.prototype.bind.apply(e,[null].concat(function(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}(t))))});var f,m=T(Array.prototype.forEach),d=T(Array.prototype.pop),p=T(Array.prototype.push),h=T(String.prototype.toLowerCase),g=T(String.prototype.match),v=T(String.prototype.replace),y=T(String.prototype.indexOf),b=T(String.prototype.trim),_=T(RegExp.prototype.test),E=(f=TypeError,function(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return u(f,t)});function T(e){return function(t){for(var n=arguments.length,r=Array(n>1?n-1:0),o=1;o<n;o++)r[o-1]=arguments[o];return s(e,t,r)}}function w(e,r){t&&t(e,null);for(var o=r.length;o--;){var a=r[o];if("string"==typeof a){var i=h(a);i!==a&&(n(r)||(r[o]=i),a=i)}e[a]=!0}return e}function N(t){var n=l(null),r=void 0;for(r in t)s(e,t,[r])&&(n[r]=t[r]);return n}function k(e,t){for(;null!==e;){var n=o(e,t);if(n){if(n.get)return T(n.get);if("function"==typeof n.value)return T(n.value)}e=r(e)}return function(e){return console.warn("fallback value for",e),null}}var x=a(["a","abbr","acronym","address","area","article","aside","audio","b","bdi","bdo","big","blink","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","content","data","datalist","dd","decorator","del","details","dfn","dialog","dir","div","dl","dt","element","em","fieldset","figcaption","figure","font","footer","form","h1","h2","h3","h4","h5","h6","head","header","hgroup","hr","html","i","img","input","ins","kbd","label","legend","li","main","map","mark","marquee","menu","menuitem","meter","nav","nobr","ol","optgroup","option","output","p","picture","pre","progress","q","rp","rt","ruby","s","samp","section","select","shadow","small","source","spacer","span","strike","strong","style","sub","summary","sup","table","tbody","td","template","textarea","tfoot","th","thead","time","tr","track","tt","u","ul","var","video","wbr"]),A=a(["svg","a","altglyph","altglyphdef","altglyphitem","animatecolor","animatemotion","animatetransform","circle","clippath","defs","desc","ellipse","filter","font","g","glyph","glyphref","hkern","image","line","lineargradient","marker","mask","metadata","mpath","path","pattern","polygon","polyline","radialgradient","rect","stop","style","switch","symbol","text","textpath","title","tref","tspan","view","vkern"]),S=a(["feBlend","feColorMatrix","feComponentTransfer","feComposite","feConvolveMatrix","feDiffuseLighting","feDisplacementMap","feDistantLight","feFlood","feFuncA","feFuncB","feFuncG","feFuncR","feGaussianBlur","feImage","feMerge","feMergeNode","feMorphology","feOffset","fePointLight","feSpecularLighting","feSpotLight","feTile","feTurbulence"]),C=a(["animate","color-profile","cursor","discard","fedropshadow","font-face","font-face-format","font-face-name","font-face-src","font-face-uri","foreignobject","hatch","hatchpath","mesh","meshgradient","meshpatch","meshrow","missing-glyph","script","set","solidcolor","unknown","use"]),O=a(["math","menclose","merror","mfenced","mfrac","mglyph","mi","mlabeledtr","mmultiscripts","mn","mo","mover","mpadded","mphantom","mroot","mrow","ms","mspace","msqrt","mstyle","msub","msup","msubsup","mtable","mtd","mtext","mtr","munder","munderover"]),D=a(["maction","maligngroup","malignmark","mlongdiv","mscarries","mscarry","msgroup","mstack","msline","msrow","semantics","annotation","annotation-xml","mprescripts","none"]),M=a(["#text"]),L=a(["accept","action","align","alt","autocapitalize","autocomplete","autopictureinpicture","autoplay","background","bgcolor","border","capture","cellpadding","cellspacing","checked","cite","class","clear","color","cols","colspan","controls","controlslist","coords","crossorigin","datetime","decoding","default","dir","disabled","disablepictureinpicture","disableremoteplayback","download","draggable","enctype","enterkeyhint","face","for","headers","height","hidden","high","href","hreflang","id","inputmode","integrity","ismap","kind","label","lang","list","loading","loop","low","max","maxlength","media","method","min","minlength","multiple","muted","name","nonce","noshade","novalidate","nowrap","open","optimum","pattern","placeholder","playsinline","poster","preload","pubdate","radiogroup","readonly","rel","required","rev","reversed","role","rows","rowspan","spellcheck","scope","selected","shape","size","sizes","span","srclang","start","src","srcset","step","style","summary","tabindex","title","translate","type","usemap","valign","value","width","xmlns","slot"]),R=a(["accent-height","accumulate","additive","alignment-baseline","ascent","attributename","attributetype","azimuth","basefrequency","baseline-shift","begin","bias","by","class","clip","clippathunits","clip-path","clip-rule","color","color-interpolation","color-interpolation-filters","color-profile","color-rendering","cx","cy","d","dx","dy","diffuseconstant","direction","display","divisor","dur","edgemode","elevation","end","fill","fill-opacity","fill-rule","filter","filterunits","flood-color","flood-opacity","font-family","font-size","font-size-adjust","font-stretch","font-style","font-variant","font-weight","fx","fy","g1","g2","glyph-name","glyphref","gradientunits","gradienttransform","height","href","id","image-rendering","in","in2","k","k1","k2","k3","k4","kerning","keypoints","keysplines","keytimes","lang","lengthadjust","letter-spacing","kernelmatrix","kernelunitlength","lighting-color","local","marker-end","marker-mid","marker-start","markerheight","markerunits","markerwidth","maskcontentunits","maskunits","max","mask","media","method","mode","min","name","numoctaves","offset","operator","opacity","order","orient","orientation","origin","overflow","paint-order","path","pathlength","patterncontentunits","patterntransform","patternunits","points","preservealpha","preserveaspectratio","primitiveunits","r","rx","ry","radius","refx","refy","repeatcount","repeatdur","restart","result","rotate","scale","seed","shape-rendering","specularconstant","specularexponent","spreadmethod","startoffset","stddeviation","stitchtiles","stop-color","stop-opacity","stroke-dasharray","stroke-dashoffset","stroke-linecap","stroke-linejoin","stroke-miterlimit","stroke-opacity","stroke","stroke-width","style","surfacescale","systemlanguage","tabindex","targetx","targety","transform","transform-origin","text-anchor","text-decoration","text-rendering","textlength","type","u1","u2","unicode","values","viewbox","visibility","version","vert-adv-y","vert-origin-x","vert-origin-y","width","word-spacing","wrap","writing-mode","xchannelselector","ychannelselector","x","x1","x2","xmlns","y","y1","y2","z","zoomandpan"]),F=a(["accent","accentunder","align","bevelled","close","columnsalign","columnlines","columnspan","denomalign","depth","dir","display","displaystyle","encoding","fence","frame","height","href","id","largeop","length","linethickness","lspace","lquote","mathbackground","mathcolor","mathsize","mathvariant","maxsize","minsize","movablelimits","notation","numalign","open","rowalign","rowlines","rowspacing","rowspan","rspace","rquote","scriptlevel","scriptminsize","scriptsizemultiplier","selection","separator","separators","stretchy","subscriptshift","supscriptshift","symmetric","voffset","width","xmlns"]),I=a(["xlink:href","xml:id","xlink:title","xml:space","xmlns:xlink"]),H=i(/\{\{[\s\S]*|[\s\S]*\}\}/gm),z=i(/<%[\s\S]*|[\s\S]*%>/gm),P=i(/^data-[\-\w.\u00B7-\uFFFF]/),U=i(/^aria-[\-\w]+$/),j=i(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|cid|xmpp):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i),B=i(/^(?:\w+script|data):/i),G=i(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205F\u3000]/g),$=i(/^html$/i),q="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};function W(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}var V=function(){return"undefined"==typeof window?null:window},Y=function(e,t){if("object"!==(void 0===e?"undefined":q(e))||"function"!=typeof e.createPolicy)return null;var n=null,r="data-tt-policy-suffix";t.currentScript&&t.currentScript.hasAttribute(r)&&(n=t.currentScript.getAttribute(r));var o="dompurify"+(n?"#"+n:"");try{return e.createPolicy(o,{createHTML:function(e){return e}})}catch(e){return console.warn("TrustedTypes policy "+o+" could not be created."),null}};return function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:V(),n=function(t){return e(t)};if(n.version="2.3.6",n.removed=[],!t||!t.document||9!==t.document.nodeType)return n.isSupported=!1,n;var r=t.document,o=t.document,i=t.DocumentFragment,l=t.HTMLTemplateElement,c=t.Node,s=t.Element,u=t.NodeFilter,f=t.NamedNodeMap,T=void 0===f?t.NamedNodeMap||t.MozNamedAttrMap:f,K=t.HTMLFormElement,X=t.DOMParser,J=t.trustedTypes,Z=s.prototype,Q=k(Z,"cloneNode"),ee=k(Z,"nextSibling"),te=k(Z,"childNodes"),ne=k(Z,"parentNode");if("function"==typeof l){var re=o.createElement("template");re.content&&re.content.ownerDocument&&(o=re.content.ownerDocument)}var oe=Y(J,r),ae=oe?oe.createHTML(""):"",ie=o,le=ie.implementation,ce=ie.createNodeIterator,se=ie.createDocumentFragment,ue=ie.getElementsByTagName,fe=r.importNode,me={};try{me=N(o).documentMode?o.documentMode:{}}catch(e){}var de={};n.isSupported="function"==typeof ne&&le&&void 0!==le.createHTMLDocument&&9!==me;var pe=H,he=z,ge=P,ve=U,ye=B,be=G,_e=j,Ee=null,Te=w({},[].concat(W(x),W(A),W(S),W(O),W(M))),we=null,Ne=w({},[].concat(W(L),W(R),W(F),W(I))),ke=Object.seal(Object.create(null,{tagNameCheck:{writable:!0,configurable:!1,enumerable:!0,value:null},attributeNameCheck:{writable:!0,configurable:!1,enumerable:!0,value:null},allowCustomizedBuiltInElements:{writable:!0,configurable:!1,enumerable:!0,value:!1}})),xe=null,Ae=null,Se=!0,Ce=!0,Oe=!1,De=!1,Me=!1,Le=!1,Re=!1,Fe=!1,Ie=!1,He=!1,ze=!0,Pe=!0,Ue=!1,je={},Be=null,Ge=w({},["annotation-xml","audio","colgroup","desc","foreignobject","head","iframe","math","mi","mn","mo","ms","mtext","noembed","noframes","noscript","plaintext","script","style","svg","template","thead","title","video","xmp"]),$e=null,qe=w({},["audio","video","img","source","image","track"]),We=null,Ve=w({},["alt","class","for","id","label","name","pattern","placeholder","role","summary","title","value","style","xmlns"]),Ye="http://www.w3.org/1998/Math/MathML",Ke="http://www.w3.org/2000/svg",Xe="http://www.w3.org/1999/xhtml",Je=Xe,Ze=!1,Qe=void 0,et=["application/xhtml+xml","text/html"],tt="text/html",nt=void 0,rt=null,ot=o.createElement("form"),at=function(e){return e instanceof RegExp||e instanceof Function},it=function(e){rt&&rt===e||(e&&"object"===(void 0===e?"undefined":q(e))||(e={}),e=N(e),Ee="ALLOWED_TAGS"in e?w({},e.ALLOWED_TAGS):Te,we="ALLOWED_ATTR"in e?w({},e.ALLOWED_ATTR):Ne,We="ADD_URI_SAFE_ATTR"in e?w(N(Ve),e.ADD_URI_SAFE_ATTR):Ve,$e="ADD_DATA_URI_TAGS"in e?w(N(qe),e.ADD_DATA_URI_TAGS):qe,Be="FORBID_CONTENTS"in e?w({},e.FORBID_CONTENTS):Ge,xe="FORBID_TAGS"in e?w({},e.FORBID_TAGS):{},Ae="FORBID_ATTR"in e?w({},e.FORBID_ATTR):{},je="USE_PROFILES"in e&&e.USE_PROFILES,Se=!1!==e.ALLOW_ARIA_ATTR,Ce=!1!==e.ALLOW_DATA_ATTR,Oe=e.ALLOW_UNKNOWN_PROTOCOLS||!1,De=e.SAFE_FOR_TEMPLATES||!1,Me=e.WHOLE_DOCUMENT||!1,Fe=e.RETURN_DOM||!1,Ie=e.RETURN_DOM_FRAGMENT||!1,He=e.RETURN_TRUSTED_TYPE||!1,Re=e.FORCE_BODY||!1,ze=!1!==e.SANITIZE_DOM,Pe=!1!==e.KEEP_CONTENT,Ue=e.IN_PLACE||!1,_e=e.ALLOWED_URI_REGEXP||_e,Je=e.NAMESPACE||Xe,e.CUSTOM_ELEMENT_HANDLING&&at(e.CUSTOM_ELEMENT_HANDLING.tagNameCheck)&&(ke.tagNameCheck=e.CUSTOM_ELEMENT_HANDLING.tagNameCheck),e.CUSTOM_ELEMENT_HANDLING&&at(e.CUSTOM_ELEMENT_HANDLING.attributeNameCheck)&&(ke.attributeNameCheck=e.CUSTOM_ELEMENT_HANDLING.attributeNameCheck),e.CUSTOM_ELEMENT_HANDLING&&"boolean"==typeof e.CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements&&(ke.allowCustomizedBuiltInElements=e.CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements),Qe=Qe=-1===et.indexOf(e.PARSER_MEDIA_TYPE)?tt:e.PARSER_MEDIA_TYPE,nt="application/xhtml+xml"===Qe?function(e){return e}:h,De&&(Ce=!1),Ie&&(Fe=!0),je&&(Ee=w({},[].concat(W(M))),we=[],!0===je.html&&(w(Ee,x),w(we,L)),!0===je.svg&&(w(Ee,A),w(we,R),w(we,I)),!0===je.svgFilters&&(w(Ee,S),w(we,R),w(we,I)),!0===je.mathMl&&(w(Ee,O),w(we,F),w(we,I))),e.ADD_TAGS&&(Ee===Te&&(Ee=N(Ee)),w(Ee,e.ADD_TAGS)),e.ADD_ATTR&&(we===Ne&&(we=N(we)),w(we,e.ADD_ATTR)),e.ADD_URI_SAFE_ATTR&&w(We,e.ADD_URI_SAFE_ATTR),e.FORBID_CONTENTS&&(Be===Ge&&(Be=N(Be)),w(Be,e.FORBID_CONTENTS)),Pe&&(Ee["#text"]=!0),Me&&w(Ee,["html","head","body"]),Ee.table&&(w(Ee,["tbody"]),delete xe.tbody),a&&a(e),rt=e)},lt=w({},["mi","mo","mn","ms","mtext"]),ct=w({},["foreignobject","desc","title","annotation-xml"]),st=w({},A);w(st,S),w(st,C);var ut=w({},O);w(ut,D);var ft=function(e){var t=ne(e);t&&t.tagName||(t={namespaceURI:Xe,tagName:"template"});var n=h(e.tagName),r=h(t.tagName);if(e.namespaceURI===Ke)return t.namespaceURI===Xe?"svg"===n:t.namespaceURI===Ye?"svg"===n&&("annotation-xml"===r||lt[r]):Boolean(st[n]);if(e.namespaceURI===Ye)return t.namespaceURI===Xe?"math"===n:t.namespaceURI===Ke?"math"===n&&ct[r]:Boolean(ut[n]);if(e.namespaceURI===Xe){if(t.namespaceURI===Ke&&!ct[r])return!1;if(t.namespaceURI===Ye&&!lt[r])return!1;var o=w({},["title","style","font","a","script"]);return!ut[n]&&(o[n]||!st[n])}return!1},mt=function(e){p(n.removed,{element:e});try{e.parentNode.removeChild(e)}catch(t){try{e.outerHTML=ae}catch(t){e.remove()}}},dt=function(e,t){try{p(n.removed,{attribute:t.getAttributeNode(e),from:t})}catch(e){p(n.removed,{attribute:null,from:t})}if(t.removeAttribute(e),"is"===e&&!we[e])if(Fe||Ie)try{mt(t)}catch(e){}else try{t.setAttribute(e,"")}catch(e){}},pt=function(e){var t=void 0,n=void 0;if(Re)e="<remove></remove>"+e;else{var r=g(e,/^[\r\n\t ]+/);n=r&&r[0]}"application/xhtml+xml"===Qe&&(e='<html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>'+e+"</body></html>");var a=oe?oe.createHTML(e):e;if(Je===Xe)try{t=(new X).parseFromString(a,Qe)}catch(e){}if(!t||!t.documentElement){t=le.createDocument(Je,"template",null);try{t.documentElement.innerHTML=Ze?"":a}catch(e){}}var i=t.body||t.documentElement;return e&&n&&i.insertBefore(o.createTextNode(n),i.childNodes[0]||null),Je===Xe?ue.call(t,Me?"html":"body")[0]:Me?t.documentElement:i},ht=function(e){return ce.call(e.ownerDocument||e,e,u.SHOW_ELEMENT|u.SHOW_COMMENT|u.SHOW_TEXT,null,!1)},gt=function(e){return e instanceof K&&("string"!=typeof e.nodeName||"string"!=typeof e.textContent||"function"!=typeof e.removeChild||!(e.attributes instanceof T)||"function"!=typeof e.removeAttribute||"function"!=typeof e.setAttribute||"string"!=typeof e.namespaceURI||"function"!=typeof e.insertBefore)},vt=function(e){return"object"===(void 0===c?"undefined":q(c))?e instanceof c:e&&"object"===(void 0===e?"undefined":q(e))&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},yt=function(e,t,r){de[e]&&m(de[e],(function(e){e.call(n,t,r,rt)}))},bt=function(e){var t=void 0;if(yt("beforeSanitizeElements",e,null),gt(e))return mt(e),!0;if(g(e.nodeName,/[\u0080-\uFFFF]/))return mt(e),!0;var r=nt(e.nodeName);if(yt("uponSanitizeElement",e,{tagName:r,allowedTags:Ee}),!vt(e.firstElementChild)&&(!vt(e.content)||!vt(e.content.firstElementChild))&&_(/<[/\w]/g,e.innerHTML)&&_(/<[/\w]/g,e.textContent))return mt(e),!0;if("select"===r&&_(/<template/i,e.innerHTML))return mt(e),!0;if(!Ee[r]||xe[r]){if(!xe[r]&&Et(r)){if(ke.tagNameCheck instanceof RegExp&&_(ke.tagNameCheck,r))return!1;if(ke.tagNameCheck instanceof Function&&ke.tagNameCheck(r))return!1}if(Pe&&!Be[r]){var o=ne(e)||e.parentNode,a=te(e)||e.childNodes;if(a&&o)for(var i=a.length-1;i>=0;--i)o.insertBefore(Q(a[i],!0),ee(e))}return mt(e),!0}return e instanceof s&&!ft(e)?(mt(e),!0):"noscript"!==r&&"noembed"!==r||!_(/<\/no(script|embed)/i,e.innerHTML)?(De&&3===e.nodeType&&(t=e.textContent,t=v(t,pe," "),t=v(t,he," "),e.textContent!==t&&(p(n.removed,{element:e.cloneNode()}),e.textContent=t)),yt("afterSanitizeElements",e,null),!1):(mt(e),!0)},_t=function(e,t,n){if(ze&&("id"===t||"name"===t)&&(n in o||n in ot))return!1;if(Ce&&!Ae[t]&&_(ge,t));else if(Se&&_(ve,t));else if(!we[t]||Ae[t]){if(!(Et(e)&&(ke.tagNameCheck instanceof RegExp&&_(ke.tagNameCheck,e)||ke.tagNameCheck instanceof Function&&ke.tagNameCheck(e))&&(ke.attributeNameCheck instanceof RegExp&&_(ke.attributeNameCheck,t)||ke.attributeNameCheck instanceof Function&&ke.attributeNameCheck(t))||"is"===t&&ke.allowCustomizedBuiltInElements&&(ke.tagNameCheck instanceof RegExp&&_(ke.tagNameCheck,n)||ke.tagNameCheck instanceof Function&&ke.tagNameCheck(n))))return!1}else if(We[t]);else if(_(_e,v(n,be,"")));else if("src"!==t&&"xlink:href"!==t&&"href"!==t||"script"===e||0!==y(n,"data:")||!$e[e])if(Oe&&!_(ye,v(n,be,"")));else if(n)return!1;return!0},Et=function(e){return e.indexOf("-")>0},Tt=function(e){var t=void 0,r=void 0,o=void 0,a=void 0;yt("beforeSanitizeAttributes",e,null);var i=e.attributes;if(i){var l={attrName:"",attrValue:"",keepAttr:!0,allowedAttributes:we};for(a=i.length;a--;){var c=t=i[a],s=c.name,u=c.namespaceURI;if(r=b(t.value),o=nt(s),l.attrName=o,l.attrValue=r,l.keepAttr=!0,l.forceKeepAttr=void 0,yt("uponSanitizeAttribute",e,l),r=l.attrValue,!l.forceKeepAttr&&(dt(s,e),l.keepAttr))if(_(/\/>/i,r))dt(s,e);else{De&&(r=v(r,pe," "),r=v(r,he," "));var f=nt(e.nodeName);if(_t(f,o,r))try{u?e.setAttributeNS(u,s,r):e.setAttribute(s,r),d(n.removed)}catch(e){}}}yt("afterSanitizeAttributes",e,null)}},wt=function e(t){var n=void 0,r=ht(t);for(yt("beforeSanitizeShadowDOM",t,null);n=r.nextNode();)yt("uponSanitizeShadowNode",n,null),bt(n)||(n.content instanceof i&&e(n.content),Tt(n));yt("afterSanitizeShadowDOM",t,null)};return n.sanitize=function(e,o){var a=void 0,l=void 0,s=void 0,u=void 0,f=void 0;if((Ze=!e)&&(e="\x3c!--\x3e"),"string"!=typeof e&&!vt(e)){if("function"!=typeof e.toString)throw E("toString is not a function");if("string"!=typeof(e=e.toString()))throw E("dirty is not a string, aborting")}if(!n.isSupported){if("object"===q(t.toStaticHTML)||"function"==typeof t.toStaticHTML){if("string"==typeof e)return t.toStaticHTML(e);if(vt(e))return t.toStaticHTML(e.outerHTML)}return e}if(Le||it(o),n.removed=[],"string"==typeof e&&(Ue=!1),Ue){if(e.nodeName){var m=nt(e.nodeName);if(!Ee[m]||xe[m])throw E("root node is forbidden and cannot be sanitized in-place")}}else if(e instanceof c)1===(l=(a=pt("\x3c!----\x3e")).ownerDocument.importNode(e,!0)).nodeType&&"BODY"===l.nodeName||"HTML"===l.nodeName?a=l:a.appendChild(l);else{if(!Fe&&!De&&!Me&&-1===e.indexOf("<"))return oe&&He?oe.createHTML(e):e;if(!(a=pt(e)))return Fe?null:He?ae:""}a&&Re&&mt(a.firstChild);for(var d=ht(Ue?e:a);s=d.nextNode();)3===s.nodeType&&s===u||bt(s)||(s.content instanceof i&&wt(s.content),Tt(s),u=s);if(u=null,Ue)return e;if(Fe){if(Ie)for(f=se.call(a.ownerDocument);a.firstChild;)f.appendChild(a.firstChild);else f=a;return we.shadowroot&&(f=fe.call(r,f,!0)),f}var p=Me?a.outerHTML:a.innerHTML;return Me&&Ee["!doctype"]&&a.ownerDocument&&a.ownerDocument.doctype&&a.ownerDocument.doctype.name&&_($,a.ownerDocument.doctype.name)&&(p="<!DOCTYPE "+a.ownerDocument.doctype.name+">\n"+p),De&&(p=v(p,pe," "),p=v(p,he," ")),oe&&He?oe.createHTML(p):p},n.setConfig=function(e){it(e),Le=!0},n.clearConfig=function(){rt=null,Le=!1},n.isValidAttribute=function(e,t,n){rt||it({});var r=nt(e),o=nt(t);return _t(r,o,n)},n.addHook=function(e,t){"function"==typeof t&&(de[e]=de[e]||[],p(de[e],t))},n.removeHook=function(e){de[e]&&d(de[e])},n.removeHooks=function(e){de[e]&&(de[e]=[])},n.removeAllHooks=function(){de={}},n}()}()}},n={};function r(e){var o=n[e];if(void 0!==o)return o.exports;var a=n[e]={exports:{}};return t[e].call(a.exports,a,a.exports,r),a.exports}r.m=t,e=[],r.O=function(t,n,o,a){if(!n){var i=1/0;for(u=0;u<e.length;u++){n=e[u][0],o=e[u][1],a=e[u][2];for(var l=!0,c=0;c<n.length;c++)(!1&a||i>=a)&&Object.keys(r.O).every((function(e){return r.O[e](n[c])}))?n.splice(c--,1):(l=!1,a<i&&(i=a));if(l){e.splice(u--,1);var s=o();void 0!==s&&(t=s)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[n,o,a]},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,{a:t}),t},r.d=function(e,t){for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={826:0,431:0};r.O.j=function(t){return 0===e[t]};var t=function(t,n){var o,a,i=n[0],l=n[1],c=n[2],s=0;if(i.some((function(t){return 0!==e[t]}))){for(o in l)r.o(l,o)&&(r.m[o]=l[o]);if(c)var u=c(r)}for(t&&t(n);s<i.length;s++)a=i[s],r.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return r.O(u)},n=self.webpackChunkmeta_field_block=self.webpackChunkmeta_field_block||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var o=r.O(void 0,[431],(function(){return r(331)}));o=r.O(o)}();