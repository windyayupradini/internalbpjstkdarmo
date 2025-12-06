// script.js: smooth scroll + small UX tweaks
document.addEventListener('DOMContentLoaded', function () {

  /* ---------------------------------------------
      SMOOTH SCROLL (kode lama, tetap dipakai)
  ---------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;

      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.pushState(null, null, this.getAttribute('href'));
    });
  });

  /* ---------------------------------------------
      CLOSE MODAL WHEN BUTTON CLICKED (kode lama)
  ---------------------------------------------- */
  document.querySelectorAll('.modal .btn-primary').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const modal = btn.closest('.modal');
      if (modal) {
        const bs = bootstrap.Modal.getInstance(modal);
        if (bs) bs.hide();
      }
    });
  });

  /* ---------------------------------------------
      NEW FEATURE:
      SHOW / HIDE ANIMATED CONTENT PER SECTION
  ---------------------------------------------- */

  const toggleButtons = document.querySelectorAll('.toggle-btn');

  toggleButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      const targetId = this.dataset.target;
      const content = document.getElementById(targetId);

      if (!content) return;

      // Optional: Tutup section lain jika ingin agar hanya satu terbuka
      document.querySelectorAll('.toggle-content').forEach(box => {
        if (box !== content) {
          box.classList.remove('open');
        }
      });

      // Toggle animasi
      content.classList.toggle('open');

      // Ubah tulisan button
      this.innerText = content.classList.contains('open') ? "Hide" : "Show";
    });
  });

  // Toggle "Selengkapnya" timeline
document.querySelectorAll(".btn-toggle").forEach(btn => {
    btn.addEventListener("click", function() {
        const hiddenText = this.previousElementSibling;

        if (hiddenText.style.display === "block") {
            hiddenText.style.display = "none";
            this.textContent = "Selengkapnya";
        } else {
            hiddenText.style.display = "block";
            this.textContent = "Tutup";
        }
    });
});

});
