document.addEventListener("DOMContentLoaded", function() {
    const profileIcon = document.querySelector("#profileIcon");
    const profilePopup = document.querySelector("#profilePopup");

    profileIcon.addEventListener("click", function(event) {
        event.stopPropagation();
        profilePopup.style.display = profilePopup.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function(event) {
        if (!profileIcon.contains(event.target) && !profilePopup.contains(event.target)) {
            profilePopup.style.display = "none";
        }
    });
});
