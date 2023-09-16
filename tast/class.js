
function change(id) {
  // Hide all tab content
  var tabContents = document.getElementsByClassName('main-content');
  for (var i = 0; i < tabContents.length; i++) {
    tabContents[i].style.display = 'none';
  }

  // Show the selected tab content
  var selectedTab = document.getElementById(id);
  selectedTab.style.display = 'block';
};
window.onload = function () {
change('home'); // Change this to the ID of the default tab content
};
