<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <button class="close-btn">X</button>
    <div class="logo">
        <img src="logos.png" alt="Logo">
    </div>
    <div class="content">
        <h1>Tell us more about you.</h1>
        
        <form>
            <label for="company">What Company/Organization do you represent?</label>
            <input type="text" id="company" required>

            <label for="concern">What are your main concerns and goals regarding this legal matter?</label>
            <input type="text" id="concern" required>

            <label for="outcome">What outcome are you hoping to achieve?</label>
            <input type="text" id="outcome" required>

            <button type="submit" class="ok-btn">OK</button>
        </form>
    </div>
</body>
</html>
