// Date Time Picker
$(function () {
    $.extend(true, $.fn.datetimepicker.defaults, {
        icons: {
            time: "far fa-clock",
            date: "far fa-calendar",
            up: "fas fa-arrow-up",
            down: "fas fa-arrow-down",
            previous: "fas fa-chevron-left",
            next: "fas fa-chevron-right",
            today: "far fa-calendar-check-o",
            clear: "far fa-trash",
            close: "far fa-times",
        },
    });
});
$(function () {
    $(".input-daterange input").datetimepicker({
        format: "DD-MM-YYYY",
    });
});

// Date Range Picker
$(function () {
    $(".date-filter").daterangepicker({
        opens: "left",
        autoUpdateInput: false,
        locale: {
            cancelLabel: "Clear",
        },
    });

    $(".date-filter").on("apply.daterangepicker", function (ev, picker) {
        $(this).val(
            picker.startDate.format("DD MM YYYY") +
                " - " +
                picker.endDate.format("DD MM YYYY")
        );
        $(".dari").val(picker.startDate.format("DD-MM-YYYY"));
        $(".ke").val(picker.endDate.format("DD-MM-YYYY"));
    });

    $(".date-filter").on("cancel.daterangepicker", function (ev, picker) {
        $(this).val("");
    });
});

// Hamburger Menu
const togle = document.getElementById("togle");
const sidebar = document.getElementById("sidebar");
const nav = document.getElementById("nav-menu");
function hamburger_togle() {
    togle.classList.toggle("hamburger-active");
    sidebar.classList.toggle("sidebar-active");
}

document.onclick = function (e) {
    if (e.target.id === "dua") {
        togle.classList.remove("hamburger-active");
        sidebar.classList.remove("sidebar-active");
    }
};
// Sidebar Menu
const drop = document.querySelector(".sidebar-drop");
const dropItem = document.querySelector(".sidebar-drop-items");
drop.addEventListener("click", function () {
    dropItem.classList.toggle("d-none");
});
const drop1 = document.querySelector(".sidebar-drop1");
const dropItem1 = document.querySelector(".sidebar-drop-items1");
drop1.addEventListener("click", function () {
    dropItem1.classList.toggle("d-none");
});
