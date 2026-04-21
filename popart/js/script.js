const imagenes = document.querySelectorAll(".work-item img");
const lightbox = document.getElementById("lightbox");
const imgAmpliada = document.getElementById("img-ampliada");

// abrir imagen
imagenes.forEach(img => {
  img.addEventListener("click", () => {
    lightbox.style.display = "flex";
    imgAmpliada.src = img.src;
  });
});

// cerrar lightbox al clickear fondo
lightbox.addEventListener("click", () => {
  lightbox.style.display = "none";
  imgAmpliada.src = "";
});