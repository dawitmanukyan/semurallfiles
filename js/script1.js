let assortmentMenu = {
    "Տանիքի ծածկեր" : ["Կղմինդր", "Տանիքը համալրող դետալներ", "Պրոֆնաստիլ"],
    "Ցանցեր" : ["Ցանկապատի ցանց", "Դրոբ ցնաց", "Զոդված ցանց", "Ցանց վեցնակյուն", "Ցանկապատի դեկորատիվ ցանց", "Փշալար", "Պլաստիկ ցանցեր", "Բեկոային ցանց"],
    "Պրոֆիլներ" : ["Ամրացնող դետալներ", "Գիպսաստվարաթղթային պրոֆիլ", "Դուռ-պատուհանների ցինկապատ ներդիր պրոֆիլներ", "ուղղորդիչ", "պատի անկյունակ"],
    "Հարթ և ձևավոր թիթեղներ" : ["Ցինկապատ թիթեղ գլանափաթեթով", "Ցինկապատ թիթեղ գլանափաթեթով՝ լաքաներկային ծածկույթով", "Ցինակապատ հարթ թիթեղ", "Գունավոր հարթ թիթեղ", "Սև հարթ թիթեղ", "Պողպատյա ձևավոր թիթեղ", "Պողպատյա ռելիեֆային թիթեղ", "Բուրգ", "Կվադրո", "Տրիո", "Ալյումինե կվինտետ"],
    "Պողպատյա ապրանքներ" : ["Քառանկյուն և կլոր խողովակ", "Պողպատյա ժապավեն", "Պողպատյա անկյունակ", "Քառանկյուն և կլոր ձողեր"],
    "Այլ Ապրանքներ" : ["Ապակե բամբակ", "Ապակե մանրաթել", "Բահ", "Բետոնի մեխ", "Գիպսաստվարաթղթի պտուտակ", "Գիպսաստվարաթղթի սալիկ", "Դույլ", "Հերմետիկ նյութեր", "Հղկող և կտրող սկավառակներ", "Բանվորական ձեռնոց", "Ճաքի կպչուն ժապավեն", "Մեխ", "Ներկեր և հարակից ապրանքներ", "Տախտակ", "Տանիքի Պտուտակ", "Փրփրապլաստ"] 
} 

let assortmentSubMenu = {
    "Կղմինդր" : ["Բանգա", "Դասական", "Կասկադ", "Կասկադ Պրոֆիլ", "Մոնտերեյ", "Ֆիներա", "Զիպ Պրոֆիլ"],
    "Տանիքը համալրող դետալներ" : ["Տանիքը համալրող ուղղանկյուն դետալներ", "ձնարգել", "տանիքը համալրող կիսակլոր դետալներ", "ոչ ստանդարտ արտադրանք"],
    "Պրոֆնաստիլ" : ["սպ-10", "կպ-10", "կպ-18", "կպ-21", "կպ-25", "կպ-35", "կպ-45", "կպ-60"],
    "Ցանկապատի ցանց" : ["Ցանկապատի պողպատյա ցանց", "Ցանկապատի ցինկապատ ցանց", "Ցանկապատի պվք ցանկ"],
    "Զոդված ցանց" : ["Զոդված ցանց ակոսավոր մետաղալորով", "Զոդված ցանց ցինկապատ մետաղալարով", "Զոդված ցանց պվք մետաղալարով"],
    "Պլաստիկ ցանցեր" : ["Պլաստիկ ցանց դմ", "Պլաստիկ ցանց ֆմ", "Պլաստիկ ցանց գսհ", "Պլաստիկ ցանց գղ", "Պլաստիկ ցանց հմ", "Պլաստիկ ցանց ինս", "Պլաստիկ ցանց օմ", "Պլաստիկ ցանց պմ84", "Պլաստիկ ցանց սք"],
    "Ամրացնող դետալներ" : ["Կախիչ", "Կռաբ", "Կցորդ", "Չիբուր"],
    "Գիպսաստվարաթղթային պրոֆիլ" : ["f-47-g-60", "c-50-c-100", "u-21-u-100"]
}

const assortment_menu = document.getElementById("assortment-menu");
let emptyStr = "";

for (const key in assortmentMenu) {
    let lists = "";
    assortmentMenu[key].forEach(element => {
        lists += `<a href="#">${element}</a>`
    });
    emptyStr += `<details>
        <summary>
            <ul><li>${key}</li></ul>
            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L7 7L13 1" stroke="#1D1C20" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </summary>
        ${lists}
    </details>`
}

assortment_menu.innerHTML += emptyStr;

const assortment_items = document.getElementById("assortment-items");

createItem(assortmentSubMenu["Կղմինդր"])

assortment_menu.addEventListener('click', function({target}){
    let bool = false;
    for (const iterator of assortment_menu.querySelectorAll("a")) {
        iterator.classList.remove('active')
    }
    if(target.closest('a')){
        target.classList.add('active')
        for (const key in assortmentSubMenu) {
            if(target.innerHTML.toLowerCase() == key.toLowerCase()){
                createItem(assortmentSubMenu[key], target)
                bool = true
            }
            if(!bool){
                createItem([target.innerHTML])
            }
        }

    }

})

function createItem(arr){
    let emptyItemStr = "";
    arr.forEach(items => {
        emptyItemStr += `
                <a href="./product/final/index.html" class="contant__items--item">
                    <img src="./img/k1.png" alt=""> 
                    <div class="shodow"></div>
                    <h3>${items}</h3>
                </a>
            `
    })
    assortment_items.innerHTML = emptyItemStr
}

let MobFilterMenu = document.querySelector('.mob-filter');

MobFilterMenu.addEventListener('click', function(){
    assortment_menu.classList.add('active')
    const a = document.createElement('div');
    document.body.append(a)
    a.classList.add('dark-over')
})

let MobFilterClose = document.querySelector('#close-mob-filter');

function closeFilter() {
    document.querySelector('.dark-over').remove()
    assortment_menu.classList.remove('active')
}