const btn = document.getElementById('btn-get-info');

btn.addEventListener('click', () => {
    fetch('/ruta2')
      .then(response => response.json())
      .then(data => console.log(data))
      .catch(error => console.error(error));
});
