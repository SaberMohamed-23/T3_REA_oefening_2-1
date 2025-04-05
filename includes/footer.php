

    <footer>
  
      <p>
          <?php
         if(isset($_COOKIE["userCountryCode"]) && $_COOKIE["userCountryCode"] !== "0" )
         {
           $countryCode = $_COOKIE["userCountryCode"];
           echo "<img src='../images/flags/$countryCode.png'>";
           
         } 
         else
         {
           echo "<a href='../pages/6-1.php'> geef een land op </a>";
         }
        
        ?>
      </p>


      <p class="user_name">
        <?php
        
        if(isset($_COOKIE["userNameCookie"]) == true)
        {
          $username = $_COOKIE["userNameCookie"];
          echo "$username";
        }
        else
        {
          echo "Onbekend_gebruiker";
        }
        
        
        
        ?>
      </p>


        <p>
        &copy;
        <?php 
        require "../includes/variable.php";
        echo "Naam: " . $naam . " | Klas: " . $klas . " | " . $datum;
        ?>
         </p>
     
    </footer>

</body>
</html>