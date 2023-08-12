const btnScroll = document.querySelector('.scroll-right');
const btnScrollIcon = document.querySelector('.scroll-right i');
const CardMedia = document.querySelector('.card-social-media');

btnScroll.addEventListener("click", function(){
    if(CardMedia.style.left == "100%"){
        CardMedia.style.left = "0%";
        btnScrollIcon.style.transform = "rotate(0deg)";
    } else {
        CardMedia.style.left = "100%";
        btnScrollIcon.style.transform = "rotate(180deg)";
    }
})

function InsertData(){
    const Email = document.querySelector("#AuthEmail");
    const Gender = document.querySelector("#jk");
    const Nama = document.querySelector("#AuthNama");
    const Tanggal = document.querySelector("#AuthDate");
    const Umur = document.querySelector("#AuthUmur");

    const ErrorEmail = document.querySelector("#ErrorEmail");
    const ErrorGender = document.querySelector("#ErrorGender");
    const ErrorNama = document.querySelector("#ErrorNama");
    const ErrorTanggal = document.querySelector("#ErrorTanggal");
    const ErrorUmur = document.querySelector("#ErrorUmur");
    const ErrorSpesialis = document.querySelector("#ErrorSpesialis");

    const DokterUmum = document.querySelector(".DokterUmum");
    const DokterGigi = document.querySelector(".DokterGigi");
    const DokterAnak = document.querySelector(".DokterAnak");

    ErrorEmail.innerHTML = "";
    ErrorGender.innerHTML = "";
    ErrorNama.innerHTML = "";
    ErrorTanggal.innerHTML = "";
    ErrorUmur.innerHTML = "";
    ErrorSpesialis.innerHTML = "";
    
    ErrorEmail.style.display = "none";
    ErrorGender.style.display = "none";
    ErrorNama.style.display = "none";
    ErrorTanggal.style.display = "none";
    ErrorUmur.style.display = "none";
    ErrorSpesialis.style.display = "none";

    for(let index = 0; index < 6; index++){
        if(Email.value == "" && index == 0 || Email.value.length > 0 && index == 0 && !Email.value.includes("@")){
            ErrorEmail.innerHTML = "Email tidak boleh kosong";
            ErrorEmail.style.display = "block";
            if(Email.value.length > 0 && index == 0 && !Email.value.includes("@")){
                ErrorEmail.innerHTML = "Email harus mengandung simbol @";
                ErrorEmail.style.display = "block";
                continue
            }
            continue
        } else if (Gender.value == "Pilih Gender Anda" && index == 1){
            ErrorGender.innerHTML = "Gender tidak boleh kosong";
            ErrorGender.style.display = "block";
            continue
        } else if(Nama.value == "" && index == 2){
            ErrorNama.innerHTML = "Nama tidak boleh kosong";
            ErrorNama.style.display = "block";
            continue
        } else if(Tanggal.value == "" && index == 3){
            ErrorTanggal.innerHTML = "Tanggal tidak boleh kosong";
            ErrorTanggal.style.display = "block";
            continue
        } else if(Umur.value == "" && index == 4){
            ErrorUmur.innerHTML = "Umur tidak boleh kosong";
            ErrorUmur.style.display = "block";
            continue
        } else if((!DokterUmum.checked && !DokterGigi.checked && !DokterAnak.checked) && index == 5){
            ErrorSpesialis.innerHTML = "Pilih dokter terlebih dahulu";
            ErrorSpesialis.style.display = "block";
            continue
        } else {
            if(Email.value.length > 0 && (Gender.value == "Laki-Laki" || Gender.value == "Perempuan") && Nama.value.length > 0 && Tanggal.value.length > 0 && Umur.value.length > 0 && (DokterUmum.checked || DokterGigi.checked || DokterAnak.checked)){
                Swal.fire({
                    title: 'Apakah sudah benar ?',
                    text: "Kami akan langsung menjadwalkan perjanjian jika sudah benar",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Sudah Benar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let setDokter = "";

                        if(DokterUmum.checked){
                            setDokter = DokterUmum.value
                        } else if(DokterGigi.checked){
                            setDokter = DokterGigi.value
                        } else if ((DokterAnak.checked)) {
                            setDokter = DokterAnak.value
                        }

                    $.ajax({
                        url : "http://localhost/KlinikMelati/App/Api/InputKonsultasi.php",
                        type : "POST",
                        dataType : "JSON",
                        data : {
                            "Dokter" : setDokter,
                            "Email" : Email.value,
                            "Nama" : Nama.value,
                            "Gender" : Gender.value,
                            "Tanggal" : Tanggal.value,
                            "Umur" : Umur.value
                        },
                        error : function (){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Maaf Terjadi Kesalahan',
                                footer: '<a href>Mohon untuk melaporkan masalah ini</a>'
                            })
                        },
                        success : function (result){
                            const ReturnNama = result.Nama;

                            Swal.fire(
                                'Berhasil',
                                `${ReturnNama}, Perjanjian anda telah di buat`,
                                'success'
                            )

                            Email.value = "";
                            Nama.value = "";
                            Tanggal.value = "";
                            Umur.value = "";
                            Gender.value = "Pilih Gender Anda";
                        }
                    })
                    } else if(!result.isConfirmed) {
                        Swal.fire(
                            'Baiklah',
                            'Mungkin lain kali anda mengadakan perjanjian',
                            'error'
                        )
                    }
                })
            }
        }
    }
}

function BackHome(){
    document.location.href = "../index";
}