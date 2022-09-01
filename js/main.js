var lastScrollTop = 0;
var header = document.querySelector(".header-section");

window.addEventListener("scroll", function () {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    header.style.top = "-100px";
  } else {
    header.style.top = "0px";
    header.style.backgroundColor = "#000";
  }
  lastScrollTop = scrollTop;
});

// Form
let form = document.forms;
// age
let ageInput = document.querySelector("#ageInput");
let ageResult = document.querySelector("#ageResult");
// high
let highInput = document.querySelector("#highInput");
let highResult = document.querySelector("#highResult");
// weight
let weightInput = document.querySelector("#weightInput");
let weightResult = document.querySelector("#weightResult");
// btn
let calBtn = document.querySelector(".cal-btn");
let ahmed = document.querySelector(".ahmed");
// select
let genderSelect = document.querySelector("#gender-selection");
let acSelect = document.querySelector("#activity-selection");
// divs
let mainSpan = document.querySelector(".main-span");
let maintainNum = document.querySelector(".maintainNum");
let mildNum = document.querySelector(".mildNum");
let weightNum = document.querySelector(".weightNum");
let extremeNum = document.querySelector(".extremeNum");

ageInput.value = ageResult.value;
highInput.value = highResult.value;
weightInput.value = weightResult.value;

ageInput.onmousemove = () => {
  ageResult.value = ageInput.value;
};
highInput.onmousemove = () => {
  highResult.value = highInput.value;
};
weightInput.onmousemove = () => {
  weightResult.value = weightInput.value;
};
ageResult.onkeyup = function () {
  ageInput.value = ageResult.value;
};
highResult.onkeyup = function () {
  highInput.value = highResult.value;
};
weightResult.onkeyup = function () {
  weightInput.value = weightResult.value;
};

let menBmr =
  +weightResult.value * 10 +
  6.25 * +highResult.value -
  5 * +ageResult.value +
  5;
let womenBmr =
  +weightResult.value * 10 +
  6.25 * +highResult.value -
  5 * +ageResult.value -
  161;
let cal;
form[0].onsubmit = (event) => {
  event.preventDefault();
  // calc cal >>> a + b + c
  if (genderSelect.value == "1") {
    if (acSelect.value == "1") {
      cal = menBmr * 1.375;
    } else if (acSelect.value == "2") {
      cal = menBmr * 1.55;
    } else if (acSelect.value == "3") {
      cal = menBmr * 1.725;
    } else if (acSelect.value == "4") {
      cal = menBmr * 1.9;
    }
  } else if (genderSelect.value == "2") {
    if (acSelect.value == "1") {
      cal = womenBmr * 1.375;
    } else if (acSelect.value == "2") {
      cal = womenBmr * 1.55;
    } else if (acSelect.value == "3") {
      cal = womenBmr * 1.725;
    } else if (acSelect.value == "4") {
      cal = womenBmr * 1.9;
    }
  }

  cal = Math.round(cal);
  mainSpan.innerHTML = Math.trunc(cal) + " Cal";
  maintainNum.innerHTML = Math.trunc(cal) + " Cal";
  mildNum.innerHTML = Math.trunc(cal * 0.9) + " Cal";
  weightNum.innerHTML = Math.trunc(cal * 0.79) + " Cal";
  extremeNum.innerHTML = Math.trunc(cal * 0.59) + " Cal";

  maintainNum.classList.add("animate");
  mildNum.classList.add("animate");
  weightNum.classList.add("animate");
  extremeNum.classList.add("animate");
};

/* Small Screen icon */
let links = document.querySelectorAll(".link");
let menuIcon = document.querySelector(".menu-icon");
let navBar = document.querySelector(".nav-bar");
menuIcon.onclick = () => {
  navBar.classList.toggle("show");
  for (let i = 0; i <= links.length; i++) {
    links[i].onclick = () => {
      navBar.classList.toggle("show");
    };
  }
};
