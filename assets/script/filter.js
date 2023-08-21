const filterContainer = document.querySelector(".filter-element");
const recipes = document.querySelectorAll(".element-item");

filterContainer.innerHTML = "";

recipes.forEach((recipe) => {
  if (filterContainer.childElementCount < 12) {
    filterContainer.append(recipe.cloneNode(true));
  }
});

function filteredResult(value) {
  filterContainer.innerHTML = "";
  recipes.forEach((recipe) => {
    if (filterContainer.childElementCount < 12) {
      if (recipe.classList.contains(value)) {
        filterContainer.append(recipe.cloneNode(true));
      }
    }
  });
}
