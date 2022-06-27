
// Slider

const sliders = document.querySelectorAll(".slider-item");
let totalSlider = sliders.length;
let currentSlider = 0;
let timerSlider = 5000;

// create navigation
sliders.forEach( (item, index) => {
    let dot = document.createElement("div");
    dot.classList.add("slider-nav-dot");
    currentSlider === index && dot.classList.add("slider-nav-dot-active");
    dot.setAttribute("slider-index", index);
    document.querySelector(".slider-nav").append(dot);
})
// set listener for navigation
document.querySelectorAll(".slider-nav-dot").forEach( (item, index) => {
    item.addEventListener("click", (event)=> {
        currentSlider = index;
        removeAllActive()
        setActives(index);
    });
})

setInterval(function() {
    removeAllActive();
    setActives(currentSlider);
    currentSlider < totalSlider - 1 ? currentSlider++ : currentSlider = 0;
}, timerSlider);

function removeAllActive() {
    document.querySelectorAll(".slider-item-active").forEach(item=>item.classList.remove("slider-item-active"));
    document.querySelectorAll(".slider-nav-dot-active").forEach(item=>item.classList.remove("slider-nav-dot-active"));
}

function setActives(index) {
    document.querySelectorAll(".slider-item")[index].classList.add("slider-item-active");
    document.querySelectorAll(".slider-nav-dot")[index].classList.add("slider-nav-dot-active");
}


// Menu

const menuButton = document.querySelector(".menu-button");
const menuLinks  = document.querySelector(".menu-links") ;
menuButton.addEventListener("click", () => {
    menuLinks.classList.toggle("active");
})


// Scroll reveal

const initial = {
                    type: "fromtop",
                    duration: "1s",
                    delay: "0s"
                }

let observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let type = entry.target.dataset.animation || initial.type;
            let duration = entry.target.dataset.duration || initial.duration;
            let delay = entry.target.dataset.delay || initial.delay;
            let animation = `${type} ${duration} ease-in-out ${delay} forwards`;
            entry.target.style.animation = animation;
        }
    });
}, {threshold: 1, rootMargin:"0px 0px 100px 0px"})

document.querySelectorAll(".to-reveal").forEach( item => {
    observer.observe(item);
});


// Format

const telefone = document.querySelector('.form-telefone');
        telefone.addEventListener('input', function (e) {
            let telefone = e.target.value
                .replace(/\D/g, '')
                // .replace(/(\+*5{2})(\d)/, "$1 $2")
                .replace(/(\d{2})(\d)/, "\($1\) $2")
                .replace(/(\s\d{4})(\d)/, "$1\-$2")
                .replace(/(\d{4})-(\d)(\d{4})/, "$1$2-$3")
                .replace(/(\-\d{4})\d+?/, "$1")
            e.target.value = telefone;
        });


// Form submit

const form = document.querySelector(".form-contato");
form.addEventListener("submit", event => {
    event.preventDefault();

    document.querySelectorAll(".erro").forEach(item => {
        item.classList.remove("erro");
    });

    let erros = false;

    if (form.nome.value == '') {
        form.nome.parentElement.classList.add("erro");
        erros = true;
    }
    if (!form.telefone.value.match(/^[(]+[0-9]{2}[)]+[\s]+[0-9]{4,5}[-]+[0-9]{4}$/)) {
        form.telefone.parentElement.classList.add("erro");
        erros = true;
    }
    if (!form.email.value.match(/^\D[a-z\.\_\d]+@[a-z]+[\.a-z]*\.[a-z]{2,5}$/)) {
        form.email.parentElement.classList.add("erro");
        erros = true;
    }
    if (form.mensagem.value == '' || form.mensagem.length < 5) {
        form.mensagem.parentElement.classList.add("erro");
        erros = true;
    }

    if (!erros) {
        form.submit();
    }

    // fetch("https://formsubmit.co/ajax/80bd247ac95461683bf0e067041757db", {
    //     method: "POST",
    //     headers: { 
    //         'Content-Type': 'application/json',
    //         'Accept': 'application/json'
    //     },
    //     body: JSON.stringify({
    //         _subject: "Smarthink - Mensagem eviada pelo site",
    //         _template: "box",
    //         _captcha: "false",
    //         nome: form.nome.value,
    //         telefone: form.telefone.value,
    //         email: form.email.value,
    //         empresa: form.empresa.value,
    //         mensagem: form.mensagem.value
    //     })
    // })
    //     .then(response => response.json())
    //     .then(data => console.log(data))
    //     .catch(error => console.log(error));
})