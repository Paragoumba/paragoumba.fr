document.addEventListener('keypress', (ev) => {

    let activeElt;

    switch (ev.key){

        case 'ArrowLeft':

            activeElt = document.getElementById('active');

            const previousElt = activeElt.previousElementSibling;

            if (previousElt.nodeName === "A") {

                window.location.href = previousElt.href;

            }
            break;

        case 'ArrowRight':

            activeElt = document.getElementById('active');

            const nextElt = activeElt.nextElementSibling;

            if (nextElt.nodeName === "A") {

                window.location.href = nextElt.href;

            }
            break

    }
});