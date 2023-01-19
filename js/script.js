  
 const galleryItems=document.querySelector(".aboutSlide").children;
 const blog_item= document.querySelector("blog-item");
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const page=document.querySelector(".page-num");
 const maxItem=3;
 let index=1;
  
  const pagination=Math.ceil(galleryItems.length/maxItem);
  console.log(galleryItems)


  prev.addEventListener("click",function(){
    index--;
    check();
    showItems();
  })
  next.addEventListener("click",function(){
  	index++;
  	check();
    showItems();  
  })

  function check(){
  	 if(index==pagination){
  	 	next.classList.add("disabled");
  	 }
  	 else{
  	   next.classList.remove("disabled");	
  	 }

  	 if(index==1){
  	 	prev.classList.add("disabled");
  	 }
  	 else{
  	   prev.classList.remove("disabled");	
  	 }
  }

  function showItems() {
  	 for(let i=0;i<galleryItems.length; i++){
  	 	galleryItems[i].classList.remove("show");
  	 	galleryItems[i].classList.add("hide");


  	    if(i>=(index*maxItem)-maxItem && i<index*maxItem){
  	 	  // if i greater than and equal to (index*maxItem)-maxItem;
  		  // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems[i].classList.remove("hide");
          galleryItems[i].classList.add("show");
  	    }
  	    page.innerHTML=index;
  	 }

  	 	
  }
  function myFunction(index) {
	document.querySelectorAll("#myDropdown")[index].classList.toggle("show");
  }
  
//   // Close the dropdown if the user clicks outside of it
//   window.onclick = function(event) {
// 	if (!event.target.matches('.dropbtn')) {
// 	  var dropdowns = document.getElementsByClassName("dropdown-content");
// 	  var i;
// 	  for (i = 0; i < dropdowns.length; i++) {
// 		var openDropdown = dropdowns[i];
// 		if (openDropdown.classList.contains('show')) {
// 		  openDropdown.classList.remove('show');
// 		}
// 	  }
// 	}
//   }
  
//   window.onload=function(){
//   	showItems();
//   	check();
//   }

