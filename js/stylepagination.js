const element = document.querySelector(".pagination ul");
const maxItem=9; //blog-item count
let index=1;


let totalPages = 20; //pagination count
let page = 1;  //active index
element.innerHTML = createPagination(totalPages, page);

function createPagination(totalPages, page){
  let liTag = '';
  let active;
  let beforePage = page - 1;
  let afterPage = page + 1;
  if(page > 1){
    liTag += `<li class="btn-prev" onclick="createPagination(totalPages, ${page - 1})"><span><img src="img/prev.png"></li>`;
  }
  if(page > 2){ 
    liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
    if(page > 3){
      liTag += `<li class="dots"><span>...</span></li>`;
    }
  }
 
  if (page == totalPages) {
    beforePage = beforePage - 2;
  } else if (page == totalPages - 1) {
    beforePage = beforePage - 1;
  }
  if (page == 1) {
    afterPage = afterPage + 2;
  } else if (page == 2) {
    afterPage  = afterPage + 1;
  }
  for (var plength = beforePage; plength <= afterPage; plength++) {
    if (plength > totalPages) { 
      continue;
    }
    if (plength == 0) { 
      plength = plength + 1;
    }
    if(page == plength){ 
      active = "active";
    }else{ 
      active = "";
    }
    liTag += `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
  }
  if(page < totalPages - 1){ 
    if(page < totalPages - 2){ 
      liTag += `<li class="dots"><span>...</span></li>`;
    }
    liTag += `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
  }
  if (page < totalPages) { 
    liTag += `<li class="btn-next" onclick="createPagination(totalPages, ${page + 1})"><span><img src="img/next.png"></span></li>`;
  }
  element.innerHTML = liTag; 
  return liTag; 

}

const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navBarLinks = document.getElementsByClassName('navbar')[0]

toggleButton.addEventListener('click', () => {
    navBarLinks.classList.toggle('active')
})

/* 
const blogItems = document.querySelectorAll(".blogs").children;;

 const pagination=Math.ceil(blogItems.length/maxItem);
 console.log(blogItems)


 btn-prev.addEventListener("click",function(){
   index--;
   check();
   showItems();
 })
 btn-next.addEventListener("click",function(){
    index++;
    check();
    showItems();  
 })

 function check(){
      if(index==pagination){
          btn-next.classList.add("disabled");
      }
      else{
        btn-next.classList.remove("disabled");	
      }

      if(index==1){
          btn-prev.classList.add("disabled");
      }
      else{
       btn-prev.classList.remove("disabled");	
      }
 }

 function showItems() {
      for(let i=0;i<blogItems.length; i++){
        blogItems[i].classList.remove("show");
        blogItems[i].classList.add("hide");


         if(i>=(index*maxItem)-maxItem && i<index*maxItem){
            // if i greater than and equal to (index*maxItem)-maxItem;
           // means  (1*8)-8=0 if index=2 then (2*8)-8=8
           blogItems[i].classList.remove("hide");
           blogItems[i].classList.add("show");
         }
         page.innerHTML=index;
      }

          
 }

 window.onload=function(){
     showItems();
     check();
 } */