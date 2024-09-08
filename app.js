
// window.addEventListener('DOMContentLoaded', showform())

let subContainer = document.getElementsByClassName('sub-container')[0];
function showform() {
    subContainer.innerHTML = `
    <div class="cred">
    <div class="head">
    <h1>Login</h1>
    </div>
    <div class="login-form">
    <form>
    <span class="foot">
  
    </span>
    </form>
    <form action="index.html">
    <span class="cred">
    <input type="text" name="" id="1" placeholder="UserName">
    </span>
    <br>
    <span class="cred">
    <input type="password" name="" id="2" placeholder="Password">
    </span>
    <span class="button">
    <button class="forgotPass">Forgot<br>Password</button>
    <input type="submit" class="submitbts" value="Log in">
    </span>
    
    </form>
    </div>
    </div>`;
}
window.addEventListener('DOMContentLoaded', showform());
// console.log(forgotbtn);
let forgotbtn = document.querySelector('.forgotPass');
forgotbtn.addEventListener('click', function () {
    // console.log("hellow");
    subContainer.innerHTML = `<div class="head">
            <h1>Reset Password</h1>
            </div>
            <div class="desc">Reset using Email</div>
            <div class="forms">
                <input type="email" placeholder="Registered Email">
            </div>
            <div class="btns2">
                <button>Send Mail</button>
                <button class="back">Back</button>
            </div>`;
    const backbtn = document.querySelector('.back');
    backbtn.addEventListener('click', function () {
        subContainer.innerHTML = `<div class="head">
    <h1>Login</h1>
    </div>
    <div class="login-form">
    <form action="index.html">
    <span class="foot">
    <p>Don't have an account?<button class="su">Sign Up</button></p>
    </span>
    <span class="cred">
    <input type="text" name="" id="1" placeholder="UserName">
    </span>
    <br>
    <span class="cred">
    <input type="password" name="" id="2" placeholder="Password">
    </span>
    <span class="button">
    <button class="forgotPass">Forgot<br>Password</button>
    <input type="submit" class="submitbts" value="Log in">
    </span>
    
    </form>
    </div>`;
    })
});

//slider

var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

// Javascript for image slider manual navigation
var manualNav = function (manual) {
    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        });
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});

// Javascript for image slider autoplay navigation
var repeat = function (activeClass) {
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
        setTimeout(function () {
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if (slides.length == i) {
                i = 0;
            }
            if (i >= slides.length) {
                return;
            }
            repeater();
        }, 2000);
    }
    repeater();
}
repeat();