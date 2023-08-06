<footer>
  <div class="footer-content">
    <h3 class="question_inverse">Any Suggestions?✨</h3>

    We would love to get your feedback.<br>Feel free to contact us from the links given below.<br>If You need anything we can prove assistance from the helpline below as well.
    <div class="sugg-wrapper">
      <img src="./images/suggestion.svg" alt="suggestion img" class="hide-for-mobile" width="450px">

      <head>
        <style>
          /* Styles for the "Suggestion" button */
          .center-button {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
          }

          /* Styles for the dialog overlay */
          .dialog-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
          }

          /* Styles for the dialog box */
          .dialog-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #1fc5a8;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 10000;
          }

          .dialog-box h2 {
            margin-top: 0;
          }

          .dialog-box label {
            display: block;
            margin-bottom: 5px;
          }

          .dialog-box input[type="text"],
          .dialog-box input[type="email"],
          .dialog-box textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
          }

          .dialog-box textarea {
            resize: vertical;
          }

          .dialog-box input[type="submit"],
          .dialog-box button {
            background-color: #fff;
            color: #1fc5a8;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
          }

          .dialog-box input[type="submit"] {
            margin-right: 10px;
          }

          .dialog-box button[type="button"] {
            background-color: #e6e6e6;
          }

          .dialog-box input[type="submit"]:hover,
          .dialog-box button:hover {
            background-color: #ddd;
          }
        </style>
      </head>


      <body>
        <div class="center-button">
          <button class="suggestion_button" onclick="openDialog()">Feedback</button>
        </div>

        <!-- Dialog overlay -->
        <div class="dialog-overlay" id="dialogOverlay"></div>

        <!-- Dialog box content -->
        <div class="dialog-box" id="dialogBox">
          <h2>Feedback Form</h2>
          <form action="feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="feedback">Feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Submit" name="feed_btn" >
            <button type="button" name="feed_btn" onclick="closeDialog()">Close</button>
          </form>
        </div>

        <script>
          function openDialog() {
            document.getElementById('dialogOverlay').style.display = 'block';
            document.getElementById('dialogBox').style.display = 'block';
          }

          function closeDialog() {
            document.getElementById('dialogOverlay').style.display = 'none';
            document.getElementById('dialogBox').style.display = 'none';
          }
        </script>
      </body>


    </div>

  </div>
  <div class="footer-bottom">

    <div class="footer-menu">
      <ul class="f-menu">

        <li>Phone number:<a href="">01-4354882</a></li><br>

      </ul>
    </div>
  </div>

</footer>