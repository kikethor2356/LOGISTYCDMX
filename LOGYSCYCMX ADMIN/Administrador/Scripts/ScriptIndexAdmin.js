function mostrarmain1(){

    var  main1 = document.getElementById("main1");
    var  main2 = document.getElementById("main2");
    var  main3 = document.getElementById("main3");
    var  main4 = document.getElementById("main4");

    main1.style.display = "block";
    main2.style.display = "none";
    main3.style.display = "none";
    main4.style.display = "none";

}

function mostrarmain2(){
    var  main1 = document.getElementById("main1");
    var  main2 = document.getElementById("main2");
    var  main3 = document.getElementById("main3");
    var  main4 = document.getElementById("main4");

    main1.style.display = "none";
    main2.style.display = "block";
    main3.style.display = "none";
    main4.style.display = "none";
    
    
}

function mostrarmain3(){
    
    var  main1 = document.getElementById("main1");
    var  main2 = document.getElementById("main2");
    var  main3 = document.getElementById("main3");
    var  main4 = document.getElementById("main4");

    main1.style.display = "none";
    main2.style.display = "none";
    main3.style.display = "block";
    main4.style.display = "none";
}

function mostrarmain4(){
    
    var  main1 = document.getElementById("main1");
    var  main2 = document.getElementById("main2");
    var  main3 = document.getElementById("main3");
    var  main4 = document.getElementById("main4");

    main1.style.display = "none";
    main2.style.display = "none";
    main3.style.display = "none";
    main4.style.display = "block";
}

var specifyimage=new Array()

specifyimage[0]="https://www.logistycmx.com/contacto.jpg"

specifyimage[1]="https://scontent.fgdl2-1.fna.fbcdn.net/v/t39.30808-6/325643991_696222708746147_7073958842831652492_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=9Z6trmCiGP0AX_zZzxK&_nc_ht=scontent.fgdl2-1.fna&oh=00_AfBObNxteAabqFjeW8aOD19utshSLnVZkZhvCMhwlyBFXg&oe=65B4EEDB"

specifyimage[2]="https://www.logistycmx.com/ppal.jpg"


var delay=3000 //Tiempo de transición, 1000 = 1 segundo

var count =1;


var cubeimage=new Array()

for (i=0;i<specifyimage.length;i++){

cubeimage[i]=new Image()

cubeimage[i].src=specifyimage[i]

}


function movecube(){

if (window.createPopup)

cube.filters[0].apply()

document.images.cube.src=cubeimage[count].src;

if (window.createPopup)

cube.filters[0].play()

count++;

if (count==cubeimage.length)

count=0;

setTimeout("movecube()",delay)

}

window.onload=new Function("setTimeout('movecube()',delay)")
