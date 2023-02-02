// Slider category
window.addEventListener("load", function () {
    const categorySliderMain = document.querySelector(".main__shopeemall--slider-main")
    const categorySliderMainItem = document.querySelectorAll(".main__shopeemall--slider-main-item")
    const categorySliderPrev = document.querySelector(".main__shopeemall--slider-prev")
    const categorySliderNext = document.querySelector(".main__shopeemall--slider-next")
    categorySliderPrev.style = "display: none"
    const widthSlider = categorySliderMainItem[0].offsetWidth*6
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