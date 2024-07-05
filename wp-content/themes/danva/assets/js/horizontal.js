
//Smother Scroll


const lenis = new Lenis({
  duration: 2.5,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), 
  direction: 'vertical', // vertical, horizontal
  gestureDirection: 'vertical', // vertical, horizontal, both
  smooth: true,
  mouseMultiplier: 1,
  smoothTouch: false,
  touchMultiplier: 2,
  infinite: false,
})



function raf(time) {
    lenis.raf(time) 
    requestAnimationFrame(raf)
}
requestAnimationFrame(raf)

