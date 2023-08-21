const playBtn = document.getElementById("play");
const video = document.getElementById("video");
const progressbar = document.getElementById("progressbar");
const timestamp = document.getElementById("timestamp");

//------------------------------------------------------------------------
function toggleVideoStatus() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}

function updatePlayIcon() {
  if (video.paused) {
    playBtn.innerHTML = '<i class="fas fa-play"></i>';
  } else {
    playBtn.innerHTML = '<i class="fas fa-pause"></i>';
  }
}

function stopVideo() {
  video.currentTime = 0;
  video.pause();
}

function updateProgressbar() {
  progressbar.value = (video.currentTime * 100) / video.duration;

  //set the time
  let min = Math.floor(video.currentTime / 60);
  let sec = Math.floor(video.currentTime - min * 60);
  if (min < 10) {
    min = "0" + String(min);
  }
  if (sec < 10) {
    sec = "0" + String(sec);
  }
  timestamp.innerText = `${min}:${sec}`;
}

function dragProgressbar() {
  video.currentTime = (+progressbar.value * video.duration) / 100;
}
//------------------------------------------------------------------------

playBtn.addEventListener("click", toggleVideoStatus);
video.addEventListener("click", toggleVideoStatus);

video.addEventListener("pause", updatePlayIcon);
video.addEventListener("play", updatePlayIcon);

video.addEventListener("timeupdate", updateProgressbar);
progressbar.addEventListener("change", dragProgressbar);

// $('input[type="range"]').change(function () {
//   var val =
//     ($(this).val() - $(this).attr("min")) /
//     ($(this).attr("max") - $(this).attr("min"));

//   $(this).css(
//     "background",
//     "-webkit-gradient(linear, left top, right top, " +
//       "color-stop(" +
//       val +
//       ", #bffa2e), " +
//       "color-stop(" +
//       val +
//       ", rgba(255, 255, 255, 0.3))" +
//       ")"
//   );
// });

// let filterForm = document.getElementById("filterby");

// filterForm.addEventListener("submit", (e) => {
//   e.preventDefault();
// });

// // filtering

// // fetch data

// async function filterRecipe() {
//   const response = await fetch(
//     "http://localhost/wordpress/wp-json/wp/v2/recipe"
//   );
//   const recipe = await response.json();
//   console.log(recipe);
// }
