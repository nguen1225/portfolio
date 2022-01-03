document.addEventListener('DOMContentLoaded', () => {
    const modal_open = document.querySelector('#modal_open');
    const modal = document.querySelector('#modal_content');
    const button_close = document.querySelector('.modal_close');

    const dashboard_modal_open = document.querySelector('#dashboard_modal_open');
    const dashboard_modal = document.querySelector('#dashboard_modal_content');
    const dashboard_button_close = document.querySelector('.dashboard_modal_close');

    if (modal) {
        // 表示
        modal_open.addEventListener('click', modalOpen);
        function modalOpen() {
            modal.style.display = 'block';
        }

        // バリデーションに引っ掛かったら表示
        if(document.querySelector('.error')) {
            modalOpen();
        }

        // 閉じる
        button_close.addEventListener('click', modalClose);
        function modalClose() {
            location.reload();
        }

        // どこをクリックしてもイベントを閉じる
        addEventListener('click', outsideClose);
        function outsideClose(e) {
            if(e.target == modal) {
                location.reload();
            }
        }
    }

    if (dashboard_modal) {
        // 表示
        dashboard_modal_open.addEventListener('click', dashboard_modalOpen);
        function dashboard_modalOpen() {
            dashboard_modal.style.display = 'block';
            dashboard_modal_open.style.display = 'none';
        }

        // バリデーションに引っ掛かったら表示
        if(document.querySelector('.error')) {
            dashboard_modalOpen();
        }

        // 閉じる
        dashboard_button_close.addEventListener('click', dashboard_modalClose);
        function dashboard_modalClose() {
            dashboard_modal.style.display = 'none';
            dashboard_modal_open.style.display = 'flex';
        }

        // どこをクリックしてもイベントを閉じる
        addEventListener('click', dashboard_outsideClose);
        function dashboard_outsideClose(e) {
            if(e.target == dashboard_modal) {
                dashboard_modal.style.display = 'none';
                dashboard_modal_open.style.display = 'flex';
            }
        }
    }
});





