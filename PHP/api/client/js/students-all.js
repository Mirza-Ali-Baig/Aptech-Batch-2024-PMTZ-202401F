

const fetchAllStudent= async ()=>{
    let studentsData= await fetch(`${url}students`)
    studentsData=await studentsData.json();
    if (studentsData.status){
        let studentsContainer=document.getElementById('studentsContainer');
        studentsContainer.innerHTML='';
        let tr="";
        for (let student of studentsData.data) {
            tr+=`<tr>
                    <th scope="row">${student.id}</th>
                    <td>${student.name}</td>
                    <td>${student.email}</td>
                    <td>${student.phone}</td>
                    <td>${student.course}</td>
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
        studentsContainer.innerHTML=tr;
        showToast(studentsData.message)
    }
}

fetchAllStudent();