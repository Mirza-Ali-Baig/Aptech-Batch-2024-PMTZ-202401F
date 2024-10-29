<div class="popup-container signup-popup">
    <form action="actions/register.php" method='post'>
        <h3>Register</h3>
        <div class="input-group">
            <label for="username"><i class="fas fa-user"></i></label>
            <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="input-group">
            <label for="email"><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="input-group">
            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="input-group">
            <label for="confirm_password"><i class="fas fa-lock"></i></label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter password again">
        </div>
        <button type="submit">Register</button>
    </form>
    <div class="close-btn"><i class="fas fa-times"></i></div>
</div>