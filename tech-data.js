// Import stylesheets
//import "./style.css";
// Firebase App (the core Firebase SDK) is always required and must be listed first
import * as firebase from "firebase/app";

// Add the Firebase products that you want to use
import "firebase/auth";
import "firebase/firestore";

import * as firebaseui from "firebaseui";

// Document elements
const startRsvpButton = document.getElementById("startRsvp");
const guestbookContainer = document.getElementById("guestbook-container");

const form = document.getElementById("leave-message");
const input = document.getElementById("message");
const guestbook = document.getElementById("guestbook");
const numberAttending = document.getElementById("number-attending");
const rsvpYes = document.getElementById("rsvp-yes");
const rsvpNo = document.getElementById("rsvp-no");

var rsvpListener = null;
var guestbookListener = null;

async function main() {
  // Add Firebase project configuration object here
  var firebaseConfig = {
    apiKey: "AIzaSyD9MrHy57wBbMlXHTK8icOcPTywzi8DrhM",
    authDomain: "jh-entech.firebaseapp.com",
    databaseURL: "https://jh-entech.firebaseio.com",
    projectId: "jh-entech",
    storageBucket: "jh-entech.appspot.com",
    messagingSenderId: "326113463086",
    appId: "1:326113463086:web:e6198f169fdf23932508bf",
    measurementId: "G-12DVG7FZEH"
  };

  firebase.initializeApp(firebaseConfig);

  // FirebaseUI config
  const uiConfig = {
    credentialHelper: firebaseui.auth.CredentialHelper.NONE,
    signInOptions: [
      // Email / Password Provider.
      firebase.auth.EmailAuthProvider.PROVIDER_ID
    ],
    callbacks: {
      signInSuccessWithAuthResult: function(authResult, redirectUrl) {
        // Handle sign-in.
        // Return false to avoid redirect.
        return false;
      }
    }
  };

  const ui = new firebaseui.auth.AuthUI(firebase.auth());
  
  var db = firebase.firestore();
  db.collection("users").add({
    first: "Ada",
    last: "Lovelace",
    born: 1815
  })
    .then(function (docRef) {
      console.log("Document written with ID: ", docRef.id);
    })
    .catch(function (error) {
      console.error("Error adding document: ", error);
    });

  // sing-in btn UI
  startRsvpButton.addEventListener("click", () => {
    ui.start("#firebaseui-auth-container", uiConfig);
  });

  // 현재 유저 정보가 있는지 없는지에 따라 button message 바뀜
  firebase.auth().onAuthStateChanged(user => {
    if (user) {
      startRsvpButton.textContent = "로그아웃";
      // Show guestbook to logged-in users
      guestbookContainer.style.display = "block";
      subscribeGuestbook();
    } else {
      startRsvpButton.textContent = "관리자 로그인";
      guestbookContainer.style.display = "none";
      unsubscribeGuestbook();
    }
  });

  // 현재 유저 정보가 있는지 없는지에 따라 실제로 할 행동: 로그아웃/ 회원가입
  startRsvpButton.addEventListener("click", () => {
    if (firebase.auth().currentUser) {
      // User is signed in; allows user to sign out
      firebase.auth().signOut();
    } else {
      // No user is signed in; allows user to sign in
      ui.start("#firebaseui-auth-container", uiConfig);
    }
  });

  form.addEventListener("submit", e => {
    // Prevent the default form redirect
    e.preventDefault();
    // Write a new message to the database collection "guestbook"
    firebase
      .firestore()
      .collection("guestbook")
      .add({
        text: input.value,
        timestamp: Date.now(),
        name: firebase.auth().currentUser.displayName,
        userId: firebase.auth().currentUser.uid
      });
    // clear message input field
    input.value = "";
    // Return false to avoid redirect
    return false;
  });

  // Listen to guestbook updates
  function subscribeGuestbook() {
    firebase
      .firestore()
      .collection("guestbook")
      .orderBy("timestamp", "desc")
      .onSnapshot(snaps => {
        // Reset page
        guestbook.innerHTML = "";
        // Loop through documents in database
        snaps.forEach(doc => {
          // Create an HTML entry for each document and add it to the chat
          const entry = document.createElement("p");
          entry.textContent =
            doc.data().name +
            ": " +
            doc.data().text +
            " (" +
            doc.data().timestamp +
            ")";
          guestbook.appendChild(entry);
        });
      });
  }
  function unsubscribeGuestbook() {
    if (guestbookListener != null) {
      guestbookListener();
      guestbookListener = null;
    }
  }
}
main();
