
const url="http://localhost:3000/"


function loadLinks(){
    let links='<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"\n' +
        '          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">\n' +
        '    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">\n' +
        '    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">\n' +
        '    <link rel="stylesheet" href="css/style.css">'
    document.head.insertAdjacentHTML('beforeend',links);
}
loadLinks()
function showToast(message){
    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            margin:"100px 0"
        },
    }).showToast();
}

async function loadCourseDropDown(dropdownId=null,selectedId=null){
    let coursesData=await fetch(url+'courses');
    coursesData=await coursesData.json();
    if (coursesData.status){
        let courses=coursesData.data;
        let dropdownHtml='<option selected disabled value=""> Select Course </option>'
        for (let course of courses) {
            dropdownHtml+=`<option value="${course.id}"> ${course.name} </option>`;
        }
       document.getElementById(dropdownId).innerHTML=dropdownHtml;
    }
}
// loadCourseDropDown()