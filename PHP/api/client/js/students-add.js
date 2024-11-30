loadCourseDropDown('studentCourse');
let addStudentForm = document.getElementById('addStudentForm');

addStudentForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    let name = document.getElementById("studentName");
    let email = document.getElementById('studentEmail');
    let phone = document.getElementById('studentPhone');
    let course = document.getElementById('studentCourse');
    if (name.value == '' || email.value == '' || phone.value == '' || course.value == null || course.value == '') {
        alert("All Inputs Are Required!!");
        return;
    }
    try {
        let data = {
            name:name.value,
            email:email.value,
            phone:phone.value,
            course:course.value
        };
        let req = await fetch(url + 'students', {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json"
            }
        })
        req = await req.json();
        if (req.status){
            showToast(req.message);
            name.value='',email.value='',phone.value='',course.value='';
        }
    } catch (e) {
        console.log(e.message);
    }

});
