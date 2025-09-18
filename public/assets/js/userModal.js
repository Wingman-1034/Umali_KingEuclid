document.addEventListener("DOMContentLoaded", function() {
    const user = document.getElementById("user");
    const modal = document.getElementById("user-menu");

    user.addEventListener("click", function() {
        modal.style.display = "block";
    });

    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});