import domReady from '@roots/sage/client/dom-ready';
// import 'alpine-turbo-drive-adapter'
import AlpineAutoInit from '@kevinbatdorf/alpine-auto-init'
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'
// import * as Turbo from "@hotwired/turbo";

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  window.Alpine = Alpine
  Alpine.plugin(intersect)
  Alpine.start()

  const panes = document.querySelectorAll('.pane');
  let activePaneIndex = 0;

  panes.forEach((pane, index) => {
    pane.addEventListener('click', () => {
      panes[activePaneIndex].classList.remove('active');
      activePaneIndex = index;
      panes[activePaneIndex].classList.add('active');
    });
  });

  const menuToggle = document.querySelector('.c-hamburger');
  const menu = document.querySelector('.nav-primary');
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
  });


  const progressbar = document.querySelector('progress')
  const article = document.querySelector('section')

  console.log(article);

  let isScrolling = false

  document.addEventListener('scroll', (e) => isScrolling = true)

  render()

  function render() {
    requestAnimationFrame(render)
    if (!isScrolling) return
    progressbar.value = window.scrollY / (article.offsetHeight - window.innerHeight) * 100
    isScrolling = false
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
