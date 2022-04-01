const checkbox = document.getElementById("checkbox");
const submitBtn = document.querySelector("button[type=submit]")
//disabled checkbox
checkbox.disabled = true;
submitBtn.disabled = true;

const elements = document.querySelectorAll(".element");
const selectColor = document.getElementById("selectcolor");

//assign colot to element
elements.forEach(function (element) {
    const color = getRandomColor();
    element.style.backgroundColor =  color;
    element.innerHTML= color;
    //set verified color
    selectColor.innerHTML = color;
});

//generate random color
function getRandomColor() {
    const letter = "0123456789ABCDEF";
    let color="#";
    for (let i = 0; i < 6.; i++) {
        color += letter[Math.floor(Math.random()*16)];}
        return color;    
}

//check if right color
elements.forEach(function (element) {
    element.addEventListener("click",function () {
        if(element.innerHTML === selectColor.innerHTML){
            alert("You are human");
            checkbox.checked = true;
            submitBtn.disabled = false;
            header('location:success.php');
        }
        else{
            alert("Please select the right color!");
            location.reload(true);
        }
    });
});