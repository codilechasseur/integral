import domReady from '@roots/sage/client/dom-ready';
import 'alpine-turbo-drive-adapter'
import Alpine from 'alpinejs';
import * as Turbo from "@hotwired/turbo";

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  window.Alpine = Alpine
  Alpine.start()
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
