;(function () {
  const burgerWrapper = document.querySelector('.burger-wrapper-icon')
  const burger = document.querySelector('.burger')
  const nav = document.querySelector('.nav-links-burger')
  const navLinks = document.querySelectorAll('.nav-links-burger li')

  burgerWrapper.addEventListener('click', () => {
    console.log('click')
    nav.classList.toggle('nav-active')

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ''
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.6
        }s`
      }
    })

    burgerWrapper.classList.toggle('open')
    burger.classList.toggle('toggle')
  })

  navLinks.forEach((link) => {
    link.addEventListener('click', function () {
      nav.classList.remove('nav-active')
      navLinks.forEach((link, index) => {
        link.style.animation = ''
      })
      burgerWrapper.classList.toggle('open')
      burger.classList.remove('toggle')
    })
  })
})()
