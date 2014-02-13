<?php
/*
Template Name: comp
*/
?>
<?php get_header(); ?>

<div class='main section'>
  <div class='inside'>
    <div class='stars'></div>
    <p class='age'>Na nejlepší čeká řada cen a přidají se ke špičkám českého internetu. Soutěž je věkově omezena do 18 let (včetně).</p>
    <a href='http://souteze.juniorinternet.cz/register/' class='button'>Chci soutěžit</a>
    <p class='comp-closing'>Přihlášky končí 17. 2. 2014</p>
    <div class='line'></div>
    <div class='orange'>Soutěžní disciplíny a ceny</div>
  </div>
  <div class='between'>
    <div class='awards'>
      <div class='categories'>
        <div class='category junior-web'>
          <h2>Junior Web</h2>
          <p class='about'>Webové stránky, internetové služby a projekty umístěné na Internetu.</p>
          <p class='older'>mladší / starší</p>
        </div>
        <div class='category internet-veci'>
          <h2>Internet Věcí</h2>
          <p class='about'>Soutěž pro týmy. 3D Modely či fyzické věci, které spojují fyzický svět a internet.</p>
        </div>
        <div class='category junior-web'>
          <h2>Junior Design</h2>
          <p class='about'>Design webových stránek či jiné elektronické grafické práce.</p>
          <p class='older'>mladší / starší</p>
        </div>
        <div class='category junior-text'>
          <h2>Junior text</h2>
          <p class='about'>Slohová práce na téma “svoboda na internetu”.</p>
        </div>
      </div>
      <div class='icons'>
        <div class='icon icon1'></div>
        <div class='icon icon2'></div>
        <div class='icon icon3'></div>
        <div class='icon icon4'></div>
        <div class='icon icon5'></div>
      </div>
    </div>
    <div class="special-awards" id="special-awards">
      <h3 class="orange">Speciální ceny</h3>
      <div class="special-row">
        <div>
          <h4>Nadace Vodafone</h4>
          <p>Speciální cena pro web prospěšný místu vašeho bydliště. V rámci této speciální ceny probíhají i krajská kola a vyhlašují se první tři místa. (<a href="#junioerb-rules">Podrobná pravidla</a> <a href="http://www.juniorinternet.cz/wp-content/uploads/2014/02/2014_juniorerb_reditele.pdf">Informace pro učitele a ředitele v PDF</a>)</p>
          <p class="special-note">V minulých letech ji vyhrál například projekt Drahomíra Hanáka <a href="http://www.schoolhelper.eu" target="_blank">SchoolHelper.eu</a> nebo Matěj Polák a projekt <a href="http://g-one.tv">studentské televize Gymnázia Dačice</a>.</p>
        </div>
        <div>
          <h4>JuniorErb</h4>
          <p>Speciální cena pro web prospěšný místu vašeho bydliště. V rámci této speciální ceny probíhají i krajská kola a vyhlašují se první tři místa. (<a href="#junioerb-rules">Podrobná pravidla</a> <a href="http://www.juniorinternet.cz/wp-content/uploads/2014/02/2014_juniorerb_reditele.pdf">Informace pro učitele a ředitele v PDF</a>)</p>
        </div>
      </div>
      <div class="special-row">
        <div>
          <h4>Cena veřejnosti</h4>
          <p>Veřejnost uděluje cenu díky internetovému hlasování, které probíhá až do 10.&nbsp;3.</p>
        </div>
        <div>
          <h4>Cena za uživatelský zážitek na mobilech</h4>
          <p>Doba je mobilní a udělujeme proto speciální cenu projektu, který je nejlépe optimalizován pro mobilní zařízení.</p>
        </div>
      </div>
    </div>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class='inside'>
    <?php the_content(__('(celý článek...)')); ?>
  </div>

  <?php endwhile; else: ?>

  <div class='inside'>
    <p><?php _e('Tato stránka zde bohužel není :('); ?></p>
  </div>

  <?php endif; ?>
</div>

<div class='partners-section section'>
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

<?php get_footer(); ?>
