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
// Get Geometry Dash Statistics
function fetchGDStats(profile, device) {
    const fields = [
        'stars', 'moons', 'secret-coins', 'user-coins', 'total-demon', 'global-rank',
        'classic-auto', 'classic-easy', 'classic-normal', 'classic-hard', 'classic-harder', 'classic-insane', 'classic-daily', 'gauntlet',
        'classic-easy-demon', 'classic-medium-demon', 'classic-hard-demon', 'classic-insane-demon', 'classic-extreme-demon',
        'weekly-demon', 'gauntlet-demon',
        'platformer-auto', 'platformer-easy', 'platformer-normal', 'platformer-hard', 'platformer-harder', 'platformer-insane', 'platformer-daily',
        'platformer-easy-demon', 'platformer-medium-demon', 'platformer-hard-demon', 'platformer-insane-demon', 'platformer-extreme-demon'
    ];
    fields.forEach(idSuffix => {
        const el = document.getElementById(`gd-${device}-${idSuffix}`);
        if (el) el.textContent = '?';
    });
    document.getElementById(`gd-${device}-stats-date`).textContent = 'Getting statistics...';
    fetch(`https://gdbrowser.com/api/profile/${profile}`)
        .then(response => response.json())
        .then(data => {
            const now = new Date();
            const formattedDateTime = `${now.toLocaleDateString('en-US', {
                month: 'long',
                day: 'numeric',
                year: 'numeric'
            })}\n(${now.toLocaleTimeString('en-US', {
                hour: 'numeric',
                minute: '2-digit',
                hour12: true
            })})`;
            const statsFields = {
                'stars': data.stars,
                'moons': data.moons,
                'secret-coins': data.coins,
                'user-coins': data.userCoins,
                'total-demon': data.demons,
                'global-rank': data.rank,
                'classic-auto': data.classicLevelsCompleted.auto,
                'classic-easy': data.classicLevelsCompleted.easy,
                'classic-normal': data.classicLevelsCompleted.normal,
                'classic-hard': data.classicLevelsCompleted.hard,
                'classic-harder': data.classicLevelsCompleted.harder,
                'classic-insane': data.classicLevelsCompleted.insane,
                'classic-daily': data.classicLevelsCompleted.daily,
                'gauntlet': data.classicLevelsCompleted.gauntlet,
                'classic-easy-demon': data.classicDemonsCompleted.easy,
                'classic-medium-demon': data.classicDemonsCompleted.medium,
                'classic-hard-demon': data.classicDemonsCompleted.hard,
                'classic-insane-demon': data.classicDemonsCompleted.insane,
                'classic-extreme-demon': data.classicDemonsCompleted.extreme,
                'weekly-demon': data.classicDemonsCompleted.weekly,
                'gauntlet-demon': data.classicDemonsCompleted.gauntlet,
                'platformer-auto': data.platformerLevelsCompleted.auto,
                'platformer-easy': data.platformerLevelsCompleted.easy,
                'platformer-normal': data.platformerLevelsCompleted.normal,
                'platformer-hard': data.platformerLevelsCompleted.hard,
                'platformer-harder': data.platformerLevelsCompleted.harder,
                'platformer-insane': data.platformerLevelsCompleted.insane,
                'platformer-daily': data.platformerLevelsCompleted.daily,
                'platformer-easy-demon': data.platformerDemonsCompleted.easy,
                'platformer-medium-demon': data.platformerDemonsCompleted.medium,
                'platformer-hard-demon': data.platformerDemonsCompleted.hard,
                'platformer-insane-demon': data.platformerDemonsCompleted.insane,
                'platformer-extreme-demon': data.platformerDemonsCompleted.extreme
            };
            for (const [idSuffix, value] of Object.entries(statsFields)) {
                const field = document.getElementById(`gd-${device}-${idSuffix}`);
                if (field) {
                    field.textContent = typeof value === 'number' ? value.toLocaleString() : value;
                }
            }
            document.getElementById(`gd-${device}-stats-date`).innerHTML = `Last updated: ${formattedDateTime}`;
        })
        .catch(error => console.error('Error:', error));
}