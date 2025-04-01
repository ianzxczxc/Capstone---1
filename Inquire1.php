<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <button class="close-btn">X</button>
    <div class="logo">
        <img src="logos.png" alt="Logo">
    </div>
    <div class="content">
        <h1>Hi, it’s great to meet you. Tell us about yourself.</h1>
        <p>What’s your name and the best way to get in touch with you?</p>
        
        <form>
            <label for="first-name">First Name *</label>
            <input type="text" id="first-name" required>

            <label for="last-name">Last Name *</label>
            <input type="text" id="last-name" required>

            <label for="contact-number">Contact Number *</label>
            <input type="tel" id="contact-number" required>

            <label for="email">E-mail Address *</label>
            <input type="email" id="email" required>

            <button type="submit" class="ok-btn">OK</button>
        </form>
    </div>
</body>
</html>
