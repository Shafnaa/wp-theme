var recipes = new wp.api.collections.Recipe();
recipes.fetch({ data: { per_page: 12 } });

console.log(recipes);
