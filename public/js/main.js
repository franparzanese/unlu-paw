class App {

    constructor() {
        document.addEventListener("DOMContentLoaded", () => {
            const container = document.querySelector(".carrusel");
            if (container) {
                this.loadScript("Carrusel", "js/components/carousel.component.js", () => {
                    const images = ["img/banner-1.jpg", "img/banner-2.jpg", "img/banner-3.jpg"];
                    new CarouselComponent(".carrusel", images);
                });
            }
        });
    }

    loadScript(name, url, fnCallback = null) {
        let element = document.querySelector("script#" + name);
        if (!element) {
            // Crea el tag script.
            const element = document.createElement("script");
            element.setAttribute("id", name);
            element.setAttribute("src", url);
            element.appendChild(document.createTextNode(""));
            if (fnCallback) {
                element.addEventListener("load", fnCallback);
            }
            document.head.appendChild(element);
        }
        return element;
    }

}

const app = new App();
