<!DOCTYPE html>
<html lang="en">
<style>
body, html{
    height:100%;
    margin:0;
    font-size:16px;
    font-family:Helvetica "Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
    font-weight:400;
    color:#666;
    background-color: #666;
    opacity: 0.95;
    filter: alpha(opacity=30);
  }

.dot {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
  }

  .dot>li {
    width: 16px;
    height: 16px;
    margin-bottom: 10px;
    border: 3px solid #fff;
    border-radius: 50%;
    background-color: transparent;
    box-sizing: border-box;
    list-style: none;
    cursor: pointer;
  }

  .dot>li.active,
  .dot>li:hover {
    background-color: #fff;
  }
  
  .section-1{
    background-image:url('/img/image1.png');
    min-height:100%;
    
  }

  .whats{
    position: absolute;
    text-align: center;
    justify-content: center;
    width: 100%;
    bottom: 0;
    background-color: #00cf35;
    height: 7%;
    padding-top: 9px;
  }

  .whats a {
    
  }

  .login{
    display: inline;
    padding: 10px 150px;
  margin-top: 5px;
  border: none;
  cursor: pointer;
  
  }

  .form-popup {
    display: none;
    position: table;
    width: 100%;
    text-align: center;
    z-index: 9;
    
  }

  .form-popup-login {
    display: inline;
    width: 100%;
    text-align: center;
    z-index: 9;
    
  }

  .form-container {
  display: table-cell;
   text-align: center;
   vertical-align: middle;
  width: 98%;
}

input[type=text], input[type=password] {
  width: 100%;
  height: 50px;
  outline: none;
}

.form-container .btn , .getstarted {
  background-color: #00b8ff;
  color: white;
  padding: 10px 130px;
  margin-top: 5px;
  border: none;
  cursor: pointer;
}
  .signup{
    position:absolute;
    top:30%;
    width:100%;
    text-align:center;
    color:#fff;
    font-size:17px;
  }

  .section-2{
    background-color: #00cf35;
    min-height:100%;
    
  }
  
  .desc{
    position:absolute;
    top:40%;
    width:100%;
    text-align:center;
    color:#fff;
    font-size:20px;
  }

  .txtdesc{
    padding: 80px 350px;
}

 .txtdesc h1{
    font-weight: 300;
    letter-spacing: 2px;
    
}

.section-3{
    background-color: #7c5cff;
    min-height:100%;
}

.isblogs{
    position:absolute;
    top:5%;
    width:100%;
    text-align:left;
    color:#fff;
    font-size:20px;
 }

 .txtisblogs{
     padding-left: 100px;
     padding-right: 700px;
 }

 .txtisblogs h1{
     font-weight: 300;
 }

 .section-4{
    background-color: #001935;
    min-height:100%;
}

.works{
    position:absolute;
    top:20%;
    width:100%;
    text-align:left;
    color:#fff;
    font-size:20px;
 }

 .txtworks{
     text-align: left;
     align-items: center;
 }

 .txtworks h1{
     font-weight: 300;
 }

 .section-5{
    background-color: #ff8a00;
    min-height:100%;
}

.anything{
    position:absolute;
    top:60%;
    width:100%;
    text-align:center;
    color:#666;
    font-size:20px;
}

.txtanything{
    padding-right: 400px;
    padding-left: 400px;
    color: #fff;
}

.txtanything h1{
    font-weight: 300;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | Tumblr</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    <ul class="dot" data-wall-section-nav>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div id="wrapper">
        <section class="section-1">
            <div class="img1">
                <div class="signup">
                    <h1>tumblr</h1>
                    <p>Come for what you love.<br> Stay for what you discover.</p>
                    <div class="form-popup-login" id="myForm">
                        <form action="<?php echo base_url('Home/userlogin') ?>" method="post" class="form-container">
                            <input type="text" placeholder="Username" name="your_name" required><br>
                            <input type="password" placeholder="Password" name="your_pass" required><br>
                            <button type="submit" class="btn">Log In</button>
                        </form><br>
                    </div>
                    <a href="">Here's what's trending</a>
                </div>
            </div>
            <div class="whats"><a href="">What is tumblr?</a></div>
        </section>
        <section class="section-2">
            <div class="img2">
                <div class="desc">
                    <div class="txtdesc">
                        <h1>Tumblr is so easy to use that it’s hard to explain.</h1>
                        <p>We made it really, really simple for people to make a blog and put whatever they want on it.
                            Stories,
                            photos,
                            GIFs, TV shows, links, quips, dumb jokes, smart jokes, Spotify tracks, mp3s, videos,
                            fashion, art,
                            deep
                            stuff. Tumblr is 462 million different blogs, filled with literally whatever.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="img3">
                <div class="isblogs">
                    <div class="txtisblogs">
                        <h1>Tumblr is blogs.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus corporis, unde, est quidem
                            perspiciatis natus ut dolor reiciendis, dolores omnis odit libero blanditiis at numquam
                            tempora
                            quaerat maxime quos modi distinctio illum aliquid nihil eius rem eum. Voluptates aliquid
                            animi aut!
                            Illum eius, minus soluta earum temporibus facere quisquam nobis nulla dolorum! Commodi
                            corporis,
                            dignissimos, sequi temporibus blanditiis, fuga eaque id unde laboriosam illo dolorum?</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-4">
            <div class="img4">
                <div class="works">
                    <div class="container">

                        <div class="row">
                            <div class="col-m-7">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><img src="img/works2.JPG"></td>
                                            <td><img src="img/works.JPG"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/works3.JPG"></td>
                                            <td><img src="img/works1.JPG"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-5">
                                <div class="txtworks">
                                    <h1>You already know how this works.</h1>
                                    <p>Once you follow a blog, all of its posts show up in your dashboard, just like
                                        you’d expect.
                                        See
                                        something
                                        great? Reblog it to your own blog. Add commentary if you like. Make it your own.
                                        Other
                                        people will
                                        do
                                        the
                                        same to your posts. That’s how you meet people here.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-5">
            <div class="img5">
                <div class="anything">
                    <div class="txtanything">
                        <h1>Seriously, put anything you want here.</h1>
                        <p>Seven post types to get you started. Your brain can do the rest. This thing is yours. Use it
                            however
                            you
                            like.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script>
    !function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.Wall=t():e.Wall=t()}(this,function(){return function(e){function t(i){if(n[i])return n[i].exports;var r=n[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var n={};return t.m=e,t.c=n,t.d=function(e,n,i){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:i})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=1)}([function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=document.createElement("div"),r=(t.hasTransform3d="WebkitPerspective"in i.style||"MozPerspective"in i.style||"msPerspective"in i.style||"OPerspective"in i.style||"perspective"in i.style,t.transformProp=function(){if(!("transform"in i.style)){var e=["Webkit","Moz","ms"];for(var t in e)if(e[t]+"Transform"in i.style)return e[t]+"Transform"}return"transform"}(),t.mousewheelEvent="onmousewheel"in document?"mousewheel":"DOMMouseScroll",t.rAF=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(e){setTimeout(e,1e3/60)},t.cAF=window.cancelAnimationFrame||window.webkitCancelAnimationFrame||window.mozCancelAnimationFrame||window.oCancelAnimationFrame||window.msCancelAnimationFrame||function(e){clearTimeout(e)},t.getScreenWidth=function(){return window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth},t.getScreenHeight=function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},t.maxScreen=function(e){e.style.position="absolute",e.style.top=0,e.style.right=0,e.style.bottom=0,e.style.left=0},t.isScrollable=function(e){var t=e.scrollHeight;return e.clientHeight<t},t.scrollTouchBottom=function(e){var t=e.scrollTop;return e.scrollHeight-t<=e.clientHeight},t.scrollTouchTop=function(e){return 0===e.scrollTop},t.touchEvent={touchStart:"touchstart",touchMove:"touchmove"});window.navigator.msPointerEnabled?(r.touchStart="MSPointerDown",r.touchMove="MSPointerMove"):window.navigator.pointerEnabled&&(r.touchStart="pointerdown",r.touchMove="pointermove")},function(e,t,n){"use strict";function i(e){if(Array.isArray(e)){for(var t=0,n=Array(e.length);t<e.length;t++)n[t]=e[t];return n}return Array.from(e)}function r(e){return Array.isArray(e)?e:Array.from(e)}function s(e,t){return Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(t)}}))}function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var c=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),a=s(["wrapper"],["wrapper"]),u=s(["sections"],["sections"]),l=n(2),h=n(0),d=n(3),f=n(5),p=function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n]);return t.default=e,t}(f);n(6);var S="section",v="data-wall-section-nav",m="data-wall-slide",y={wrapperZIndex:1,sectionAnimateDuration:1,easeFunction:"easeIn",loopToBottom:!1,loopToTop:!1,sectionNavItemActiveClass:"active",animatingClass:"animating",currentClass:"current"},w=document.getElementsByTagName("html")[0],g=document.getElementsByTagName("body")[0],A=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:(0,l.throwNewError)(a),n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:y;o(this,e),this.wrapper="string"==typeof t?document.querySelector(t):t,this.sections=this.wrapper.children.length?(0,l.toArray)(this.wrapper.children):(0,l.throwNewError)(u),this.currentSection=null,this.restSections=null,this.currentSlides=null,this.currentSlide=null,this.restSlides=null,this.currentScreenPosition=0,this.translateZ=h.hasTransform3d?"translateZ(0)":"",this.size={X:0,Y:0},this.options=(0,l.merge)(y,n),this.navElements=(0,l.toArray)(document.querySelectorAll("["+v+"]")),this.easeFunction="string"==typeof this.options.easeFunction?p[this.options.easeFunction]:this.options.easeFunction,this.lastTime=null,this.requestId=null,this.isAnimating=!1,this.isToBack=!1,this.screenType=S,this._init()}return c(e,[{key:"_init",value:function(){var e=this;this._refresh(!0),window.addEventListener("resize",function(){e._setupSize()._cssWrapper()}),document.addEventListener("keydown",this._handleKeyDown.bind(this))}},{key:"_refresh",value:function(e){var t=this;e&&this._setupSize()._cssHtmlAndBody()._cssWrapper()._setupSections()._cssSections()._queue(this.sections)._setupSlides()._setupSectionNav(),(0,h.cAF)(this.requestId),this.isAnimating=!1,(0,l.removeClass)(this.currentSection,this.options.animatingClass),this.sections.forEach(function(e){return(0,l.removeClass)(e,t.options.currentClass)});var n=r(this.sections);this.currentSection=n[0],this.restSections=n.slice(1),(0,l.addClass)(this.currentSection,this.options.currentClass),this.currentSlides.length&&this.currentSlide&&((0,l.removeClass)(this.currentSlide,this.options.animatingClass),this.currentSlides.forEach(function(e){return(0,l.removeClass)(e,t.options.currentClass)}));var i=r(this.currentSlides);return this.currentSlide=i[0],this.restSlides=i.slice(1),this.currentSlides.length&&this.currentSlide&&(0,l.addClass)(this.currentSlide,this.options.currentClass),this._renderSectionNavs(),this._lazyload(this.currentSection),this.wrapper.setAttribute("data-wall-current-section",this._getCurrentSectionIndex()),this}},{key:"_setupSize",value:function(){return this.size.X=(0,h.getScreenWidth)(),this.size.Y=(0,h.getScreenHeight)(),this}},{key:"_setupSections",value:function(){var e=this,t=r(this.sections);return this.currentSection=t[0],this.restSections=t.slice(1),this.sections.forEach(function(t,n){t.setAttribute("data-wall-section-index",n+1),t.addEventListener(h.mousewheelEvent,e._handleWheelEvent.bind(e)),(0,d.handleTouch)(t,e)}),this}},{key:"_handleKeyDown",value:function(e){switch(e.keyCode){case 34:case 40:(0,h.scrollTouchBottom)(this.currentSection)&&this.nextSection();break;case 33:case 38:(0,h.scrollTouchTop)(this.currentSection)&&this.prevSection();break;case 37:this.currentSlide&&this.prevSlide();break;case 39:this.currentSlide&&this.nextSlide();break;case 36:this.goToSection(1);break;case 35:this.goToSection(this.sections.length)}}},{key:"_handleWheelEvent",value:function(e){var t=Math.max(-1,Math.min(1,e.wheelDelta||-e.detail));return(0,h.scrollTouchBottom)(this.currentSection)&&-1===t&&this.nextSection(),(0,h.scrollTouchTop)(this.currentSection)&&1===t&&this.prevSection(),this}},{key:"_setupSectionNav",value:function(){var e=this;return this.navElements&&this.navElements.length&&this.navElements.forEach(function(t){t.style.zIndex=e.options.wrapperZIndex+1,(0,l.toArray)(t.children).forEach(function(t,n){t.setAttribute("data-wall-section-nav-index",n+1),t.addEventListener("click",function(){e.goToSection(t.getAttribute("data-wall-section-nav-index"))})})}),this}},{key:"_setupSlides",value:function(){return this.currentSlides=(0,l.toArray)(this.currentSection.querySelectorAll("["+m+"]")),this.sections.forEach(function(e){var t=(0,l.toArray)(e.querySelectorAll("["+m+"]")),n=(0,l.toArray)(e.querySelectorAll("[data-wall-slide-arrow]"));t.length&&(t.forEach(function(e,t){(0,h.maxScreen)(e),e.style.overflowX="hidden",e.style.overflowY="auto",e.setAttribute("data-wall-slide-index",t+1)}),t.reverse().forEach(function(e,t){return e.style.zIndex=t+1}),n.length&&n.forEach(function(e){return e.style.zIndex=t.length+1}))}),this}},{key:"_cssHtmlAndBody",value:function(){return w.style.height="100%",w.style.overflow="hidden",g.style.height="100%",g.style.position="relative",g.style.margin=0,g.style.overflow="hidden",this}},{key:"_cssWrapper",value:function(){return this.wrapper.style.position="relative",this.wrapper.style.height="100%",this.wrapper.style.zIndex=this.options.wrapperZIndex,this}},{key:"_cssSections",value:function(){var e=this;return this.sections.forEach(function(t){(0,h.maxScreen)(t),t.style.height=e.size.Y+"px",t.style.overflowX="hidden",t.style.overflowY="auto"}),this}},{key:"_lazyload",value:function(e){(0,l.toArray)(e.querySelectorAll("[data-wall-origin]")).forEach(function(e){return e.setAttribute("src",e.getAttribute("data-wall-origin"))})}},{key:"_queue",value:function(e){var t=this;return e.reverse().forEach(function(e,t){e.style.zIndex=t+1}),e.reverse(),e.forEach(function(e){return t._renderSectionPosition(e,0)}),this}},{key:"_resetCurrentSlides",value:function(){var e=r(this.sections);this.currentSection=e[0],this.restSections=e.slice(1),this.currentSlides=(0,l.toArray)(this.currentSection.querySelectorAll("["+m+"]")).sort(function(e,t){return+t.style.zIndex-+e.style.zIndex}),this.currentSlide&&(0,l.removeClass)(this.currentSlide,this.options.currentClass);var t=r(this.currentSlides);return this.currentSlide=t[0],this.restSlides=t.slice(1),this.currentSlide&&(0,l.addClass)(this.currentSlide,this.options.currentClass),this}},{key:"_refreshAnimateStatus",value:function(e){return this.isToBack=e,(0,h.cAF)(this.requestId),this.currentScreenPosition=this.isToBack?100:0,this.isAnimating=!0,this.lastTime=Date.now(),this.screenType===S?(0,l.addClass)(this.currentSection,this.options.animatingClass):this.currentSlide&&"slide"===this.screenType&&(0,l.addClass)(this.currentSlide,this.options.animatingClass),this}},{key:"_animateScreen",value:function(e,t){var n=Date.now(),i=(n-this.lastTime)/1e3;return e.style.zIndex=t.length+1,this._updateCurrentScreenPosition(i)._renderSectionPosition(e,this.currentScreenPosition),this.currentScreenPosition>99.9&&!this.isToBack||this.currentScreenPosition<.1&&this.isToBack?(this._refresh()._queue(t),this.screenType===S&&this._resetCurrentSlides(),this):this.isAnimating?this.requestId=(0,h.rAF)(this._animateScreen.bind(this,e,t)):void 0}},{key:"_updateCurrentScreenPosition",value:function(e){var t=this.screenType===S?+this.currentSection.getAttribute("data-wall-animate-duration"):+this.currentSlide.getAttribute("data-wall-animate-duration"),n=t||this.options.sectionAnimateDuration,i=this.isToBack?0:100;return this.currentScreenPosition=this.easeFunction(e,this.currentScreenPosition,i-this.currentScreenPosition,n),this}},{key:"_renderSectionPosition",value:function(e,t){switch(this.screenType){case S:e.style[h.transformProp]="translate(0, -"+t+"%) "+this.translateZ;break;case"slide":e.style[h.transformProp]="translate(-"+t+"%, 0) "+this.translateZ}}},{key:"_getCurrentSectionIndex",value:function(){return this.currentSection.getAttribute("data-wall-section-index")}},{key:"_renderSectionNavs",value:function(){var e=this;if(this.navElements&&this.navElements.length){var t=this.options.sectionNavItemActiveClass;this.navElements.forEach(function(n){var i=(0,l.toArray)(n.children);i.forEach(function(e){return(0,l.removeClass)(e,t)});var r=i.find(function(t){return t.getAttribute("data-wall-section-nav-index")===e._getCurrentSectionIndex()});(0,l.addClass)(r,t)})}}},{key:"prevSection",value:function(){if((this.options.loopToBottom||1!=this._getCurrentSectionIndex())&&!this.isAnimating){var e=this.sections.reverse(),t=r(e);this.currentSection=t[0],this.restSections=t.slice(1),this.sections=[this.currentSection].concat(i(this.restSections.reverse())),this.screenType=S,this._refreshAnimateStatus(!0)._animateScreen(this.currentSection,this.sections)}}},{key:"nextSection",value:function(){(this.options.loopToTop||this._getCurrentSectionIndex()!=this.sections.length)&&(this.isAnimating||(this.sections=[].concat(i(this.restSections),[this.currentSection]),this.screenType=S,this._refreshAnimateStatus(!1)._animateScreen(this.currentSection,this.sections)))}},{key:"goToSection",value:function(e){if(e!==this._getCurrentSectionIndex()&&!this.isAnimating){this.isToBack=e<this._getCurrentSectionIndex(),this.sections=(0,l.toArray)(this.wrapper.children);var t=this.sections.find(function(t){return t.getAttribute("data-wall-section-index")==e}),n=this.sections.slice(0,e-1),r=this.sections.slice(e);this.sections=[t].concat(i(r),i(n)),this.isToBack?this.currentSection=t:this._queue(this.sections),this.screenType=S,this._refreshAnimateStatus(this.isToBack)._animateScreen(this.currentSection,this.sections)}}},{key:"prevSlide",value:function(){if(!this.isAnimating){var e=this.currentSlides.reverse(),t=r(e);this.currentSlide=t[0],this.restSlides=t.slice(1),this.currentSlides=[this.currentSlide].concat(i(this.restSlides.reverse())),this.screenType="slide",this._refreshAnimateStatus(!0)._animateScreen(this.currentSlide,this.currentSlides)}}},{key:"nextSlide",value:function(){this.isAnimating||(this.currentSlides=[].concat(i(this.restSlides),[this.currentSlide]),this.screenType="slide",this._refreshAnimateStatus(!1)._animateScreen(this.currentSlide,this.currentSlides))}}]),e}();e.exports=A},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=(t.throwNewError=function(e){throw new Error(e+" is required")},t.toArray=function(e){return Array.prototype.slice.call(e)},t.merge=function(e,t){return Object.keys(t).forEach(function(n){e[n]=t[n]}),e},function(e,t){return e.classList?e.classList.contains(t):!!e.className.match(new RegExp("(\\s|^)"+t+"(\\s|$)"))});t.addClass=function(e,t){e.classList?e.classList.add(t):i(e,t)||(e.className+=" "+t)},t.removeClass=function(e,t){if(e.classList)e.classList.remove(t);else if(i(e,t)){var n=new RegExp("(\\s|^)"+t+"(\\s|$)");e.className=e.className.replace(n," ")}}},function(e,t,n){"use strict";var i=n(4),r=function(e){return e&&e.__esModule?e:{default:e}}(i);e.exports={handleTouch:r.default}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=n(0),r=function(e,t){var n={X:0,Y:0},r={X:0,Y:0},s=function(e){var t=e.touches?e.touches[0]:e;n.X=t.pageX,n.Y=t.pageY},o=function(s){if(!t.isAnimating){var o=s.touches?s.touches[0]:s;r.X=o.pageX,r.Y=o.pageY;var c=n.X-r.X,a=n.Y-r.Y;if(Math.abs(a)-Math.abs(c)>0){if(a>200&&(0,i.scrollTouchBottom)(e))return t.nextSection();if(a>-200&&a<0&&(0,i.scrollTouchTop)(e))return t.prevSection()}else if(t.currentSlide){if(c>200)return t.nextSlide();if(c>-200&&c<0)return t.prevSlide()}}};e.addEventListener(i.touchEvent.touchStart,s,!1),e.addEventListener(i.touchEvent.touchMove,o,!1)};t.default=r},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});t.linear=function(e,t,n,i){return n*e/i+t},t.easeIn=function(e,t,n,i){return n*Math.pow(2,10*(e/i-1))+t},t.easeOut=function(e,t,n,i){return n*(1-Math.pow(2,-10*e/i))+t},t.easeInOut=function(e,t,n,i){return(e/=i/2)<1?n/2*Math.pow(2,10*(e-1))+t:(e--,n/2*(2-Math.pow(2,-10*e))+t)}},function(e,t,n){"use strict";Array.prototype.find||(Array.prototype.find=function(e){if(null==this)throw new TypeError("Array.prototype.find called on null or undefined");if("function"!=typeof e)throw new TypeError("predicate must be a function");for(var t,n=Object(this),i=n.length>>>0,r=arguments[1],s=0;s<i;s++)if(t=n[s],e.call(r,t,s,n))return t})}])});

    var wall = new Wall('#wrapper');
    var config = {
        sectionNavItemActiveClass: 'my-active-class'
    }

    var wall = new Wall('#wall', config);

    function openForm() {
        document.getElementById("myForm").style.display = "inline";
        document.getElementById("login").style.display = "none";
        document.getElementById("getstarted").style.display = "none";
    }


</script>

</body>

</html>