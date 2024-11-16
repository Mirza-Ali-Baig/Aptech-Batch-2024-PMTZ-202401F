let addCourseForm = document.getElementById('addCourseForm');

addCourseForm.addEventListener('submit', async (ev) => {
    ev.preventDefault();
    const courseName = document.getElementById('courseName');
    if (courseName.value === "") {
        showToast("Course Name is Required")
        return;
    }
    try {
        let addCourse = await fetch(url + 'courses', {
            method: "POST",
            body: JSON.stringify({name: courseName.value}),
            headers: {
                "Content-Type": "application/json"
            }
        })
        addCourse = await addCourse.json();
        if (addCourse.status) {
            showToast(addCourse.message)
        } else {
            console.log(addCourse.message)
        }

    } catch (e) {
        console.log(e)
    }
})