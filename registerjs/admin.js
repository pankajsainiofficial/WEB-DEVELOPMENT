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
// let files = document.getElementById('fileheredrop');
function file_explorer(e){
    var selectfile = document.getElementById('selectfile');
    e.preventDefault();
    selectfile.click();
    selectfile.addEventListener("change",(e)=>{
        file = e.target.files;
        showFile();
    });
};
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

function upload_file(e){
    e.preventDefault();
    file = e.dataTransfer.files;
    showFile();
}

function showFile() {
    var files = document.getElementById('fileheredrop');
    for (let iterator of file) {
        filetype = iterator.type;
        filetype.toLowerCase();
        let validextention = ["image/jpeg", "image/jpg", "image/png" ];
        if(validextention.includes(filetype)){
            let filereader  = new FileReader();
            filereader.onload = (e)=>{
                console.log(e);
                let fileUrl =filereader.result;
                var ImgTag= `<img type="file" src="${fileUrl}" alt="">`;
                files.innerHTML += ImgTag;
            }
            filereader.readAsDataURL(iterator);
        }
        else{
            alert("jpg, png and jpeg are only supported");
        }  
    }
    }