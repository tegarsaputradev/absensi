// Lihat Password
let mmm = document.querySelector(".ppp");
let pwd = document.querySelector(".pwd");

mmm.onclick = function () {
    if (pwd.type === "password") {
        pwd.setAttribute("type", "text");
        mmm.classList.add("hide");
    } else {
        mmm.classList.remove("hide");
        pwd.setAttribute("type", "password");
    }
};
