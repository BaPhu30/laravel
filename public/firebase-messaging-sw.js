importScripts("https://www.gstatic.com/firebasejs/9.16.0/firebase-app-compat.js");
importScripts("https://www.gstatic.com/firebasejs/9.16.0/firebase-analytics-compat.js");
importScripts("https://www.gstatic.com/firebasejs/9.16.0/firebase-messaging-compat.js");
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyApUvTvJDv8Qf8HvCl6Oy3xTLmcn1ZUFa4",
    authDomain: "shopee-clone-47e23.firebaseapp.com",
    projectId: "shopee-clone-47e23",
    storageBucket: "shopee-clone-47e23.appspot.com",
    messagingSenderId: "760436911597",
    appId: "1:760436911597:web:29dc45143d45eb73768be4",
    measurementId: "G-JRG32DL22G",
};

// Initialize Firebase
const app = firebase.initializeApp(firebaseConfig);

// Retrieve Firebase Messaging object.
const messaging = firebase.messaging();
