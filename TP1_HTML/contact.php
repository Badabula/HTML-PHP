<!DOCTYPE html>
<html lang="eng">
<!--TP HTML 1 Aboulakjam Badr-->

<head>
    <meta charset="UTF-8">
    <title>where to find us</title>
    <meta name="Keywords" content="put, keywords, for, google, searches, here">
    <meta name="description" content="this is the description of the website">
    <link href="CSS\style.css" rel="stylesheet">
</head>

<body class="header">
    
    <?php include("header.php") ?>

    <section class="main">
        <h2 style="color:red;">where to find us</h2>
        <p>
            69 rue grand ouest <br>
            78410 Paris <br>
            France <br>
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.833018625949!2d2.346830401243274!3d48.93762220000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e669fdac60b249%3A0xd3ff6de738ba96a0!2sRTA%20PRESTA%20SERVICE%20ET%20FORMATION!5e0!3m2!1sen!2sfr!4v1663839323232!5m2!1sen!2sfr" width="100%" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="main">
        <h2 style="color:red;">send us an email</h2>
        <form action="contact.html">
            <fieldset class="table">
                <legend>send us an email</legend>
                <div>
                    <div><label for="email">votre email:</label></div>
                    <div><input type="email" required id="email" name="email"></div>
                </div>
                <div>
                    <div><label for="firstname">votre prenom:</label></div>
                    <div><input type="text" required id="firstname" name="firstname"></div>
                </div>
                <div>
                    <div><label for="message">votre message:</label></div>
                    <div><textarea id="message" name="message" required>message</textarea></div>
                    <div><button type="submit">send your email</button></div>
                </div>
            </fieldset>
        
        </form>
    </section>

    <?php include("footer.php") ?>

</body>


</html>