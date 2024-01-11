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
    pane.addEventListener('mouseover', () => {
      panes[activePaneIndex].classList.remove('active');
      activePaneIndex = index;
      panes[activePaneIndex].classList.add('active');
    });
  });



// var myElement = document.getElementById('my-element');
// var bounding = myElement.getBoundingClientRect();
// var myElementHeight = myElement.offsetHeight;
// var myElementWidth = myElement.offsetWidth;

// function elementInViewport() {

//   var bounding = myElement.getBoundingClientRect();

//   if (bounding.top >= -myElementHeight
//     && bounding.left >= -myElementWidth
//     && bounding.right <= (window.innerWidth || document.documentElement.clientWidth) + myElementWidth
//     && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) + myElementHeight) {

//     console.log('Element is in the viewport!');
//   } else {

//     console.log('Element is NOT in the viewport!');
//   }
// }



    // var myElement = document.getElementById('my-element');
    // var bounding = timeline.getBoundingClientRect();
    // var myElementHeight = myElement.offsetHeight;
    // var myElementWidth = myElement.offsetWidth;


  const timelines = document.querySelectorAll('.progress-wrapper');

  timelines.forEach((timeline, index) => {
    window.addEventListener('scroll', () => {
      if (timeline.getBoundingClientRect().bottom - 400 <= timeline.offsetHeight) {
        var elementHeight = timeline.getBoundingClientRect().bottom - 400;
        var scroll = (elementHeight - timeline.offsetHeight) * -1;
        var percentage = (100 * scroll) / timeline.offsetHeight;

        document.querySelector('.progress-indicator').style.maxHeight = percentage + '%';
      } else {
        document.querySelector('.progress-indicator').style.maxHeight = 0
      };
    });
  });







  // let observer = new IntersectionObserver((entries, observer) => {
  //   entries.forEach(entry => {

  //     if(entry.isIntersecting) {
  //       console.log(entry);
  //       entry.target.src = entry.target.dataset.src;
  //       observer.unobserve(entry.target);
  //     } else {
  //       console.log('not');
  //     }
  //   });
  // }, {rootMargin: "0px 0px -50% 0px"});

  // document.querySelectorAll('.progress-wrapper').forEach(p => { observer.observe(p) });








  const menuToggle = document.querySelector('.c-hamburger');
  const menu = document.querySelector('.nav-primary');
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    menu.classList.toggle('active');
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
