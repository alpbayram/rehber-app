const contactBtn = document.querySelector('#contactBtn');
const displayText = document.querySelector("#displayText");
const contactTable = document.querySelector("#table");
const contactTableContent = document.querySelector("tbody");
//const errorAlert = document.querySelector("#errorAlert");
const addBtn = document.querySelector("#addBtn");
const name = document.querySelector("#name");
const phone = document.querySelector("#phone");
const emptyText = document.querySelector("#empty");
const modal = document.querySelector("#modal");
const alertBlock = document.querySelector("#alert");
import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js'
import { getDatabase,ref,set,child,update,remove,onValue,get,query, orderByChild,equalTo } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";

contactBtn.addEventListener('click', async function (e) {
  e.preventDefault();
  if ("contacts" in navigator && "select" in navigator.contacts) {
    try {
      //const availableProperties = await navigator.contacts.getProperties();
      //displayText.innerHTML = availableProperties.join(',');
      const contacts = await navigator
      .contacts
      .select(
        ['name', 'tel'],
        {multiple: true}
        );

      if (!contacts.length) {
        return;
      }

      if (contactTableContent.childElementCount === 0) {
        emptyText.classList.add("invisible");
        contactTable.classList.remove("invisible");
      }

      let count = contactTableContent.childElementCount + 1;

      for (let i = 0; i < contacts.length; i++) {
        alert("Your first contact: " + contacts[i].name + " " + contacts[i].tel + " " + contacts[i].address);
        const organizer = document.createElement('tr');
        organizer.classList.add('list-group-item');

        const id = document.createElement('td');
        id.innerHTML = count;
        organizer.appendChild(id);
        count++;

        const name = document.createElement('td');
        name.innerHTML = contacts[i].name[0];
        organizer.appendChild(name);

        const tel = document.createElement('td');
        tel.innerHTML = contacts[i].tel[0];
        organizer.appendChild(tel);
		alert(tel);

        contactTableContent.appendChild(organizer);
      }
    } catch (e) {
      //const availableProperties = await navigator.contacts.getProperties();
      //displayText.innerHTML = availableProperties.join(',');
      alertBlock.innerHTML = "Sorry, something happened with fetching Contacts :("
      alertBlock.style.display = "block";
      setTimeout(function() {
        alertBlock.style.display = "none";
      }, 5000);
    }
  } else {
    //const availableProperties = await navigator.contacts.getProperties();
    //displayText.innerHTML = availableProperties.join(',');
    alertBlock.innerHTML = "Sorry, your device doesn't support Contact Picker API :("
    alertBlock.style.display = "block";
    setTimeout(function() {
      alertBlock.style.display = "none";
    }, 5000);
  }
})

addBtn.addEventListener('click', function (e) {
  e.preventDefault();

  if (name.value === "") {
    name.classList.add("border-danger");
    setTimeout(function() {
      name.classList.remove("border-danger");
    }, 1000);
    return;
  }

  if (phone.value === "") {
    phone.classList.add("border-danger");
    setTimeout(function() {
      phone.classList.remove("border-danger");
    }, 1000);
    return;
  }

  if (contactTableContent.childElementCount === 0) {
    emptyText.classList.add("invisible");
    contactTable.classList.remove("invisible");
  }

  const count = contactTableContent.childElementCount + 1;

  const organizer = document.createElement('tr');

  const id = document.createElement('td');
  id.innerHTML = count;
  organizer.appendChild(id);

  const nameColumn = document.createElement('td');
  nameColumn.innerHTML = name.value;
  organizer.appendChild(nameColumn);

  const telColumn = document.createElement('td');
  telColumn.innerHTML = phone.value;
  organizer.appendChild(telColumn);

  contactTableContent.appendChild(organizer);

  name.value = "";
  phone.value = "";





const config = {
apiKey: "{{config('services.firebase.apiKey')}}",
authDomain: "{{config('services.firebase.authDomain')}}",
databaseURL: "{{config('services.firebase.databaseURL')}}",
projectId: "{{config('services.firebase.projectId')}}",
storageBucket: "{{config('services.firebase.storageBucket')}}",
messagingSenderId: "{{config('services.firebase.messagingSenderId')}}",
appId: "{{config('services.firebase.appId')}}",
measurementId: "{{config('services.firebase.measurementId')}}"
};

const app = initializeApp(config);

const db = getDatabase();

function writeUserData( name, tel, address) {
set(ref(db, 'users/' + name), {
name: name,
tel: tel,
address : address
});
}
});
