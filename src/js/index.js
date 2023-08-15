/** Bootstrap JS */
// import 'bootstrap';
const bootstrap = require('bootstrap');

/** PopperJS */
// import '@popperjs/core';
const popperjs = require('@popperjs/core');

/** Botstrap SCSS **/
// import '../scss/style.scss';
const scss = require('../scss/style.scss')

/** FontAwesome 6 */
// import '@fortawesome/fontawesome-free/js/all.js';
const fortawesome = require('@fortawesome/fontawesome-free/js/all.js');

/** Footer */
document.body.onload = footer;

function footer() {
    // create a new div element
    const footerDiv = document.createElement("footer");

    // assign it a class
    footerDiv.classList.add("footer");

    // gets the current date
    const copyright = new Date().getFullYear();

    // gets the copyright symbol
    const favicon = document.createElement("i");
    favicon.classList.add("fas", "fa-copyright");

    const text = document.createTextNode(" 2020 " + "- " + copyright);

    // add the text node to the newly created div
    footerDiv.appendChild(favicon);
    footerDiv.appendChild(text);

    // add the newly created element and its content into the DOM
    const newDiv = document.getElementById("div");
    document.body.insertBefore(footerDiv, newDiv);
}
