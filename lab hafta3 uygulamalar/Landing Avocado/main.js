const tabs = document.querySelectorAll(".tab-link");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", (e) => {
    e.preventDefault();

    // Tüm sekme içeriklerini gizle
    contents.forEach(c => c.classList.remove("active"));

    // Tüm tab linklerin active class'ını kaldır
    tabs.forEach(t => t.classList.remove("active"));

    // Tıklanan tab'ı aktif yap
    const tabId = tab.getAttribute("data-tab");
    document.getElementById(tabId).classList.add("active");
    tab.classList.add("active");
  });
});
