import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Add confirmation dialogs for delete actions
document.addEventListener('DOMContentLoaded', function() {
    // Use event delegation for better reliability
    document.body.addEventListener('click', function(e) {
        // Find the delete link by traversing up from the clicked element
        const deleteLink = e.target.closest('.delete-link');
        
        if (deleteLink) {
            e.preventDefault();
            e.stopPropagation();
            
            // Get confirmation message from data attribute or use default
            const confirmMessage = deleteLink.dataset.confirm || 'Вы уверены?';
            
            if (window.confirm(confirmMessage)) {
                // Find the associated form and submit it
                const formId = `delete-form-${deleteLink.dataset.id}`;
                const form = document.getElementById(formId);
                if (form) {
                    form.submit();
                }
            }
        }
    });
});
