let button = document.getElementById("js-soonBtn");
let text = document.getElementById("btn-click");
let ideas = [
  "Kijk of je huisdier je groenteresten mag! Zo mogen konijnen de schil van een komkommer", 
  "Door 1/10e uienschillen te mixen met 9/10e water, kan je planten beschermen tegen schimmels.", 
  "Van veel groenteresten kan je compost maken.", 
  "Je kan bananenschillen gebruiken om schoenen te poetsen!"
  ];



// Creating a random Number to use on the array.
let randomNum = Math.floor(Math.random() * 4);


// Using an event listener to listen when the button is clicked
button.addEventListener("click", () => {
  // When the button is clicked, the text will be changed into an idea from the array. This will be randomized with the random number, so every time the button will be pressed after a page reload will give a random idea.
  text.innerText = `Toch al één idee: ${ideas[randomNum]}`;

  // Changing the button text from 'Coming soon'.
  button.innerText = "Verassing, toch al een idee!"
});

