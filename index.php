<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio Geert Heemskerk</title>
        <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="src/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="src/css/main.css">
    </head>
    <body>
        <div class="container">
            <header class="jumbotron">
                <h2 class="jumbotron-header">Geert Heemskerk</h2>
                <h2 class="jumbotron-subject">Developer</h2>
                <div class="profile-picture">
                </div>
                <h2 class="jumbotron-info">Scroll down to read more about me</h2>
            </header>
            <div class="info-wrapper">
                <section class="info-wrapper-content">
                  <h2 class="info-wrapper-header">About</h2>
                  <div class="info-container-left">
                    <h2>About me</h2>
                    <p class="wrapper-content">Hi!, My name is Geert Heemskerk I'm 18 years old. I am currently on an intership at Competa IT located in Rijswijk, this is my second periode of intership (2 times half a year). I am still learning so much on this intership about new stuff like frameworks and methods, I am in my third year of school, that is also the last year of my MBO 4 Application developer education. After this education I probably go for an eduction simmular like the one i am doing right now. But I think I'm going towards an eduction that focusses on design or interaction with clients. But I am still not sure what education would be the best for me :(</p>
                  </div>
                      <div class="info-container-right">
                        <h2>Overall experience</h2>
                        <p class="wrapper-content">I am going to tell a short story about my overall experience with development. I worked on different projects on school and most of all at Competa IT. For example we worked on a project for HHS (Haagse Hoge School), we had to work with back-end kenyans, so we had to talk english and via slack. sometimes there were miscommunications and we had to solve them. I learned that you have to be patient to achieve goals. I had to learn new develop languages to achive the goals that needed to be achived! I'm very driven to learn new languages and participate in projects, questions?? contact me below!.</p>
                      </div>
                </section>
                </div>
                <div class="info-container-bottom">
                  <h2 class="info-wrapper-header">Skills</h2>
                    <div class="skills-left">
                      <img class="skills-images" src="img/skills-left.png" alt="skills-left">
                    </div>
                      <img class="skills-middle-image" src="img/skills-middle.png" alt="skills-middle">
                    <div class="skills-right">
                      <img class="skills-images" src="img/skills-right.png" alt="skills-right">
                    </div>
                </div>
                <section class="jumbotron">
                </section>
                <form action="" method="post" class="contact-form">
                  <h2 class="contact-header">Contact</h2>
                     <label>First name</label>
                     <input class="input-name" name="firstname" type="text" placeholder="John"/>
                     <label>Last name</label>
                     <input class="input-name" name="lastname" type="text" placeholder="Doe"/>
                     <label>Email</label>
                     <input class="input-email" name="email" type="text" placeholder="JohnDoe@gmail.com"/>
                     <label>Subject</label>
                     <input class="input-subject" name="subject" type="text" placeholder="Subject..."/>
                     <label>Comment</label>
                     <textarea class="input-comment" name="comment" type="comment" placeholder="I want to contact you because..."></textarea>
                     <button class="send" type="submit" value="Submit">Send</button>
                      <label class="submit-message">
                        <?php
                          if(empty($_POST) === false){
                            $firstname = $_POST['firstname'];
                            $lastname = $_POST['lastname'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $comment = $_POST['comment'];

                            // error messages
                            if(empty($firstname) || empty($lastname) || empty($email) || empty($subject) || empty($comment)){
                              $errors= 'All fields are required!';
                              echo "$errors<br>";
                            }
                            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                              $errors = 'The given email is not correct or does not exist!';
                              echo "$errors<br>";
                            }
                            if(ctype_alpha($firstname) === false){
                              $errors = 'Your first name cannot contain non-letters!';
                              echo "$errors<br>";
                            }
                            if(ctype_alpha($lastname) === false){
                              $errors = 'Your last name cannot contain non-letters!';
                              echo "$errors<br>";
                            }

                            // after everything is complete
                            if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($subject) && !empty($comment)
                              && filter_var($email, FILTER_VALIDATE_EMAIL)
                              && ctype_alpha($firstname)
                              && ctype_alpha($lastname)) {
                                // echo "Firstname: $firstname<br>";
                                // echo "Lastname: $lastname<br>";
                                // echo "Email-address: $email<br>";
                                // echo "Subject: $subject<br>";
                                // echo "Comment: $comment<br>";
                                echo "Thank you! Message is succesfully sent";
                            }
                          }
                        ?>
                    </label>
                </form>
                <div class="footer">
                  <div class="personal-holder">
                    <h2 class="personal-information">Personal information</h2>
                    <div class="contact">
                        <p>Phonenumber:</p>
                          <p>06-12345678</p><br>
                        <p>Email:</p>
                          Geert@competa.com
                    </div>
                    <div class="country">
                      <p>Country:</p>
                        <p>The Netherlands</p><br>
                      <p>rovince:</p>
                        South-Holland
                    </div>
                  </div>

                  <div class="projects-holder">
                    <h2 class="projects-information">Projects I worked on</h2>
                    <div class="projects">
                        <p>HHS(Haagse Hooge School):</p>
                          <p>AngularJS,Sass,HTML5,Grunt</p><br>
                        <p>Competa-Dashboard:</p>
                          PHP7,SQL,Sass,HTML5,Gulp
                    </div>
                    <div class="developer">
                      <p>Competa website:</p>
                        <p>Wordpress,Sass,HTML5,PHP5</p><br>
                      <p>Type developer:</p>
                        Front-end
                    </div>
                  </div>

                  <div class="projects-holder">
                    <h2 class="projects-information">Interests</h2>
                    <div class="projects">
                        <p>My intrests:</p>
                          <p>I am interested in Design</p><br>
                        <p>Next education:</p>
                          <p>HHS(The Heague)CMD(Commucation Media Design)</p>
                    </div>
                    <div class="developer">
                      <p>End of my education:</p>
                        <p>2017 and for CMD 2021</p>
                    </div>
                  </div>

                  <div class="projects-holder">
                    <h2 class="projects-information">Motivation</h2>
                    <div class="projects">
                        <p>Loving the job:</p>
                          <p>Never thought i would like front-end so much!</p><br>
                        <p>Communication is the key:</p>
                          <p>I am a social developer that wants to communicate all the time.</p>
                    </div>
                    <div class="developer">
                      <p>User friendly:</p>
                        <p>I am not a developer that only designs for looks but also for user experience!</p><br>
                    </div>
                  </div>
              </div>
              <div class="img-holder">
                <a href="https://www.linkedin.com/in/geert-heemskerk-7b9048113?trk=hp-identity-name"><img src="img/linkedin.png" class="social-media-logos"></a>
                <a href="https://www.facebook.com/geert.heemskerk.9"><img src="img/facebook.png" class="social-media-logos"></a>
                <a href="http://steamcommunity.com/id/YeTaZ/"><img src="img/steam.png" class="social-media-logos"></a>
                <a href="https://plus.google.com/104941138759102627696 "><img src="img/g+.png" class="social-media-logos"></a>
              </div>
            </div>
            <a href="#top" class="scroll-to-top">Scroll To Top</a>
        <script rel="src/js/index.js" type="text/javascript"></script>
    </body>
</html>
