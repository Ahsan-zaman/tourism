require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//Show and hide hamburguer menu in small screens
const menu = document.getElementById("menu");
const ulMenu = document.getElementById("ulMenu");

function menuToggle() {
    menu.classList.toggle("navbar-show");
}

// Browser resize listener
window.addEventListener("resize", menuResize);

// Rezise menu if user changing the width with responsive menu opened
function menuResize() {
    // first get the size from the window
    const window_size = window.innerWidth || document.body.clientWidth;
    if (window_size > 640) {
        menu.classList.remove("navbar-show");
    }
}

/**
 * Theme: Inspiro - Portfolio Template
 * Author: Myrathemes
 * Gallery Js
 */

var Shuffle = window.Shuffle;

class Demo {
    constructor(element) {
        this.element = element;
        this.shuffle = new Shuffle(element, {
            itemSelector: ".picture-item",
        });

        // Log events.
        this.addShuffleEventListeners();
        this._activeFilters = [];
        this.addFilterButtons();
    }

    /**
     * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
     * for them like you normally would (with jQuery for example).
     */
    addShuffleEventListeners() {
        this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {});
        this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {});
    }

    addFilterButtons() {
        const options = document.querySelector(".filter-options");
        if (!options) {
            return;
        }

        const filterButtons = Array.from(options.children);
        const onClick = this._handleFilterClick.bind(this);
        filterButtons.forEach((button) => {
            button.addEventListener("click", onClick, false);
        });
    }

    _handleFilterClick(evt) {
        const btn = evt.currentTarget;
        const isActive = btn.classList.contains("active");
        const btnGroup = btn.getAttribute("data-group");

        this._removeActiveClassFromChildren(btn.parentNode);

        let filterGroup;
        if (isActive) {
            btn.classList.remove("active");
            filterGroup = Shuffle.ALL_ITEMS;
        } else {
            btn.classList.add("active");
            filterGroup = btnGroup;
        }

        this.shuffle.filter(filterGroup);
    }

    _removeActiveClassFromChildren(parent) {
        const { children } = parent;
        for (let i = children.length - 1; i >= 0; i--) {
            children[i].classList.remove("active");
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    window.demo = new Demo(document.getElementById("grid"));
});