function toggleTitle(e, title){

    if ((e.which === 1 || e.button === 0) && window.getSelection().toString() === "") {

        const classList = title.classList;

        if (classList.contains("h")) {

            classList.remove("h");

        } else {

            classList.add("h");

        }
    }
}