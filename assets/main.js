document.addEventListener('DOMContentLoaded', () => {
    let select = document.querySelectorAll('select');
    if(select) {
        select.forEach(el => {
            let attrValue = el.getAttribute('data-selected');
            let options = el.querySelectorAll('option');
            if(options) {
                options.forEach(item => {
                    if(item.value === attrValue) {
                        item.setAttribute('selected','')
                    }
                })
            }
        })
    }

    let pagination = document.querySelectorAll('.pagination');
    if(pagination) {
        pagination.forEach(el => {
            let params = new URLSearchParams(document.location.search);
            let pageNumber;
            if(params) {
                pageNumber = params.get('page');
            }
            let items = el.querySelectorAll('.pagination-item');
            if(items) {
                items.forEach(item => {
                    if(pageNumber != undefined && item.getAttribute('data-page') === pageNumber) {
                        item.classList.add('active');
                    }
                })
            }
        })
    }
});