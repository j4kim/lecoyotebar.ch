import PhotoSwipeLightbox from "photoswipe/lightbox";
import "photoswipe/style.css";

const photoswipeGalleries = document.querySelectorAll(".pswp-gallery");

for (const gallery of photoswipeGalleries) {
    const lightbox = new PhotoSwipeLightbox({
        gallery,
        children: "a",
        showHideAnimationType: "none",
        pswpModule: () => import("photoswipe"),
    });
    lightbox.init();
}

window.addEventListener("load", () => {
    const errEl = document.querySelector(".validation-error");
    if (errEl) {
        errEl.scrollIntoView();
    }
});
