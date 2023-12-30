const tableBodyRow = document.querySelectorAll('.tablec tbody tr')

document.querySelectorAll('.tablec thead th').forEach(function(item, index) {
    new ResizeObserver(function() {
        tableBodyRow.forEach(function(item2) {
            item2.children[index].style.width = item.offsetWidth + 'px'
        })
    }).observe(item)
})

const tableBodyRoww = document.querySelectorAll('.tables tbody tr')

document.querySelectorAll('.tables thead th').forEach(function(items, indexs) {
    new ResizeObserver(function() {
        tableBodyRoww.forEach(function(items2) {
            items2.children[indexs].style.width = items.offsetWidth + 'px'
        })
    }).observe(items)
})