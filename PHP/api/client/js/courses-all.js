

const fetchAllCourses=async ()=>{
    let courses= await fetch(url+'courses');
    courses=await courses.json();
    if(courses.status){
        let coursesContainer=document.getElementById('coursesContainer');
        coursesContainer.innerHTML='';
        let tr="";
        for (let course of courses.data) {
            tr+=`<tr>
                    <th scope="row">${course.id}</th>
                    <td>${course.name}</td>
                    <td>
                        <a href="#editCourse1" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </a>
                        <a href="#deleteCourse1" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash-fill"></i> Delete
                        </a>
                    </td>
                </tr>`;
        }
        coursesContainer.innerHTML=tr;
        showToast(courses.message)
    }
}
fetchAllCourses()

