const body = document.querySelector('body');

// media query event handler
if (matchMedia) {
    var mq = window.matchMedia("(max-width: 768px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
}

// media query change
function WidthChange(mq) {
    if (mq.matches) {

    } else {

    }
};
/* End */

/* Add Browser Class to HTML */
var browser_name = '';
isIE = /*@cc_on!@*/false || !!document.documentMode;
isEdge = !isIE && !!window.StyleMedia;
if (navigator.userAgent.indexOf("Chrome") != -1 && !isEdge) {
    browser_name = 'chrome';
} else if (navigator.userAgent.indexOf("Safari") != -1 && !isEdge) {
    browser_name = 'safari';
} else if (navigator.userAgent.indexOf("Firefox") != -1) {
    browser_name = 'firefox';
} else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
{
    browser_name = 'ie';
} else if (isEdge) {
    browser_name = 'edge';
} else {
    browser_name = 'other-browser';
}

const html = document.querySelector('html');

html.classList.add(browser_name);
/* End */


/* Scroll to Top Button */
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.querySelector(".back-to-top").style.opacity = "1";
    } else {
        document.querySelector(".back-to-top").style.opacity = "0";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

document.querySelector(".back-to-top").addEventListener("click", (e) => {
    topFunction();
});
/* End */
