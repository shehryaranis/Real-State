<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
        <link rel="stylesheet" href="style.css">
        <script>
        (function (document, window, undefined) {
  'use strict';
  
  // Buttons
  var buttons = document.querySelectorAll('.js-button');   
  
  var displayContent = function (button, content) {
    if (content.classList.contains('active')) {
        // Hide content
        content.classList.remove('active');
        button.setAttribute('aria-expanded', 'false');
        content.setAttribute('aria-hidden', 'true');
      } else {
        // Show content
        content.classList.add('active');
        button.setAttribute('aria-expanded', 'true');
        content.setAttribute('aria-hidden', 'false');
      }
  };
  
  [].forEach.call(buttons, function(button, index) {
    // Content var
    var content = button.nextElementSibling;
    
    // Set button attributes
    button.setAttribute('id', 'button-' + index);
    button.setAttribute('aria-expanded', 'false');
    button.setAttribute('aria-controls', 'content-' + index);
    
    // Set content attributes
    content.setAttribute('id', 'content-' + index);
    content.setAttribute('aria-hidden', 'true');    
    content.setAttribute('aria-labelledby', 'button-' + index);
  
    button.addEventListener('click', function () {
      displayContent(this, content);
      return false;
    }, false);
    
    button.addEventListener('keydown', function (event) {
      // Handle 'space' key
      if (event.which === 32) {
        event.preventDefault();
        displayContent(this, content);
      }
    }, false);
    
  });  
  
})(document, window);
        </script>
    </head>
    <body>
        
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">property</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="insert.php">Add Property <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <a href="signUp.php" class="button js-button" role="button">SignUp/Login</a>
      
    </form>
  </div>
</nav>

