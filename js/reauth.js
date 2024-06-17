function checkIsAuth () {
  const userName = localStorage.getItem('user');
  const userPass = localStorage.getItem('pwd');
  
  if (userName && userPass) {
    fetch('http://localhost:8001/static/api.php', {
      method: 'POST',
        headers: {
           'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          'email': userName,
          'password': userPass
        })
    })
  }
}