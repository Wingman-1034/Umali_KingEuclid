const navItems = document.getElementsByClass('nav-item');
const backButton = document.getElementById('back-button');

navItems.forEach(item => {
    item.addEventListener('click', () => {
        backButton.style.display = 'flex';
    });
});
