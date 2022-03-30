<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="partie1">

  <div class="container">
    <h1>DISCOVER OVER 70 MILLION </br> TRACKS</h1>
    <p>The richest Hi-res catalogue available for streaming and </br>downloaded</p>
    <p>From 10$ / month</p>
    <button>TRY FOR FREE</button>
    <header></header>
  </div>

</div>

  <div class="partie2">
    <div class="container">
      <h1>LISTEN VICTORIES OF MUSIC</h1>

      <div class="cartes">

            <div class="carte">
                  <div class="img1"></div>
                  <div class="infos">
                   <p><strong>STROMAE</strong>Multitude</p>
                    <p>2021</p>
                    <p>Hip hop, Electronic</p>
                  </div>
            </div>

            <div class="carte">
              <div class="img2"></div>
              <div class="infos">
                <p><strong>ORELSAN</strong>Civilisation</p>
                <p>2021</p>
                <p>Hip-hop, Rap</p>
              </div>
            </div>

            <div class="carte">
              <div class="img3"></div>
              <div class="infos">
                <p><strong>CLARA LUCIANI</strong>Coeur</p>
                <p>2021</p>
                <p>Hip-hop, Electronic</p>
              </div>

            </div>

      </div>
      <button>DISCOVER OUR PLANS</button>
    </div>


  </div>

  <div class="partie3">

      <div class="container">
        <div>
            <h1>LISTEN TO YOUR FAVORITE</br>MUSIC ANY TIME</h1>
            <p>On mobile, computer, tablet... Choose how you listen.</p>
            <button>DOWNLOAD OUR APP</button>
            </div>

        <div>
          <img src="http://localhost:8000/app/uploads/2022/03/mobile.png">
        </div>

      </div>


  </div>


  <div class="partie4">
      <div class="container">
        <div><img src="http://localhost:8000/app/uploads/2022/03/card.png"></div>

        <div> <h1>GIFT CARD FOR STREAMING </br>OR DOWNLOAD</h1>
          <p>Gift an unrivalled musical experience. Streaming gift </br> card available from 3 months. Store gift cards</br>available from 20$</p>
              <button>GET YOUR FREE CARD</button>
        </div>

      </div>
  </div>

  <div class="partie5">

        <div>
        <h1>USER TESTIMONIALS</h1>
        </div>

        <div class="cercles">
          <div class="cercletexte">
              <div class="cercle1"></div>
              <div><h3>TERMINATOR</h3>
                <p><strong>❝</strong> Cyborgs validate Mew6. <strong>❝</strong></p></div>
          </div>
          <div>
            <div class="cercletexte">
            <div class="cercle2"></div>
            <div><h3>SPONGEBOB</h3>
              <p><strong>❝</strong> Everyone uses and loves it</br> at Bikini Bottom! <strong>❝</strong></p></div>
          </div>
          </div>
          <div>
            <div class="cercletexte">
            <div class="cercle3"></div>
            <div><h3>SPIDERMAN</h3>
              <p><strong>❝</strong>  I caught the green goblin </br>was listening to rock on Mew6. <strong>❝</strong></p></div>
          </div>
          </div>
        </div>

    <div class="petitcercles">
      <div></div>
      <div></div>
      <div></div>
  </div>
  </div>

  <div class="partie6">
    <h1>FREQUENTLY ASKED</br>QUESTIONS</h1>

    <div class="bloc4">
      <p>Is the trial period really free for the streaming service?</p>
    </div>
  </br>

    <div class="bloc4">
      <p>Do you need a subscription to download?</p>
    </div>
    </br>

    <div class="bloc5">
      <p>Why listen to your music on Mew6?</p>
      <span>Mew6 offers the richest catalogue of Hi-Res music for streaming and download. Quench your thirst for discovery </br> with our panoramas, reviews, original selections and exclusive interviews.</span>
    </div>




  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>