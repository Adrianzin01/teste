document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.read-more').forEach(button => {
        button.addEventListener('click', () => {
            const description = button.previousElementSibling;
            if (description.classList.contains('expanded')) {
                description.classList.remove('expanded');
                button.textContent = 'Ler mais';
            } else {
                description.classList.add('expanded');
                button.textContent = 'Ler menos';
            }
        });
    });
});