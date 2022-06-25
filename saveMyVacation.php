<?php
session_start();
require_once('saveMyVacation-livesearch.php');

$livesearch = new livesearch();
$data = $livesearch->viewData();
echo "<script>console.log('" . json_encode($data) . "')</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/saveMyVacation.css" />
  <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
  <title>Save My Vacation | LakbAI</title>
</head>

<body>
  <?php
  if (!isset($_SESSION['userLvl'])) {

    include("navbar.php");
  } else {
    if ($_SESSION['userLvl'] == 2) {
      include("navbar-user.php");
    } else {
      include("navbar.php");
    }
  }
  ?>

  <form class="left-container-form">
    <div class="main-container">
      <div class="left-container">
        <section>
          <h2>I am travelling to</h2>
          <form action="saveMyVacation-livesearch.php" method="POST">
            <input id="searchBox" name="place" list="place" type="text" required>
          </form>
          <div class="place-options">
            <datalist id="place">
              <?php foreach ($data as $i) { ?>
                <option value="<?php echo (isset($i['dest_city']) ? htmlspecialchars($i['dest_city']) : ''); ?>"><?php echo $i["dest_city"]; ?></option>
              <?php } ?>
          </div>
        </section>
        <div class="left-container-select-cont">
          <!-- <div class="left-container-radio">
            <h3>I prefer</h3>
            <br>
            <label class="container">Budget Friendly
              <input type="radio" name="radio" value="budget" required>
              <span class="checkmark"></span>
            </label>
            <label class="container">Outdoor
              <input type="radio" name="radio" value="outdoor" required>
              <span class="checkmark"></span>
            </label>
            <label class="container">For Family
              <input type="radio" name="radio" value="family" required>
              <span class="checkmark"></span>
            </label>
            <label class="container">Groups
              <input type="radio" name="radio" value="groups" required>
              <span class="checkmark"></span>
            </label>
            <label class="container">Tours
              <input type="radio" name="radio" value="tours" required>
              <span class="checkmark"></span>
            </label>
          </div> -->
          <div>
            <h3>Type of Holiday I am Looking for </h3>
            <br>
            <div class="left-container-select">
              <select required>
                <option value="" disabled selected>Select your option</option>
                <option value="culture" name="culture">Culture & History</option>
                <option value="nature">Nature & Adventure</option>
                <option value="art">Art & Museums</option>
                <option value="culinary">Culinary & Nightlife</option>
                <option value="summer">Summer experience</option>
              </select>
            </div>
          </div>
        </div>
        <div class="btn-submit"> <input type="submit" value="Submit"></div>
  </form>
  </div>

  <div class="right-container">
    <div>
      <h1>Vacation Plans:</h1>
      <ul class="plan-maincont">
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner2.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner3.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner5.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner5.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner5.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
        <li>
          <div class="plan-cont" onclick="location.href='place.php'">
            <div class="plan-img">
              <img src="/images/banner5.jpg" alt="">
            </div>
            <div class="plan-name">Puerto Princesa Underground</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </div>


</body>

</html>