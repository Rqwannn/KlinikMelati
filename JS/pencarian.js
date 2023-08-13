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
            // Simpan data objek ke localStorage (menggunakan JSON.stringify untuk mengubah objek menjadi string JSON)
            const data = result;
            localStorage.setItem('data', JSON.stringify(data));

            const setValue =  data.map((value) => {
            
                const harga = formatter.toRupiah(value.harga_obat)
                const img = 'data:image/png;base64,' + value.gambar_obat;

                return `<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                            <div class="cardObat">
                                <div class="imgTopObat">
                                    <img src="${img}" alt="">
                                </div>
                                <div class="contentObat my-4">
                                    <h4>${value.nama_obat} - ${value.jenis_obat}</h4>
                                    <h5>${harga}</h5>
                                    <p class="pembatas-text">${value.deskripsi}</p>
                                </div>
                                <div class="footerObat d-flex justify-content-end">
                                    <button type="submit" onclick="detailObat(event)" data-id="${value.id_obat}" class="btn btn-Obat" data-bs-toggle="modal" data-bs-target="#detailObat">${value.nama_penyakit}</button>
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

function detailObat(data){
    const id_obat = data.target.getAttribute('data-id')

    const storedData = localStorage.getItem('data');
    const parsedData = JSON.parse(storedData);

    const getData = parsedData.find( (item) => {
        return item.id_obat === id_obat;
    })

    document.getElementById("titleObat").innerHTML = `${getData.nama_obat} - ${getData.jenis_obat}`;
    document.getElementById("bodyObat").innerHTML = `
        <h4>Deskripsi : </h4>
        </br>
        <p>${getData.deskripsi}</p>
        <p class="font-weight-bold">${formatter.toRupiah(getData.harga_obat)}</>
    `;

    console.log(getData);
}