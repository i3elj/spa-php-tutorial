function appear() {
    let app = document.querySelector("#app")
    app.classList.add("appear")

    return true
}

function eventTest() {
    let app = document.querySelector("#app")
    app.classList.add("shift")
    setTimeout(() => {
	app.classList.remove("shift")
    }, 750)
    return true
}
