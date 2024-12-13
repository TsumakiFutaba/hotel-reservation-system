import { registerUser, loginUser, googleSignIn, sendPasswordResetEmail } from './firebaseauth.js';

document.addEventListener('DOMContentLoaded', () => {
  // Handle registration
  document.getElementById('registerForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const fullName = document.getElementById('registerFullName').value;
    const email = document.getElementById('registerEmail').value;
    const password = document.getElementById('registerPassword').value;

    try {
      await registerUser(email, password, fullName);
      alert('Registration successful! A verification email has been sent to your email address. Please verify before logging in.');
      document.getElementById('userNamePlaceholder').textContent = fullName;
      document.getElementById('registerForm').reset();
      new bootstrap.Modal(document.getElementById('registerModal')).hide();
    } catch (error) {
      alert(`Registration failed: ${error.message}`);
    }
  });

  // Handle login
  document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;

    try {
      await loginUser(email, password);
      alert('Login successful!');
      document.getElementById('loginForm').reset();
      new bootstrap.Modal(document.getElementById('loginModal')).hide();
    } catch (error) {
      alert(`Login failed: ${error.message}`);
    }
  });

  // Handle forgot password
  document.querySelector('.forgot-password-link').addEventListener('click', () => {
    // Get the login modal instance and hide it
    const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
    if (loginModal) {
      loginModal.hide();
    }

    // Show the forgot password modal
    const forgotPasswordModal = new bootstrap.Modal(document.getElementById('forgotPasswordModal'));
    forgotPasswordModal.show();
  });

  // Handle forgot password form submission
  document.getElementById('forgotPasswordForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('forgotEmail').value;

    try {
      await sendPasswordResetEmail(email);
      alert('Password reset email has been sent. Please check your inbox.');
      document.getElementById('forgotPasswordForm').reset();
      new bootstrap.Modal(document.getElementById('forgotPasswordModal')).hide();
    } catch (error) {
      alert(`Error: ${error.message}`);
    }
  });

  // Handle Google sign-in
  let isGoogleSignInInProgress = false;

  document.getElementById('googleSignUp').addEventListener('click', async () => {
    if (isGoogleSignInInProgress) return; // Prevent multiple popups
    isGoogleSignInInProgress = true;

    try {
      await googleSignIn();
      alert('Login with Google successful!');
      new bootstrap.Modal(document.getElementById('registerModal')).hide();
    } catch (error) {
      alert(`Google sign-in failed: ${error.message}`);
    } finally {
      isGoogleSignInInProgress = false;
    }
  });
});
