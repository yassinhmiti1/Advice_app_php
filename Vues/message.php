<dialog id="message-dialog">
  <h3 id="message-text"></h3>
  <button class="btn-ok-message">Ok</button>
</dialog>

<script>
  const messagedia = document.getElementById("message-dialog");
  const btnclose = document.getElementById("btn-ok-message");

  btnclose.addEventListener("click", ()=>{
    messagedia.close();
  });
</script>

<style>
  #message-dialog{
    padding: 20px;
    max-width: 350px;
    border-radius: 10px;
  }
  #message-dialog button{
    padding: 7px 20px;
    color: ghostwhite;
    background-color: #1b1b1b;
    border: none;
  }
</style>