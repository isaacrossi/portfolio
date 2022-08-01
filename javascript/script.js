/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

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
