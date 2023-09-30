const scriptURL = 'https://script.google.com/macros/s/AKfycbzp_gBHI-NDNRZTUUx8AtmPfGqgVJMfd_Ybm6fQMh5bVjQ-kUwohPdjUqvo6qt-oD705Q/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! Your form is submitted successfully." ))
  .catch(error => console.error('Error!', error.message))
})