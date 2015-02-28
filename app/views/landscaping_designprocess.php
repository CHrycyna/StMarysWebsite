<?php include 'templates/template_landscaping.php' ?>
		
<?php startblock('landscaping')?>
<div class="jumbotron landscape">
  <h1>Design Process</h1>
</div>
<div class="row unstyled">
  <div class="row unstyled step">
    <div id="div1" class="col-md-2 activestep" onclick="javascript: resetActive(event, 16, 'step-1');">
      <h5>Design Request</h5>
    </div>
    <div class="col-md-2" onclick="javascript: resetActive(event, 33, 'step-2');">
      <h5>On-site Analysis</h5>
    </div>
    <div class="col-md-2" onclick="javascript: resetActive(event, 49, 'step-3');">
      <h5>Concept Plans</h5>
    </div>
    <div class="col-md-2" onclick="javascript: resetActive(event, 66, 'step-4');">
      <h5>Final Design Phase</h5>
    </div>
    <div class="col-md-2" onclick="javascript: resetActive(event, 82, 'step-5');">
      <h5>Landscape Installation</h5>
    </div>
    <div class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6');">
      <h5>Project Completion</h5>
    </div>
  </div>
</div>
<div class="row setup-content step activeStepInfo" id="step-1">
  <div class="col-xs-12">
    <div class="col-md-12 well text-center">
      <h1>STEP 1</h1>
      <h3 class="underline">Design Request</h3>
      <p>
        Design request are submitted by clients. A copy of the design request form can be found <a href="/static/forms/request_form.pdf">here</a>.
      </p>
      <p>
        Once the form has been submitted and an appointment has been scheduled to get 
      </p>
    </div>
  </div>
</div>
  <div class="row setup-content step hiddenStepInfo" id="step-2">
      <div class="col-xs-12">
          <div class="col-md-12 well text-center">
              <h1>STEP 2</h1>
              <h3 class="underline">On-Site Anaysis</h3>
              On our initial, after the designer has met with the client and discussed their wishes, the designer will review the property.  Photos of the existing yard and its surrounding will be taken and the site area reviewed.
              A plot plan (surveyor&#39;s certificate) will be requested. 
          </div>
      </div>
  </div>
  <div class="row setup-content step hiddenStepInfo" id="step-3">
      <div class="col-xs-12">
          <div class="col-md-12 well text-center">
              <h1>STEP 3</h1>
              <h3 class="underline">Concept Plans</h3>
              Our second meeting, we invite you to the St. Maryr&#39;s Nursery office for a review of the plan and proposed design. We will review the concepts of the design in detail together, highlighting plant selections, design elements and materials required.  This is a great opportunity to give your input and discuss any necessary revisions.  This is the point when any changes will be made; if required.  
          </div>
      </div>
  </div>
<div class="row setup-content step hiddenStepInfo" id="step-4">
  <div class="col-xs-12">
    <div class="col-md-12 well text-center">
      <h1>STEP 4</h1>
      <h3 class="underline">Final Design Phase</h3>
      <p>
        Once we&#39;ve finalized the concepts from the design plan, and now that we&#39;ve identified each element and the materials, you may request to have a quote for the proposed plan.  The quote for the project will be submitted to you via email or mail .
        Payment for balance of design phase is due.   Once the plan is paid in full, the plan is yours.   With your approval of our project quote, we can start making it happen!   Our design team will schedule your project.
        
      </p>
    </div>
  </div>
</div>
  <div class="row setup-content step hiddenStepInfo" id="step-5">
      <div class="col-xs-12">
          <div class="col-md-12 well text-center">
              <h1>STEP 4</h1>
              <h3 class="underline">Landscape Installation</h3>
              <p>
                We’ll take care of the ordering your materials.  Homeowners are required to request safety locates ( ie hydro &amp; gas “Call before you Dig” ) prior to our arrival.  We will guide you in coordinating any specialty trades you may require.   Everyone involved is well informed on the plan details to ensure a smooth flow during installation.   St. Mary’s Nursery works in hand with other trades of exceptional craftsmanship, and service.
              </p>
              <p>
                Our crews, equipment and foreman are on site and making it happen. We’ll make every effort to keep disruptions and mess to a minimum. We’ll provide weekly project reports so you’re always fully informed on the progress, and we can make sure you’re pleased with our work. Feel free to speak with your foreman at any time, or contact our office with any questions or comments if preferred.
              </p>
          </div>
      </div>
  </div>
  <div class="row setup-content step hiddenStepInfo" id="step-6">
      <div class="col-xs-12">
          <div class="col-md-12 well text-center">
              <h1>STEP 5</h1>
              <h3 class="underline">Project Completion</h3>
              <p>
                With the close of the construction phase, we’ll do a walk-through together to identify any issues, questions or unfinished items. This may be done by site foreman.  Any incomplete items will be resolved promptly and before the project is considered complete.
              </p>
              <p>
                This is always such a pleasure for us because it’s the point where our clients are newly aware of the wonderful enhancement to their home and their lives.   Final invoice for the completed project will be emailed / mailed.
              </p>
          </div>
      </div>
  </div>

<style>
.hiddenStepInfo {
    display: none;
}

.activeStepInfo {
    display: block !important;
}

.underline {
    text-decoration: underline;
}

.step {
    text-align: center;
    margin-bottom: 10px;
}

.step > .col-md-2 {
  vertical-align: middle;
}
.col-md-2 > h5 {
  vertical-align: middle;
}

.col-md-2.activestep > h5 {
  margin: 0 0 0 0;
}

.step .col-md-2 {
    background-color: #fff;
    border-right: none;
    height: 40px;
}

.step .col-md-3:last-child {
    border: 1px solid #C0C0C0;
}

.step .col-md-2:first-child {
    border-radius: 5px 0 0 5px;
}

.step .col-md-2:last-child {
    border-radius: 0 5px 5px 0;
}

.step .col-md-2:hover {
    color: #fff;
    background-color: #255897;
}

.step .activestep {
    color: #fff !important;
    margin-top: -7px;
    padding-top: 7px;
    background-color: #124b90;
}
</style>


<?php endblock('landscaping')?>

<?php startblock('scripts') ?>
<?php superblock()?>
<script src="static/js/landscapedesignprocess.js" ></script>
<script>
$(document).ready(function() {
  $('#nav-landscaping').addClass('active');
  $('#subnav-design').addClass('active');
});
</script>
<?php endblock () ?>