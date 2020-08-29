const paramElement = document.getElementById('param')
const results = document.getElementById('results')

const param = new URLSearchParams(location.search).get('busqueda')

if (!param) {
  paramElement.parentElement.innerHTML = 'No existen criterios de búsqueda'
} else {
  paramElement.innerHTML = param

  const filter = casas.filter(function(item) {
    return item.location.toLowerCase().includes(param.toLowerCase())
  })
  filter.forEach(function(item) {
    
    const element = document.createElement('div')
    element.classList.add('col')
    element.innerHTML = `
      <div class="card">
        <img src="https://picsum.photos/600/400" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">${item.title}</h5>
          <p class="card-text">${item.description}</p>
          <small class="text-muted">${item.location}</small>
        </div>
      </div>
    `
    results.appendChild(element)
  })
}