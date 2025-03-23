<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <div class="container">
        <div class="text">
           Insert your product
        </div>
        <form action="main.php">
            <div>
                <input type="file" name="file">
            </div>
           <div class="form-row">
              <div class="input-data">
                 <input class="inp" type="text" required name="title">
                 <div class="underline"></div>
                 <label for="">Title</label>
              </div>
              <div class="input-data">
                 <input class="inp" type="text" required name="price">
                 <div class="underline"></div>
                 <label for="">Price</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                <input onclick="document.getElementById('cat1').disabled = false; document.getElementById('oci').disabled = true;" type="radio" name="type" checked="checked" class="rd">
                <label for="">Categorie</label>
                 <select name="cat" id="cat1" name="cat1">
                 <?php
                 /*
                     <option value="">Categorie</option>
                    <?php

                        include("../cnx.php");
                        $res = mysqli_query($cnx , "SELECT DISTINCT(cat) from prod");
                        while($t = mysqli_fetch_array($res)){
                           echo"<option value='$t[0]'>$t[0]</option>";
                        }*/
                  ?>
                 </select>
                 <label for="" id="cat">Categorie</label>
              </div>
              <div class="input-data">
                <input onclick="document.getElementById('oci').disabled = false; document.getElementById('cat1').disabled = true;" type="radio" name="type" checked="checked" id ="oc"class="rd">
                 <input class="inp" type="text" id="oci" required name="cat2">
                 <div class="underline"></div>
                 <label for="">Other Categorie</label>
              </div>
           </div>
           <div class="form-row">
           <div class="input-data textarea">
              <textarea rows="8" cols="80" required name="dis"></textarea>
              <br />
              <div class="underline"></div>
              <label for="">Discreption</label>
              <br />
              <!-- HTML !-->
            <input type="submit" class="button-17" role="button">
        </form>
        </div>
</body>
</html>