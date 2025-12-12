document.addEventListener('DOMContentLoaded', () => {
  // Initialize Swiper
  const swiper = new Swiper("#skills", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    speed: 2000, // Speed of transition (lower value = faster)
    momentumRatio: 0.4, // Smoothens free scroll
  });

  // TypeWriter Class
  class TypeWriter {
    constructor(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.isDeleting = false;
      this.tick();
    }

    tick() {
      const i = this.loopNum % this.toRotate.length;
      const fullTxt = this.toRotate[i];

      this.txt = this.isDeleting
        ? fullTxt.substring(0, this.txt.length - 1)
        : fullTxt.substring(0, this.txt.length + 1);

      this.el.querySelector('.wrap').innerHTML = this.txt;

      let delta = 150 - Math.random() * 100;
      if (this.isDeleting) delta /= 2;

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(() => this.tick(), delta);
    }
  }

  // Initialize all elements with class 'typewrite'
  const elements = document.querySelectorAll('.typewrite');
  elements.forEach(el => {
    const toRotate = el.getAttribute('data-type');
    const period = el.getAttribute('data-period');
    if (toRotate) {
      new TypeWriter(el, JSON.parse(toRotate), period);
    }
  });

  // Inject blinking cursor CSS
  const style = document.createElement('style');
  style.innerHTML = `
    .typewrite > .wrap::after {
      content: '|';
      animation: blink 1s infinite;
    }
    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }
  `;
  document.head.appendChild(style);
});

