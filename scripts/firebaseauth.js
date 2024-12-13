import { 
  initializeApp 
} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";

import { 
  getAuth, 
  sendPasswordResetEmail as firebaseSendPasswordResetEmail,
  createUserWithEmailAndPassword, 
  signInWithEmailAndPassword, 
  updateProfile, 
  sendEmailVerification, 
  GoogleAuthProvider, 
  signInWithPopup 
} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";

// Firebase configuration, gumawa na lang kayo ng bagong sa sinend kong link
const firebaseConfig = {
  apiKey: "AIzaSyCo8uP3JhKDycQBFOzLOqKjf7pcbocG7sE",
  authDomain: "hotelreservationsystem-9de6b.firebaseapp.com",
  projectId: "hotelreservationsystem-9de6b",
  storageBucket: "hotelreservationsystem-9de6b.firebaseapp.com",
  messagingSenderId: "519915643803",
  appId: "1:519915643803:web:1319231ae6cfad4606373e",
  measurementId: "G-5CJ7Q6S52Y"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// Handle registration and email verification
export async function registerUser(email, password, fullName) {
  const userCredential = await createUserWithEmailAndPassword(auth, email, password);
  await updateProfile(userCredential.user, { displayName: fullName }); // Set full name
  await sendEmailVerification(userCredential.user); // Send verification email
  return userCredential;
}

// Handle login
export async function loginUser(email, password) {
  const userCredential = await signInWithEmailAndPassword(auth, email, password);

  // Check if email is verified
  if (!userCredential.user.emailVerified) {
    throw new Error("Email not verified. Please check your inbox and verify your email.");
  }

  return userCredential;
}

// Handle Google Sign-In
export async function googleSignIn() {
  const provider = new GoogleAuthProvider();
  const result = await signInWithPopup(auth, provider);
  return result.user;
}

export function sendPasswordResetEmail(email) {
  return firebaseSendPasswordResetEmail(auth, email);
}
