<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#cis" role="tab" aria-selected="true">CIS</a></li>
  <li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pes1" role="tab" aria-selected="false">Pes1</a></li>
  <li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pes2" role="tab" aria-selected="false">Pes2</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade show active" id="cis" role="tabpanel">
    <br>
    <?php include "phpforms/cis.php"; ?>
  </div>
  <div class="tab-pane fade" id="pes1" role="tabpanel">
    <br>
    <?php include "phpforms/pes1.php"; ?>
  </div>
  <div class="tab-pane fade" id="pes2" role="tabpanel">
    <br>
    <?php include "phpforms/pes2.php"; ?>
  </div>
</div>