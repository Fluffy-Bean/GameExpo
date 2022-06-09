document.querySelectorAll(".gallery div img").forEach(image =>{
  image.onclick = () =>{
    document.querySelector(".fullScreenImage").style.display= "block";
    document.querySelector(".fullScreenImage img").src = image.getAttribute("src");

    document.querySelector("html").style.overflow= "hidden";
  }
});

document.querySelector(".fullScreenImage span").onclick = () =>{
  document.querySelector(".fullScreenImage").style.display= "none";

  document.querySelector("html").style.overflow= "auto";
}
