console.log("Javascript aktif");

const form = document.querySelector("form");

form.addEventListener("submit", function(e){

    const nim = document.querySelector('input[name="nim"]').value;

    const nama = document.querySelector('input[name="nama"]').value;

    const jurusan = document.querySelector('input[name="jurusan"]').value;

    const alamat = document.querySelector('textarea[name="alamat"]').value;

    if(
        nim == "" ||
        nama == "" ||
        jurusan == "" ||
        alamat == ""
    ){

        alert("Semua data wajib diisi!");

        e.preventDefault();

    }

});

const hapus = document.querySelectorAll(".hapus-link");

hapus.forEach(function(link){

    link.addEventListener("click", function(e){

        const konfirmasi = confirm(
            "Yakin ingin menghapus data?"
        );

        if(!konfirmasi){

            e.preventDefault();

        }

    });

});