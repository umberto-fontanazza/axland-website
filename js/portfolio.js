var foto = document.getElementById("fotoDiv");
var video = document.getElementById("videoDiv");
var btnFoto = document.querySelector(".btnFoto");
var btnVideo = document.querySelector(".btnVideo");
var textFoto = document.getElementById("textPortfolioFoto");
var textVideo = document.getElementById("textPortfolioVideo");

btnFoto.addEventListener("click", () => {
  video.style.display = "none";
  foto.style.display = "block";
  btnFoto.classList.remove("noActiveBtn");
  btnFoto.classList.add("activeBtn");
  btnVideo.classList.add("noActiveBtn");
  textVideo.style.display = "none";
  textFoto.style.display = "block";
});
btnVideo.addEventListener("click", () => {
  foto.style.display = "none";
  video.style.display = "block";
  btnVideo.classList.remove("noActiveBtn");
  btnVideo.classList.add("activeBtn");
  btnFoto.classList.add("noActiveBtn");
  textFoto.style.display = "none";
  textVideo.style.display = "block";
});
