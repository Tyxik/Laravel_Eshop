import Lenis from "lenis";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Inicializace Lenis
const lenis = new Lenis({
  smooth: true,  // Plynulý scroll
  lerp: 0.1,     // Smoothed scroll factor
  smoothTouch: true, // Plynulý scroll pro touch zařízení
});

// GSAP ticker pro plynulé animace
gsap.ticker.add((time) => {
  lenis.raf(time * 1000);  // Sledování scrollování
});

// ScrollTrigger Update
lenis.on("scroll", () => ScrollTrigger.update());

// Registrace ScrollTrigger pluginu
gsap.registerPlugin(ScrollTrigger);

// Jednoduchá animace s GSAP a ScrollTrigger
gsap.to(".your-element", {
  scrollTrigger: {
    trigger: ".your-element", // Spouštěč animace
    start: "top bottom",  // Kdy začne (začátek okna a konec elementu)
    end: "bottom top",    // Kdy skončí (spodní část okna a horní část elementu)
    scrub: 0.5,           // Plynulý scroll, aby animace probíhala synchronně s rolováním
  },
  opacity: 1,    // Plynulý přechod opacity (změní se z 0 na 1)
  x: 100,        // Posune element na ose X o 100px
});
