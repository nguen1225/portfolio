document.addEventListener('DOMContentLoaded', () => {
    const today = new Date();
    const get_date = new Date(today.getFullYear(), today.getMonth(), 1);
    const get_prev = document.querySelectorAll('#prev')
    const get_next = document.querySelectorAll('#next')

    // 前の月表示
    get_prev.forEach(item => {
        item.addEventListener('click', prev);
        function prev(){
            get_date.setMonth(get_date.getMonth() - 1);
            showProcess(get_date);
        }
    });

    // 次の月表示
    get_next.forEach(item => {
        item.addEventListener('click', next);
        function next(){
            get_date.setMonth(get_date.getMonth() + 1);
            showProcess(get_date);
        }
    });

    const year = today.getFullYear();
    const month = today.getMonth();
    const get_class = document.querySelectorAll('#month')
    get_class.forEach(item => {
        item.innerHTML = year + "年 " + (month + 1) + "月";
        item.setAttribute('value', year + "/" + (month + 1));
    });

    // ボタンをクリックで切り替え
    function showProcess(date) {
        const year = date.getFullYear();
        const month = date.getMonth();
        const get_class = document.querySelectorAll('#month')
        get_class.forEach(item => {
            item.innerHTML = year + "年 " + (month + 1) + "月";
            item.setAttribute('value', year + "/" + (month + 1));
        });
    }
})
