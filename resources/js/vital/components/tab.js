document.addEventListener('DOMContentLoaded', () => {
    const tabTriggers = document.querySelectorAll('.trigger');
    const tabTargets = document.querySelectorAll('.target');

    tabTriggers.forEach(tabTrigger => {
        tabTrigger.addEventListener('click', (e) => {
            let currentMenu = e.currentTarget;
            let currentContent = document.getElementById(currentMenu.dataset.id);

            tabTriggers.forEach(tabTrigger => {
                tabTrigger.classList.remove('is-active');
            });

            currentMenu.classList.add('is-active');

            tabTargets.forEach(tabTarget => {
                tabTarget.classList.remove('is-active');
            });

            if(currentContent !== null) {
                currentContent.classList.add('is-active');
            }
        });
    });
});

