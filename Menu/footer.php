<footer class="text-white" style="background-color: #374c4a;">
  <div class="container px-4 px-lg-5 py-2">
    <div class=" row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="small text-center fst-italic text-white">Copyright &copy; kampuskuaja.ac.id</div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
  // agar background slide berubah sesuai dengan pilihan beasiswa
  const jenisBeasiswaSelect = document.getElementById("pilihan");
  const slideSlide = document.getElementById("slideSlide");
  const gantiSlide = document.getElementById("gantiSlide");
  jenisBeasiswaSelect.addEventListener("change", function() {
    const selectedValue = jenisBeasiswaSelect.value;
    if (selectedValue === "Beasiswa Akademik") {
      slideSlide.style.backgroundImage = "url(../assets/img/akademik_slide.jpg)";
      slideSlide.style.backgroundSize = "cover";
      slideSlide.style.backgroundPosition = "center center";
      slideSlide.style.height = "100%";
      slideSlide.classList.add("bg");
      slideSlide.classList.add("pt-5");
      slideSlide.classList.add("pb-5");
      // hapus semua class dan style dari id akademikSlide
      gantiSlide.classList.remove("bg");
      gantiSlide.classList.remove("pt-5");
      gantiSlide.classList.remove("pb-5");
      gantiSlide.style.backgroundImage = "";
      gantiSlide.style.backgroundSize = "";
      gantiSlide.style.backgroundPosition = "";
      gantiSlide.style.height = "";
    } else if (selectedValue === "Beasiswa Non Akademik") {
      slideSlide.style.backgroundImage = "url(../assets/img/nonakademik_slide.jpg)";
      slideSlide.style.backgroundSize = "cover";
      slideSlide.style.backgroundPosition = "center center";
      slideSlide.style.height = "100%";
      slideSlide.classList.add("bg");
      slideSlide.classList.add("pt-5");
      slideSlide.classList.add("pb-5");
      // hapus semua class dan style dari id akademikSlide
      gantiSlide.classList.remove("bg");
      gantiSlide.classList.remove("pt-5");
      gantiSlide.classList.remove("pb-5");
      gantiSlide.style.backgroundImage = "";
      gantiSlide.style.backgroundSize = "";
      gantiSlide.style.backgroundPosition = "";
      gantiSlide.style.height = "";
    } else if (selectedValue === "Beasiswa Penelitian") {
      slideSlide.style.backgroundImage = "url(../assets/img/penelitian_slide.jpg)";
      slideSlide.style.backgroundSize = "cover";
      slideSlide.style.backgroundPosition = "center center";
      slideSlide.style.height = "100%";
      slideSlide.classList.add("bg");
      slideSlide.classList.add("pt-5");
      slideSlide.classList.add("pb-5");
      // hapus semua class dan style dari id akademikSlide
      gantiSlide.classList.remove("bg");
      gantiSlide.classList.remove("pt-5");
      gantiSlide.classList.remove("pb-5");
      gantiSlide.style.backgroundImage = "";
      gantiSlide.style.backgroundSize = "";
      gantiSlide.style.backgroundPosition = "";
      gantiSlide.style.height = "";
    }

  });
</script>
</body>

</html>