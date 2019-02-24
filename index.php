<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <link rel="stylesheet" href="www/css/index.css" />
    <link rel="stylesheet" href="www/css/header.css">
    <link rel="stylesheet" href="www/css/footer.css">
    <link rel="stylesheet" href="www/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Notes</title>
</head>
<body>
      <header>
        <figure>
          <img src="www/img/icon.png"/>
        </figure>
        <h1>Notes</h1>
      </header>

      <main>
        <ul class="ul_list" id="myList"></ul>
      </main>

      <div class="hidden-container">

        <form action="data.php" method="post">
          <header>
            <figure>
              <button type="submit" name="submit" id="add"></button>
            </figure>
            <h1> Add </h1>
          </header>
          <input id="text_area" type="text" name="text">
          <!--<textarea id="text_area" name="text"></textarea>-->
        </form>
      </div>

      <div id="edit_content">
        <figure>
          <img id="edit" src="www/img/edit.png" alt="">
        </figure>
        <h1>Edit</h1>
        <textarea id="edit_text_area"></textarea>
      </div>

      <div id="delete_box" class="container">
        <h4>Delete?</h4>
        <p> Are you sure you like to delete? </p>

        <div class="btn_content">
          <button class="btn" id="btn_no" type="button" name="button">Cancel</button>
          <button class="btn_yes btn" id="btn_yes" type="button" name="button">Yes</button>
        </div>
      </div>

      <footer>
        <figure>
          <img id="add_icon" src="www/img/add_icon.png"/>
        </figure>
      </footer>

      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      <script type="text/javascript" src="www/js/index.js"></script>

</body>
</html>
