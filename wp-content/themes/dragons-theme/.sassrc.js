const sass = require('sass');
const compressed = sass.compile("assets/css/main.scss", {
   style: "compressed", "includePaths": [
      "node_modules"
   ]
});
console.log("compressed.css");