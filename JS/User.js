// clientHeight untuk mengecek dimana data html berada malalui height

window.onload = function () {
  this.setTimeout(text, 200);
  this.setTimeout(Title, 200);
};

window.addEventListener("scroll", function () {
  const Navbar = document.querySelector(".navbarMenu");

  Navbar.classList.toggle("PassScroll", window.scrollY > 0);
});

function text() {
  const Text = document.querySelectorAll(".linkMenu ul li");
  let i;
  for (i = 0; i < Text.length; i++) {
    Text[i].style.opacity = "1";
    Text[i].style.margin = "0px 0px 0px 45px";
  }
}

function Title() {
  const Title = document.querySelector(".logoMenu h5");

  Title.style.opacity = "1";
  Title.style.marginLeft = "35px";
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

function Fun(data) {
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

let setAgain;
let setTransform = 48;
let AppeFun = 1;
let RemFun = 1;
const Slide_1 = document.querySelector(".Slide-1");
const Slide_2 = document.querySelector(".Slide-2");
const Slide_3 = document.querySelector(".Slide-3");

setAgain = setInterval((result) => {

  let setTrue = 1;
  const setNode = SlideTogether.childNodes;
  // SlideTogether.style.transform = `translateY(-${setTransform}px)`;
  setTransform += 48;

  let DeleteNow = 1;

  [...setNode].forEach((result) => {
    if (result.nodeName != "#text") {
      if (DeleteNow == 1) {
        $(result).remove();
        DeleteNow++;
      }
    }
  });

  if (AppeFun == 4) {
    AppeFun = 1;
    $(SlideTogether).append(Fun(AppeFun));

    AppeFun++;
  } else {
    $(SlideTogether).append(Fun(AppeFun));
    AppeFun++;
  }

}, 2000);

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
  margin: 10,
  loop: true,
  autoWidth: true,
  items: 4,
  autoplay: true,
  URLhashListener: true,
});

function setURL(){
  document.location.href = "Konsultasi/Konsultasi.php";
}

  (function () {
     
      $('a.page-scroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 40
              }, 200);
              return false;
            }
          }
        });
  
  }());

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