import './bootstrap';
import * as bootstrap from 'bootstrap';

import 'swiper/css';
import "../css/app.css";
import 'swiper/css/pagination';
import 'swiper/css/navigation';

import Swiper from 'swiper';

const swiper = new Swiper(".auctionsSwiper", {
    loop: true,
    speed: 400,
    spaceBetween: 20,
    autoplay: {
        delay: 500,
    },
    hashNavigation: {
        replaceState: true,
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    breakpoints: {
        576: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    },
    pagination: {
        el: ".swiper-pagination"
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});


const auctionsSwiperElements = document.querySelectorAll(".auctionsSwiper .place-bid-btn");

auctionsSwiperElements.forEach(btn => {
    btn.addEventListener('click', () => {
        const cardBody = btn.closest('.card-body');
        const crown = cardBody.querySelector(".crown");
        crown.textContent = Number(crown.textContent) + 1;
    });
});

const hearts = document.querySelectorAll(".icons .fa-heart");

hearts.forEach(heart => {
    heart.addEventListener('click', () => {
        const likeElement = heart.nextElementSibling;
        if (!likeElement.dataset.like) {
            likeElement.textContent = Number(likeElement.textContent) + 1;
            likeElement.setAttribute('data-like', 1);
            heart.classList.remove('fa-regular');
            heart.classList.add('fa-solid', 'text-site-light');
        }
    });
});

async function addLike(newId) {
    try {
        const data = {
            new_id: newId,
        };
        const response = await axios.post('/api/news/like', data, {
            headers: {
                'Content-Type': 'application/json'
            }
        });
        if (response.status === 200) {
            const updatedLikes = response.data.likes;
            return updatedLikes;
        }
    } catch (error) {
        console.error('Eroare:', error);
    }
}

const likesButton = document.querySelectorAll('.like-button');

likesButton.forEach( likeButton => {
    likeButton.addEventListener('click', async () => {
          const collectionId = likeButton.dataset.collectionId;
          const like = await addLike(collectionId);
          const likeElement = likeButton.nextElementSibling;
          likeElement.textContent = like;
    });
});
