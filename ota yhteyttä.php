<?php
                include 'header.php';
                ?>
            <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
            </script>
            <div class="lomake">
              <h2>Ota yhteyttä</h2>
             <div id="error_message"></div>
             <form id="myform">
               <div class="input_field">
                 <input type="text" placeholder="Nimi" id="nimi" required>
                </div>
                 <div class="input_field">
                 <input type="text" placeholder="Aihe" id="aihe" required>
                </div>
                 <div class="input_field">
                 <input type="text" placeholder="Puhelinnumero" id="puhelinnumero" required>
                </div>
                 <div class="input_field">
                 <input type="text" placeholder="Sähköposti" id="sähköposti" required>
                </div>
                 <div class="input_field">
                 <textarea name="text" id="viesti" cols="30" rows="10" placeholder="Viesti"></textarea>
               </div>
               <div class="checkbox" >
                <label for="">Haluan tilata Puutarhaliike Neilikan uutiskirjeen</label>
                 <input type="checkbox">   
               </div>
               <div >
                 <button onclick="lähetä()" class="btn">Lähetä</button>
                 <p id="note"></p>
               </div>
             </form>
            </div>
            <p id="note"></p>
            <script src="script.js"></script>
            <?php
                include 'footer.php';
                ?>
    </body>
</html>