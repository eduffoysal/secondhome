const formLogin = document.querySelector('.form-login')
const formSignup = document.querySelector('.form-signup')
const linkLogin = document.querySelector('.link-login')
const linkSignup = document.querySelector('.link-signup')

linkLogin.onclick = function(e) {
  e.preventDefault()

  formLogin.classList.add('show')
  formLogin.classList.remove('hide')

  formSignup.classList.add('hide')
  formSignup.classList.remove('show')
}

linkSignup.onclick = function(e) {
  e.preventDefault()

  formLogin.classList.add('hide')
  formLogin.classList.remove('show')

  formSignup.classList.add('show')
  formSignup.classList.remove('hide')
}