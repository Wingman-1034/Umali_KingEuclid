const backButton = document.getElementById('back-button');
backButton.addEventListener('click', () => {
    const currentPath = window.location.pathname;

    if (currentPath === '/admin-accounts' || currentPath === '/admin-dashboard') {
        window.location.href = '/admin-home'; // always go back to home
    } else {
        window.history.back(); // fallback
    }
});
