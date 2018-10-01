var mainDiv = document.createElement('div'),
  phrase = document.createElement('p'),
  list = document.createElement('ul'),
  listArray[3],
  pList[3] = {
    "JavaScript",
    "JScript",
    "ActionScript",
    "EX4"
  };

mainDiv.id = "divTP2";
phrase.createTextNode("Languages basés sur ECMAScript :");

for (var i = 0; i < 4; i++) {
  listArray[i] = document.createElement('li');
  listArray[i].createTextNode(pList[i]);
}

mainDiv.appendChild(phrase);
document.body.appendChild(mainDiv);
