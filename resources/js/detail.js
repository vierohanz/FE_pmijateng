import "flowbite";

const bounceMeeting = document.getElementById("bounceMeeting");
bounceMeeting.addEventListener("scroll", () => {
    const maxScrollLeft = bounceMeeting.scrollWidth - bounceMeeting.clientWidth;
    const currentScrollLeft = bounceMeeting.scrollLeft;
    bounceMeeting.classList.remove("bounce-left", "bounce-right");
    if (currentScrollLeft === 0) {
        bounceMeeting.classList.add("bounce-left");
    }
    if (currentScrollLeft >= maxScrollLeft) {
        bounceMeeting.classList.add("bounce-right");
    }
});
