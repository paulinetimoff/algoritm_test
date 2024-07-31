
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.question-btn').forEach((btn) => {
    btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        btn.nextElementSibling.classList.toggle('hidden');
    });
    });
});
