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

  /**
   * Horizontal Accordion
   */
  const panes = document.querySelectorAll('.pane');
  let activePaneIndex = 0;

  panes.forEach((pane, index) => {
    pane.addEventListener('mouseover', () => {
      panes[activePaneIndex].classList.remove('active');
      activePaneIndex = index;
      panes[activePaneIndex].classList.add('active');
    });

    pane.querySelector('.content').addEventListener('click', () => {
      window.location.href = pane.dataset.url;
    })
  });

  /**
   * Mobile Menu
   */
  const menuToggle = document.querySelector('.c-hamburger');
  const menu = document.querySelector('.nav-primary');
  const body = document.querySelector('body');
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
    body.classList.toggle('menu-active');
  });


  // Callback for IntersectionObserver
  const callback = function (entries) {
    entries.forEach((entry) => {
      // Is the element in the viewport?
      if (entry.isIntersecting) {
        // Add the fadeIn class:
        entry.target.classList.add("animate-fadeIn");
      }
    });
  };

  // Get all the elements you want to show on scroll
  const targets = document.querySelectorAll(".js-show-on-scroll");

  // Set up a new observer
  const observer = new IntersectionObserver(callback);

  // Loop through each of the target
  targets.forEach(function (target) {
    // Hide the element
    target.classList.add("opacity-0");

    // Add the element to the watcher
    observer.observe(target);
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
