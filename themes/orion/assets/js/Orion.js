var Orion = (function() {
    var mobile;
    
    function hasClass(o, className){
        if (o.classList)
            return o.classList.contains(className);
        else
            return new RegExp('(^| )' + className + '( |$)', 'gi').test(o.className);
    }
    
    function addClass(o, className){
        if (o.classList)
            o.classList.add(className);
        else
            o.className += ' ' + className;
    }
    
    function removeClass(o, className){
        if (o.classList)
            o.classList.remove(className);
        else
            o.className = o.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }

    function setNavigation() {
        var winHeight = window.innerHeight,
            scrollTop = document.body.scrollTop || window.pageYOffset,        
            bigNav = document.getElementById('big_nav'),
            smallNav = document.getElementById('small_nav'),
            tabletNav = document.getElementById('tablet_nav_container');

        if(tabletNav) tabletNav.addEventListener('click', function(){
            if(hasClass(document.getElementById('tablet_nav'), 'hidden')){
                removeClass(document.getElementById('tablet_nav'), 'hidden');
            }else{
                addClass(document.getElementById('tablet_nav'), 'hidden');
            }
        });
        
        window.addEventListener('load', setNav);
        window.addEventListener('resize', setNav);
        window.addEventListener('scroll', function(){
            scrollTop = document.body.scrollTop || window.pageYOffset;
            
            if (!mobile) {
                //small navigation
                if (scrollTop > winHeight - 20) {
                    if(smallNav) smallNav.style.marginTop = '0';
                } else if (scrollTop <= winHeight - 50) {
                    if(smallNav) smallNav.style.marginTop = '-60px';
                }

                //big navigation
                if (scrollTop <= 80) {
                    removeClass(bigNav, 'bignav_hidden');
                } else {
                    addClass(bigNav, 'bignav_hidden');
                }
            }
        });        

        function setNav() {
            winHeight = window.innerHeight;
            if(mobile || window.innerWidth <= 640) {                
                if(smallNav) smallNav.style.display = 'none';
                if(tabletNav) tabletNav.style.display = 'block';
                bigNav.style.display = 'none';
            } else {                
                if(smallNav) smallNav.style.display = 'block';
                if(tabletNav) tabletNav.style.display = 'none';
                bigNav.style.display = 'block';
            }
        }
    }

    return {
        init: function() {
            // --------------- check if site is loaded on a mobile(touchscreen) device ---------------
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                mobile = true;
            } else {
                mobile = false;
            }
            
            // --------------- set navigation ---------------
            setNavigation();
        },
        isMobile: function() {
            return mobile;
        },
        colors: {
            red: '#CC3D18',
            violet: '#4710B5',
            white: '#FFF',
            black: '#000'
        }
    };
})();