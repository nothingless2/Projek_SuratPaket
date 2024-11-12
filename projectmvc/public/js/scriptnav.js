document.addEventListener("DOMContentLoaded", function() {
    const body = document.querySelector("body");
    const darkLight = document.querySelector("#darkLight");
    const sidebar = document.querySelector(".sidebar");
    const sidebarOpen = document.querySelector("#sidebarOpen");
    const expandSidebar = document.querySelector(".expand_sidebar");
    const collapseSidebar = document.querySelector(".collapse_sidebar");
    const submenuItems = document.querySelectorAll(".submenu_item");
  
  
  
    // Ensure the sidebar starts in a closed and hoverable state
    sidebar.classList.add("hoverable", "close");
  
    sidebarOpen.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
  
    expandSidebar.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });
  
    collapseSidebar.addEventListener("click", () => {
        sidebar.classList.add("close");
    });
  
    sidebar.addEventListener("mouseenter", () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.remove("close");
        }
    });
  
    sidebar.addEventListener("mouseleave", () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.add("close");
        }
    });
  
    darkLight.addEventListener("click", () => {
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            darkLight.classList.replace("bx-sun", "bx-moon");
        } else {
            darkLight.classList.replace("bx-moon", "bx-sun");
        }
    });
  
    submenuItems.forEach((item, index) => {
        item.addEventListener("click", () => {
            item.classList.toggle("show_submenu");
            submenuItems.forEach((item2, index2) => {
                if (index !== index2) {
                    item2.classList.remove("show_submenu");
                }
            });
        });
    });
  
  
    if (window.innerWidth < 768) {
        sidebar.classList.add("close");
    } else {
        sidebar.classList.add("close");
    }
  });