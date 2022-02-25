/* cel mask */

const cel = document.querySelector("#cell");


cel.addEventListener("keydown", (e) => {
  let celInputValue = e.target.value;
  
  celInputValue = celInputValue.replace(/\D/g, "");
  celInputValue = celInputValue.replace(/(^\d{2})(\d)/, "($1) $2");
  celInputValue = celInputValue.replace(/(\d{5})(\d{4}$)/, "$1-$2");
  
  e.target.value = celInputValue;
});