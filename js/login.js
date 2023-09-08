let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");
let allButtons = document.querySelectorAll(".submit");

let getButtons = (e) => e.preventDefault();

let changeForm = (e) => {
	switchCtn.classList.add("is-gx");
	setTimeout(function () {
		switchCtn.classList.remove("is-gx");
	}, 1500);

	switchCtn.classList.toggle("is-txr");
	switchCircle[0].classList.toggle("is-txr");
	switchCircle[1].classList.toggle("is-txr");

	switchC1.classList.toggle("is-hidden");
	switchC2.classList.toggle("is-hidden");
	aContainer.classList.toggle("is-txl");
	bContainer.classList.toggle("is-txl");
	bContainer.classList.toggle("is-z200");
};

let mainF = (e) => {
	for (var i = 0; i < allButtons.length; i++)
		allButtons[i].addEventListener("click", getButtons);
	for (var i = 0; i < switchBtn.length; i++)
		switchBtn[i].addEventListener("click", changeForm);
};

window.addEventListener("load", mainF);


import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-auth.js";
import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-database.js"; // Import the database module

const firebaseConfig = {
  apiKey: "AIzaSyD9Lx2VFyQyVrXLt5-lXWYqokgG7UIajS8",
    authDomain: "turma1-1af1f.firebaseapp.com",
    projectId: "turma1-1af1f",
    storageBucket: "turma1-1af1f.appspot.com",
    messagingSenderId: "593547174308",
    appId: "1:593547174308:web:a50432ed6e79a15e11e131",
    measurementId: "G-8J0CERXQWH"
};

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();
const database = getDatabase(); // Get a reference to the database

let signIn = async (e) => {
  e.preventDefault();

  let email = document.querySelector("#b-form .form__input[type='text']").value;
  let password = document.querySelector("#b-form .form__input[type='password']").value;
  
  try {
    const userCredential = await signInWithEmailAndPassword(auth, email, password);
    const user = userCredential.user;
    
    // Assuming you have a way to determine if the user is an admin based on their UID
    const isAdmin = await checkIfAdmin(user.uid);
    
    if (isAdmin) {
      alert("Bem-vindo, Administrador!");
    } else {
      alert("Bem-vindo, Usuário!");
    }
  } catch (error) {
    alert("Credenciais inválidas. Por favor, tente novamente.");
  }
};

async function checkIfAdmin(uid) {
  const adminsRef = ref(database, 'admins');
  const snapshot = await get(adminsRef);
  
  return snapshot.child(uid).exists();
}

window.addEventListener("load", () => {
  let signInButton = document.querySelector("#b-form .submit");
  signInButton.addEventListener("click", signIn);
});

