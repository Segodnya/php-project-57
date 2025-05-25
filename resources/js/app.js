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
        // Find the closest delete button or its child icon
        const deleteBtn = e.target.closest('.delete-btn') || e.target.closest('.delete-btn i');
        if (deleteBtn) {
            e.preventDefault();
            e.stopPropagation();
            
            const form = deleteBtn.closest('.delete-form');
            const confirmMessage = deleteBtn.dataset.confirm || (form && form.querySelector('.delete-btn').dataset.confirm);
            
            if (confirmMessage && window.confirm(confirmMessage)) {
                if (form) {
                    form.submit();
                }
            }
        }
    });
});
