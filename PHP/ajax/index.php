<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main class="flex py-24 h-screen flex-col items-center bg-gray-100 ">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">PHP AJAX CRUD Application With jQuery</h1>
    <div class="flex flex-col w-full max-w-6xl">
        <!-- Top bar with Search and Add button -->
        <div class="flex justify-between items-center mb-4 px-4">
            <!-- Search input and button -->
            <div class="flex items-center space-x-2">
                <input type="text" id="searchInput" placeholder="Search..."
                       class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <!-- Add button -->
            <button type="button"
                    class="px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Add
            </button>
        </div>

        <!-- Table -->
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Course
                            </th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                Details
                            </th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                Edit
                            </th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody id="tableBody" class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York</td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Details
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-yellow-600 hover:text-yellow-800 focus:outline-none focus:text-yellow-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Edit
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Add Student Modal -->
<div id="addStudentModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-medium text-gray-800 mb-4">Add Student</h2>
        <div class="space-y-4">
            <input type="text" id="studentName" placeholder="Name" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <input type="email" id="studentEmail" placeholder="Email" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <input type="text" id="studentPhone" placeholder="Phone" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <select id="studentCourse" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                <option value="" selected disabled>Select Course</option>
                <option value="course1">Course 1</option>
                <option value="course2">Course 2</option>
                <option value="course3">Course 3</option>
            </select>
        </div>
        <div class="flex justify-end mt-6">
            <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded-md mr-2" onclick="closeModal('#addStudentModal')">Cancel</button>
            <button id="saveStudentBtn" type="button" class="px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md">Save</button>
        </div>
    </div>
</div>

<!-- View Student Modal -->
<div id="viewStudentModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-medium text-gray-800 mb-4">View Student</h2>
        <div class="space-y-4">
            <p><strong>Name:</strong> <span id="viewStudentName">Ali</span></p>
            <p><strong>Email:</strong> <span id="viewStudentEmail">al@al.com</span></p>
            <p><strong>Phone:</strong> <span id="viewStudentPhone">0123456789</span></p>
            <p><strong>Course:</strong> <span id="viewStudentCourse">PHP</span></p>
        </div>
        <div class="flex justify-end mt-6">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md" onclick="closeModal('#viewStudentModal')">Close</button>
        </div>
    </div>
</div>

<!-- Edit Student Modal -->
<div id="editStudentModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-medium text-gray-800 mb-4">Edit Student</h2>
        <div class="space-y-4">
            <input type="text" id="editStudentName" placeholder="Name" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <input type="email" id="editStudentEmail" placeholder="Email" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <input type="text" id="editStudentPhone" placeholder="Phone" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
            <select id="editStudentCourse" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm">
                <option value="" selected disabled>Select Course</option>
                <option value="course1">Course 1</option>
                <option value="course2">Course 2</option>
                <option value="course3">Course 3</option>
            </select>
        </div>
        <div class="flex justify-end mt-6">
            <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded-md mr-2" onclick="closeModal('#editStudentModal')">Cancel</button>
            <button id="updateStudentBtn" type="button" class="px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-md">Update</button>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteConfirmationModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-medium text-gray-800 mb-4">Delete Confirmation</h2>
        <p class="text-sm text-gray-600 mb-6">Are you sure you want to delete this student?</p>
        <div class="flex justify-end">
            <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded-md mr-2" onclick="closeModal('#deleteConfirmationModal')">Cancel</button>
            <button type="button" id="deleteStudentBtn" class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md">Delete</button>
        </div>
    </div>
</div>

</body>
</html>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Function to open modal
    function openModal(modalId) {
        $(modalId).removeClass('hidden');
    }

    // Function to close modal
    function closeModal(modalId) {
        $(modalId).addClass('hidden');
    }

    $(document).ready(function () {
        // Add button click event
        $('button:contains("Add")').click(function () {
            openModal('#addStudentModal');
        });

        // Details button click event
        $('#tableBody').on('click','#detail-btn',function(){
            openModal('#viewStudentModal');
            let tr=$(this).parent().parent();
            let name=tr.children().eq(0);
            let email=tr.children().eq(1);
            let phone=tr.children().eq(2);
            let course=tr.children().eq(3);
            $('#viewStudentName').text(name.text());
            $('#viewStudentEmail').text(email.text());
            $('#viewStudentPhone').text(phone.text());
            $('#viewStudentCourse').text(course.text());
            
        });

        let editId=null
        // Edit button click event
        $('#tableBody').on('click','#edit-btn',function(){
            $id=$(this).attr('data-id');
            editId=$id;
            openModal('#editStudentModal');
            let tr=$(this).parent().parent();
            let name=tr.children().eq(0);
            let email=tr.children().eq(1);
            let phone=tr.children().eq(2);
            let courseId=tr.children().eq(3).attr('data-id');
            $('#editStudentName').val(name.text());
            $('#editStudentEmail').val(email.text());
            $('#editStudentPhone').val(phone.text());
            getAllCourses('#editStudentCourse',courseId);
            
            
        });

        // Update button click event

        $('#updateStudentBtn').click(function(){
            console.log(editId);
             let name=$('#editStudentName').val();
             let email=$('#editStudentEmail').val();
             let phone=$('#editStudentPhone').val();
             let courseId=$('#editStudentCourse').val();
             if(name=='' || email=='' || phone==''){
                alert('All fields are required');
                return;
            }
            $.ajax({
                url:'actions/editStudent.php',
                method:'POST',
                data:{id:editId,name,email,phone,course:courseId},

                success:function(data){
                    closeModal('#editStudentModal');
                    alert('Student Edit successfully');
                    console.log(data);
                    getAllStudents();
                },
                error:function(){
                    console.log('Error occurred');
                }
            })
            
        });
        // Delete button click event
        let deleteId=null;
        $('#tableBody').on('click','#delete-btn',function(){
            let id=$(this).attr('data-id');
            deleteId=id;
            openModal('#deleteConfirmationModal');
            
        });

        $('#deleteStudentBtn').click(function(){
            $.ajax({
                url:'actions/deleteStudent.php',
                method:'POST',
                data:{id:deleteId},

                success:function(data){
                    closeModal('#deleteConfirmationModal');
                    alert('Student Deleted successfully');
                    getAllStudents();
                },
                error:function(){
                    console.log('Error occurred');
                }
            })

        });


        $('#saveStudentBtn').click(function () {
            let name=$('#studentName').val();
            let email=$('#studentEmail').val();
            let phone=$('#studentPhone').val();
            let course=$('#studentCourse').val();

            if(name==null || email==null || phone==null || course==null){
                alert('All fields are required');
                return;
            }
            $.ajax({
                url:'actions/addStudent.php',
                method:'POST',
                data:{name,email,phone,course},

                success:function(data){
                    closeModal('#addStudentModal');
                    alert('Student added successfully');
                    console.log(data);
                    getAllStudents();
                },
                error:function(){
                    console.log('Error occurred');
                }
            })
            
        })
        $('#searchInput').keydown(function(){
            console.log($(this).val());
            getAllStudents($(this).val()); // Call the function to get all students with search query
            
        });

        function getAllCourses(selectboxId,id =null){
            $.ajax({
                url:'actions/getAllCourses.php',
                method:'POST',
                data:{id},

                success:function(data){
                    $(selectboxId).html(data);
                    // console.log(data);
                    
                },
                error:function(){
                    console.log('Error occurred');
                }
            })
        }
        getAllCourses('#studentCourse'); // Call the function to get all courses on page load

        function getAllStudents(search=null){
            $.ajax({
                url:'actions/getAllStudents.php',
                method:'POST',
                data:{search},

                success:function(data){
                    $('#tableBody').html(data);
                    
                },
                error:function(){
                    console.log('Error occurred');
                }
            })
        }
        getAllStudents(); // Call the function to get all courses on page load
    });
</script>