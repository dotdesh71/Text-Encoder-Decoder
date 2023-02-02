<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
  <section class="section">
  <div class="container">
    <h1 class="title has-text-centered">Text Encoder & Decoder</h1>
    <h2 class="subtitle has-text-centered">Enter text or encoded number to encode or decode</h2>
    <div class="box">
    <form>
      <div class="field">
        <label class="label">Text</label>
        <div class="control">
          <textarea class="textarea" id="text"></textarea>
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" id="encode">Encode</button>
        </div>
        <div class="control">
          <button class="button is-link" id="decode">Decode</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</section>

    <script>
      $("#encode").click(function(e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "encode.php",
          data: { text: $("#text").val() },
          success: function(encodedText) {
            $("#text").val(encodedText);
          }
        });
      });
      
      $("#decode").click(function(e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "decode.php",
          data: { encoded_text: $("#text").val() },
          success: function(decodedText) {
            $("#text").val(decodedText);
          }
        });
      });
    </script>
  </body>
</html>
