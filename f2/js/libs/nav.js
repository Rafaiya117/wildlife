const iAmHere = window.location.href;
//alert('This is the current URL: ' + iAmHere);
const anchors = document.querySelectorAll('div a');
anchors.forEach(anchor => {
  if (anchor.href == iAmHere) {anchor.classList.add('active');}
  else {anchor.classList.remove('active'); }
}); 
