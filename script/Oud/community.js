let button = document.getElementById("js-soonBtn");
let text = document.getElementById("btn-click");

/*Using an event listener to add a little bit of text when the button is clicked, as to make sure it is not a dead link not doing anything */
button.addEventListener("click", () => {
  text.innerText = "Toch al één idee: Kijk of je huisdier je groenteresten mag! Zo mogen konijnen de schil van een komkommer.";
})