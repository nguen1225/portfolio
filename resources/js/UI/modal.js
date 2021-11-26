document.addEventListener('DOMContentLoaded', () => {

const modal_open = document.querySelector('#modal_open');
const modal = document.querySelector('#modal_content');
const button_close = document.querySelector('.modal_close');

console.log(modal_open);
console.log(modal);
console.log(button_close);

// 表示
modal_open.addEventListener('click', modalOpen);
function modalOpen() {
    modal.style.display = 'block';
}

// バリデーションに引っ掛かったら
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
});





