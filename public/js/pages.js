    fetch("header.html")
  .then(res => res.text())
  .then(data => {
    document.getElementById("header").innerHTML = data;

    // 1. Initialize dropdown after header loads
    const dropdownTriggerList = document.querySelectorAll('[data-bs-toggle="dropdown"]');
    dropdownTriggerList.forEach(dropdownTriggerEl => {
      new bootstrap.Dropdown(dropdownTriggerEl);
    });

    // 2. Mark active nav link
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll(".nav-menu li a");
    navLinks.forEach(link => {
      const href = link.getAttribute("href").split("/").pop();
      if (currentPage === href || (currentPage === "" && href === "index.html")) {
        link.parentElement.classList.add("active");
      } else {
        link.parentElement.classList.remove("active");
      }
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const pageTitle = document.getElementById("page-title");
    const pageDesc = document.getElementById("page-desc");

    const pageName = window.location.pathname.split("/").pop().replace(".html", "");

    const contentMap = {
      "about": {
        title: "About Us",
        desc: ""
      },
      "contact": {
        title: "Contact Us",
        desc: ""
      },
      "faq": {
        title: "Frequently Asked Questions",
        desc: ""
      },
      "terms": {
        title: "Terms & Conditions",
        desc: ""
      },
      "privacy": {
        title: "Privacy Policy",
        desc: ""
      }
    };

    if (contentMap[pageName]) {
      pageTitle.innerText = contentMap[pageName].title;
      pageDesc.innerText = contentMap[pageName].desc;
    }
  });


//   Load Breadcrumb
fetch("../components/breadcrumbs.html")
  .then(res => res.text())
  .then(data => {
    document.getElementById("breadcrumb").innerHTML = data;

    //  Now that breadcrumb HTML is loaded, update the title inside it
    const path = window.location.pathname.split("/").pop().replace(".html", "");

    const pageTitles = {
      "about": "About Us",
      "contact": "Contact Us",
      "terms": "Terms & Conditions",
      "privacy": "Privacy Policy",
      "faq": "FAQ",
      "index": "Home"
    };

    const title = pageTitles[path] || path.charAt(0).toUpperCase() + path.slice(1);
    
    // Update both the page H1 and breadcrumb item if they exist
    const h1 = document.getElementById("page-title");
    if (h1) h1.textContent = title;

    const breadcrumbItem = document.querySelector(".breadcrumb-item.active");
    if (breadcrumbItem) breadcrumbItem.textContent = title;
  });

  // Load footer
  fetch("footer.html")
    .then(res => res.text())
    .then(data => {
      document.getElementById("footer").innerHTML = data;
    });
// Login page Dom Section for animation
   function toggle() {
    const container = document.getElementById("Lcontainer");
    container.classList.toggle("sign-in");
    container.classList.toggle("sign-up");
  }

  window.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("Lcontainer");
    if (!container.classList.contains("sign-in") && !container.classList.contains("sign-up")) {
      container.classList.add("sign-in"); // default view
    }
  });

  
