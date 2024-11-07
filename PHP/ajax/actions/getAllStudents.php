<?php
require_once '../config/Student.php';

$search=$_POST['search'] ?? '';


$students=$db->getAllStudents($search);

$trHTML='';


foreach($students as $student){
    $trHTML.='<tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">'.$student['name'].'</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">'.$student['email'].'</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">'.$student['phone'].'</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800" data-id="'.$student['course_id'].'">'.$student['course'].'</td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button" id="detail-btn"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                        Details
                    </button>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"  id="edit-btn" data-id="'.$student['id'].'"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-yellow-600 hover:text-yellow-800 focus:outline-none focus:text-yellow-800 disabled:opacity-50 disabled:pointer-events-none">
                        Edit
                    </button>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <button type="button"  id="delete-btn" data-id="'.$student['id'].'"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">
                        Delete
                    </button>
                </td>
            </tr>';
}

echo $trHTML;
