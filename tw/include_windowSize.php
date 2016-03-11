<!DOCTYPE html>
<html>
  <head>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.js"></script>
  </head>
  <body>
    <div id="message">Height: 0</div>
    <script>
      $(window).on("resize", function(){
        $("#message").html( "Height: " + $(window).height() );
      });
    </script>
  </body>
</html>