
var iconList = document.getElementsByClassName('fa-plus');
// var iconArray = Array.from(iconList);

for (i = 0; i < iconList.length; i++) {
  iconList[i].addEventListener("click", function() {
	  // Toggle Menu Class to Expand
	  this.parentElement.nextElementSibling.nextElementSibling.classList.toggle("collapse");
	  // Toggle Icon
	  this.classList.toggle('fa-plus')
	  this.classList.toggle('fa-minus');
  });
}
