document.addEventListener('DOMContentLoaded', () => {
    const genre_id = document.querySelector('#genre_id');
    const registered_at = document.querySelector('#registered_at');

    if (genre_id) {
        genre_id.addEventListener('change', selectColor);
        function selectColor() {
            genre_id.style.color = 'initial';
        }
    }

    registered_at.addEventListener('change', dayColor);
    function dayColor() {
        registered_at.style.color = 'initial';
    }
});
