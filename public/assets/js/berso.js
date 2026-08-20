// mahdi
 let question_common_onclick = document.querySelectorAll('.question_common_onclick')
        question_common_onclick.forEach((item) => {
            item.addEventListener('click', function () {
                if (item.parentElement.classList.contains('h-12')) {
                    question_common_onclick.forEach((element) => {
                        element.parentElement.classList.add('h-12')
                        element.parentElement.classList.remove('h-48')
                        element.children[1].classList.remove('-rotate-90')
                    })
                }
                item.parentElement.classList.toggle('h-12')
                item.parentElement.classList.toggle('h-48')
                item.children[1].classList.toggle('-rotate-90')
            })
        })


//mahdi