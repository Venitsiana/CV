<?php require('/../../src/frontend/Inquiries.php'); 
$inquiry = new Inquiries();
?>
<div class="row">
    <h4 class="center">We are here</h4>
    <form class="col s12" method="POST" action="<?php echo $inquiry->saveInquiry(); ?>">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Firstname</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Lastname</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="phone" type="text" class="validate">
          <label for="phone">Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Comment</label>
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="action">
           <span>Submit</span>
           <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
</div>

