function search(){

const vheaders = document.querySelectorAll(".full-box");
const searchtext = document.getElementById("search-bar").value.toLowerCase();

for(i=0;i<vheaders.length;i++){
    if(searchtext==""){
        vheaders[i].style.display = "flex";
    }
    else if(vheaders[i].innerText.toLowerCase().includes(searchtext)){
        vheaders[i].style.display = "flex";    
    }
    else{
        vheaders[i].style.display = "none";
    }
}

}

let sbar = document.getElementById("search-bar");
let pbutton = document.getElementById("p-button");

sbar.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        pbutton.click(); 
    }
});

function startTest(){

}

function show(){
    let iframe = document.getElementById("yt-embed");
    const vtexts = document.querySelectorAll(".text-block");
    let vid = iframe.src.replace("https://www.youtube.com/embed/","");

    for(i=0;i<vtexts.length;i++){

        if(vtexts[i].innerText.includes("vid")){
            let element = vtexts[i];
            localStorage.setItem('elementItem',element.outerHTML)
        }

    }

}

