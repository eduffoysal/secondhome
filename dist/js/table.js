const tableBodyRow = document.querySelectorAll('.table tbody tr')

document.querySelectorAll('.table thead th').forEach(function(item, index) {
    new ResizeObserver(function() {
        tableBodyRow.forEach(function(item2) {
            item2.children[index].style.width = item.offsetWidth + 'px'
        })
    }).observe(item)
})