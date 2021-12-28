document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#form');
    const submit_button = document.querySelector('.submit_button');
    const wait = document.querySelector('.wait');

    form.addEventListener('submit', doubleClick);
    function doubleClick() {
        submit_button.style.display = 'none';
        wait.style.display = 'block';
    }

});

