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
  <div class='time-counter'>uzávěrka přihlášek 17. 2.</div>
</div>


<div class='intro'>
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

<div class='winners'>
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

<div class='main'>
  <div class='inside'>
    <h2>Partneři</h2>
    <span class='logo'>
      <div class='first-part' data-icon='i'></div>
      <div class='second-part' data-icon='i'></div>
    </span>
    <div class='partner-companies'>
      <div class='comp'>
        <h4>Generální partneři</h4>
        <a href='http://nadacevodafone.cz/' class='partner vodafone'></a>
        <a href='http://nic.cz/' class='partner cznic'></a>
      </div>
      <div class='comp'>
        <h4>Partneři</h4>
        <a href='http://www.czechict.cz/' class='partner ict'></a>
        <a href='http://www.active24.cz/' class='partner active24'></a>
        <a href='http://abdoc.net/' class='partner abdoc'></a>
      </div>
      <div class='comp'>
        <h4>Partneři soutěží</h4>
        <a href='http://prusaresearch.com/' class='partner prusa'></a>
        <a href='http://www.rozectise.cz/' class='partner rozectise'></a>
        <a href='http://www.dobryweb.cz/' class='partner dobryweb'></a>
      </div>
      <div class='comp'>
        <h4>Mediální partneři</h4>
        <a href='http://respekt.ihned.cz/' class='partner respekt'></a>
        <a href='http://www.tyinternety.cz/' class='partner tyinternety'></a>
        <a href='http://www.juniorinternet.cz/www.dvs.cz' class='partner dvs'></a>
        <a href='http://www.juniorinternet.cz/www.lupa.cz' class='partner lupa'></a>
        <a href='http://www.juniorinternet.cz/www.root.cz' class='partner root'></a>
      </div>
      <div class='comp'>
        <h4>Podporovatelé</h4>
        <a href='http://www.peoplecomm.cz/' class='partner peoplecomm'></a>
        <a href='http://www.experienceu.com/cs/' class='partner experienceu'></a>
      </div>
      <div class='comp'>
        <h4>Spolupracujeme</h4>
        <a href='http://www.jsi.cz/' class='partner jsi'></a>
        <a href='http://www.ceskyzavinac.cz/' class='partner zavinac'></a>
        <a href='http://www.plzensky-kraj.cz/' class='partner pl-kraj'></a>
        <a href='http://www.praha.eu/' class='partner praha'></a>
      </div>
    </div>
  </div>
</div>

<div class='register'>
  <div class='inside'>
    <h2 class='ready'><strong>Připraven vyhrát a vstoupit do dějin?</strong></h2>
    <div><a href='<?php echo get_permalink(45); ?>' class='button bot-btn'>Chci soutěžit</a></div>
    <div class='time-counter'>uzávěrka přihlášek 17. 2.</div>
  </div>
</div>

<?php get_footer('index'); ?>