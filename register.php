
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
    <h2>Employee Registration</h2>
    
    <!-- FIX: Added enctype="multipart/form-data" for file upload -->
    <form action="register_controller.php" method="POST" enctype="multipart/form-data">
        
        <div>
            <label>Email Address</label>
            <input type="email" name="work_email_address" required />
        </div>
        
        <div>
            <label>Password</label>
            <input type="password" name="password_hash" required />
        </div>
        
        <div>
            <label>Full Name</label>
            <input type="text" name="full_name" required />
        </div>
        
        <div>
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" required />
        </div>
        
        <div>
            <label>Place of Birth</label>
            <input type="text" name="place_of_birth" required />
        </div>
        
        <div>
            <label>Gender</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        
        <div>
            <label>Civil Status</label>
            <select name="civil_status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>
        </div>
        
        <div>
            <label>Date of Hire</label>
            <input type="date" name="date_of_hire" required />
        </div>
        
        <div>
            <label>Position</label>
            <input type="text" name="position" required />
        </div>
        
        <div>
            <label>Area of Expertise</label>
            <input type="text" name="area_of_expertise" />
        </div>
        
        <div>
            <label>Work Contact Number</label>
            <input type="text" name="work_contact_number" required />
        </div>
        
        <div>
            <label>Personal Contact Number</label>
            <input type="text" name="personal_contact_number" required />
        </div>
        
        <div>
            <label>Address</label>
            <input type="text" name="address" required />
        </div>
        
        <div>
            <label>Personal Email Address</label>
            <input type="email" name="personal_email_address" required />
        </div>
        
        <div>
            <label>TIN</label>
            <input type="text" name="tin" required />
        </div>
        
        <div>
            <label>Social Security Number</label>
            <input type="text" name="social_security_number" required />
        </div>
        
        <div>
            <label>PhilHealth Number</label>
            <input type="text" name="philhealth_number" required />
        </div>
        
        <div>
            <label>IBP Number</label>
            <input type="text" name="ibp_number" />
        </div>
        
        <div>
            <label>Bar Admission Date</label>
            <input type="date" name="bar_admission_date" />
        </div>
        
        <div>
            <label>College/University</label>
            <input type="text" name="college_university" />
        </div>
        
        <div>
            <label>Year Graduated (College)</label>
            <input type="date" name="year_graduated_college" />
        </div>
        
        <div>
            <label>Law School</label>
            <input type="text" name="law_school" />
        </div>
        
        <div>
            <label>Year Graduated (Law)</label>
            <input type="date" name="year_graduated_law" />
        </div>
        
        <div>
            <label>Emergency Contact Name</label>
            <input type="text" name="emergency_contact_name" required />
        </div>
        
        <div>
            <label>Emergency Contact Relationship</label>
            <input type="text" name="emergency_contact_relationship" required />
        </div>
        
        <div>
            <label>Emergency Contact Number</label>
            <input type="text" name="emergency_contact_number" required />
        </div>
        
        <div>
            <label>Profile Picture</label>
            <input type="file" name="profile_picture" accept="image/*" />
        </div>
        
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
