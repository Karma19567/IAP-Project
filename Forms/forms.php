<?php
// forms.php

class Forms
{
    /**
     * Display the login form
     */
    public static function loginForm(): void
    {
        echo '
        <form action="" method="post" class="form">
            <h2>Login</h2>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        ';
    }
}
