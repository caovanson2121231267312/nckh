function search_product(){

    var key =document.getElementById('searchByKey').value;
    console.log(key);
    if(key.length <2){
        return;
    }
    fetch('http://localhost:8080/nckh/get_item/'+key,{
        method: "get",
        headers: {
            Accept: "application/json, text/plain, */*",
        },
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        var html ="";
        data.forEach((d) => {
            console.log(d.file)
            console.log("abc")

            html += `
                    <li>
                        <a href="http://localhost:8080/nckh/`+d.file +`/` +d.name_file +`" class="w100 mb-5 flex">
                            <div>
                                <img class="img-se" src="http://localhost:8080/nckh/public/assets/upload/`+d.main_img+`">
                            </div>
                            <div class="pm">
                                <div>
                                    <p class="p1">
                                        `+d.name+`
                                    </p>
                                </div>
                                <div>
                                    <span class="special-price">`+d.sale_product+` ₫</span>
                                    <span class="old-price">`+d.price+` ₫</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    `;
        });
        console.log(html);
        $(function () {
            $('#add-search').html(html);
        });
    }).catch((error) => {
        console.log('Error:', error);
    });
}


// Location
var header__location__wrapper = document.querySelector('.header__location__wrapper')
var header__location__submenu = document.querySelector('.header__location__submenu')
var header__location__submenu__modal = document.querySelector('.header__location__submenu__modal')
// Header Location Handle
header__location__wrapper.addEventListener('click', function(){
    header__location__submenu.style = `display: block;`
    header__location__submenu__modal.style = `display: block;`
})
header__location__submenu__modal.addEventListener('click',function(){
    header__location__submenu.style = `display: none;`
    header__location__submenu__modal.style = `display: none;` 
})
// Header Search Bar Handle
var search__input = document.querySelector('.header__search__bar__input input')
var search__modal = document.querySelector('.header__search__bar__modal')
var add__search = document.querySelector('#add-search');
search__input.addEventListener('click', function(){
    search__modal.style = `display: block;`
    add__search.style =`display: block;`;
})
search__modal.addEventListener('click', function(){
    search__modal.style = `display: none;`
    add__search.style =`display: none;`;

})
// Slider
var NextBtn = document.querySelector('.slider__top__next__btn')
var PrevtBtn = document.querySelector('.slider__top__prev__btn')
var SlideWrapper = document.querySelector('.slider__top__wrapper')
var l = 684.98
var index = 0
var positionX = 0
// Automatic Slider
var randomNumber
setInterval(function(){
    randomNumber = Math.floor(Math.random()*5)
    switch(randomNumber){
        case 0:
            index = 0
            DotHandler(index)
            break
        case 1:
            index = 1      
            positionX = -l
            SlideWrapper.style = `transform: translateX(${positionX}px);`
            DotHandler(index)
            break  
        case 2:
            index = 2      
            positionX = -l*2
            SlideWrapper.style = `transform: translateX(${positionX}px);` 
            DotHandler(index)
            break  
        case 3:
            index = 3      
            positionX = -l*3
            SlideWrapper.style = `transform: translateX(${positionX}px);` 
            DotHandler(index)
            break   
        case 4: 
            index = 4      
            positionX = -l*4
            SlideWrapper.style = `transform: translateX(${positionX}px);`; 
            DotHandler(index)
            break 
        case 5:
            index = 5      
            positionX = -l*4
            SlideWrapper.style = `transform: translateX(${positionX}px);` 
            DotHandler(index)
            break                                       
    }
    },5000)
// Button Slider
var DotBtns = document.querySelectorAll('.slider__bottom__item__underline')
var Dotitems = document.querySelectorAll('.slider__bottom__item')
NextBtn.addEventListener('click' ,function(){
    Handle(1)
})
PrevtBtn.addEventListener('click' ,function(){
    Handle(-1)
})
DotSliderHandler()
function Handle ($number){
    if( $number == 1) {   
        if( index >= 4)return
        positionX = positionX - l
        SlideWrapper.style = `transform: translateX(${positionX}px);`
        ++index     
        DotHandler(index)
    }
    else if( $number == -1) { 
        if(index <= 0)return
        positionX = positionX + l
        SlideWrapper.style = `transform: translateX(${positionX}px);`
        index--       
        DotHandler(index)
    }
    
    console.log('index', index)
}
// Dot Slider   
function DotSliderHandler(){
    Dotitems.forEach(function(item,itemIndex){
        item.addEventListener('click',function(){      
            positionX = -l*itemIndex
            SlideWrapper.style = `transform: translateX(${positionX}px);` 
            DotHandler(itemIndex)
            index = itemIndex
        })
    })
}
// Xử lí hiệu ứng dot khi chuyển slide
function DotHandler(index){
    document.querySelector('.slider__bottom__item__underline.dot--active').remove('dot--active')
    DotBtns[index].classList.add('dot--active')
    document.querySelector('.slider__bottom__item.item--active').classList.remove('item--active')
    Dotitems[index].classList.add('item--active')
}


// // Flash Sale Slider
var FNextBtn = document.querySelector('.flash__sale__next__btn')
var FPrevBtn = document.querySelector('.flash__sale__prev__btn')
var FPrdoductList = document.querySelector('.flash__sale__product__list')
var FPrdoductIem = document.querySelectorAll('.flash__sale__product')
 var Fl = 238
var Findex = 0
var FPositionX = 0
FNextBtn.addEventListener('click',function(){
    FHandle(1)
})
FPrevBtn.addEventListener('click',function(){
    FHandle(-1)
})
function FHandle (Fnumber){
    if( Fnumber == 1){
        if( Findex > 10)return
        console.log('Next')
        FPositionX = FPositionX - Fl
        FPrdoductList.style = `transform: translateX(${FPositionX}px)`
        Findex++
        console.log('Findex' , Findex)
    }
    if( Fnumber == -1){
        if( Findex <= 0)return
        console.log('Prev')
        FPositionX = FPositionX + Fl
        FPrdoductList.style = `transform: translateX(${FPositionX}px)`
        Findex--
        console.log('Findex' , Findex)
    }
}
// Chat with Supporter
var talk__with__supporter__bar = document.querySelector('.talk__with__supporter__bar')
var talk__with__supporter__form = document.querySelector('.talk__with__supporter__form')
var talk__with__supporter__form__header__close = document.querySelector('.talk__with__supporter__form__header__close')
talk__with__supporter__bar.addEventListener('click',function(){
    talk__with__supporter__form.style = `display: block;`
})
talk__with__supporter__form__header__close.addEventListener('click',function(){
    talk__with__supporter__form.style = `display: none;`
})
// Count down
var days = document.querySelector('#day')
var hours = document.querySelector('#hour')
var minutes = document.querySelector('#minutes')
var seconds = document.querySelector('#sec')
var CurrentYear = new Date().getFullYear()
var CurrentMonth = new Date().getMonth()
var CurrentDay = new Date().getDate()
console.log(CurrentYear)
console.log(CurrentMonth)
console.log(CurrentDay)
var currentTime = new Date(CurrentYear,CurrentMonth,CurrentDay)
var EndFlashSaleDay = new Date(CurrentYear,CurrentMonth,CurrentDay+2)
setInterval(function(){
    var currentTime = new Date()
    var SecondNow = Math.floor((EndFlashSaleDay - currentTime)/1000)
    // console.log(SecondNow)
    var s = Math.floor((EndFlashSaleDay - currentTime)/1000%60)
    var m = Math.floor((EndFlashSaleDay - currentTime)/1000/60%60)
    var h =  Math.floor((EndFlashSaleDay - currentTime)/1000/60/60%24)
    var d =  Math.floor((EndFlashSaleDay - currentTime)/1000/60/60/24)
    days.innerHTML = d < 10 ? '0'+ d : d
    hours.innerHTML = h < 10 ? '0'+ h : h
    minutes.innerHTML = m < 10 ? '0'+ m : m
    seconds.innerHTML = s < 10 ? '0'+ s : s
},1000)
// Zalo Suppport
var $ =document.querySelector('.zalo__support__head__box')
var $$ = document.querySelector('.zalo__support__box')
var $$$ = document.getElementsByClassName('zalo__support__box__header__icon')[1]
var dropdown__zalo = document.querySelector('.dropdown__content')
var dropdown__zalo__btn = document.querySelector('.zalo__support__box__header__icon')
$.addEventListener('click',function(){
    $$.classList.toggle('toggle')
})
$$$.addEventListener('click',function(){
    $$.classList.add('toggle')
})
dropdown__zalo__btn.addEventListener('click', function(){
    dropdown__zalo.classList.toggle('toggle')
})
// Tablet
var Tab__slider = document.querySelector('.tablet__slider')
var Tab__slider__wrapper = document.querySelector('.tablet__slider__wrapper')
var Tab__dot__list = document.querySelectorAll('.tablet__slider__dot__item')
    Tab__dot__list.forEach(function(item,index){
        item.onclick = function(){ 
            console.log('index:',index)
            document.querySelector('.tablet__slider__dot__item.dot-list-style').classList.remove('dot-list-style')
            Tab__slider__wrapper.style =  `transform: translateX(${-440*index}px);`
            this.classList.add('dot-list-style')    
        }
    })
// Smartphone
var smartphone__slider = document.querySelector('.smartphone__slider')
var smartphone__slider__wrapper = document.querySelector('.smartphone__slider__wrapper')
var smartphone__dot__list = document.querySelectorAll('.smartphone__slider__dot__item')
    smartphone__dot__list.forEach(function(item,index){
        item.onclick = function(){ 
            console.log('index:',index)
            document.querySelector('.smartphone__slider__dot__item.dot-list-style').classList.remove('dot-list-style')
            smartphone__slider__wrapper.style =  `transform: translateX(${-345*index}px);`
            this.classList.add('dot-list-style')    
        }
    })
// Smartphone
var smartphone__header__search__input = document.querySelector('.smartphone__header__search input')
var smartphone__modal = document.querySelector('.smartphone__modal')
var smartphone__header__location = document.querySelector('.smartphone__header__location')
smartphone__header__search__input.addEventListener('click',function(){
    smartphone__header__search__input.style.width = `225px`
    smartphone__modal.style = `display: block`
    smartphone__header__location.style = `display: none`
})
smartphone__modal.addEventListener('click',function(){
    smartphone__header__search__input.style.width = `120px`
    smartphone__modal.style = `display: none`
    smartphone__header__location.style = `display: flex`
})
// Scroll Handle
var header__background__behavior = document.querySelector('.tablet__header__background')

var scroll__to__top = document.querySelector('.scroll__to__top')

window.addEventListener('scroll' , function(){
   var a = window.scrollY
   console.log('scroll:',a)
   HeaderScrollHandle(a)
})
// Tablet Header Scroll Handler
function HeaderScrollHandle(number){
    if( number > 50 ){
        this.document.querySelector('.tablet__header__logo').style = `display : none`
        this.document.querySelector('.tablet__header__bottom').style = `display : none`
        this.document.querySelector('.tablet__header__logo__scroll').style = `display : block`        
        this.document.querySelector('.tablet__header__bottom__scroll').style = `display : block`
        header__background__behavior.style = `
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        z-index: 90000;
        height: 54px;
        background: linear-gradient(
            180deg,
            #c40016,
            #c40016
        );
        `
       }
       else if ( number < 50 ){
        this.document.querySelector('.tablet__header__logo').style = `display : block`
        this.document.querySelector('.tablet__header__bottom').style = `display : block`
        this.document.querySelector('.tablet__header__logo__scroll').style = `display : none`        
        this.document.querySelector('.tablet__header__bottom__scroll').style = `display : none`
        header__background__behavior.style = `
        z-index: 8;
        background: linear-gradient(
            180deg,
            #c40016,
            #e8735b
        ); 
        `
       }
}     
// Tbalet-smartphone search box Handler
var search__bottom__sroll__input = document.querySelector('.tablet__header__bottom__scroll input')
var tablet__header__location = document.querySelector('.tablet__header__location')
var tablet__modal = document.querySelector('.tablet__modal')
search__bottom__sroll__input.addEventListener('click',function(){
    search__bottom__sroll__input.style = `width: 300px`
    tablet__header__location.style = `display: none`
    tablet__modal.style = `display: block`

})
tablet__modal.addEventListener('click',function(){
    search__bottom__sroll__input.style = `width: 195px`
    tablet__header__location.style = `display: flex`
    tablet__modal.style = `display: none`
})

// Tbalet-smartphone Location Dropdown
var TabLocationDropdown = document.querySelector('.tablet__header__location__menu__list')
    TabLocationBtn = document.querySelector('.tablet__header__location')
    TabLocationModal = document.querySelector('.tablet__header__location__menu__list__modal')
    
    SmartLocationBtn = document.querySelector('.smartphone__header__location')
    
    
    TabLocationBtn.onclick = function(){
        TabLocationDropdown.style = `display: block;`
        TabLocationModal.style = `display: block;`
    }
    
    TabLocationModal.onclick = function(){
        TabLocationDropdown.style = `display: none;`
        TabLocationModal.style = `display: none;`
    }

    SmartLocationBtn.onclick = function(){
        TabLocationDropdown.style = `display: block;`
        TabLocationModal.style = `display: block;`
    }
