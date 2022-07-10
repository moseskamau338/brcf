"use strict";

const images = document.querySelectorAll("[data-src]");

const preloadImage = (img) => {
    const src = img.getAttribute("data-src");
    if(src){img.src = src;}
}

const imgOptions = {}
