document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const confirmMessage = this.dataset.confirm;
            
            if (confirm(confirmMessage)) {
                this.closest('form').submit();
            }
        });
    });
}); 