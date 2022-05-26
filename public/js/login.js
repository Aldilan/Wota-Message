const sosmedButtons = document.querySelectorAll('#footer ul li')
const parentSosmedPages = document.getElementById('sosmedPages')
const sosmedPages = document.querySelectorAll('.sosmedPage')
const closeSosmedPageButtons = document.querySelectorAll('#closeSosmed')

function closeSosmedPages() {
    sosmedPages.forEach(function (sosmedPage) {
        sosmedPage.classList.add('invisible')
    })
}

closeSosmedPageButtons.forEach(function (closeSosmedPageButton) {
    closeSosmedPageButton.addEventListener('click', function (e) {
        closeSosmedPages()
        parentSosmedPages.classList.add('invisible')
    })
})

sosmedButtons.forEach(function (sosmedButton) {
    sosmedButton.addEventListener('click', function (e) {
        closeSosmedPages()
        idSosmedButton = e.target.getAttribute('alt')
        parentSosmedPages.classList.remove('invisible')
        if (idSosmedButton == 'twitter') {
            sosmedPages[0].classList.remove('invisible')
        }else if(idSosmedButton == 'instagram') {
            sosmedPages[1].classList.remove('invisible')
        }else {
            sosmedPages[2].classList.remove('invisible')
        }
    })
})