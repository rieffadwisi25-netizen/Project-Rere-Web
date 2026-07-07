function addFlower(src){

let img=document.createElement("img");

img.src=src;

img.className="flower flower-copy";

img.style.left="110px";
img.style.top="60px";

document.getElementById("flowerArea").appendChild(img);

drag(img);
img.ondblclick = function (e) {
    e.stopPropagation();

    if(confirm("Hapus bunga ini?")){
        img.remove();
    }
};

function changeWrap(src){

document.getElementById("wrap").src=src;

}

function drag(el){

let x=0;

let y=0;

el.onmousedown=function(e){

e.preventDefault();

document.onmousemove=function(e){ 

}
x=e.offsetX;

y=e.offsetY;

el.style.left=(e.pageX-canvas.offsetLeft-60)+"px";

el.style.top=(e.pageY-canvas.offsetTop-60)+"px";

}

document.onmouseup=function(){

document.onmousemove=null;

}

}

}

function download(){

html2canvas(document.querySelector("#canvas")).then(canvas=>{

let a=document.createElement("a");

a.download="bouquet.png";

a.href=canvas.toDataURL();

a.click();

});

}
function hapusSemua(){
    document.querySelectorAll('.flower-copy').forEach(item=>{
        item.remove();
    });
}

