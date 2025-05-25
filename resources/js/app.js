import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Add confirmation dialogs for delete actions
document.addEventListener('DOMContentLoaded', function() {
    // Use event delegation for better reliability
    document.body.addEventListener('click', function(e) {
        // Find the delete button by traversing up from the clicked element
        const deleteButton = e.target.closest('.delete-btn');
        
        if (deleteButton) {
            e.preventDefault();
            e.stopPropagation();
            
            // Get confirmation message from data attribute or use default
            const confirmMessage = deleteButton.dataset.confirm || 'Вы уверены?';
            
            if (window.confirm(confirmMessage)) {
                // Find the closest form and submit it
                const form = deleteButton.closest('form');
                if (form) {
                    form.submit();
                }
            }
        }
    });
});
