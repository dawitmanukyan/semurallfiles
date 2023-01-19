const search = document.getElementById("search");
const searchBox = document.getElementById("search-box");
const closeSearch = document.getElementById("close-search")


const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navBarLinks = document.getElementsByClassName("navbar")[0];
const searchInput = document.getElementById("search-input");
const line = document.getElementById("line");
const heart_icon = document.getElementById("heart_icon");
const logo = document.getElementById("logo");
const navbar = document.getElementById("navbar");
const call = document.getElementById("call");
const search_active = document.getElementById("search-active");
const header = document.getElementById("header");
const search_icon_active=document.getElementById("search_icon-active");


search.addEventListener('click', function() {
  searchBox.classList.remove('hidden')
});

closeSearch.addEventListener('click', function() {
  searchBox.classList.add('hidden')
});

toggleButton.addEventListener("click", () => {
  navBarLinks.classList.toggle("active");
});

function toggleNav(x) {
  x.classList.toggle("change");
}
