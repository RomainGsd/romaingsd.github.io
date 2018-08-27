var query = document.querySelector('h1'),
    queryAll = document.querySelectorAll('h1');

alert(query.innerHTML);

alert("Number of elements : " + queryAll.length);
for (var i = 0, c = queryAll.length; i < c; i++) {
  alert("Element n°" + (i+1) + " : " + queryAll[i].innerHTML);
}
