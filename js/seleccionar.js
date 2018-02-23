function mostrar_menu() {
    var valor = document.getElementById("menu");
    var selectedValue = valor.options[valor.selectedIndex].value;
    console.log(selectedValue);
    var adj1 = document.getElementById("adj1");
    var all1 = document.getElementById("all1");
    var all2 = document.getElementById("all2");
    var all3 = document.getElementById("all3");
    var menu1_1 = document.getElementById("menu1_1");
    var menu1_2 = document.getElementById("menu1_2");
    var op1 = 1;
    var op2 = 2;
    var op3 = 3;
    var op4 = 4;
    if (selectedValue == op1){
        all1.style.display = "block";
        all2.style.display = "block";
        all3.style.display = "block";
        menu1_1.style.display = "block";
        menu1_2.style.display = "block";
        adj1.style.display = "block";
    }else{
        all1.style.display = "none";
        all2.style.display = "none";
        all3.style.display = "none";
        menu1_1.style.display = "none";
        menu1_2.style.display = "none";
        adj1.style.display = "none";
    }
    }