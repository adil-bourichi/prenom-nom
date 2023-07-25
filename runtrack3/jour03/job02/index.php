<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
      #message {
        margin-top: 20px;
        font-weight: bold;
      }

      .green {
        color: green;
      }

      .red {
        color: red;
      }
    </style>
  </head>
  <body>
    <button id="shuffleButton">Mélanger les images</button>
    <div id="imageContainer">
      <img class="image" src="arc1.png" alt="red">
      <img class="image" src="arc2.png" alt="orange">
      <img class="image" src="arc3.png" alt="yellow">
      <img class="image" src="arc4.png" alt="green">
      <img class="image" src="arc5.png" alt="blue">
      <img class="image" src="arc6.png" alt="purple">
    </div>
    <div id="message"></div>

    <script>
      var correctOrder = ["red", "orange", "yellow", "green", "blue", "purple"];

      $(document).ready(function() {
        $("#shuffleButton").click(function() {
          shuffleImages();
        });

        $(".image").on("dragstart", function(event) {
          event.originalEvent.dataTransfer.setData("text/plain", $(this).attr("alt"));
        });

        $(".image").on("dragover", function(event) {
          event.preventDefault();
        });

        $(".image").on("drop", function(event) {
          event.preventDefault();
          var alt = event.originalEvent.dataTransfer.getData("text/plain");
          var image = $('img[alt="' + alt + '"]');
          $(this).after(image);
          checkOrder();
        });
      });

      function shuffleImages() {
        var images = $(".image");
        var container = $("#imageContainer");
        container.empty();
        images.sort(function() {
          return 0.5 - Math.random();
        }).appendTo(container);
      }

      function checkOrder() {
        var images = $(".image");
        var currentOrder = images.map(function() {
          return $(this).attr("alt");
        }).get();
        if (JSON.stringify(currentOrder) === JSON.stringify(correctOrder)) {
          showMessage("Vous avez gagné", "green");
        } else {
          showMessage("Vous avez perdu", "red");
        }
      }

      function showMessage(text, colorClass) {
        var messageElement = $("#message");
        messageElement.text(text);
        messageElement.removeClass("green red").addClass(colorClass);
      }
    </script>
  </body>
</html>
