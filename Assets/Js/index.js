const tosignin = document.getElementById("tosignin");
const tologin = document.getElementById("tologin");

const signin = document.getElementById("signin");
const login = document.getElementById("login");


if (tosignin) {
  tosignin.addEventListener("click", () => {
    signin.classList.remove("hidden");
    login.classList.add("hidden");
  });
}

if (tologin) {
  tologin.addEventListener("click", () => {
    login.classList.remove("hidden");
    signin.classList.add("hidden");
  });
}

const links = document.querySelectorAll("a");

function UpdateActiveLink() {
  const currentHash = window.location.hash || "#signin";

  links.forEach((link) => {
    const href = link.getAttribute("href");
    if (!href) return;

    if (href.includes("#")) {
      const linkHash = href.substring(href.indexOf("#"));
      if (currentHash === linkHash) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    }
  });
}

UpdateActiveLink();
window.addEventListener("hashchange", UpdateActiveLink);


const toggleButtons = document.querySelectorAll(".show-pass");

toggleButtons.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const passContainer = btn.closest(".pass-box");
    const pswInput = passContainer ? passContainer.querySelector("input") : null;

    if (pswInput) {
      if (pswInput.type === "password") {
        pswInput.type = "text";
        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1b1b1b"><path d="m644-428-58-58q9-47-27-88t-93-32l-58-58q17-8 34.5-12t37.5-4q75 0 127.5 52.5T660-500q0 20-4 37.5T644-428Zm128 126-58-56q38-29 67.5-63.5T832-500q-50-101-143.5-160.5T480-720q-29 0-57 4t-55 12l-62-62q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302Zm20 246L624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM222-624q-29 26-53 57t-41 67q50 101 143.5 160.5T480-280q20 0 39-2.5t39-5.5l-36-38q-11 3-21 4.5t-21 1.5q-75 0-127.5-52.5T300-500q0-11 1.5-21t4.5-21l-84-82Zm319 93Zm-151 75Z"/></svg>`;
      } else {
        pswInput.type = "password";
        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1b1b1b"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg>`;
      }
    }
  });
});