<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php
    $con = mysqli_connect("localhost", "root", "", "dblms");
    if(!$con){
        die("connection error");
    }
    
    if(isset($_POST['submit']))
    {   
      
        $date = mysqli_real_escape_string($con, $_REQUEST['date']);

        if(empty($_POST['name']))
        {
            echo ' Please Fill in the Blanks ';
        } else
        {
            $name = $_POST['name'];
            $declaration = $_POST['declaration'];
            $currentDate = date('l jS \of F Y h:i:s A');
           
         
            $query = "INSERT INTO declaration (name, date, declaration) VALUES('$name', CURRENT_TIMESTAMP,'$declaration')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                echo 'success';
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }

    }


?>
</head>
<body>

<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo get_phrase('Learner_Declaration'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>
    <section class="category-course-list-area">
        <div class="container">
            <form action="declaration" method="post">
                <h1 class="category-name" style="text-align: center">
                    Learner Declaration Form
                </h1>
                <textarea name="declaration" rows="18" cols="150" style="border:none">

I understand  and  agree that good behavior, trust, and respect for others is vital on a school visit, and that if I behave badly  before  or  during the  visit,
and  the  leaders  consider  my  presence to  be  a  possible threat to the health, safety or welfare of others, then the school has the right to: 

    1. Refuse to allow me a place on a school visit 

    2. Cancel my place on a school visit that is already booked (in most situations, money already  paid  will  be  returned,  but  this  cannot  be  guaranteed  if
         deposits  are  non - refundable) 

    3. Request  that  I  return  early  from  a  school  visit  (parents/guardians  will  normally  be expected to collect students themselves, wherever possible) 

    4. Refuse to allow me a place on a school visit 

    5. Cancel my place on a school visit that is already booked (in most situations, money already  paid  will  be  returned,  but  this  cannot  be  guaranteed  if
      deposits  are  non - refundable) 

    6. Request  that  I  return  early  from  a  school  visit  (parents/guardians  will  normally  be expected to collect students themselves, wherever possible) 

        </textarea></br></br>
        
        <div class="content-box">
            <div class="form-group">
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Name and Surname" name="name"></br></br>
        </div>
        <div>
            <input type="date" name="date" id="date" placeholder="date">
        </div>
        </div>
        <button class="btn btn-primary" name="submit">Submit</button>
    
    </form>
    </div>
 </section>
        
</body>
</html>
