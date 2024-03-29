function stopscroll(){
    let navbar = document.getElementById("scrolltopbutton");
    let checkpoint = document.getElementById("stopscrollform");
    // console.log(checkpoint.scrollTop);
    if (checkpoint.scrollTop > 0){
        navbar.classList.add("sticky");
    }
    else{
        navbar.classList.remove("sticky");
    }
};
// ------------------------------------------------------------------
// -------------------------Drag nd Drop -------------------------
// ------------------------------------------------------------------
var file;
var filetype;
function dragoverstart(e){
    e.preventDefault();
    let styledata = document.getElementById("drop_file_zone");
    let dragupload = document.getElementById('drag_upload_file');
    let paragraphhere = dragupload.getElementsByTagName('p');
    paragraphhere[0].innerText = "Release to upload file ";
    styledata.style.borderStyle = "solid";
};
function dragleavestart(e){
    let styledata = document.getElementById("drop_file_zone");
    e.preventDefault();
    let dragupload = document.getElementById('drag_upload_file');
    let paragraphhere = dragupload.getElementsByTagName('p');
    paragraphhere[0].innerText = "Drag and Drop to upload file";
    styledata.style.borderStyle = "dashed";
};

function file_explorer(e){
    var selectfile = document.getElementById('selectfile');
    e.preventDefault();
    selectfile.click();
    selectfile.addEventListener("change",function fileupload(){
        file = selectfile.files;
        selectfile.removeEventListener("change",fileupload);
        showFile();           
    });  
};

function upload_file(e){
    e.preventDefault();
    file = e.dataTransfer.files;
    showFile();
};

function showFile() {
    var filesimg = document.getElementById('fileheredrop');
    for (let iterator of file) {
        filetype = iterator.type;
        filetype.toLowerCase();
        let validextention = ["image/jpeg", "image/jpg", "image/png" ];
        if(validextention.includes(filetype)){
            let filereader  = new FileReader();
            filereader.onload = (e)=>{
                let fileUrl =filereader.result;
                var ImgTag= `<span style="display: inline-block;
                width:140px;"><img type="file" name="image[]" src="${fileUrl}" alt=""><i class="far fa-times-circle"></i></span>`;
                filesimg.innerHTML += ImgTag;
                crossdelete();
            }
            filereader.readAsDataURL(iterator);
        }
        else{
            alert("jpg, png and jpeg are only supported");
        }  
    }  
}

// Delete image by clicking on cross 

function crossdelete(){
    var crossdelete = document.getElementById("fileheredrop");
    var deleteitems = crossdelete.getElementsByClassName("fa-times-circle");
    Array.from(deleteitems).forEach((e)=>{
        e.addEventListener("click",()=>{
            e.parentNode.remove();
        })
    })
};

// name of the json file

// function jsonname(){
//    let valuename = document.getElementById("JsonFileUpload").value;
// //    let placefilename = document.querySelector(".navbutton");
//    let  lowvaluename = valuename.toLowerCase();
//     let validfile = ["json"];
//    if(lowvaluename.includes(validfile)){
//        placefilename.setAttribute('data-myval', `${filename}`);
//    }
//    else { 
//        alert ("Select a valid json file");
//    }
// }