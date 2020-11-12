
$(document).ready(function(){
    let sothunhat = document.getElementById("sothunhat")
    let sothuhai = document.getElementById("sothuhai")
    let so1,so2;
    so1=Math.floor(Math.random() * 100);
    so2=Math.floor(Math.random() * 100);
    sothunhat.innerText=so1+' ';
    sothuhai.innerText=so2+' ';
});
