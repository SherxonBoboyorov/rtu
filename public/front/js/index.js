$(document).ready(function(){
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
      });
    
      // Or with jQuery
    
      $(document).ready(function(){
        $('.modal').modal();
      });

      // -------------------------------------------------------------------

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
      });
    
      // Or with jQuery
    
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
});

// -------------------------------===========-------------------------------

if (mobileVersion) {
    mobileVersion.addEventListener("click", () => {
        const newWin = window.open("/", "example", "width=480px,height=600px");
        newWin.onload = function () {
            let div = newWin.document.createElement("div"),
            body = newWin.document.body;
            body.insertBefore(div, body.firstChild);
        };
    });
}

// -------------------------------===========-------------------------------

$(function(){
  let Catalog_max__pro__ul_link = document.querySelectorAll('.news__pagination__link');

  for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
      Catalog_max__pro__ul_link[i].addEventListener('click',function(){
          for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
              Catalog_max__pro__ul_link[j].classList.remove('active');
          }
          this.classList.add('active');

      })
  }
});

// -------------------------------===========-------------------------------

const buttons_5 = document.querySelectorAll('.header__bottom__links');
buttons_5.forEach(function(button, index) {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    
    this.parentNode.classList.toggle('header__link__none__active');
    
    buttons_5.forEach(function(button2, index2) {
      if ( index !== index2 ) {
        button2.parentNode.classList.remove('header__link__none__active');
      }
    });
  });
});

// -------------------------------===========-------------------------------

$( ".leadership__button__open" ).click(function() {
  $(this ).each(function( i ) {
    if ( this.style.position !== "relative" ) {
      this.style.position = "relative";
      let Catalog_max__pro__ul_link = document.querySelectorAll('.leadership__item');
      for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
          Catalog_max__pro__ul_link[i].addEventListener('click',function(){
              for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
                  Catalog_max__pro__ul_link[j].classList.remove('leadership__active');
              }
              this.classList.add('leadership__active');
          })
      }
      
    } else {
      this.style.position = "";
      let Catalog_max__pro__ul_link = document.querySelectorAll('.leadership__item');
      for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
          Catalog_max__pro__ul_link[i].addEventListener('click',function(){
              for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
                  Catalog_max__pro__ul_link[j].classList.remove('leadership__active');
              }
              this.classList.add('leadership__active_12');
          })
      }
    }
  });
});

// -------------------------------===========-------------------------------

$(function(){
  let Catalog_max__pro__ul_link = document.querySelectorAll('.departmentsStaff_In__menu li');

  for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
      Catalog_max__pro__ul_link[i].addEventListener('click',function(){
          for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
              Catalog_max__pro__ul_link[j].classList.remove('active');
          }
          this.classList.add('active');

      })
  }
});

// -------------------------------===========-------------------------------

$(function(){
	let Catalog_max__pro__ul_link = document.querySelectorAll('.fotogalereya_in__item2');
  
	for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
		Catalog_max__pro__ul_link[i].addEventListener('click',function(){
			for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
				Catalog_max__pro__ul_link[j].classList.remove('active');
			}
			this.classList.add('active');
  
		})
	}
  });

// -------------------------------===========-------------------------------

const listVideoItem = document.querySelector('.videoGallery__menu__video');
if(listVideoItem){
  const videoItem = listVideoItem.querySelectorAll('.videoGallery__item__video');
  const maxVideo = document.querySelector('.videoGallery__list__item a')
  const videoItemImg = document.querySelector('.videoGallery__list__item .videoItem')
  const videoItemTitele = document.querySelector('.videoGallery__list__item h3')
  const videoItemData = document.querySelector('.videoGallery__list__item h4')
  
  videoItem.forEach(i => {
    i.onclick = () =>{
      const videoHref = i.querySelector('.videoGallery__item__video a');
      const videoImg = i.querySelector('.videoGallery__item__video .videoImg');
      const videoData = i.querySelector('.videoGallery__item__video h4');
      const videoTitle = i.querySelector('.videoGallery__item__video h3');

      let maxVideoList = maxVideo.href = videoHref.href
      let maxvideoItemImg = videoItemImg.src = videoImg.src
      let mrxTitle = videoItemTitele.textContent = videoTitle.textContent
      let maxData = videoItemData.textContent = videoData.textContent
    }
  })
}

// -------------------------------===========-------------------------------

$(function(){
  let Catalog_max__pro__ul_link = document.querySelectorAll('.videoGallery__item__video');

  for(let i = 0; i<Catalog_max__pro__ul_link.length; i++){
      Catalog_max__pro__ul_link[i].addEventListener('click',function(){
          for(let j = 0; j<Catalog_max__pro__ul_link.length;j++){
              Catalog_max__pro__ul_link[j].classList.remove('active');
          }
          this.classList.add('active');

      })
  }
});

// -------------------------------===========-------------------------------

const buttons_6 = document.querySelectorAll('.vacancies__title__h3');
buttons_6.forEach(function(button, index) {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    
    this.parentNode.classList.toggle('active');
    
    buttons_6.forEach(function(button2, index2) {
      if ( index !== index2 ) {
        button2.parentNode.classList.remove('active');
      }
    });
  });
});

// -------------------------------===========-------------------------------

const checkboxNone = document.querySelector('.checkboxNone');
const buttonDisabled = document.querySelector('.buttonDisabled');

if(checkboxNone){
  buttonDisabled.disabled = !checkboxNone.checked
  if( buttonDisabled.disabled){
    buttonDisabled.style.backgroundColor = '#880019c9'
    buttonDisabled.style.color = '#fff'
  }
  
  checkboxNone.onclick = () => {

    if(checkboxNone.checked == true){
      buttonDisabled.disabled = !checkboxNone.checked
      buttonDisabled.style.backgroundColor = '#880019'
    }

    if(checkboxNone.checked == false){
      buttonDisabled.disabled = !checkboxNone.checked
      buttonDisabled.style.backgroundColor = '#880019c9'
    }

  }
}