//search button icon & text toggle based on width
var win = window;
let searchBtn = document.querySelector(".search-btn");
if (typeof searchBtn === undefined || searchBtn === null) {
  console.log("elemnet not avaiable", "searchBtn", searchBtn);
} else {
  win.addEventListener("resize", function() {
    if (win.innerWidth <= 500) {
      searchBtn.innerHTML = '<i class="fas fa-search"></i>';
    } else {
      searchBtn.innerHTML = "SEARCH";
    }
  });

  win.addEventListener("load", function() {
    if (win.innerWidth <= 500) {
      searchBtn.innerHTML = '<i class="fas fa-search"></i>';
    } else {
      searchBtn.innerHTML = "SEARCH";
    }
  });
}

//menu toggle

let menuBtn = document.querySelector("#menu-toggle");
let menuDiv = document.querySelector(".nav-menu");
let menuClose = document.querySelector(".nav-icon");

if (typeof menuBtn === undefined || menuBtn === null) {
  console.log("elemnet not avaiable", "menuBtn", menuBtn);
} else {
  menuBtn.addEventListener("click", function() {
    menuDiv.style.display = "flex";
    setTimeout(function() {
      menuDiv.style.marginLeft = "0";
    }, 10);
  });

  menuClose.addEventListener("click", function() {
    menuDiv.style.marginLeft = "100vw";
    setTimeout(function() {
      menuDiv.style.display = "none";
    }, 400);
  });
}

//sign-up form toggle
let formWrapper = document.querySelector(".form-wrapper");
let signUpBtns = document.querySelectorAll(".sign-up-toggle");

if (typeof formWrapper === undefined || formWrapper === null) {
  console.log("elemenet not found", "formWrapper", formWrapper);
} else {
  signUpBtns.forEach(function(elm) {
    elm.addEventListener("click", function(e) {
      if (!e.target.classList.contains("active-main")) {
        e.target.classList.add("active-main");
        signUpBtns.forEach(newelm => {
          if (newelm !== e.target) {
            newelm.classList.remove("active-main");
          }
        });
      }
    });
  });
}
