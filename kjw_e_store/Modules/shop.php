<style>
  .separator {
    display: flex;
    align-items: center;
    text-align: center;
  }

  .separator::before,
  .separator::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #6C757D;
  }

  .separator:not(:empty)::before {
    margin-right: .25em;
  }

  .separator:not(:empty)::after {
    margin-left: .25em;
  }
</style>

<img src="./Static/Images/shop.png" alt="E STORE" title="E-STORE" class="d-block mx-auto">
<div class="form border pt-2 px-3 mt-4 rounded">
  <h4 class="fs-3">Sign in</h4>
  <label for="email" class="form-label mt-2 fw-medium">Mobile Phone Number or Email</label>
  <input type="text" class="form-control" required>
  <input type="submit" value="Continue" class="btn btn-warning form-control mt-4 mb-3">
  <p><small>By continuing, you agree to E-STORE's <a href="#" class="text-decoration-none">Terms and Conditions</a> and
      <a href="#" class="text-decoration-none">Privacy Policy</a></small></p>
  <p><span class="fs-5 fw-bold">&#9658;</span> <a href="#" class="text-decoration-none">Need help?</a></p>
</div>
<p><small class="separator mx-3 mt-4 text-secondary">New to E-STORE?</small></p>
<input type="submit" value="Create New Account" class="btn btn-success form-control">