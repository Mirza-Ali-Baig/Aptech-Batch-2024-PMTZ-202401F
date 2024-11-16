
let addCourseForm=document.getElementById('addCourseForm');

addCourseForm.addEventListener('submit', async (ev)=>{
    ev.preventDefault();
    const courseName=document.getElementById('courseName');
    if (courseName.value ===""){
        showToast("Course Name is Required")
        return;
    }
    let addCourse= await fetch(url+'students',{
        method:"POST",
        body:JSON.stringify({name:courseName.value}),
        headers:{
            "Content-Type":"application/json"
        }
    })
    addCourse=await addCourse.json();
    console.log(addCourse);
})