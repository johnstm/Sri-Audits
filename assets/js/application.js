let isIconClicked = false ;
let activeAccordion = null ;
let subtext = null ;
let plusicon = null ;

let activeCard = null ;


let cardAccordions = document.getElementsByClassName('sa__cardexpand'); 
let cardContents = document.getElementsByClassName('sa__card-contents')



function hamBurger(x , y) {
    // x.firstElementChild.classList.toggle("change");
    document.getElementById(`${y}`).classList.toggle('change');
    x.classList.toggle("change");
    openCloseMenu();
}

// function closeSideBar(){
//     let x = document.getElementById('hamburgerMenu');
//     hamBurger(x) ;
// }

function openCloseMenu(){
     isIconClicked = !isIconClicked ;

     if(isIconClicked){
       document.getElementById('mobilemenu').classList.add('sa-header__sidebar--active');
     }else{
       document.getElementById('mobilemenu').classList.remove('sa-header__sidebar--active');
    }
}


// accordion open statements
function repeat1(){
  
  activeAccordion.style.marginTop = '0px' ;
  plusicon.style.marginTop='11px';
  subtext.classList.remove('d-none');
  plusicon.classList.add('sa__plusicon--tilt');
  contact.classList.remove('d-none');
}


//accordion close statements
function repeat2(){

  activeAccordion.style.marginTop = '0px' ;
  plusicon.style.marginTop='8px';
  subtext.classList.add('d-none');
  plusicon.classList.remove('sa__plusicon--tilt') ;
  contact.classList.add('d-none');
}

function accordion_active(e){
    //  console.log({plusicon});
    if(activeAccordion == null ){
         activeAccordion = document.getElementById(`layer-${e}`);
         subtext = document.getElementById(`subtext-${e}`) ;
         plusicon = document.getElementById(`plusicon-${e}`);
         contact=document.querySelector(`#layer-${e} .sa__service-accordion a `);
         repeat1();
    }

    else{
        if(activeAccordion == document.getElementById(`layer-${e}`)){

          if(plusicon.style.marginTop == '8px'){
        
            repeat1();  

          }else{
            repeat2();
          }
          

        }else{

          repeat2();
    
          activeAccordion =  document.getElementById(`layer-${e}`);
          subtext = document.getElementById(`subtext-${e}`) ;
          plusicon = document.getElementById(`plusicon-${e}`);
    
          repeat1();

        }
    }
  
}

function openCard(e){
   let path = e.path ;
   closeCardContents(); 

   for(let i = 0 ; i < path.length ;i++){
    if(path[i].className == 'sa__card-front'){
        path[i].nextElementSibling.classList.remove('d-none'); 
        path[i].classList.add('d-none');
    }
   }

}

function closeCardContents(){
  for(let i = 0 ;i < cardContents.length ;i++){
     cardContents[i].classList.add('d-none');
     cardContents[i].parentElement.classList.remove('d-none');
  }
}


window.addEventListener('DOMContentLoaded' ,()=>{
  for(let i = 0 ; i < cardAccordions.length ;i++){
    cardAccordions[i].addEventListener('click' , openCard);
  } ;
})

  



