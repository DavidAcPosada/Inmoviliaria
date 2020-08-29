const searchScreen = document.getElementById('search-screen')
const buttonSearch = document.getElementById('search-btn')
const buttonClose = document.getElementById('close-btn')

buttonSearch.addEventListener('click', function(event) {
    searchScreen.style.display = 'flex'
})

buttonClose.addEventListener('click', function(event) {
    searchScreen.style.display = 'none'
})

function handleSubmit(event) {
    event.preventDefault()
    console.log(event.target.elements.busqueda.value)
    console.log(location.pathname)
}
