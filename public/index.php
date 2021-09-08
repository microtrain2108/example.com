<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>MicroTrain2108 Welcome</title>
    <meta name="description" content="Hello Welcome to MicroTrain2108 Chicago West Loop">
    <meta name="keywords" content="hello, welcome, MicroTrain2108, webdesign, development, web developer, Chicago West Loop">
    <link rel="author" href="humans.txt" />
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
        <h1>Hello Welcome to MicroTrain2108</h1>
        <p>Welcome to MicroTrain2018. Home of Creative Chicago West Loop Web Design and Development.</p>
      </section>
      <section>  
      <h2>HTML Elements</h2>
        <!-- <img style="border-radius: 50%; float: left; margin-right: 1em;" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="MicroTrain2108 Avatar"> -->
        <img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="MicroTrain2108 Avatar">
        <p>
        Welcome to MicroTrain Agile Full Stack Web & Mobile Hybrid Developement. Webdesign, development and learning of MERN, MEAN and LAMP. Many projects in Chicago West Loop.        </p>
      </section>
      <section>
      <h2>Character Entities</h2>
        <p>Since the keyboard does not have a &copy; key we need a way to reference this so we say &amp;copy;. Additionally, greater than and less than are interpreted as HTML tags. These are examples of symbols that we may want to display but will not be able to with out a work around. This is where character entities come into play. </p>
        <ul>
            <li><a href="https://stackoverflow.com/questions/1016080/why-are-html-character-entities-necessary">A Stack Overflow thread on the topic.</a></li>
            <li><a href="https://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references">A Wikipedia artcile on the topic.</a></li>
            <li><a href="https://dev.w3.org/html5/html-author/charref">The W3C reference.</a></li>
        </ul>
      </section>
      <section>
        <h2>Summary</h2>
        <p>In summation...</p>
      </section>
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
