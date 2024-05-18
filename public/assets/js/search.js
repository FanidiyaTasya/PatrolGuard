const searchInput = document.getElementById('search');
const guardRows = document.querySelectorAll('.guard-row');

searchInput.addEventListener('input', function () {
    const searchTerm = this.value.trim().toLowerCase();
    guardRows.forEach(row => {
        const name = row.cells[0].textContent.trim().toLowerCase();
        if (name.includes(searchTerm)) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
});