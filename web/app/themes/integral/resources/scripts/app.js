import domReady from '@roots/sage/client/dom-ready';
// import 'alpine-turbo-drive-adapter'
// import Alpine from 'alpinejs';
// import * as Turbo from "@hotwired/turbo";

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  // window.Alpine = Alpine
  // Alpine.start()

  const panes = document.querySelectorAll('.pane');
  let activePaneIndex = 0;
  console.log(panes)

  panes.forEach((pane, index) => {
    console.log(pane);
    pane.addEventListener('click', () => {
      panes[activePaneIndex].classList.remove('active');
      activePaneIndex = index;
      panes[activePaneIndex].classList.add('active');
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
