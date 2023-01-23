// Slider category
window.addEventListener("load", function () {
    const categorySliderMain = document.querySelector(".main__category--slider-main")
    const categorySliderMainItem = document.querySelectorAll(".main__category--slider-main-item")
    const categorySliderPrev = document.querySelector(".main__category--slider-prev")
    const categorySliderNext = document.querySelector(".main__category--slider-next")
    categorySliderPrev.style = "display: none"
    const widthSlider = categorySliderMainItem[0].offsetWidth*3
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


// Slider flashsale
window.addEventListener("load", function () {
    const flashsaleSliderMain = document.querySelector(".main__flashsale--slider-main")
    const flashsaleSliderMainItem = document.querySelectorAll(".main__flashsale--slider-main-item")
    const flashsaleSliderPrev = document.querySelector(".main__flashsale--slider-prev")
    const flashsaleSliderNext = document.querySelector(".main__flashsale--slider-next")
    flashsaleSliderPrev.style = "display: none"
    const widthSlider = flashsaleSliderMainItem[0].offsetWidth*5
    let positionX = 0
    let index = 0
    flashsaleSliderPrev.addEventListener("click", function () {
        handleChangeSlide(-1)
    })
    flashsaleSliderNext.addEventListener("click", function () {
        handleChangeSlide(1)
    })
    function handleChangeSlide(direction) {
        if (direction == 1) {
            index++
            positionX = positionX - widthSlider
            flashsaleSliderMain.style = `transform: translateX(${positionX}px)`
        } else if (direction == -1) {
            index--
            positionX = positionX + widthSlider
            flashsaleSliderMain.style = `transform: translateX(${positionX}px)`
        }

        if (index == 2) {
            flashsaleSliderNext.style = "display: none"
        } else {
            flashsaleSliderNext.style = "display: flex"
        }

        if (index == 0) {
            flashsaleSliderPrev.style = "display: none"
        } else {
            flashsaleSliderPrev.style = "display: flex"
        }
    }
})
// End slider flashsale


// Slider shopeemall slider shop
window.addEventListener("load", function () {
    const shopeeMallShopSliderMain = document.querySelector(".main__shopeemall--slider-shop-main")
    const shopeeMallShopSliderMainItem = document.querySelectorAll(".main__shopeemall--slider-shop-main-item")
    const shopeeMallShopSliderPrev = document.querySelector(".main__shopeemall--slider-shop-prev")
    const shopeeMallShopSliderNext = document.querySelector(".main__shopeemall--slider-shop-next")
    shopeeMallShopSliderPrev.style = "display: none"
    const widthSlider = shopeeMallShopSliderMainItem[0].offsetWidth*3
    let positionX = 0
    shopeeMallShopSliderPrev.addEventListener("click", function () {
        handleChangeSlide(-1)
    })
    shopeeMallShopSliderNext.addEventListener("click", function () {
        handleChangeSlide(1)
    })
    function handleChangeSlide(direction) {
        if (direction == 1) {
            positionX = positionX - widthSlider
            shopeeMallShopSliderMain.style = `transform: translateX(${positionX}px)`
            shopeeMallShopSliderNext.style = "display: none"
            shopeeMallShopSliderPrev.style = "display: flex"
            positionX = 0
        } else if (direction == -1) {
            positionX = positionX - widthSlider
            shopeeMallShopSliderMain.style = `transform: translateX(-${positionX}px)`
            shopeeMallShopSliderNext.style = "display: flex"
            shopeeMallShopSliderPrev.style = "display: none"
            positionX = 0
        }
    }
})
// End slider shopeemall slider shop


// Slider flashsale
window.addEventListener("load", function () {
    const flashsaleSliderMain = document.querySelector(".main__topsearch--slider-main")
    const flashsaleSliderMainItem = document.querySelectorAll(".main__topsearch--slider-main-item")
    const flashsaleSliderPrev = document.querySelector(".main__topsearch--slider-prev")
    const flashsaleSliderNext = document.querySelector(".main__topsearch--slider-next")
    flashsaleSliderPrev.style = "display: none"
    const widthSlider = flashsaleSliderMainItem[0].offsetWidth*5
    let positionX = 0
    let index = 0
    flashsaleSliderPrev.addEventListener("click", function () {
        handleChangeSlide(-1)
    })
    flashsaleSliderNext.addEventListener("click", function () {
        handleChangeSlide(1)
    })
    function handleChangeSlide(direction) {
        if (direction == 1) {
            index++
            positionX = positionX - widthSlider
            flashsaleSliderMain.style = `transform: translateX(${positionX}px)`
        } else if (direction == -1) {
            index--
            positionX = positionX + widthSlider
            flashsaleSliderMain.style = `transform: translateX(${positionX}px)`
        }

        if (index == 3) {
            flashsaleSliderNext.style = "display: none"
        } else {
            flashsaleSliderNext.style = "display: flex"
        }

        if (index == 0) {
            flashsaleSliderPrev.style = "display: none"
        } else {
            flashsaleSliderPrev.style = "display: flex"
        }
    }
})
// End slider flashsale