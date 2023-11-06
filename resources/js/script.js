function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollToTopBtn").style.display = "none";
  }
}

function openModal(project) {
  var modal = document.getElementById("projectModal");
  var modalImg = document.getElementById("modalImage");
  modal.style.display = "block";
  modalImg.src = project + ".jpg"; // Ganti dengan nama file proyek Anda
}

function closeModal() {
  var modal = document.getElementById("projectModal");
  modal.style.display = "none";
}
