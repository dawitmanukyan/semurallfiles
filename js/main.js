(function () {
    const leftArrow = document.querySelector('.arrow-left');
    const rigtArrow = document.querySelector('.arrow-right');
    const sliderRow = document.querySelector('.slider-row');
    const dots = document.querySelector('.slider-dots');
    const itemsCount = sliderRow.children.length;
    let activeDot;

    const buttons = [...Array(itemsCount)].map((_, i) => {
        const button = document.createElement('button');
        button.dataset.index = i;
        if (i === 0) {
            button.classList.add('active');
            activeDot = button;
        }
        return button
    })

    dots.append(...buttons);

    rigtArrow.addEventListener('click', function () {
        let left = parseInt(sliderRow.style.left) - 100;
        if(left <= -itemsCount * 100){
            left = 0
        }
        sliderRow.style.left = `${left}%`;
        activeDot.classList.remove('active');
        activeDot = dots.children[left / -100];
        activeDot.classList.add('active');
    })

    leftArrow.addEventListener('click', function () {
        let left = parseInt(sliderRow.style.left) + 100;
        if(left > 0){
            left = -(itemsCount - 1) * 100
        }
        sliderRow.style.left = `${left}%`;
        activeDot.classList.remove('active');
        activeDot = dots.children[left / -100];
        activeDot.classList.add('active');
    })

    dots.addEventListener('click', e => {
        if(e.target.tagName === 'BUTTON'){
            const index = e.target.dataset.index;
            sliderRow.style.left = index * -100 + '%';
            activeDot.classList.remove('active');
            activeDot = dots.children[index];
            activeDot.classList.add('active');
        }
    })

})()




  