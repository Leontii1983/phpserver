document.addEventListener("DOMContentLoaded", () => {
  const formUser = document.querySelector('#form-cuser');
  formUser.addEventListener('submit', (e)=> {
    e.preventDefault();
   
    let data = {
      firstname: "",
      lastname: "",
      email: "",
      mobilenumber : "",
      password: ""
  }

  data.firstname = formUser.elements.firstname.value;
  data.lastname = formUser.elements.lastname.value;
  data.email = formUser.elements.email.value;
  data.mobilenumber = formUser.elements.mobilenumber.value;
  data.password = formUser.elements.password.value;

  console.log(data);

  async function senData() {

  let req = await fetch('http://registration/private/api/create_user.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then((response) => {
    return response.json();
    
  })
  .then((data) => {
    console.log(data);
  })

}

senData(); 

 })

});