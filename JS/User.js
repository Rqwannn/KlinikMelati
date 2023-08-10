// clientHeight untuk mengecek dimana data html berada malalui height

// let Ready = skrollr.init();

window.onload = function () {
  this.setTimeout(text, 200);
  this.setTimeout(Title, 200);
};

function text() {
  const Text = document.querySelectorAll(".linkMenu ul li");
  const bars = document.querySelector(".linkMenu .fa-bars");

  bars.style.opacity = "1";
  bars.style.margin = "0px 0px 0px 45px";

  let i;
  for (i = 0; i < Text.length; i++) {
    Text[i].style.opacity = "1";
    Text[i].style.margin = "0px 0px 0px 45px";
  }
}

function openMenu(){
  let listMenu = document.querySelector(".linkMenuMobile");
  listMenu.style.left = "0px"
}

function closeMenu(){
  let listMenu = document.querySelector(".linkMenuMobile");
  listMenu.style.left = "100vw"
}

function Title() {
  const Title = document.querySelector(".logoMenu h5");

  Title.style.opacity = "1";
  Title.style.marginLeft = "0";
}

TweenMax.from(".leftSideHeader h1", 1, {
  delay: 0,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".leftSideHeader h5", 1, {
  delay: 0.2,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".wrapperInputType", 1, {
  delay: 0.3,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".wrapperInputType button", 1, {
  delay: 0.5,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".wrapperInputType input", 1, {
  delay: 0.5,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".wrapperInputType label", 1, {
  delay: 0.5,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

TweenMax.from(".cardVidio #Vidio", 1, {
  delay: 0.35,
  y: "100%",
  opacity: 0,
  ease: Expo.easeInOut,
});

const btnTextInput = document.querySelector(".wrapperInputType input");
const TextValue = document.querySelector(".wrapperInputType label");

btnTextInput.addEventListener("click", function () {
  TextValue.style.transition = "0.5s";
  TextValue.style.fontSize = "12px";
  TextValue.style.color = "#2ab564";
  TextValue.style.top = "30%";
});

btnTextInput.addEventListener("mouseout", function () {
  TextValue.style.transition = "0.5s";
  TextValue.style.fontSize = "15px";
  TextValue.style.color = "gray";
  TextValue.style.top = "50%";
});

const WrapperVidio = document.querySelector(".cardVidio");
const PauseVidio = document.querySelector("#Vidio");

if (PauseVidio.played) {
  PauseVidio.pause();
}

WrapperVidio.addEventListener("click", function () {
  if (PauseVidio.paused) {
    PauseVidio.play();
  } else {
    PauseVidio.pause();
  }
});

const test = document.querySelector(".rightSectionTwo h5");

// untuk mengetahui letak NodeList di document Browser

test.addEventListener("click", function (result) {
  alert(
    "Posisi Horizontal: " +
      result.clientX +
      ", Posisi Vertical: " +
      result.clientY
  );
});

function Fun(data, params="unactiveSlideFasilitas") {
  if (data == 1) {
    return `<div class="d-flex Slide-1" data-id="Slide-1">
                    <p>Reumatologi</p>
                    <p>Andrologi</p>
                    <p>Ortodonsia</p>
                </div>`;
  } else if (data == 2) {
    return `<div class="d-flex Slide-2" data-id="Slide-2">
                    <p>Dentist</p>
                    <p>Padriatic</p>
                    <p>CardioLogy</p>
                </div>`;
  } else if (data == 3) {
    return `<div class="d-flex Slide-3" data-id="Slide-3">
                    <p>Othopaedi</p>
                    <p>Traumatologi</p>
                    <p>Anestesiology</p>
                </div>`;
  }
}

const WrapperSlide = document.querySelector(".slideDownSectionFour");
const SlideTogether = document.querySelector(".WrapperSlideDown");

let AppeFun = 1;
let NumberTransision = 2;

let InitalTrans = true;

function AddingTransitionCategories(){

  const getClass = document.querySelector(`.Slide-${NumberTransision}`);

  [...getClass.childNodes].forEach((result) => {
    if(result.nodeName != "#text"){
      result.classList.add("activeSlideFasilitas")
    }
  })

  NumberTransision++

}

setInterval((result) => {

  const setNode = SlideTogether.childNodes;

  let DeleteNow = 1;

  [...setNode].forEach((result) => {
    if (result.nodeName != "#text") {
      if (DeleteNow == 1) {

        [...result.childNodes].forEach((child) => {
          const Parentin = child;

          if(Parentin.nodeName != "#text"){
            Parentin.classList.remove("activeSlideFasilitas")
            Parentin.classList.add("unactiveSlideFasilitas")
          }
        })

        setTimeout((wait) => {
          $(result).remove();
        }, 500);


        if(NumberTransision == 4){
          NumberTransision = 1;
        }

        AddingTransitionCategories(NumberTransision, InitalTrans);

        DeleteNow++;

      }
    }
  });

  setTimeout((wait) => {

    if (AppeFun == 4) {
      AppeFun = 1;
      $(SlideTogether).append(Fun(AppeFun));
  
      AppeFun++;
    } else {
      $(SlideTogether).append(Fun(AppeFun));
      AppeFun++;
    }

  }, 500);

}, 2500);

// $(".WrapperSlideDown2").owlCarousel({
//     loop: true,
//     autoplay: true,
//     items: 1,
//     stagePadding: 50,
//     autoplayTimeout:2000,
//     nav: true,
//     autoplayHoverPause: true,
//     animateOut: 'slideOutUp',
//     animateIn: 'slideInUp'
//   });

$(".LeftSectionThree2").owlCarousel({
  margin: 14,
  loop: true,
  autoWidth: true,
  items: 4,
  autoplay: true,
  URLhashListener: true,
});

function setURL(){
  document.location.href = "Konsultasi/Konsultasi.php";
}

  // (function () {
     
  //     $('a.page-scroll').click(function() {
  //         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  //           var target = $(this.hash);
  //           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  //           if (target.length) {
  //             $('html,body').animate({
  //               scrollTop: target.offset().top - 40
  //             }, 200);
  //             return false;
  //           }
  //         }
  //       });
  
  // }());

  const getByOne = document.querySelectorAll(".getByOne");
  const WrapperDokter = document.querySelector(".WrapperDokter");

  function setAllDoc() {
    $.ajax({
      url : "http://localhost/KlinikMelati/App/Api/getAllDokter.php",
      type : "GET",
      dataType : "JSON",
      success : function (result){
        const setValue =  result.map((value) => {
          return `<div class="col-md-6 wrapperCol">
                <div class="CardInfoDokter mb-3">
                    <div class="WrappetTopDokter d-flex">
                        <div class="imgInfoDokter">
                            <img src="img/${value.gambar}" alt="">
                        </div>
                        <div class="BiodataDokter">
                            <h5>${value.nama}</h5>
                            <p>${value.keahlian}</p>
                        </div>
                    </div>
                    <div class="WrapperBottomDokter mt-4">
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                    </div>
                </div>

            </div>`;
        })

        const pisahValue = setValue.join(" ");

        WrapperDokter.innerHTML = pisahValue;

        const CardInfoDokter = document.querySelectorAll(".CardInfoDokter");

        setTimeout(() => {
          CardInfoDokter.forEach((result) => {
            result.style.transform = "translateY(0)";
          })
        }, 100)

      }
    })
  }

  setAllDoc();

  function setSingleDoc(data){
    $.ajax({
      url : "http://localhost/KlinikMelati/App/Api/getSingleDokter.php",
      type : "GET",
      dataType : "JSON",
      data : {
        "Keahlian" : data
      },
      success : function(result){
        const setValue =  result.map((value) => {
          return `<div class="col-md-6 wrapperCol">
                <div class="CardInfoDokter mb-3">
                    <div class="WrappetTopDokter d-flex">
                        <div class="imgInfoDokter">
                            <img src="img/${value.gambar}" alt="">
                        </div>
                        <div class="BiodataDokter">
                            <h5>${value.nama}</h5>
                            <p>${value.keahlian}</p>
                        </div>
                    </div>
                    <div class="WrapperBottomDokter mt-4">
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                    </div>
                </div>

            </div>`;
        })

        const pisahValue = setValue.join(" ");

        WrapperDokter.innerHTML = pisahValue;

        const CardInfoDokter = document.querySelectorAll(".CardInfoDokter");

        setTimeout(() => {
          CardInfoDokter.forEach((result) => {
            result.style.transform = "translateY(0)";
          })
        }, 100)

      }
    })
  }

  getByOne.forEach((result) => {
    result.addEventListener("click", function(value){

      getByOne.forEach((item) => {
        if(item.classList.contains("activeBgDokter")){
          item.classList.remove("activeBgDokter");
        }
      })

      if(value.target.innerHTML == "All"){
        value.target.classList.add("activeBgDokter");
        setAllDoc();
      }

      if(value.target.innerHTML == "Orthopedic"){
        value.target.classList.add("activeBgDokter");
        setSingleDoc(value.target.innerHTML);
      }
      
      if(value.target.innerHTML == "Nutritionist"){
        value.target.classList.add("activeBgDokter");
        setSingleDoc(value.target.innerHTML);
      }
     
      if(value.target.innerHTML == "Pediatric"){
        value.target.classList.add("activeBgDokter");
        setSingleDoc(value.target.innerHTML);
      }
      
      if(value.target.innerHTML == "Anaesthestic"){
        value.target.classList.add("activeBgDokter");
        setSingleDoc(value.target.innerHTML);
      }

    })
  })

let elementsY = document.querySelectorAll(".animasi-y");
let elementsX = document.querySelectorAll(".animasi-x");
let elementsMinusX = document.querySelectorAll(".animasi-minus-x");

async function muncul(elements){
  for (let i = 0; i < elements.length; i++) {

    let tinggiLayar = window.innerHeight;
    let jarakAtasElemen = elements[i].getBoundingClientRect().top;
    let ukuranScroll = 150;
    
    if (jarakAtasElemen < tinggiLayar - ukuranScroll) {
      elements[i].classList.add("tampil");
    }
    // else {
    //   elements[i].classList.remove("tampil");
    // }

  }
}

window.addEventListener("scroll", function() {
  muncul(elementsY)
  muncul(elementsX)
  muncul(elementsMinusX)

  const Navbar = document.querySelector(".navbarMenu");
  Navbar.classList.toggle("PassScroll", window.scrollY > 0);

  const SlideUp = document.querySelector(".WrapperCircleUp");
  SlideUp.classList.toggle('SlideUpOpacity', window.scrollY > 0);
});