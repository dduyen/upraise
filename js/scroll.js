
//btnscroll
var btnScroll = document.getElementById('btnscroll');

btnScroll.addEventListener('click', function(){
    // window.scrollTo(0,0);
    window.scrollTo({
        top:50,
        left:0,
        behavior:"smooth",

    })
})



