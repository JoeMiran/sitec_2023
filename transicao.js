document.querySelectorAll('a, button').forEach(link => {
    
    link.addEventListener('click', (event) => {

        event.preventDefault(); 

        const destination = link.getAttribute('href'); 

        document.querySelector('body').classList.add('exiting'); 

        setTimeout(() => {
            window.location.href = destination; 
        }, 500); 
    });

});