<div class="row">
    <h4 id="inquiry-title" class="center">We are here</h4>
    <form id="inquiry-form" class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="firstname">
          <label for="first_name">Firstname</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lastname">
          <label for="last_name">Lastname</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="phone" type="text" class="validate" name="phone">
          <label for="phone">Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
          <label for="textarea1">Comment</label>
        </div>
      </div>
      <div class="row center">
        <button class="btn send-inquiry-btn waves-effect waves-light" type="submit" value="submit" id="submit">
           <span>Submit</span>
           <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
</div>
<div id="modal1" class="modal">
  <div class="modal-content center">
    <h4 class="center">Thank you for your inquiry, <span id="modal_content"></span>!</h4>
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">close</a>
  </div>
</div>
