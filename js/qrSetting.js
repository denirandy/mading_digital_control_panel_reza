const layarMerah = document.getElementById("layar-merah")
const popup = document.getElementById('popup');

//sidebar
function changcePotitionLayarMerah(id) {
  switch (id) {
    case 4:
      hapus()
      layarMerah.classList.add("select-jadwal")
      break
      case 3:
        hapus()
        layarMerah.classList.add("select-vidio")
        break
        case 2:
            hapus()
            layarMerah.classList.add("select-text")
            break
        case 1:
          default:
            hapus()
            layarMerah.classList.add("select-qrcode")
            break
    }
    function hapus() {
        layarMerah.classList.remove("select-qrcode")
        layarMerah.classList.remove("select-text")
        layarMerah.classList.remove("select-vidio")
        layarMerah.classList.remove("select-jadwal")
    }

}


//pop-up
const addqr = document.getElementById('addqr');


addqr.addEventListener('click', function() {
  popup.style.display = 'flex';
});

function closePopup() {
  popup.style.display = 'none';
}



