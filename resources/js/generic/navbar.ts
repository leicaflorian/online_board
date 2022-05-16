(function () {
  let navbarHTML: HTMLElement
  let pageMainTitle: HTMLElement
  let pageHeader: HTMLElement
  
  window.addEventListener('DOMContentLoaded', () => {
    navbarHTML = document.querySelector('#page-navbar') as HTMLElement
    pageMainTitle = document.getElementById('page-main-title') as HTMLElement
    pageHeader = document.getElementById('page-header') as HTMLElement
    
    setTimeout(() => {
      updateNavbarStickiness()
      updateNavbarOnScroll()
    })
  })
  
  window.addEventListener('resize', (e) => {
    updateNavbarStickiness()
  })
  window.addEventListener('scroll', (e) => {
    updateNavbarOnScroll()
  })
  
  function updateNavbarStickiness () {
    pageHeader.style.top = '-' + pageMainTitle.getBoundingClientRect().height + 'px'
  }
  
  function updateNavbarOnScroll () {
    const posY = navbarHTML.getBoundingClientRect().top
    
    if (posY <= 0) {
      navbarHTML.classList.add('stuck')
    } else {
      navbarHTML.classList.remove('stuck')
    }
  }
})()
