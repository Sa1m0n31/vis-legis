
    const waiter = document.querySelector('.waiter');
    const hero = document.querySelector('.hero');

    const mainImageLoaded = () => {
        waiter.style.opacity = '0';
        waiter.style.zIndex = '-10';
        hero.style.opacity = '1';
    }

    const heroImage = document.querySelector('.hero__backgroundWrapper>img');
    if(heroImage) {
        if(heroImage.complete && heroImage.naturalHeight !== 0) {
            mainImageLoaded();
        }
        else {
            document.querySelector('.hero__backgroundWrapper>img').addEventListener('load', (event) => {
                mainImageLoaded();
            });
        }
    }

    let currentFaq = Array.from(document.querySelectorAll('.faq__content__block')).map((item, index) => {
        return false;
    });

    const allFaqAnswers = Array.from(document.querySelectorAll('.faq__content__answer'));
    const allFaqArrows = Array.from(document.querySelectorAll('.faq__content__icon'));

    const mobileMenu = document.querySelector('.mobileMenu');
    const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

    const showAnswer = (n) => {
        allFaqAnswers[n].style.height = 'auto';
        allFaqAnswers[n].style.margin = '15px 0';
        allFaqAnswers[n].style.padding = '20px';
        setTimeout(() => {
            allFaqAnswers[n].style.opacity = '1';
        }, 300);
        allFaqArrows[n].style.transform = 'rotate(180deg)';
    }

    const hideAnswer = (n) => {
        allFaqAnswers[n].style.opacity = '0';
        setTimeout(() => {
            allFaqAnswers[n].style.height = '0';
            allFaqAnswers[n].style.margin = '0';
            allFaqAnswers[n].style.padding = '0';
        }, 300);
        allFaqArrows[n].style.transform = 'rotate(0deg)';
    }

    const faq = (n) => {
        currentFaq[n] = !currentFaq[n];
        if(currentFaq[n]) showAnswer(n);
        else hideAnswer(n)
    }

    const openMenu = () => {
        mobileMenu.style.transform = 'scaleX(1)';
        setTimeout(() => {
            mobileMenuChildren.forEach((item) => {
                item.style.opacity = '1';
            });
        }, 300);
    }

    const closeMenu = () => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '0';
        });
        setTimeout(() => {
            mobileMenu.style.transform = 'scaleX(0)';
        }, 300);
    }

    const observer = lozad();
    observer.observe();

    AOS.init({
        duration: 600
    });

    /* Google Maps */
    const initMap = () => {

    }

    let myPosition = {lat: 53.863985012328, lng: 20.954080735473397};

    if(document.getElementById('map') !== null) {
        let map = new google.maps.Map(document.getElementById('map'), {
            center: myPosition,
            zoom: 16
        });

        let marker = new google.maps.Marker({
            position: myPosition,
            map: map,
            title: "Kancelaria Adwokacka Wojciech Piłat",
            animation: google.maps.Animation.BOUNCE
        });

        marker.setAnimation(google.maps.Animation.BOUNCE);

        let infoWindow = new google.maps.InfoWindow({
            content: document.querySelector("#contentWindow")
        });

        marker.addListener("click", () => {
            map.setZoom(19);
            infoWindow.open(map, marker);
        });
    }