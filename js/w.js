const items = document.querySelectorAll(".dropItems");
const dropimg = document.querySelectorAll(".dropimg");
const subdropimg = document.querySelectorAll(".subdropimg");
const subdropitems = document.querySelectorAll(".subDropItems");
const subsubitems = document.querySelectorAll(".subsubItems");
const subsubimg = document.querySelectorAll(".subsubimg");

function myFunction(index) {
    if(items[index].style.display == 'none'){
        items[index].style.display = 'block';
        dropimg[index].style.transform = 'rotate(0deg)';
    }else {
        items[index].style.display = 'none';
        dropimg[index].style.transform = 'rotate(-90deg)';
    }
}
function subDrop(index) {
    if(subdropitems[index].style.display == 'none'){
        subdropitems[index].style.display = 'block';
        subdropimg[index].style.transform = 'rotate(0deg)';
    }else {
        subdropitems[index].style.display = 'none';
        subdropimg[index].style.transform = 'rotate(-90deg)';
    }
}
function subsubDrop(index) {
    if(subsubitems[index].style.display == 'none'){
        subsubitems[index].style.display = 'block';
        subsubimg[index].style.transform = 'rotate(0deg)';
    }else {
        subsubitems[index].style.display = 'none';
        subsubimg[index].style.transform = 'rotate(-90deg)';
    }
}