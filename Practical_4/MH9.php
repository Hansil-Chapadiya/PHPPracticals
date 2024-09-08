<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>

<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <div id="page-wrap" class="container mt-2" style="border:2px groove #0000FF">
      <h2 class="text-primary">Try_Catch</h2>
      <form action="p4_9.php" method="post" id="quiz-form">
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label display-6 text-primary">Enter Number 1</label>
            <input type="number" name="first_num" id="first_num" class="form-control" required="required" value="<?php echo $first_num; ?>" />
         </div>
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label display-6 text-primary">Enter Number 2</label>
            <input type="number" name="second_num" id="second_num" class="form-control" required="required" value="<?php echo $second_num; ?>" />
         </div>
         <div class="mb-3 d-flex">
            <input type="submit" name="submit" value="submit" class="btn btn-outline-primary form-control me-2 btn-lg" />
         </div>
         <div class="m-3 d-flex">
            <?php
            function divide($divdend, $divisor)
            {
               if ($divisor == 0) {
                  throw new Exception("Division By Zero(Can't Valid)");
               } else {
                  return $divdend / $divisor;
               }
            }
            if (isset($_POST["submit"])) {
               try {
                  echo  '<div class="m-3 d-flex col-6">' . $_POST['first_num'] . '/' . $_POST['second_num'] . ' = ' . divide($_POST['first_num'], $_POST['second_num']) . '</div>';
               } catch (Exception $e) {
                  echo '<div class="m-3 d-flex col-6">' . $e->getMessage() . '</div>';
               }
            } ?>
         </div>
      </form>
   </div>
</body>

</html>