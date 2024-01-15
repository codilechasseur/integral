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
  });

  /**
   * Horizontal Scrubber
   */
  const timelines     = document.querySelectorAll('.progress-wrapper');
  const vHeightOffset = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0) / 1.25;

  timelines.forEach((timeline, index) => {
    window.addEventListener('scroll', () => {
      if (timeline.getBoundingClientRect().bottom - vHeightOffset <= timeline.offsetHeight) {
        var elementHeight = timeline.getBoundingClientRect().bottom - vHeightOffset;
        var scroll = (elementHeight - timeline.offsetHeight) * -1;
        var percentage = (100 * scroll) / timeline.offsetHeight;

        document.querySelector('.progress-indicator').style.maxHeight = percentage + '%';
      } else {
        document.querySelector('.progress-indicator').style.maxHeight = 0
      };
    });
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
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
