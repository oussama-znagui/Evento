// start: Popper

document.addEventListener("click", function (e) {
    const toggle = e.target.closest(".dropdown-toggle");
    const menu = e.target.closest(".dropdown-menu");
    if (toggle) {
        const menuEl = toggle
            .closest(".dropdown")
            .querySelector(".dropdown-menu");
        const popperId = menuEl.dataset.popperId;
        if (menuEl.classList.contains("hidden")) {
            hideDropdown();
            menuEl.classList.remove("hidden");
            showPopper(popperId);
        } else {
            menuEl.classList.add("hidden");
            hidePopper(popperId);
        }
    } else if (!menu) {
        hideDropdown();
    }
});

function hideDropdown() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.add("hidden");
    });
}
function showPopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: true },
            ],
        };
    });
    popperInstance[popperId].update();
}
function hidePopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: false },
            ],
        };
    });
}
// end: Popper
