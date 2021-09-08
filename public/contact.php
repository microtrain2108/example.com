<?php
//Include non-vendor files
require '../core/About/src/Validation/Validate.php';

//Declare Namespaces
use About\Validation;

//Validate Declarations
$valid = new About\Validation\Validate();
$args = [
  'first_name'=>FILTER_SANITIZE_STRING,
  'last_name'=>FILTER_SANITIZE_STRING,
  'subject'=>FILTER_SANITIZE_STRING,
  'message'=>FILTER_SANITIZE_STRING,
  'email'=>FILTER_SANITIZE_EMAIL,
];
$input = filter_input_array(INPUT_POST, $args);

if(!empty($input)){

    $valid->validation = [
        'first_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your first name'
        ]],
        'last_name'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter your last name'
        ]],
        'email'=>[[
                'rule'=>'email',
                'message'=>'Please enter a valid email'
            ],[
                'rule'=>'notEmpty',
                'message'=>'Please enter an email'
        ]],
        'subject'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter a subject'
        ]],
        'message'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please add a message'
        ]],
    ];


    $valid->check($input);
}

if(empty($valid->errors) && !empty($input)){
    $message = "<div>Success!</div>";
}else{
    $message = "<div>Error!</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contact MicroTrain2108 Chicago West Loop For Development">
    <meta name="keywords" content="contact, MicroTrain2108, webdesign, development, web developer, Chicago West Loop">
    <title>MicroTrain2108 Contact Chicago West Loop For Development</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <meta name="msapplication-config" content="ieconfig.xml" />
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
    </head>
    <header>
      <span class="logo">MicroTrain2108</span>
      <a id="toggleMenu">Menu<a>
        <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="resume.html">Resume</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>    
    <body>
      <main>
        <section>
      <h1>Contact MicroTrain2108</h1>
      <p>Ready for Web, Mobile or Application Projects in Chicago West Loop. Message me for Web Design or Development.</p>
      </section>
      <?php echo (!empty($message)?$message:null); ?>

      <form action="contact.php" method="POST">
        
        <input type="hidden" name="subject" value="New submission!">
        
        <div>
          <label for="first_name">First Name</label>
          <input id="first_name" type="text" name="first_name" value="<?php echo $valid->userInput('first_name'); ?>">
          <div class="text-error"><?php echo $valid->error('first_name'); ?></div>
        </div>

        <div>
          <label for="last_name">Last Name</label>
          <input id="last_name" type="text" name="last_name" value="<?php echo $valid->userInput('last_name'); ?>">
          <div class="text-error"><?php echo $valid->error('last_name'); ?></div>
        </div>

        <div>
          <label for="email">Email</label>
          <input id="email" type="text" name="email" value="<?php echo $valid->userInput('email'); ?>">
          <div class="text-error"><?php echo $valid->error('email'); ?></div>
        </div>

        <div>
          <label for="message">Message</label>
          <textarea id="message" name="message"><?php echo $valid->userInput('message'); ?></textarea>
          <div class="text-error"><?php echo $valid->error('message'); ?></div>
        </div>

        <div>
          <input type="submit" value="Send">
        </div>

      </form>
    </main>
    <script>

      var toggleMenu = document.getElementById('toggleMenu');
      var nav = document.querySelector('nav');
      toggleMenu.addEventListener(
        'click',
        function(){
          if(nav.style.display=='block'){
            nav.style.display='none';
          }else{
            nav.style.display='block';
          }
        }
      );
    </script>
    </body>
</html>
