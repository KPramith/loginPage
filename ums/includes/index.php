<?php 
// Ensure the action variable is set
if (isset($action)) {
    if ($action == 'Update') {
        // Update record
        $stmt = $conn->prepare("UPDATE student SET Firstname = ?, Lastname = ?, Age = ?, Gender = ? WHERE Stu_no = ?");
        $stmt->bind_param("sssss", $firstName, $lastName, $age, $gender, $stu_no);

        if ($stmt->execute()) {
            echo "Record updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($action == 'Delete') {
        // Delete record
        $stmt = $conn->prepare("DELETE FROM student WHERE Stu_no = ?");
        $stmt->bind_param("s", $stu_no);

        if ($stmt->execute()) {
            echo "Record deleted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid action specified.";
    }
} else {
    echo "No action specified.";
}

// Close the connection
$conn->close();
?>
