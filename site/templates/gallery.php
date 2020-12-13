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

   
            <h1>Soodie Sarooie: Art Portfolio</h1>

            <main class="main">
               <h1><?= $page->title() ?></h1>
               <div class="gallery-layout">
                  <div class="gallery-info">
                     <?= $page->text() ?>
                  </div>
                  <div class="gallery-photos">
                     <ul>
                       <?php foreach ($page->images() as $image): ?>
                        <li>
                           <a href="<?= $image->url() ?>">
                            <?= $image->resize(900, 900) ?>   
                        </a>
                        </li>
                       <?php endforeach ?>
                     </ul>
                  </div>
               </div>
              
               <?php snippet("footer") ?>
         
         </body>
        </html>


            
        
         
                                
         
       
     
