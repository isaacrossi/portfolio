/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 * 
 */

//keen slider
var slider = new KeenSlider("#my-keen-slider", {
  loop: true,
  mode: "free",
  slides: {
    perView: 3,
    spacing: 16,
  },
  breakpoints: {
    '(max-width: 780px)': {
      slides: {
        perView: 2,
        spacing: 16,
      },
    },
  }  
})

const filterPosts = document.querySelector('p.filter-posts')
const arrow = filterPosts.querySelector("span")
const categories = document.querySelector("div.categories")

filterPosts.addEventListener("click", function() {
  if (categories.classList.contains("hidden")) {
    arrow.style.transform = "rotate(180deg)"
    categories.classList.remove("hidden")
  } else {
    categories.classList.add("hidden")
    arrow.style.transform = "rotate(0deg)"
  }
})




