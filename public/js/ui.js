/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/UI/modal.js ***!
  \**********************************/
var modal_open = document.querySelector('#modal_open');
var modal = document.querySelector('#modal_content');
var button_close = document.querySelector('.modal_close');
console.log(modal_open);
console.log(modal);
console.log(button_close); // イベントを表示

modal_open.addEventListener('click', modalOpen);

function modalOpen() {
  modal.style.display = 'block';
} // バツを押してイベントを閉じる


button_close.addEventListener('click', modalClose);

function modalClose() {
  modal.style.display = 'none';
} // どこをクリックしてもイベントを閉じる


addEventListener('click', outsideClose);

function outsideClose(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}
/******/ })()
;