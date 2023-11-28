function appear() {
    let app = document.querySelector("#app")
    app.classList.add("appear")

    return true
}

function shift() {
    let app = document.querySelector("#app")
    app.classList.add("shift")
    setTimeout(() => {
	app.classList.remove("shift")
    }, 750)
    return true
}
