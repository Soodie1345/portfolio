
<header>
     <div>  
          <div class="element"> 
           <h1 style="text-align:center">
           <?= $page->title() ?>
         </h1>
        </div>
              </div>  

              <nav>                                 
                <ul class="nav">
             <?php foreach ($site->children()->listed() as $item): ?>  
            <li><a  href="<?= $item->url() ?>" title="<?= $item->title() ?>" ><?= $item->title() ?></a></li> 
            <?php endforeach ?> 

            <?php

            $items = false;

          // get the open item on the first level
          if($root = $pages->findOpen()) {

         // get visible children for the root item
         $items = $root->children()->listed();
            }

           // only show the menu if items are available
           if($items and $items->isNotEmpty()):

               ?>
              <nav>
              <ul>
           <?php foreach($items as $item): ?>
          <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>        




            <!--<li><a class="about" href="about.html">About</a></li>
            <li><a class="gallery" href="gallery.html">Gallery </a>
             <ul>
             <li><a class="portrait" href="portrait.html">Portrait</a></li>
             <li><a class="landscape" href="landscape.html">Landscape</a></li>
             <li><a class="digital imaging"  href="digital.html">Digital Images</a></li>
            </ul>
            </li>
            <li><a class="contact" href="contact.html">Contact</a></li> -->
                </ul> 
            </nav>     
            </header>