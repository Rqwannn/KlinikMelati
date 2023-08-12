const title = document.getElementById("title");
const formatter = new FormatMoney();
const configs = new Config().BackendURL();

function getURL(){
    return new URLSearchParams(window.location.search).get("obat");
}

let obat = getURL();

function setTitle(){
    obat = getURL();
    
    if (obat) {
        title.innerHTML = `Hasil Pencarian : ${obat}`
    }
}

setTitle()

function backToMain(){
    document.location.href = "index"
}

function callDataToServer(){
    obat = getURL();

    $.ajax({
        url : `${configs}/cariObat.php`,
        type : "GET",
        dataType : "JSON",
        data : {
            "obat" : obat
        },
        success : function(result){
            const setValue =  result.map((value) => {
            const harga = formatter.toRupiah(value.harga_obat)
            return `<div class="col-md-3">
                        <div class="cardObat">
                            <div class="imgTopObat">
                                <img src="img/DokterOperasi.jpg" alt="">
                            </div>
                            <div class="contentObat my-4">
                                <h4>${value.nama_obat} - ${value.jenis_obat}</h4>
                                <h5>${harga}</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                            <div class="footerObat d-flex justify-content-end">
                                <button type="submit" class="btn btn-Obat">${value.nama_penyakit}</button>
                            </div>
                        </div>
                    </div>`;
            })

            const pisahValue = setValue.join(" ");

            document.querySelector(".wrapperObat").innerHTML = pisahValue;
        }
    })
}

callDataToServer()

function searchMedicine(){
    const TextHolder = document.querySelector("#TextHolder");
    
    var stateObj = { page: "Home" };

    history.pushState(stateObj, "Pencarian_Obat", `pencarian_obat?obat=${TextHolder.value}`);
    setTitle()
    callDataToServer()
}