 $('.tombol-hapus').on('click',function (event) {
         event.preventDefault();
            const href = $(this).attr('href');
  
           Swal.fire({
              title: 'Apakah anda yakin?',
               text: "Menghapus Data",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
                }).then((result) => {
                 if (result.value) {
                document.location.href = href;
        }
        })
    });