document.addEventListener('DOMContentLoaded', () => {
    // Navbar Burger
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
            const target = el.dataset.target;
            const $target = document.getElementById(target);
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
        });
    });
    // Modal
    function openModal($el) {
        $el.classList.add('is-active');
        document.documentElement.classList.add('is-clipped');
    }
    function closeModal($el) {
        $el.classList.remove('is-active');
        const anyActive = document.querySelector('.modal.is-active');
        if (!anyActive) {
            document.documentElement.classList.remove('is-clipped');
        }
    }
    function closeAllModals() {
        (document.querySelectorAll('.modal') || []).forEach(($modal) => {
            closeModal($modal);
        });
    }
    (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
        const modal = $trigger.dataset.target;
        const $target = document.getElementById(modal);
        $trigger.addEventListener('click', () => {
            openModal($target);
        });
    });
    (document.querySelectorAll('.modal-background, .message-header .delete') || []).forEach(($close) => {
        const $target = $close.closest('.modal');
        $close.addEventListener('click', () => {
            closeModal($target);
        });
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === "Escape") {
            closeAllModals();
        }
    });
});
// Navbar Spacing
function updateNavbarSpacing() {
    const vw = window.innerWidth;
    const vh = window.innerHeight;
    console.log(`${vw} ${vh}`);
    let spacing;
    if (vw > 1023) {
        spacing = Math.round(0.1353 * vw - 137.07);
        const navbars = document.getElementsByClassName('navbar-spacing');
        for (let i = 0; i < navbars.length; i++) {
            navbars[i].style.paddingLeft = `${spacing}px`;
            navbars[i].style.paddingRight = `${spacing}px`;
        }
        document.getElementsByClassName('navbar-brand')[0].style.marginLeft = '0px';
        document.getElementsByClassName('navbar-end')[0].style.marginTop = '0px';
    } else {
        document.getElementsByClassName('navbar-brand')[0].style.marginLeft = '50px';
        if (vh > 520) {
            document.getElementsByClassName('navbar-end')[0].style.marginTop = '50px';
        } else if (vh > 480) {
            document.getElementsByClassName('navbar-end')[0].style.marginTop = '20px';
        } else if (vh > 450) {
            document.getElementsByClassName('navbar-end')[0].style.marginTop = '10px';
        } else {
            document.getElementsByClassName('navbar-end')[0].style.marginTop = '0px';
        }
    }
}
window.addEventListener('DOMContentLoaded', updateNavbarSpacing);
window.addEventListener('resize', updateNavbarSpacing);
// Notification
document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        const $notification = $delete.parentNode;
        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });
});