<?php 
$data = file_get_contents("./data.json"); 
$data = json_decode($data); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Milot Reqica CV</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="resume">
      <div class="resume_left">
        <div class="resume_profile">
          <img src="img/mr.jpeg" alt="profile pciture" />
        </div>

        <div class="resume_content">
          <div class="resume_item resume_info">
            <div class="title">
              <p class="bold"><?php echo  $data->name; ?></p>
              <p class="reguluar"><?php echo  $data->job; ?></p>
            </div>
            <ul>
              <li>
                <div class="icon"><i class="fas fa-map-signs"></i></div>
                <div class="data">
                <?php echo  $data->adress; ?>
                </div>
              </li>
              <li>
                <div class="icon">
                  <i class="fas fa-mobile"></i>
                </div>
                <div class="data"><?php echo  $data->phonenumber; ?></div>
              </li>
              <li>
                <div class="icon"><i class="far fa-envelope"></i></div>
                <div class="data"><?php echo  $data->email; ?></div>
              </li>
              <li>
                <div class="icon"><i class="fab fa-weebly"></i></div>
                <div class="data"><?php echo  $data->website; ?></div>
              </li>
            </ul>
          </div>
          <div class="resume_item resume_skills">
            <div class="title">
              <p class="bold">Skills</p>
            </div>
            <ul>
              <?php foreach($data->skills as $skill): ?>
                <li>
                  <div class="skill_name"><?php echo  $skill->title; ?></div>
                  <div class="skill_progress">
                    <span style="width: <?php echo  $skill->percent; ?>%"></span>
                  </div>
                  <div class="skill_per"><?php echo  $skill->percent; ?>%</div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="resume_item resume_social">
            <div class="title">
              <p class="bold">Social</p>
            </div>
            <ul>
              <?php foreach($data->social as $social): ?>
                <a href="<?php echo $social->link; ?>">
                <li>
                    <div class="icon"><i class="fab fa-<?php echo strtolower($social->title); ?>"></i></div>
                    <div class="data">
                      <p class="semi_bold"><?php echo $social->title; ?></p>
                    </div>
                  </li>
                </a>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="resume_right">
        <div class="resume_item resume_about">
          <div class="title">
            <p class="bold">About Me</p>
          </div>
          <p>
           <?php echo $data->description; ?>
          </p>
        </div>
        <div class="resume_item resume_work">
          <div class="title">
            <p class="bold">Work Experience</p>
          </div>
          <ul>
            <?php foreach($data->exp as $exp): ?>
              <li>
                <div class="data"><?php echo $exp->title; ?></div>
                <div class="info">
                  <p class="semi-bold"><?php echo $exp->subtitle; ?></p>
                  <p>
                    <?php echo $exp->desc; ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="resume_item resume_education">
          <div class="title">
            <p class="bold">Education</p>
          </div>
          <ul>
            <?php foreach($data->education as $education): ?>
              <li>
                <div class="data"><?php echo $education->title; ?></div>
                <div class="info">
                  <p class="semi-bold"><?php echo $education->subtitle; ?></p>
                  <p>
                    <?php echo $education->desc; ?>
                  </p>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
    </div>
    <script src="js/font-awesome.js"></script>
  </body>
</html>
