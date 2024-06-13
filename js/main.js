let burgerBtn = document.querySelector(".burger-menu-btn");
let burgerMenu = document.querySelector(".burger-menu");

let isBurgerOpen = false;

burgerBtn.onclick = function () {
  if (!isBurgerOpen) {
    burgerMenu.style.display = "block";
    burgerBtn.style.backgroundPosition = "center left 50px, center";
    isBurgerOpen = true;
  } else if (isBurgerOpen) {
    burgerMenu.style.display = "none";
    burgerBtn.style.backgroundPosition = "center, center left 50px";
    isBurgerOpen = false;
  }
};

// document.querySelectorAll('.smooth-scroll-contact').forEach(anchor => {
//   anchor.addEventListener('click', function (e) {
//     e.preventDefault();

//     document.querySelector(this.getAttribute('href')).scrollIntoView({
//       behavior: 'smooth'
//     });
//   });
// });

let scrollContact = document.querySelector(".smooth-scroll-contact");
let scrollContactEnd = document.querySelector(".footer-sitemap");

scrollContact.onclick = function (e) {
  e.preventDefault();
  scrollAboutEnd.scrollIntoView({
    behavior: "smooth",
  });

  setTimeout(() => {
    let paragraph = document.querySelector(".contact-info-highlight");
    paragraph.classList.add("highlight"); // Add class for highlighting

    setTimeout(() => {
      paragraph.classList.remove("highlight"); // Remove class to fade out
    }, 800); // Adjust the duration (1 second in this case)
  }, 500);
};

let scrollAbout = document.querySelector(".smooth-scroll-about");
let scrollAboutEnd = document.querySelector(".footer-sitemap");

scrollAbout.onclick = function (e) {
  e.preventDefault();
  scrollAboutEnd.scrollIntoView({
    behavior: "smooth",
  });
  setTimeout(() => {
    let aboutmehl = document.querySelector(".index-about");
    aboutmehl.classList.add("highlight"); // Add class for highlighting

    setTimeout(() => {
      aboutmehl.classList.remove("highlight"); // Remove class to fade out
    }, 800); // Adjust the duration (1 second in this case)
  }, 500);
};

if (1 == 1) {
  let getPh = document.querySelector(".greetings");
  let date = new Date();
  let currentHour = date.getHours();

  if (currentHour >= 4 && currentHour < 10) {
    getPh.innerHTML = "Good<br>Morning!";
  } else if (currentHour >= 10 && currentHour < 12) {
    getPh.innerHTML = "Good<br>Day!";
  } else if (currentHour >= 12 && currentHour < 18) {
    getPh.innerHTML = "Good<br>Afternoon!";
  } else if (currentHour >= 18 && currentHour < 22) {
    getPh.innerHTML = "Good<br>Evening";
  } else if (currentHour >= 22 && currentHour < 4) {
    getPh.innerHTML = "Good<br>Night!";
  } else {
    getPh.innerHTML = "Good<br>Night!";
  }
}
