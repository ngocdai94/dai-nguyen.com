    <!-- CONTACT ME -->
    <?=$contactMe?>
    <!-- END CONTACT ME -->
    
    <!-- START Footer -->
    <footer>
        <p>
            <small>
                &copy; 2018 -  <?php echo date("Y");?> by 
                <a href="#" target="_blank">Dai Nguyen</a>, All Rights Reserved ~ 
                
                <a href="http://validator.w3.org/check/referer"
                    target="_blank">Valid HTML</a> ~ 
                    
                <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
            </small>
        </p>
    </footer>
    <!-- END Footer -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise -->
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    </div>
    <!-- END WRAPPER -->
</body>
</html>