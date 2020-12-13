


<!DOCTYPE html>
<html lang="en-US">
 <head>
    <meta charset="UTF-8">
    <title> Soodie Sarooie: Art Portfolio</title>
	<meta name="Author" content="Soodie"/>
	<?= css("assets/css/port.css")?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body id="home">
   <div class="fade">&nbsp;</div>

   <?php snippet("header") ?>

   
            <main>
               <h1>
                  Soodie Sarooie: Art Portfolio
               </h1>
             <?= image("soodie_1.JPG")->resize(300, 200); ?>
             <?= image("ggbridge.jpg")->resize(300, 200); ?>
          
             
         <h2>Welcome</h2>
         <p>The purpose of creating this website is to showcase my art projects from courses taken at Diablo Valley College.
            These courses include: Web Design, Digital Photography, Digital Imaging and Graphic Design. As I progress and learn more 
            techniques, I will update the website and add more art work. </p>
      </main>


      <?php snippet("footer") ?>


         </body>
        </html>
