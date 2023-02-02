// Slider category
window.addEventListener("load", function () {
    const categorySliderMain = document.querySelector(".main__product--img-video-slider-main")
    const categorySliderMainItem = document.querySelectorAll(".main__product--img-video-slider-main-item")
    const categorySliderPrev = document.querySelector(".main__product--img-video-slider-prev")
    const categorySliderNext = document.querySelector(".main__product--img-video-slider-next")
    categorySliderPrev.style = "display: none"
    const widthSlider = categorySliderMainItem[0].offsetWidth+11
    let positionX = 0
    categorySliderPrev.addEventListener("click", function () {
        handleChangeSlide(-1)
    })
    categorySliderNext.addEventListener("click", function () {
        handleChangeSlide(1)
    })
    function handleChangeSlide(direction) {
        if (direction == 1) {
            positionX = positionX - widthSlider
            categorySliderMain.style = `transform: translateX(${positionX}px)`
            categorySliderNext.style = "display: none"
            categorySliderPrev.style = "display: flex"
            positionX = 0
        } else if (direction == -1) {
            positionX = positionX - widthSlider
            categorySliderMain.style = `transform: translateX(-${positionX}px)`
            categorySliderNext.style = "display: flex"
            categorySliderPrev.style = "display: none"
            positionX = 0
        }
    }
})
// End slider category