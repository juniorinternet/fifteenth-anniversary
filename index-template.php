<?php
/*
Template Name: index
*/
?>
<?php get_header('index'); ?>

<div class='flag'>
  <h3 class='competition'>SOUTĚŽE</h3>
  <h3>2014</h3>
  <p>Porovnej své webové umění s vrstevníky! Na nejlepší čeká řada cen.</p>
  <div class='icons'>
    <a href=# class='icon money' data-icon='c'></a>
    <a href=# class='icon airplane' data-icon='b'></a>
    <a href=# class='icon document' data-icon='c'></a>
    <a href=# class='icon users' data-icon='b'></a>
  </div>
  <a href='<?php echo get_permalink(45); ?>' class='join'>Chci soutěžit</a>
  <div class='time-counter'>přihlášky prodlouženy do 24. 2.</div>
</div>


<div class='intro section'>
  <div class='inside'>
    <p class='since'>SINCE 2000</p>
    <div class='line'></div>
    <h2>Pomáháme mladým<br><span>uspět na internetu</span></h2>
    <h3><span class='squere left'>◼</span>Pořádáme<span class='squere right'>◼</span></h3>
    <div class='events'>
      <a href="<?php echo get_permalink(45); ?>" class='event competition'>
        <div class='circle'>
          <div class='icon' data-icon='a'></div>
          <div class='icon' data-icon='a'></div>
        </div>
        <p>A. soutěže</p>
      </a>
      <a href='#' class='event camp'>
        <div class='circle'>
          <div class='icon' data-icon='h'></div>
          <div class='icon' data-icon='h'></div>
        </div>
        <p>B. Junior Camp</p>
      </a>
      <a href='#' class='event activities'>
        <div class='circle'>
          <div class='icon' data-icon='e'></div>
          <div class='icon' data-icon='e'></div>
        </div>
        <p>C. vzdělávací <br>aktivity</p>
      </a>
    </div>
  </div>
</div>

<div class='winners section'>
  <div class='we-won'>
    <div class='stars'>
      <div class='star'>★</div>
      <div class='star'>★</div>
      <div class='star'>★</div>
    </div>
    <p>Vyhráli Junior Internet <br> a uspěli. Přečti si jejich příběhy.</p>
  </div>
  <div class='persons'>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu inv'></a>
    <a href='#' class='person vu inv'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
    <a href='#' class='person vu'></a>
  </div>
</div>

<div class='main section'>
  <div class='inside'>
    <?php include 'sponsors.php'; ?>
  </div>
</div>

<div class='register section'>
  <div class='inside'>
    <h2 class='ready'><strong>Připraven vyhrát a vstoupit do dějin?</strong></h2>
    <div><a href='<?php echo get_permalink(45); ?>' class='button bot-btn'>Chci soutěžit</a></div>
    <div class='time-counter'>přihlášky prodlouženy do 24. 2.</div>
  </div>
</div>

<?php get_footer('index'); ?>
