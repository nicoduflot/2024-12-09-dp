document.addEventListener('DOMContentLoaded', function(){
    
    const scaleElements = document.querySelectorAll('.button');
    
    scaleElements.forEach(element=>{
        element.classList.add('scaleOn');
    })

    /* ajouter la classe "active" aux liens de la navigation navbar */
    const navbarLinks = document.querySelectorAll('.navbar .nav-link:not(.dropdown-toggle)');
    navbarLinks.forEach(link =>{
        if(link.classList.contains('is-active')){
            link.classList.add('active');
        }
    });
});