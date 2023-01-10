const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');
const openPopUpReg = document.getElementById('open_pop_up_reg');
const popUpReg = document.getElementById('pop_up_reg');
const closePopUpReg = document.getElementById('pop_up_close_reg');

openPopUp.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active');
})

openPopUpReg.addEventListener('click', function(e){
    e.preventDefault();
    popUpReg.classList.add('active');
})

closePopUpReg.addEventListener('click', () => {
    popUpReg.classList.remove('active');
})

function nextStep($step) {
    if ($step == 1) {
      $("#pop_up").hide();
      $("#pop_up_reg").show();
    } else if ($step == 2) {
        $("#pop_up_reg").hide();
        $("#pop_up").show();
    }
}


