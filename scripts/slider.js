const slider = document.querySelector('.slider')
const scrollSliderArea = slider.querySelector('.slider__scroll')
const bullets = Array.from(slider.querySelectorAll('.bullets__item'))
const sliderItems = slider.querySelectorAll('.slider__item')

console.warn(sliderItems.length)
let indexSlide = 0;

let directionUp = true;
const sliderMove = (e) =>{
    // if (indexSlide < sliderItems.length-1){
    //     indexSlide += 1;
    // } else{
    //     indexSlide -= 1;
    // }
    if (directionUp) {
        indexSlide += 1;
        if (indexSlide == sliderItems.length-1){
            directionUp = false;
        }
    } else{
        indexSlide -= 1;
        if (indexSlide == 0){
            directionUp = true;
        }
    }
    
    bullets.map(e => e.classList.remove('bullets__item_active'))
    bullets[indexSlide].classList.add('bullets__item_active')

    scrollSliderArea.style.transform = `translateX(-${indexSlide*100}%)`
    
}

setInterval(sliderMove, 3000)




