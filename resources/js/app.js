import './bootstrap';

import Alpine from 'alpinejs';

import ujs from '@rails/ujs';
ujs.start();

window.Alpine = Alpine;

Alpine.start();

// Add confirmation dialogs for delete actions
document.addEventListener('DOMContentLoaded', function() {
    // Use event delegation for better reliability
    document.body.addEventListener('click', function(e) {
        // Find the delete button by traversing up from the clicked element
        const deleteElement = e.target.closest('.delete-btn') || 
                            e.target.closest('[data-method="delete"]') || 
                            e.target.closest('a[href*="delete"]');
        
        if (deleteElement) {
            e.preventDefault();
            e.stopPropagation();
            
            // Get confirmation message from data attribute or use default
            const confirmMessage = deleteElement.dataset.confirm || 'Вы уверены?';
            
            if (window.confirm(confirmMessage)) {
                // If it's a Rails UJS delete link
                if (deleteElement.hasAttribute('data-method')) {
                    // Let Rails UJS handle it
                    return true;
                }
                
                // For regular delete buttons/forms
                const form = deleteElement.closest('form');
                if (form) {
                    form.submit();
                }
            }
        }
    });
});
