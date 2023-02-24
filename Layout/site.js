function hello() {
    alert ("Welcome to my web site");
}

function add() {
    document.write(5+6);
}

// function changeColor(where, newColor) {
//     if (where == 'background') {
//         document.body.style.background = newColor;
//     }
// }

function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<10){
        alert("First Name must be at least 10 characters");
        return false;
    }
}

// function changeColor(){
//     let color = document.getElementById('background').value;
//     document.body.style.backgroundColor = color;
// }

// function changeBG() {
//     var selectedBGColor = document.getElementById("bgchoice").value;
//     document.body.style.backgroundColor = selectedBGColor;
//   }