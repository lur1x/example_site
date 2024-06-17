<main class="main">
  <div class="container">
    <div class="main__inner">
      <div class="title-name">
        <h1 class="title">Escape.<span>author</span></h1>
        <p class="subtitle">Log in to start creating</p>
      </div>
      <div class="login--form">
        <div class="login--form__inner">
          <h2 class="form-title">Log In</h2>
          <div class="form_errors">
            <object class="alert-circle" data="/static/imgs/alert-circle.svg" type="image/svg+xml"></object>
            <p class="error-text"></p>
          </div>
          <form name="login" class="login" method="POST" action="/admin">
            <div>
              <label for="Email">Email</label>
              <input type="text" id="Email" name="Email" require>
              <div class="error-form--text" data-error="Email">Email is required.</div>
            </div>
            <div class="password-form">
              <label for="Password">Password</label>
              <input type="password" id="Password" name="Password" autocomplete="off" require>
              <div class="error-form--text" data-error="Password">Password is required.</div>
              <button class="button--password" type="button">
                <object class="closed-pass show" type="image/svg+xml" data="/static/imgs/closed.svg"></object>
                <object class="opened-pass" type="image/svg+xml" data="/static/imgs/opened.svg"></object>
              </button>
            </div>
            <button type="submit" class="button-login">Log In</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<script type="module" src="./js/adminLogin.js"></script>