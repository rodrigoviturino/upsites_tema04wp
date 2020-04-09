let menu = document.querySelector('.header');
let logo_stycky = document.querySelector(".navbar-brand");
let headerClassList = menu.classList;
let logoClassList = logo_stycky.classList;
console.log(headerClassList);


window.addEventListener('scroll', () => {
    if (window.scrollY >= 150) {
        if( !headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide');
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});


