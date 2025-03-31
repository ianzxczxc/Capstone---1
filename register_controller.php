<?php

$host = 'localhost';
$dbname = 'example';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employeeData = [
        'full_name' => $_POST['full_name'],
        'date_of_birth' => $_POST['date_of_birth'],
        'place_of_birth' => $_POST['place_of_birth'],
        'gender' => $_POST['gender'],
        'civil_status' => $_POST['civil_status'],
        'date_of_hire' => $_POST['date_of_hire'],
        'position' => $_POST['position'],
        'role' => 'Employee', 
        'area_of_expertise' => $_POST['area_of_expertise'],
        'workcontactnumber' => $_POST['work_contact_number'],
        'workemail' => $_POST['work_email_address'],
        'personalcontactnumber' => $_POST['personal_contact_number'],
        'mailing_address' => $_POST['address'],
        'personalemail' => $_POST['personal_email_address'],
        'tin' => $_POST['tin'],
        'social_security_number' => $_POST['social_security_number'],
        'philhealth_number' => $_POST['philhealth_number'],
        'password' => password_hash($_POST['password_hash'], PASSWORD_DEFAULT),
        'ibp_number' => $_POST['ibp_number'] ?? null,
        'bar_admission_date' => $_POST['bar_admission_date'] ?? null,
        'college_university' => $_POST['college_university'] ?? null,
        'year_graduated_college' => $_POST['year_graduated_college'] ?? null,
        'law_school' => $_POST['law_school'] ?? null,
        'year_graduated_law' => $_POST['year_graduated_law'] ?? null,
        'emergency_contact_name' => $_POST['emergency_contact_name'],
        'emergency_contact_relationship' => $_POST['emergency_contact_relationship'],
        'emergency_contact_number' => $_POST['emergency_contact_number'],
        'profile_picture' => null
    ];

    if (!empty($_FILES['profile_picture']['name'])) {
        $uploadDir = 'uploads/profile_pictures/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $filename = uniqid() . '_' . basename($_FILES['profile_picture']['name']);
        $targetPath = $uploadDir . $filename;

        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetPath)) {
            $employeeData['profile_picture'] = $targetPath;
        }
    }

    try {
        $sql = "INSERT INTO employees (
            full_name, date_of_birth, place_of_birth, gender, civil_status, 
            date_of_hire, position, role, area_of_expertise, workcontactnumber, 
            workemail, personalcontactnumber, mailing_address, personalemail, 
            tin, social_security_number, philhealth_number, password,
            ibp_number, bar_admission_date, college_university, 
            year_graduated_college, law_school, year_graduated_law, 
            emergency_contact_name, emergency_contact_relationship, 
            emergency_contact_number, profile_picture, created_at
        ) VALUES (
            :full_name, :date_of_birth, :place_of_birth, :gender, :civil_status, 
            :date_of_hire, :position, :role, :area_of_expertise, :workcontactnumber, 
            :workemail, :personalcontactnumber, :mailing_address, :personalemail, 
            :tin, :social_security_number, :philhealth_number, :password,
            :ibp_number, :bar_admission_date, :college_university, 
            :year_graduated_college, :law_school, :year_graduated_law, 
            :emergency_contact_name, :emergency_contact_relationship, 
            :emergency_contact_number, :profile_picture, NOW()
        )";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($employeeData);

        // JavaScript alert for success
        echo "<script>alert('Employee registered successfully!'); window.location.href='your_redirect_page.php';</script>";
        exit;
        
    } catch (PDOException $e) {
        echo "<script>alert('Error saving employee data: " . addslashes($e->getMessage()) . "');</script>";
    }
}

?>
