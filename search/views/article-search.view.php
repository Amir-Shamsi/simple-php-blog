
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/search-main.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="icon" href="../assets/img/logo/icon.png">
    <title>Search</title>
      <!-- Scroll Bar! -->
      <style>
          /* width */
          ::-webkit-scrollbar {
              width: 10px;
              background: black;
          }
          /* Track */
          ::-webkit-scrollbar-track {
              /*box-shadow: inset 0 0 5px black;*/
              border-radius: 10px;
          }
          /* Handle */
          ::-webkit-scrollbar-thumb {
              background: #00b812;
              border-radius: 10px;
          }
          /* Handle on hover */
          ::-webkit-scrollbar-thumb:hover {
              background: #007213;
          }
      </style>

  </head>
  <body>

    <div class="s130">

      <form action="search.php" method="POST">
          <div class="form-group" style="margin-top: -10%; margin-bottom: 15%; text-align: center">
              <a style=" font-size: 50pt; color: #f6a737 ">جستوجو در بین مقالات</a>
          </div>
          <div class="inner-form" dir="rtl">

            <div class="input-field first-wrap">
            <div class="svg-wrapper" >
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" class="form-control" name="lblSearch" type="text" placeholder="دنبال چه چیزی میگردید؟" required = "required"  />

          </div>
          <div class="input-field second-wrap">
            <button name="btnSearch" class="btn-search" type="submit" style="font-size: 20pt" >جستوجو</button>

          </div>
        </div>

        <span dir="rtl" style="margin-left:70% " class="info">مثال: ریز تراشه ها، تکنولوژی، و ...</span>
          <?php function scroll(){?>
          <a class="js-scroll-trigger" href="#portfolio">

          <div class="arrow">
              <span></span>
              <span></span>
              <span></span>

          </div>

              <a class="js-scroll-trigger" href="#portfolio"></a>

          <? }?>
      </form>
    </div>
<!------------------------------------------------------------------->
    <!------------------------------------------------------------------->
                <?php
                if (isset($_GET['key'])){
                    article_search();
                    footer();
                }
                if(isset($_POST['btnSearch'])){
                    ?><script>window.location.href = "../search/search.php?key=<? echo $_POST['lblSearch'] ?>#portfolio";</script><?
                }
                ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="../js/search-extention/choices.js"></script>
    <script src="../js/scripts.js"></script>

  </body>
</html>
