const config = {
    type: 'slider',
    focusAt: 1,
    perView: 3,
    startAt: 4,
    animationDuration: 300,
    breakpoints:{

        800:{
            perView: 1
        }
    }
}


new Glide('.glide', config).mount()